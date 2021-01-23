<?php

use Bitrix\Catalog\Model\Product;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$xml = simplexml_load_file(__DIR__ . '/data/data.xml');

$el = new CIBlockElement();

foreach ($xml as $product) {
    $product = xmlToArray($product);

    /** Свойства */
    $props = [
        'ID_START' => $product['OLDID'],
        'SYKNO' => $product['SYKNO']['VARIANT'],
        'VIKRASKA' => $product['VIKRASKA']['VARIANT'],
    ];

    /** Картинки */
    // TODO: Ссылка из файла не открывается, потому такой костыль для тестирования
    foreach ($product['IMAGES']['OPTION'] as $image) {
        $props['IMAGES'][] = CFile::MakeFileArray('https://www.incimages.com/uploaded_files/image/1920x1080/getty_1130598318_411195.jpg');
    }

    $sectionId = 0;
    switch ($product['SECTION_ID']) {
        case 21:
            $sectionId = 16;
            break;
        case 19:
            $sectionId = 17;
            break;
        default:
            $sectionId = $product['SECTION_ID'];
    }

    $fields = [
        'NAME' => $product['NAME'],
        'CODE' => $product['CODE'],
        'IBLOCK_SECTION_ID' => $sectionId,
        'IBLOCK_ID' => BLK_ID_INFOBLOCK_PRODUCTS,
        'PROPERTY_VALUES' => $props,
        'ACTIVE' => 'Y',
    ];

    if ($productId = $el->Add($fields)) {
        pre("Added product $productId");

        $fields = [
            'ID' => $productId,
            'QUANTITY' => 0,
        ];

        Product::Add($fields);

        foreach ($product['OFFERS']['OFFER'] as $offer) {
            $propsOffer = [
                'QTY_LEGS' => (int)$offer->QTY_LEGS,
                'CML2_LINK' => $productId,
            ];

            $offerFields = [
                'NAME' => implode(
                    ', ',
                    [
                        $product['NAME'],
                        $offer->SIZE_FIELD,
                        $offer->GAME_TYPE,
                        $offer->TABLE_MATERIAL,
                        $offer->TABLE_TYPE,
                    ]
                ),
                'IBLOCK_ID' => BLK_ID_INFOBLOCK_OFFERS,
                'PROPERTY_VALUES' => $propsOffer,
                'ACTIVE' => 'Y',
            ];

            if ($offerId = $el->Add($offerFields)) {
                pre("Added offer $offerId");
                $offerFields = [
                    'ID' => $offerId,
                    'QUANTITY' => 25,
                    'WEIGHT' => $offer->VES
                ];

                Product::add($offerFields);

                $priceFields = [
                    'PRICE' => (float)$offer->PRICE,
                    'CURRENCY' => 'RUB',
                    'QUANTITY_FROM' => false,
                    'QUANTITY_TO' => false,
                    'EXTRA_ID' => false,
                    'CATALOG_GROUP_ID' => 1,
                    'PRODUCT_ID' => $offerId,
                ];

                // TODO: Я вижу, что появляется предупреждение, что данный метод устарел и нужно использовать Price::add()
                // TODO: Но по Price::add - не вижу никакой документации или комментариев в коде, что туда передать
                CPrice::Add($priceFields);
//                \Bitrix\Catalog\Model\Price::add($priceFields);
            } else {
                pre('Offer error');
            }
        }
    } else {
        pre('Item error');
    }

    break;
}
