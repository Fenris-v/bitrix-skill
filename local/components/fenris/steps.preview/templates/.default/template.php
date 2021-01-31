<?php
/**
 * @var array $arResult
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult['ITEMS'] as $item): ?>
    <div class="work-item item-<?= $item['CODE'] ?>">
        <p>
            <?= $item['NAME'] ?>
        </p>
        <?= $item['PREVIEW_TEXT'] ?>
    </div>
<?php
endforeach;
