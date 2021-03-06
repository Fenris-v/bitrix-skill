<?php
/**
 * Хэдер
 *
 * @var array $APPLICATION
 */

require(__DIR__ . '/head.php'); ?>

<header id="header" itemscope itemtype="http://schema.org/Organization">
    <div class="wrapper header-top">
        <div class="container">
            <nav>
                <a href="#" class="button mini">Вход</a>
                <a href="#" class="button mini gray">Регистрация</a>
            </nav>
            <div class="favorites popap-show">
                <span>Избранное (3)</span>
                <div class="popap-block">
                    <ul class="favorites-popap">
                        <li>
                            <div class="favorites-info">
                                <div class="favorites-name">
                                    <a href="#">Tabletus sus 64GB</a>
                                </div>
                                <div class="favorites-price">
                                    30 000 руб.
                                </div>
                            </div>
                            <div class="image-block mini" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="#">
                                    <img src="temp/product-1.png" alt="" itemprop="image">
                                </a>
                            </div>
                            <div class="favorites-cart">
                                <form action="#" method="post">
                                    <input type="hidden" name="product_id" value="1">
                                    <input type="hidden" name="count" value="1">
                                    <input type="submit" value="Добавить">
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="favorites-info">
                                <div class="favorites-name">
                                    <a href="#">Monoblok Full HD 28</a>
                                </div>
                                <div class="favorites-price">
                                    30 000 руб.
                                </div>
                            </div>
                            <div class="image-block mini" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="#">
                                    <img src="temp/product-2.png" alt="" itemprop="image">
                                </a>
                            </div>
                            <div class="favorites-cart">
                                <form action="#" method="post">
                                    <input type="hidden" name="product_id" value="1">
                                    <input type="hidden" name="count" value="1">
                                    <input type="submit" value="Добавить">
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="favorites-info">
                                <div class="favorites-name">
                                    <a href="#">McBakus 17 500GB</a>
                                </div>
                                <div class="favorites-price">
                                    30 000 руб.
                                </div>
                            </div>
                            <div class="image-block mini" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="#">
                                    <img src="temp/product-3.png" alt="" itemprop="image">
                                </a>
                            </div>
                            <div class="favorites-cart">
                                <form action="#" method="post">
                                    <input type="hidden" name="product_id" value="1">
                                    <input type="hidden" name="count" value="1">
                                    <input type="submit" value="Добавить">
                                </form>
                            </div>
                        </li>
                        <li class="favorites-clear">
                            <form action="#" method="post">
                                <input type="submit" class="gray small" value="Очистить список">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="user popap-show">
                <a href="#">Профиль</a>
                <div class="popap-block">
                    <form action="#" method="post" class="popap-form">
                        <div class="form-line">
                            <input type="text" placeholder="Логин или E-mail">
                        </div>
                        <div class="form-line">
                            <input type="password" placeholder="Пароль">
                        </div>
                        <div class="form-line">
                            <label for="check">
                                <input type="checkbox" name="check" class="gray">
                                Запомнить меня
                            </label>
                        </div>
                        <div class="form-line">
                            <input type="submit" class="button small" value="Вход">
                        </div>
                    </form>
                </div>
            </div>

            <div class="info">
                <span class="tel" itemprop="telephone">
                  8 (999) 000 00 00
                </span>
                <span class="email" itemprop="email">
                  info@shopselle.com
                </span>
            </div>
        </div>
    </div>
    <div class="wrapper header-nav">
        <div class="container">
            <a href="/" class="logo" itemprop="url">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.png" alt="" itemprop="logo">
                <meta itemprop="name" content="Shopselle">
                <meta itemprop="address" content="Москва">
            </a>

            <?php
            /** Подключаем меню */
            $APPLICATION->IncludeComponent(
                'bitrix:menu',
                'header_menu',
                [
                    'ALLOW_MULTI_SELECT' => 'N',
                    'CHILD_MENU_TYPE' => 'left',
                    'DELAY' => 'N',
                    'MAX_LEVEL' => '1',
                    'MENU_CACHE_GET_VARS' => [''],
                    'MENU_CACHE_TIME' => '3600',
                    'MENU_CACHE_TYPE' => 'N',
                    'MENU_CACHE_USE_GROUPS' => 'Y',
                    'ROOT_MENU_TYPE' => 'header_menu',
                    'USE_EXT' => 'N',
                ]
            );

            /** Подключаем корзину */
            $APPLICATION->IncludeComponent(
                'bitrix:sale.basket.basket.line',
                'cart',
                [
                    'HIDE_ON_BASKET_PAGES' => 'Y',
                    'PATH_TO_AUTHORIZE' => '',
                    'PATH_TO_BASKET' => SITE_DIR . 'personal/cart/',
                    'PATH_TO_ORDER' => SITE_DIR . 'personal/order/make/',
                    'PATH_TO_PERSONAL' => SITE_DIR . 'personal/',
                    'PATH_TO_PROFILE' => SITE_DIR . 'personal/',
                    'PATH_TO_REGISTER' => SITE_DIR . 'login/',
                    'POSITION_FIXED' => 'N',
                    'SHOW_AUTHOR' => 'N',
                    'SHOW_EMPTY_VALUES' => 'N',
                    'SHOW_NUM_PRODUCTS' => 'Y',
                    'SHOW_PERSONAL_LINK' => 'N',
                    'SHOW_PRODUCTS' => 'N',
                    'SHOW_REGISTRATION' => 'Y',
                    'SHOW_TOTAL_PRICE' => 'Y',
                ]
            ); ?>
        </div>
    </div>
    <div class="wrapper nav-block">
        <div class="container">
            <nav itemscope itemtype="http://schema.org/SiteNavigationElement">
                <ul>
                    <li>
                        <a href="#" itemprop="url">Моноблоки</a>
                    </li>
                    <li>
                        <a href="#" itemprop="url">Ноутбуки</a>
                        <img src="temp/menu-top.png" alt="">
                    </li>
                    <li>
                        <a href="#" itemprop="url">Планшеты</a>
                    </li>
                    <li>
                        <a href="#" itemprop="url">Телефоны</a>
                        <img src="temp/menu-new.png" alt="">
                    </li>
                    <li>
                        <a href="#" itemprop="url">Гаджеты</a>
                    </li>
                    <li>
                        <a href="#" itemprop="url">Аксессуары</a>
                    </li>
                </ul>
            </nav>

            <form action="#" class="search" method="get">
                <input type="text" placeholder="Поиск">
                <input type="submit" value="Поиск">
            </form>
        </div>
    </div>
</header>
