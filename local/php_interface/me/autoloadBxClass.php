<?
/*
 * Автоматически подключаем модули при запросе класса
 * */

use Bitrix\Main\Loader;

#массив может дополняться со временем, связывает класс с модулем
$map = [
    'iblock' => 'CIBlock CIBlockElement CIBlockSection CIBlockPropertyEnum',
    'catalog' => 'CCatalogProduct CPrice CCatalogGroup CCatalogProductProvider Bitrix\Catalog\StoreTable CCatalogStore CCatalogProductSet',
    'sale' => 'CSaleBasket Bitrix\Sale\Location\LocationTable CSaleDelivery CSaleOrder CSaleUserAccount CSaleOrderPropsValue Bitrix\Sale\Internals\OrderCouponsTable Bitrix\Sale\Internals\DiscountTable Bitrix\Sale\Internals\DiscountCouponTable',
];

$preparedMap = [];
foreach ($map as $module => $classes) {
    foreach (explode(' ', $classes) as $class) {
        $preparedMap[$class] = $module;
    }
}

spl_autoload_register(
    function ($classname) use ($preparedMap) {
        if (isset($preparedMap[$classname]) && $preparedMap[$classname]) {
            Loader::includeModule($preparedMap[$classname]);
            Loader::autoLoad($classname);
        }
    }
);
