<?php
/**
 * Хэд
 * @var array $APPLICATION
 */

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss(CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/css/application.css'));
Asset::getInstance()->addCss(CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/css/custom.css'));
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.5.1.min.js');
Asset::getInstance()->addJs(CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/js/application.min.js'));
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?= $APPLICATION->ShowTitle() ?></title>

    <?= $APPLICATION->ShowHead() ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1250">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic&subset=latin,cyrillic"
          rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<div id="panel"><?= $APPLICATION->ShowPanel() ?></div>

<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
