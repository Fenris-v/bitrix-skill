<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader;
use Bitrix\Main\LoaderException;

class BannerTop extends CBitrixComponent
{
    /**
     * Событие вызываемое до работы компонента
     *
     * @param $arParams
     * @return array
     */
    public function onPrepareComponentParams($arParams): array
    {
        if ($arParams['CACHE_TYPE'] === 'Y' || $arParams['CACHE_TYPE'] === 'A') {
            $arParams['CACHE_TIME'] = (int)$arParams['CACHE_TIME'];
        } else {
            $arParams['CACHE_TIME'] = 0;
        }

        return $arParams;
    }

    /**
     * Запуск компонента
     *
     * @return mixed|void|null
     */
    public function executeComponent(): void
    {
        try {
            if ($this->startResultCache()) {
                $this->checkModules();

                $this->prepareData();
                $this->doAction();

                if (!$this->arResult['ITEMS']) {
                    return;
                }

                $this->includeComponentTemplate();
            }
        } catch (Exception $e) {
            $this->AbortResultCache();
            $this->arResult['ERROR'] = $e->getMessage();
        }
    }

    /**
     * Проверка подключения необходимых модулей
     *
     * @throws LoaderException
     * @throws Exception
     */
    protected function checkModules(): void
    {
        if (!Loader::includeModule('iblock')) {
            throw new Exception('Модуль "Инфоблоки" не установлен');
        }
    }

    /**
     * Проверка существования инфоблока
     *
     * @throws Exception
     */
    protected function prepareData(): void
    {
        $this->arResult['IBLOCK'] = [];
        if ($this->arParams['IBLOCK_ID']) {
            $this->arResult['IBLOCK'] = CIBlock::GetByID($this->arParams['IBLOCK_ID'])->Fetch();
        }

        if (!$this->arResult['IBLOCK']) {
            throw new Exception('Инфоблок не найден');
        }
    }

    /**
     * Выборка из инфоблока
     */
    protected function doAction(): void
    {
        $arSelect = ['ID', 'PREVIEW_PICTURE', 'DETAIL_PICTURE', 'CODE'];
        $arFilter = [
            'IBLOCK_ID' => (int)$this->arParams['IBLOCK_ID'],
            'ACTIVE' => 'Y',
            'SECTION_ID' => (int)$this->arParams['SECTION_ID'],
        ];
        $result = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);
        while ($element = $result->Fetch()) {
            $element['PREVIEW_PICTURE'] = CFile::ShowImage($element['PREVIEW_PICTURE']);
            $element['DETAIL_PICTURE'] = CFile::ShowImage($element['DETAIL_PICTURE']);

            $this->arResult['ITEMS'][$element['ID']] = $element;
        }
    }
}
