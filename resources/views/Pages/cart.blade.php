@extends ('layout')

@section ('body-classes','woocommerce-cart')

@section('content')

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('home')}}">Главная</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Корзина
                </nav>
            </div>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="pizzaro-order-steps">
                        <ul>
                            <li class="cart">
                                <span class="step">1</span>Корзина
                            </li>
                            <li class="checkout">
                                <span class="step">2</span>Оформление заказа
                            </li>
                            <li class="complete">
                                <span class="step">3</span>Заказ оформлен
                            </li>
                        </ul>
                    </div>
                    <div id="post-8" class="post-8 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <form id="checkout" method="post" action="{{route('update-cart')}}">
                                    @csrf
                                    <table class="shop_table shop_table_responsive cart">
                                        <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Заказ</th>
                                            <th class="product-price">Цена</th>
                                            <th class="product-quantity">Количество</th>
                                            <th class="product-subtotal">Итого</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if ((!Cart::isEmpty()))
                                            @foreach(\Cart::getContent () as $item)
                                                <tr class="cart_item">
                                                    <td class="product-remove">
                                                        <a href="{{ route('remove-from-cart', $item->id) }}"
                                                           class="remove">&times;</a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="single-product-v1.html">
                                                            <img width="180" height="180"
                                                                 src="{{$item->attributes->image}}" alt=""/>
                                                        </a>
                                                    </td>
                                                    <td class="product-name" data-title="Product">
                                                        <a href="single-product-v1.html">{{$item->name}}</a>
                                                        <dl class="variation">
                                                            <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                                Количество (размер):
                                                            </dt>
                                                            <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                                <p>{{$item->attributes->size}}  {{$item->attributes->dimension}}</p>
                                                            </dd>
                                                        </dl>
                                                    </td>
                                                    <td class="product-price" data-title="Price">
                                                        <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol"></span>{{$item->price}} грн.</span>
                                                    </td>
                                                    <td class="product-quantity" data-title="Quantity">
                                                        <div class="qty-btn">
                                                            <label>Quantity</label>
                                                            <div class="quantity">
                                                                <input type="number" name="items [{{$item->id}}]"
                                                                       value="{{$item->quantity}}" title="Qty"
                                                                       class="input-text qty text"/>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal" data-title="Total">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"></span>{{$item->getPriceSum ()}} грн.</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <h3>В Вашей корзине нет заказов</h3>
                                        @endif
                                        <tr>
                                            <td colspan="6" class="actions">
                                                <div class="coupon">
                                                    <label for="coupon_code">Coupon:</label>
                                                    <input type="text" name="coupon_code" class="input-text"
                                                           id="coupon_code" value="" placeholder="Промокод"/>
                                                    <input type="submit" class="button" name="apply_coupon"
                                                           value="Применить промокод"/>
                                                </div>


                                                <div class="wc-proceed-to-checkout">
                                                    <a href="#"
                                                       onclick="document.getElementById('checkout').submit()"
                                                       type="submit" class="button"
                                                       name="update_cart" value="Обновить корзину"> Обновить
                                                        корзину </a>
                                                    <a href="{{route('checkout')}}"
                                                       class="checkout-button button alt wc-forward">Оформить заказ</a>
                                                </div>
                                                <input type="hidden" id="_wpnonce" name="_wpnonce"
                                                       value="21ca9d92f8"/><input type="hidden" name="_wp_http_referer"
                                                                                  value="/pizzaro/cart/"/>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <div class="cart-collaterals">
                                    <div class="cart_totals ">
                                        <h2>К оплате</h2>
                                        <table class="shop_table shop_table_responsive">
                                                                                       </tr>
                                            <tr class="order-total">
                                                <th>Итого:</th>

                                                <td class="product-subtotal" data-title="Total">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"></span>{{\Cart:: getTotal ()}} грн.</span>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="{{route('checkout')}}"
                                               class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .entry-content -->
                </main><!-- #main -->
            </div>
            <!-- #post-## -->

        </div>
        <!-- #primary -->
    </div>

    <!-- .col-full -->
    </div>
    <!-- #content -->
    @include('subscribed')
@endsection

