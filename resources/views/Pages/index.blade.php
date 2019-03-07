@extends ('layout')

@section ('body-classes','full-width grid-view columns-3 archive woocommerce-page dark')

@section('content')


    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="home-v1-slider">
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        {{--<div class="item slider-1"--}}
                        {{--style="background-image: url(/assets/images/slider/homepage-slider-1.jpg);">--}}
                        {{--<div class="caption fadeIn">--}}
                        {{--<div class="pre-title">--}}
                        {{--<div class="border front"></div>--}}
                        {{--<div class="lable">New!</div>--}}
                        {{--<div class="pre-title-value">LIMITED TIME OFFER</div>--}}
                        {{--<div class="border back"></div>--}}
                        {{--</div>--}}
                        {{--<div class="title">SUPREME BBQ</div>--}}
                        {{--<div class="sub-title">CHICKEN</div>--}}
                        {{--<div class="bottom-caption">Bacon - Grilled Onions - Potatos - Mozarella - BBQ--}}
                        {{--Sau TIce--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <!-- /.caption -->
                        {{--</div>--}}
                        <!-- /.item -->
                        {{--<div class="item slider-2"--}}
                        {{--style="background-image: url(https://ilmolino.ua/img/article/11/51_main.jpg);">--}}
                        {{--<div class="caption fadeIn">--}}
                        {{--<div class="price-tag">--}}
                        {{--<div class="border front"></div>--}}
                        {{--<div class="price-tag-value">--}}
                        {{--<div class="price"><span class="symbol">$</span>12<span--}}
                        {{--class="slider-amount">99<br><span class="price-only">only</span></span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="border back"></div>--}}
                        {{--</div>--}}
                        {{--<div class="title">ORYGINAL ITALY</div>--}}
                        {{--<div class="sub-title">PIZZA LOVERS SET</div>--}}
                        {{--</div>--}}
                        {{--<!-- /.caption -->--}}
                        {{--</div>--}}
                        <!-- /.item -->
                        {{--<div class="item slider-3"--}}
                        {{--style="background-image: url(https://cdn.cobone.com/deals/uae/pizzaro/2015/big-pizzaro-pizza1-rev1.jpg?v=80);">--}}
                        {{--<div class="caption fadeIn">--}}
                        {{--<div class="pre-title">САМЫЕ ВКУСНЫЕ ЕДА И НАПИТКИ ТУТ</div>--}}
                        {{--<div class="title">сделаи<span>свой<br>заказ</span>online</div>--}}
                        {{--</div>--}}
                        {{--<!-- /.caption -->--}}
                        {{--</div>--}}
                        <!-- /.item -->
                        {{--<div class="item slider-4"--}}
                        {{--style="background-image: url(assets/images/slider/homepage-slider-4.jpg);">--}}
                        {{--<div class="caption fadeIn">--}}
                        {{--<div class="pre-title">EXCLUSIVE OFFER</div>--}}
                        {{--<div class="title"><span>VEGGIE FUN</span><br>DELICIOUS SUMMER!</div>--}}
                        {{--</div>--}}
                        {{--<!-- /.caption -->--}}
                        {{--</div>--}}
                        <!-- /.item -->
                        </div>
                        <!-- /.owl-carousel -->
                    </div>
                    <div class="tiles">
                        <div class="row">


                            {{--<div class="col-xs-12 col-sm-6">--}}
                            {{--<div class="banner top-left">--}}
                            {{--<a href="#">--}}
                            {{--<div class="banner-bg"--}}
                            {{--style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/1.jpg ); height: 442px;">--}}
                            {{--<div class="caption">--}}

                            {{--<h3 class="title">GRILLED CHICKEN</h3>--}}
                            {{--<h4 class="subtitle">SUMMER PIZZA</h4>--}}
                            {{--<span class="button">HOT &amp; SPICY</span>--}}
                            {{--<span class="condition"><em>*</em>ONLY IN LOCAL</span>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</a>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="section-products">
                                <h2 class="section-title">Горячие предложения</h2>
                                @inject ('dayProducts', '\App\Services\dayProducts' )
                                @foreach($dayProducts->getDayProducts() as $product)
                                    <div class="col-xs-12 col-sm-6">
                                        <div class=" banner center">
                                            <a href="{{route('single-product', $product->id)}}">
                                                <div class="banner-bg"
                                                     style="background-size: cover; background-position: center center; background-image: url( {{$product->image}} ); height: 442px;">
                                                    <div class="caption">
                                                        <h3 class="title" style="color: red;">{{$product->name}}</h3>
                                                        <h4 class="subtitle"></h4>
                                                        <span class="button">Горячее предложение</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        <div class="stretch-full-width section-products-sale-event"
             style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/5.jpg ); height: 468px;">
            <div class="sale-event-content">
                <h3 class="pre-title"><span>FREE DELIVERY WITH</span></h3>
                <h2 class="section-title">PIZZA OF THE DAY</h2>
                <div class="sale-event-products">
                    <div class="products-price">
                                    <span class="price"><span class="currency"> &#36;</span>9<span
                                                class="decimals">99</span><span class="price-info">EACH</span></span>
                    </div>
                    <ul class="products-info">
                        <li>
                            <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                <h3>Vegge Lover</h3>
                            </a>
                        </li>
                        <li>
                            <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                <h3>Summer Pizza</h3>
                            </a>
                        </li>
                        <li>
                            <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                <h3>Chicken Hawaii</h3>
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="single-product-v1.html" class="button">Order Now</a>
            </div>
        </div>
        <div class="section-products">
            <h2 class="section-title">Попробуйте сегодня</h2>

            <div class="columns-4">

                <ul class="products">
                    @inject ('products', '\App\Services\RandomProductsService' )

                    @foreach($products->getRandomProducts() as $product)
                        <li class="product @if ($loop->first) first @endif @if ($loop->last) last @endif">
                            <div class="product-outer">
                                <div class="product-inner">

                                    <div class="product-image-wrapper">
                                        <a href="single-product-v1.html"
                                           class="woocommerce-LoopProduct-link">
                                            <img src="{{$product->image}}" class="img-responsive" alt="">
                                        </a>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <a href="{{route('single-product', $product->id)}}"
                                           class="woocommerce-LoopProduct-link">
                                            <h3>{{$product->name}}</h3>
                                            <div itemprop="description">
                                                <p style="max-height: none;">{{$product->description}}</p>
                                            </div>
                                            <div class="yith_wapo_groups_container">
                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide "
                                                     data-requested="1" data-type="radio" data-id="1"
                                                     data-condition="">
                                                    <h3><span>Выберите размер</span></h3>
                                                    @foreach($product->items as $item)
                                                        <a href="{{route('add-to-cart', $item->id)}}">
                                                            <div class="ywapo_input_container ywapo_input_container_radio">

                                                                            <span class="ywapo_label_tag_position_after"><span
                                                                                        class="ywapo_option_label ywapo_label_position_after">{{$item->size}} {{$item->dimension}}</span></span>
                                                                <span class="ywapo_label_price"><span
                                                                            class="woocommerce-Price-amount amount"><span
                                                                                class="woocommerce-Price-currencySymbol"></span>{{$item->price}}</span></span>
                                                            </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </a>
                                        <div class="hover-area">
                                            <a rel="nofollow" href="single-product-v1.html"
                                               data-quantity="1" data-product_id="51" data-product_sku=""
                                               class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                to cart</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.product-outer -->
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="section-product"
             style="background-size: cover; background-image: url( assets/images/homepage-banners/6.png ); height: 556px;">
            <div class="product-wrapper">
                <div class="product-inner">
                    <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                        <h3>Pepperoni Pizza</h3>
                        <div itemprop="description">
                            <p>Extra-virgin olive oil, garlic, mozzarella cheese, onions, mushrooms, green
                                olives, black olives, fresh tomatoes.</p>
                        </div>
                        <div class="yith_wapo_groups_container">
                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide "
                                 data-requested="1" data-type="radio" data-id="1" data-condition="">
                                <h3><span>Pick Size</span></h3>
                                <div class="ywapo_input_container ywapo_input_container_radio">

                                          <span class="ywapo_label_tag_position_after">
                                          <span class="ywapo_option_label ywapo_label_position_after">22  cm</span>
                                      </span>
                                    <span class="ywapo_label_price"><span
                                                class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>19.90</span></span>
                                </div>
                                <div class="ywapo_input_container ywapo_input_container_radio">

                                          <span class="ywapo_label_tag_position_after">
                                          <span class="ywapo_option_label ywapo_label_position_after">29  cm</span>
                                      </span>
                                    <span class="ywapo_label_price"> <span
                                                class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="82"
                       data-product_sku=""
                       class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to
                        cart</a>
                </div>
            </div>
        </div>
        <div class="features-list">
            <div class="row">
                <div class="feature col-xs-12 col-sm-3">
                    <div class="feature-icon"><i class="po po-best-quality"></i></div>
                    <div class="feature-label">
                        <h4>Best Quality</h4>
                        <p><strong>Качественные продукты</strong></p>
                    </div>
                </div>
                <div class="feature col-xs-12 col-sm-3">
                    <div class="feature-icon"><i class="po po-on-time"></i></div>
                    <div class="feature-label">
                        <h4>On Time</h4>
                        <p><strong>Быстрая доставка</strong></p>
                    </div>
                </div>
                <div class="feature col-xs-12 col-sm-3">
                    <div class="feature-icon"><i class="po po-master-chef"></i></div>
                    <div class="feature-label">
                        <h4>MasterChefs</h4>
                        <p><strong>Хорошие повара</strong></p>
                    </div>
                </div>
                <div class="feature col-xs-12 col-sm-3">
                    <div class="feature-icon"><i class="po po-ready-delivery"></i></div>
                    <div class="feature-label">
                        <h4>Taste Food</h4>
                        <p><strong>Отличный вкус</strong></p>
                    </div>
                </div>
            </div>
        </div>
        </main>
        @include('subscribed')
    </div>

    </div>
    <!-- .col-full -->
    </div>
@endsection

