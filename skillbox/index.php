<?php
/**
 * @var array $APPLICATION
 */

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О магазине"); ?>

<div class="content home">
    <!--Основной контент-->
    <main class="container">
        <div class="home-slider-conteiner">
            <?php
            $APPLICATION->IncludeComponent(
                'fenris:banners.top',
                '',
                [
                    'IBLOCK_ID' => 7,
                    'SECTION_ID' => 19,
                ]
            )
            ?>
        </div>

        <div class="works-block">
            <div class="container">
                <?php
                $APPLICATION->IncludeComponent(
                    'fenris:steps.preview',
                    '',
                    ['IBLOCK_ID' => 6,]
                ); ?>
            </div>
        </div>

        <div class="recommend-block">
            <div class="container">
                <h1>Рекомендуемые Товары</h1>
                <form action="#" class="form-category">
                    <select class="category" name="recommend-slider">
                        <option value="1">Все категории</option>
                        <option value="2">Ноутбуки</option>
                    </select>
                    <!--
                       $('select[name=recommend-slider]').change(function(){
                         var id = $(this).value();

                         $.ajax({
                           url: 'index.html', //К примеру на эту же самую страницу
                           data: { id: id },
                           type: 'POST',
                           success: function (data) {
                             var $data = $(data);
                             //отдаем html блок <div class="recommend-slider"> и помещаем его в
                             //<section class="slider-content">

                             $('.recommend-block .slider-content').html($data);
                             //перезапускаем слайдер
                             $('.recommend-slider').lightSlider({
                               loop:false,
                               item:4,
                               autoWidth:true,
                               enableTouch:false,
                               pager:false,
                               slideMargin:28,
                             });
                           },
                           error: function (jxhr, msg, err) {
                             //Что-то пошло не так...
                           }
                         });
                       })
                       -->
                </form>
                <div class="controls">
                    <span class="prev"></span> <span class="next"></span>
                </div>
                <section class="slider-content">
                    <div class="recommend-slider">
                        <article class="product-item" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                        <article class="product-item" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                        <article class="product-item" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                        <article class="product-item" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                        <article class="product-item" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                        <article class="product-item" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                        <article class="product-item" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                        <article class="product-item" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </div>
        <div class="producttop-block">
            <div class="container">
                <h1>Бестселлеры</h1>
                <form action="#" class="form-category">
                    <select class="category" name="producttop-slider">
                        <option value="1">Все категории</option>
                        <option value="2">Ноутбуки</option>
                    </select>
                    <!--
                       $('select[name=producttop-slider]').change(function(){
                         var id = $(this).value();

                         $.ajax({
                           url: 'index.html', //К примеру на эту же самую страницу
                           data: { id: id },
                           type: 'POST',
                           success: function (data) {
                             var $data = $(data);
                             //отдаем html блок <div class="producttop-slider"> и помещаем его в
                             //<section class="slider-content">

                             $('.producttop-block .slider-content').html($data);
                             //перезапускаем слайдер
                             $('.producttop-slider').lightSlider({
                               loop:false,
                               item:2,
                               autoWidth:true,
                               enableTouch:false,
                               pager:true,
                               slideMargin:30,
                             });
                           },
                           error: function (jxhr, msg, err) {
                             //Что-то пошло не так...
                           }
                         });
                       })
                       -->
                </form>
                <div class="controls orange">
                    <span class="prev"></span> <span class="next"></span>
                </div>
                <section class="slider-content">
                    <div class="producttop-slider">
                        <article class="product-item coll-2" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                        <article class="product-item coll-2" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                        <article class="product-item coll-2" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                        <article class="product-item coll-2" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                        <article class="product-item coll-2" itemscope="" itemtype="http://schema.org/Product">
                            <div class="attr discount">
                            </div>
                            <!--
                                       <div class="attr top"></div>
                                       <div class="attr new"></div>
                                       <div class="attr sale"></div>
                                       -->
                            <div class="image-block">
                                <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                                  itemprop="image"> </a>
                            </div>
                            <div class="product-block">
                                <div class="product-info">
                                    <a href="#">Ноутбуки</a>
                                    <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                    </div>
                                </div>
                                <div class="product-name">
                                    <a href="#" itemprop="name">McKniga s231</a>
                                </div>
                                <div class="product-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    49 0000 руб.
                                </div>
                                <form action="#" class="product-add">
                                    <input type="hidden" name="productid" value="1"> <input type="hidden" name="count"
                                                                                            value="1"> <input
                                            type="submit" class="small" value="В корзину"> <span class="ui-favorites">В избранное</span>
                                </form>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </div>
        <div class="banner-block">
            <a href="#"> <img src="/local/templates/shopselle/temp/banner.png" alt=""> </a>
        </div>
        <section class="product-block-list">
            <div class="container">
                <section class="list-block new">
                    <h1>Новые Поступления</h1>
                    <article itemscope="" itemtype="http://schema.org/Product">
                        <div class="image-block small">
                            <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                              itemprop="image"> </a>
                        </div>
                        <div class="product-block">
                            <div class="product-name">
                                <a href="#" itemprop="name">McKniga s231</a>
                                <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                </div>
                            </div>
                            <div class="product-price" itemprop="offers" itemscope=""
                                 itemtype="http://schema.org/Offer">
                                49 000 руб.
                            </div>
                        </div>
                    </article>
                    <article itemscope="" itemtype="http://schema.org/Product">
                        <div class="image-block small">
                            <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                              itemprop="image"> </a>
                        </div>
                        <div class="product-block">
                            <div class="product-name">
                                <a href="#" itemprop="name">McKniga s231</a>
                                <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                </div>
                            </div>
                            <div class="product-price" itemprop="offers" itemscope=""
                                 itemtype="http://schema.org/Offer">
                                49 000 руб.
                            </div>
                        </div>
                    </article>
                    <article itemscope="" itemtype="http://schema.org/Product">
                        <div class="image-block small">
                            <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                              itemprop="image"> </a>
                        </div>
                        <div class="product-block">
                            <div class="product-name">
                                <a href="#" itemprop="name">McKniga s231</a>
                                <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                </div>
                            </div>
                            <div class="product-price" itemprop="offers" itemscope=""
                                 itemtype="http://schema.org/Offer">
                                49 000 руб.
                            </div>
                        </div>
                    </article>
                </section>
                <section class="list-block spec">
                    <h1>Специальное Предложение</h1>
                    <article itemscope="" itemtype="http://schema.org/Product">
                        <div class="image-block small">
                            <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                              itemprop="image"> </a>
                        </div>
                        <div class="product-block">
                            <div class="product-name">
                                <a href="#" itemprop="name">McKniga s231</a>
                                <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                </div>
                            </div>
                            <div class="product-price" itemprop="offers" itemscope=""
                                 itemtype="http://schema.org/Offer">
                                49 000 руб.
                            </div>
                        </div>
                    </article>
                    <article itemscope="" itemtype="http://schema.org/Product">
                        <div class="image-block small">
                            <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                              itemprop="image"> </a>
                        </div>
                        <div class="product-block">
                            <div class="product-name">
                                <a href="#" itemprop="name">McKniga s231</a>
                                <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                </div>
                            </div>
                            <div class="product-price" itemprop="offers" itemscope=""
                                 itemtype="http://schema.org/Offer">
                                49 000 руб.
                            </div>
                        </div>
                    </article>
                    <article itemscope="" itemtype="http://schema.org/Product">
                        <div class="image-block small">
                            <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                              itemprop="image"> </a>
                        </div>
                        <div class="product-block">
                            <div class="product-name">
                                <a href="#" itemprop="name">McKniga s231</a>
                                <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                </div>
                            </div>
                            <div class="product-price" itemprop="offers" itemscope=""
                                 itemtype="http://schema.org/Offer">
                                49 000 руб.
                            </div>
                        </div>
                    </article>
                </section>
                <section class="list-block top">
                    <h1>Топ Товаров</h1>
                    <article itemscope="" itemtype="http://schema.org/Product">
                        <div class="image-block small">
                            <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                              itemprop="image"> </a>
                        </div>
                        <div class="product-block">
                            <div class="product-name">
                                <a href="#" itemprop="name">McKniga s231</a>
                                <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                </div>
                            </div>
                            <div class="product-price" itemprop="offers" itemscope=""
                                 itemtype="http://schema.org/Offer">
                                49 000 руб.
                            </div>
                        </div>
                    </article>
                    <article itemscope="" itemtype="http://schema.org/Product">
                        <div class="image-block small">
                            <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                              itemprop="image"> </a>
                        </div>
                        <div class="product-block">
                            <div class="product-name">
                                <a href="#" itemprop="name">McKniga s231</a>
                                <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                </div>
                            </div>
                            <div class="product-price" itemprop="offers" itemscope=""
                                 itemtype="http://schema.org/Offer">
                                49 000 руб.
                            </div>
                        </div>
                    </article>
                    <article itemscope="" itemtype="http://schema.org/Product">
                        <div class="image-block small">
                            <a href="#"> <img src="/local/templates/shopselle/temp/product-1.png" alt=""
                                              itemprop="image"> </a>
                        </div>
                        <div class="product-block">
                            <div class="product-name">
                                <a href="#" itemprop="name">McKniga s231</a>
                                <div data-productid="1" class="rateit" data-rateit-value="2.5">
                                </div>
                            </div>
                            <div class="product-price" itemprop="offers" itemscope=""
                                 itemtype="http://schema.org/Offer">
                                49 000 руб.
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </section>
    </main>
    <!--end Основной контент-->
</div>
<br><?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
