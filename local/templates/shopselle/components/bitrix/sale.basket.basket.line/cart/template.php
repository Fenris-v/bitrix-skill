<?php
/**
 * @var array                    $arResult
 * @var array                    $arParams
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!$arResult["DISABLE_USE_BASKET"]):
    if (
        $arParams['SHOW_NUM_PRODUCTS'] == 'Y' &&
        ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y')
    ): ?>
        <style>
            #header .header-nav .cart-icon {
                min-width: 50px;
                display: flex;
                position: static;
                align-items: center;
            }

            #header .header-nav .cart-icon a {
                display: flex;
                align-items: center;
            }

            #header .header-nav .cart-icon a span {
                padding: 0 30px 0 0;
            }

            #header .header-nav .cart-icon:after {
                right: 30px;
            }
        </style>

        <div style="display: flex; align-items: center">
            <div class="cart-icon active">
                <a href="<?= $arParams['PATH_TO_BASKET'] ?>"><span>+<?= $arResult['NUM_PRODUCTS'] ?></span></a>
            </div>
            <span style="white-space: nowrap">
            <?= GetMessage('TSB1_TOTAL_PRICE') ?> <strong><?= $arResult['TOTAL_PRICE'] ?></strong>
        </span>
        </div>
    <?php
    else: ?>
        <div class="cart-icon"></div>
    <?php
    endif; ?>
<?php
endif;
