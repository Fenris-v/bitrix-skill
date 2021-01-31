<?php
/**
 * @var array $arResult
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<div class="home-slider">
    <?php
    foreach ($arResult['ITEMS'] as $item): ?>
        <div class="home-slider-item">
            <?= $item['DETAIL_PICTURE'] ?>
            <div class="container">
                <?php
                if ($item['PREVIEW_PICTURE']): ?>
                    <a href="<?= $item['CODE'] ?>">
                        <?= $item['PREVIEW_PICTURE'] ?>
                    </a>
                <?php
                endif; ?>
            </div>
        </div>
    <?php
    endforeach; ?>
</div>
