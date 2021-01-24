<?php
/**
 * Шаблон меню в хэдере
 * @var array $APPLICATION
 * @var array $arParams
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!empty($arResult)): ?>
    <nav itemscope itemtype="http://schema.org/SiteNavigationElement">
        <ul class="left-menu">

            <?php
            foreach ($arResult as $arItem):
                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                    continue;
                } ?>

                <li class="<?= $arItem["SELECTED"] ? 'active' : '' ?>">
                    <a href="<?= $arItem["LINK"] ?>" itemprop="url"><?= $arItem["TEXT"] ?></a>
                </li>
            <?php
            endforeach; ?>
        </ul>
    </nav>
<?php
endif;
