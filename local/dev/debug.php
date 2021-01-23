<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$exchange = new SoapClient(SKILLBOX_1C_URL);
//pre($exchange);
$result = $exchange->EnumValutesXML();

vd($result);

foreach ($exchange->EnumValutesXML() as $val) {
    vd($val);
}
//vd($exchange->EnumValutesXMLResult);
//if ($result)

// TODO: Через этот класс не работает. Я вижу где он ломается
// TODO: и по сути там попытка обратиться к несуществующему параметру объекта
$exchange = new SoapConnect(
    SKILLBOX_1C_URL,
    SKILLBOX_1C_LOGIN,
    SKILLBOX_1C_PASS
);
//pre($exchange);

vd($exchange->EnumValutesXML());
