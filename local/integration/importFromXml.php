<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

pre('start');

$xml = simplexml_load_file(__DIR__ . '/data/data.xml');
echo 'Название товара:';
pre($xml->product->NAME->__toString());
pre($xml);

#-------------ТУТ ВАШ КОД
#Что нужно сделать: Загрузить XML в PHP (рекомендую simplexml_load_file).
# Далее вывести на экран каждый элемент со свойствами
#Цель: Аккуратно окунуть Вас в работу с самим PHP и посмотреть у кого возникнут сложности с чистым PHP.
# Далее мы имея данные в массивах/объектах научимся загружать это непосредственно в Bitrix.
#-------------КОНЕЦ КОДА
pre('done.');
