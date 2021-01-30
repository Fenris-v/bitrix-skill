<?php

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\ArgumentException;
use Bitrix\Main\ObjectPropertyException;
use Bitrix\Main\SystemException;

if (!function_exists('setGuideItems')) {
    /**
     * Добавляет значение в справочник, если оно еще не существует
     *
     * @param object $data
     * @param int    $guideId
     * @throws ArgumentException
     * @throws ObjectPropertyException
     * @throws SystemException
     */
    function setGuideItems(object $data, int $guideId): void
    {
        foreach ($data as $value) {
            $value = xmlToArray($value);

            if (!CModule::IncludeModule('highloadblock')) {
                break;
            }

            $arHLBlock = HighloadBlockTable::getById($guideId)->fetch();
            $obEntity = HighloadBlockTable::compileEntity($arHLBlock);
            $strEntityDataClass = $obEntity->getDataClass();
            $rsData = $strEntityDataClass::getList(
                [
                    'select' => ['UF_XML_ID'],
                    'filter' => ['UF_XML_ID' => $value[0]],
                ]
            );

            if ($rsData->fetch()) {
                continue;
            }

            $arElementFields = [
                'UF_NAME' => $value['@attributes']['VALUE'],
                'UF_XML_ID' => $value[0],
            ];

            $strEntityDataClass::add($arElementFields);
        }
    }
}
