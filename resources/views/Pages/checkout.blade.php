@extends ('layout')

@section ('body-classes','woocommerce-checkout')

@section('content')


    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb"><a href="{{route('home')}}">Главная</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Оформление заказа
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
                    <div id="post-9" class="post-9 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="woocommerce">


                                <form id="order" method="post" action="{{route('checkout')}}">

                                    @csrf
                                    <div class="col2-set" id="customer_details" >
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">
                                                <h3>Детали доставки:</h3>
                                                <p class="form-row form-row form-row-first validate-required"
                                                   id="billing_first_name_field">
                                                    <label for="billing_first_name" class="">Имя: </label>
                                                    <input type="text" class="input-text " name="billing_first_name"
                                                           id="billing_first_name" placeholder="Иван"
                                                           autocomplete="given-name" value=""/>
                                                </p>
                                                <p class="form-row form-row form-row-last validate-required"
                                                   id="billing_last_name_field">
                                                    <label for="billing_last_name" class="">Фамилия: </label>
                                                    <input type="text" class="input-text " name="billing_last_name"
                                                           id="billing_last_name" placeholder="Иванов"
                                                           autocomplete="family-name" value=""/>
                                                </p>
                                                <div class="clear"></div>
                                                <p class="form-row form-row form-row-first validate-required validate-email"
                                                   id="billing_email_field">
                                                    <label for="billing_email" class="">Email:</label>
                                                    <input type="email" class="input-text " name="billing_email"
                                                           id="billing_email" placeholder="Ivanov@gmail.com"
                                                           autocomplete="email" value=""/>
                                                </p>
                                                <p class="form-row form-row form-row-last validate-required validate-phone"
                                                   id="billing_phone_field">
                                                    <label for="billing_phone" class="">Телефон: </label>
                                                    <input type="tel" class="input-text " name="billing_phone"
                                                           id="billing_phone" placeholder="+38 0ХХ ХХХ ХХ ХХ"
                                                           autocomplete="tel" value=""/>
                                                </p>
                                                <div class="clear"></div>
                                                <p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required"
                                                   id="billing_country_field">
                                                    <label for="billing_sity" class="">Город: </label>
                                                    <input type="text" value="" placeholder="Одесса" id="billing_sity"
                                                           name="billing_sity" class="input-text ">
                                                </p>
                                                <div class="clear"></div>
                                                <p class="form-row form-row form-row-wide address-field validate-required"
                                                   id="billing_address_1_field">
                                                    <label for="billing_address_1" class="">Адрес: </label>
                                                    <input type="text" class="input-text " name="billing_address_1"
                                                           id="billing_address_1" placeholder="Улица, дом, квартира"
                                                           autocomplete="address-line1" value=""/>
                                                </p>
                                                {{--<p class="form-row form-row form-row-wide address-field"--}}
                                                   {{--id="billing_address_2_field">--}}
                                                    {{--<input type="text" class="input-text " name="billing_address_2"--}}
                                                           {{--id="billing_address_2" placeholder="Дом/квартира"--}}
                                                           {{--autocomplete="address-line2" value=""/>--}}
                                                {{--</p>--}}

                                                {{--<p class="form-row form-row form-row-last address-field validate-required validate-postcode" id="billing_postcode_field">--}}
                                                {{--<label for="billing_postcode" class="">Postcode / ZIP </label>--}}
                                                {{--<input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder=""  autocomplete="postal-code" value="DFSAF@GMAIL.COM"  />--}}
                                                {{--</p>--}}
                                                <div class="clear"></div>
                                                {{--<p class="form-row form-row-wide create-account">--}}
                                                {{--<input class="input-checkbox" id="createaccount"  type="checkbox" name="createaccount" value="1" />--}}
                                                {{--<label for="createaccount" class="checkbox">Создать аккаунт?</label>--}}
                                                {{--</p>--}}
                                                <div class="create-account">
                                                    {{--<p>Создайте аккаунт, введя информацию ниже. Если вы уже зарегистрированы, пожалуйста, войдите в систему вверху страницы.</p>--}}
                                                    {{--<p class="form-row form-row validate-required" id="account_password_field">--}}
                                                    {{--<label for="account_password" class="">Account password </label>--}}
                                                    {{--<input type="password" class="input-text " name="account_password" id="account_password" placeholder="Password"   value=""  />--}}
                                                    {{--</p>--}}
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="woocommerce-shipping-fields">
                                                <h3>Коментарии к заказу</h3>
                                                <p class="form-row form-row notes" id="order_comments_field">
                                                    <label for="order_comments" class="">Примечания к заказу</label>
                                                    <textarea name="order_comments" class="input-text "
                                                              id="order_comments"
                                                              placeholder="Примечания о Вашем заказе, например специальные заметки для доставки."
                                                              rows="2" cols="5"></textarea>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 id="order_review_heading">Ваш заказ:</h3>
                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                            <tr>
                                                <th class="product-name">Заказ:</th>
                                                <th class="product-total">Цена:</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if ((!Cart::isEmpty()))
                                                @foreach(\Cart::getContent () as $item)
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <strong>{{$item->name}} </strong>
                                                            &nbsp;<strong class="product-quantity" >x {{$item->quantity}}</strong>
                                                            <dl class="variation">
                                                                <dt class="variation-Baseprice">Цена за еденицу: {{$item->price}} грн.</dt>
                                                                {{--<dl class="variation">--}}
                                                                    {{--<dt class="variation-Baseprice">Итого: {{$item->getPriceSum ()}} грн.</dt>--}}

                                                                {{--<dd class="variation-Baseprice">--}}
                                                                    {{--<p>--}}
                                                                        {{--<span class="woocommerce-Price-amount amount"><span--}}
                                                                                    {{--class="woocommerce-Price-currencySymbol"></span>{{$item->price}} грн.</span>--}}
                                                                    {{--</p>--}}
                                                                {{--</dd>--}}
                                                                <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                                    Количество (размер): {{$item->attributes->size}}  {{$item->attributes->dimension}}
                                                                </dt>
                                                                {{--<dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">--}}
                                                                    {{--<p>{{$item->attributes->size}}  {{$item->attributes->dimension}}</p>--}}
                                                                {{--</dd>--}}
                                                            </dl>
                                                        <td class="product-total">
                                                <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol"></span>{{$item->getPriceSum ()}} грн.</span>
                                                        </td>
                                                    </tr>
                                                            @endforeach
                                                            @else
                                                                <h3>В Вашей корзине нет заказов</h3>
                                                            @endif
                                                        </td>

                                            </tbody>
                                            <tfoot>
                                            {{--<tr class="cart-subtotal">--}}
                                            {{--<th>Subtotal</th>--}}
                                            {{--<td>--}}
                                            {{--<span class="woocommerce-Price-amount amount">--}}
                                            {{--<span class="woocommerce-Price-currencySymbol">&#36;</span>{{\Cart::getSubTotal()}}</span>--}}
                                            {{--</td>--}}
                                            {{--</tr>--}}
                                            <tr class="order-total">
                                                <th>К оплате:</th>
                                                <td>
                                                    <strong><span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol"></span>{{\Cart:: getTotal ()}} грн.</span></strong>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <div id="payment" class="woocommerce-checkout-payment"><h4>Варианты оплаты:</h4>
                                            <ul class="wc_payment_methods payment_methods methods">
                                                <li class="wc_payment_method payment_method_bacs">
                                                    <input id="payment_method_bacs" type="radio" class="input-radio"
                                                           name="payment_method" value="bacs" checked='checked'
                                                           data-order_button_text=""/>
                                                    <label for="payment_method_bacs">Оплата картой</label>
                                                    <div class="payment_box payment_method_bacs">
                                                        {{--<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won&#8217;t be shipped until the funds have cleared in our account.</p>--}}
                                                    </div>
                                                </li>
                                                {{--<li class="wc_payment_method payment_method_cheque">--}}
                                                {{--<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque"  data-order_button_text="" />--}}
                                                {{--<label for="payment_method_cheque">Check Payments  </label>--}}
                                                {{--<div class="payment_box payment_method_cheque" style="display:none;">--}}
                                                {{--<p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>--}}
                                                {{--</div>--}}
                                                {{--</li>--}}
                                                <li class="wc_payment_method payment_method_cod">
                                                    <input id="payment_method_cod" type="radio" class="input-radio"
                                                           name="payment_method" value="cod" data-order_button_text=""/>
                                                    <label for="payment_method_cod">Наличными курьеру </label>
                                                    <div class="payment_box payment_method_cod" style="display:none;">
                                                        <p>Pay with cash upon delivery.</p>
                                                    </div>
                                                </li>
                                                <li class="wc_payment_method payment_method_paypal">
                                                    <input id="payment_method_paypal" type="radio" class="input-radio"
                                                           name="payment_method" value="paypal"
                                                           data-order_button_text="Proceed to PayPal"/>
                                                    <label for="payment_method_paypal">PayPal <img
                                                                alt="PayPal Acceptance Mark"
                                                                src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"/>
                                                        <a title="Что такое PayPal?"
                                                           onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"
                                                           class="about_paypal"
                                                           href="https://www.paypal.com/us/webapps/mpp/paypal-popup">Что
                                                            такое PayPal?</a> </label>
                                                    <div class="payment_box payment_method_paypal"
                                                         style="display:none;">
                                                        <p>Pay via PayPal; you can pay with your credit card if you don&#8217;t
                                                            have a PayPal account.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="form-row place-order">
                                                <noscript>Since your browser does not support JavaScript, or it is
                                                    disabled, please ensure you click the <em>Update Totals</em> button
                                                    before placing your order. You may be charged more than the amount
                                                    stated above if you fail to do so.<br/>
                                                    <input type="submit" class="button alt"
                                                           name="woocommerce_checkout_update_totals"
                                                           value="Update totals"/>
                                                </noscript>
                                                {{--<p class="form-row terms wc-terms-and-conditions">--}}
                                                {{--<input type="checkbox" class="input-checkbox" name="terms"  id="terms" />--}}
                                                {{--<label for="terms" class="checkbox">I&rsquo;ve read and accept the <a href="terms-and-conditions.html" target="_blank">terms &amp; conditions</a> <span class="required">*</span></label>--}}
                                                {{--<input type="hidden" name="terms-field" value="1" />--}}
                                                {{--</p>--}}
                                                {{--<button formaction="{{route('checkout')}}" formmethod="post" name="order" type="submit"> Оформить заказ </button>--}}
                                                <a href="#" style="text-align: center;"
                                                   onclick="document.getElementById('order').submit()"
                                                   type="submit" class="button"
                                                   name="order" value="Оформить заказ"> Оформить заказ</a>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- .entry-content -->
                    </div>
        </div>
                    <!-- #post-## -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- #content -->



@endsection


