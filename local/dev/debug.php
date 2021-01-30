<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$exchange = new SoapClient(SKILLBOX_1C_URL);
$result = $exchange->EnumValutesXML()->EnumValutesXMLResult->any;

$data = preg_replace('/^ +| +$|( ) +/m', '$1', $result);
$dataObj = simplexml_load_string($data);

foreach ($dataObj as $val) {
    echo $val->Vcode . trim($val->Vname) . '<br>';
}
