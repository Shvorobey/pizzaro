

@extends ('layout')

@section ('body-classes','woocommerce-page woocommerce-order-received woocommerce-checkout')

@section('content')

<div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div class="pizzaro-breadcrumb">
                  <nav class="woocommerce-breadcrumb">
                     <a href="{{route('home')}}">Главная</a>
                     <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>
                     <a href="{{route('checkout')}}">Оформление заказа</a>
                     <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Заказ оформлен
</nav>
               </div>
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" >
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
                        <header class="entry-header">
                           <h1 class="entry-title">Заказ оформлен</h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                           <div class="woocommerce">
                              <p class="woocommerce-thankyou-order-received">Спасибо что Вы с нами.</p>
                              <ul class="woocommerce-thankyou-order-details order_details">
                                 {{--<li class="order">Order Number:<strong>645</strong></li>--}}
                                 {{--<li class="date">Date:<strong>February 2, 2017</strong></li>--}}
                                 {{--<li class="total">К оплате:<strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{$total}} грн.</span></strong></li>--}}
                                 {{--<li class="method">Payment Method:<strong>Direct Bank Transfer</strong></li>--}}
                              </ul>
                              <div class="clear"></div>
                              {{--<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>--}}
                              <h2>Ваш заказ:</h2>
                              <table class="shop_table order_details">
                                 <thead>
                                    <tr>
                                       <th class="product-name">Заказ</th>
                                       <th class="product-total">Цена</th>
                                    </tr>
                                 </thead>
                                  @if (($items != null))
                                  @foreach($items as $item)
                                 <tbody>
                                    <tr class="order_item">
                                       <td class="product-name">
                                          <a href="single-product-v1.html">{{$item->product->name}}</a> <strong class="product-quantity">× 1</strong>
                                          <dl class="variation">
                                             <dt class="variation-PickSize362590"><span id="1">Количество (размер:</span> </dt>
                                             <dd class="variation-PickSize362590">
                                                <p>{$item->size}}  {{$item->dimension}}</p>
                                             </dd>
                                          </dl>
                                       </td>
                                       <td class="product-total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{$item->price}} грн.</span>  </td>
                                    </tr>
                                 </tbody>
                                  @endforeach
                                  @else
                                      <h3>В Вашей корзине нет заказов</h3>
                                  @endif
                                 <tfoot>
                                    <tr>
                                       <th scope="row">К оплате:</th>
                                       <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{$total}} грн.</span></td>
                                    </tr>

                                    <tr>

                                       <th scope="row">
                                           {{--Payment Method:--}}
                                       </th>
                                        <td><a class="button alt" href="{{route('home')}}" style="text-align: center;">На главную</a></td>
                                       {{--<td>Direct Bank Transfer</td>--}}
                                    </tr>
                                    {{--<tr>--}}
                                       {{--<th scope="row">Total:</th>--}}
                                       {{--<td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.90</span></td>--}}
                                    {{--</tr>--}}
                                 </tfoot>
                              </table>
                              {{--<header>--}}
                                 {{--<h2>Customer Details</h2>--}}
                              {{--</header>--}}
                              {{--<table class="shop_table customer_details">--}}
                                 {{--<tbody>--}}
                                    {{--<tr>--}}
                                       {{--<th>Email:</th>--}}
                                       {{--<td>anas@transvelo.com</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                       {{--<th>Telephone:</th>--}}
                                       {{--<td>9547399295</td>--}}
                                    {{--</tr>--}}
                                 {{--</tbody>--}}
                              {{--</table>--}}
                              {{--<header class="title">--}}
                                 {{--<h3>Billing Address</h3>--}}
                              {{--</header>--}}
                              {{--<address>Transvelo<br>Mohamed Anas<br>Transvelo<br>No 27 Maraicoir Street, Mannady<br>chennai - 600001<br>Tamil Nadu, India</address>--}}

                           </div>
                        </div>
                        <!-- .entry-content -->
                     </div>
                     <!-- #post-## -->
                  </main>
                  <!-- #main -->
               </div>

            </div>
            <!-- .col-full -->
         </div>

@endsection
