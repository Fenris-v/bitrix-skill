<?php
/**
 * @var array $arResult
 * @var array $arParams
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!$arResult["DISABLE_USE_BASKET"]):
    if (
        $arParams['SHOW_NUM_PRODUCTS'] == 'Y' &&
        ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y')
    ): ?>
        <a href="<?= $arParams['PATH_TO_BASKET'] ?>">
            <div class="cartWrapper">
                <div class="cart-icon active">
                    <span>+<?= $arResult['NUM_PRODUCTS'] ?></span>
                </div>
                <span style="white-space: nowrap">
            <?= GetMessage('TSB1_TOTAL_PRICE') ?> <strong><?= $arResult['TOTAL_PRICE'] ?></strong>
        </span>
            </div>
        </a>
    <?php
    else: ?>
        <div class="cart-icon"></div>
    <?php
    endif; ?>
<?php
endif;
