<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

pre('start');

$xml = simplexml_load_file(__DIR__ . '/data/data.xml');
echo 'Название товара:';
pre($xml->product[0]->NAME->__toString());
pre($xml);

pre('done.');
