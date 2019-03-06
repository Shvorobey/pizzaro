@extends ('layout')

@section ('body-classes','store-locator-page')

@section('content')

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('home')}}">Главная</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Мы на карте
                </nav>
            </div>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div id="post-537" class="post-537 page type-page status-publish hentry">
                        <header class="entry-header">
                            <h1 class="entry-title">Мы на карте</h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <div id="wpsl-wrap">
                            {{--<div class="wpsl-search wpsl-clearfix ">--}}
                            {{--<div id="wpsl-search-wrap">--}}
                            {{--<div class="wpsl-from">--}}
                            {{--<div class="wpsl-input">--}}
                            {{--<div>--}}
                            {{--<label for="wpsl-search-input">Your location</label>--}}
                            {{--</div>--}}
                            {{--<input id="wpsl-search-input" type="text" value=""--}}
                            {{--name="wpsl-search-input" placeholder="" aria-required="true"/>--}}
                            {{--</div>--}}
                            {{--<div class="wpsl-select-wrap">--}}
                            {{--<div class="wpsl-radius">--}}
                            {{--<label for="wpsl-radius-dropdown">Search radius</label>--}}
                            {{--<div class="wpsl-dropdown">--}}
                            {{--<select id="wpsl-radius-dropdown" class="" name="wpsl-radius">--}}
                            {{--<option value="10">10 km</option>--}}
                            {{--<option value="25">25 km</option>--}}
                            {{--<option selected="selected" value="50">50 km</option>--}}
                            {{--<option value="100">100 km</option>--}}
                            {{--<option value="200">200 km</option>--}}
                            {{--<option value="500">500 km</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpsl-results">--}}
                            {{--<label for="wpsl-results-dropdown">Results</label>--}}
                            {{--<div class="wpsl-dropdown">--}}
                            {{--<select id="wpsl-results-dropdown" class="" name="wpsl-results">--}}
                            {{--<option selected="selected" value="25">25</option>--}}
                            {{--<option value="50">50</option>--}}
                            {{--<option value="75">75</option>--}}
                            {{--<option value="100">100</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpsl-search-btn-wrap">--}}
                            {{--<input id="wpsl-search-btn" type="submit" value="Search">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div id="wpsl-result-list" class="col-md-4 col-sm-6 col-lg-4 col-xs-12">--}}
                            {{--<div id="wpsl-stores">--}}
                            {{--<ul>--}}
                            {{--<li data-store-id="535">--}}
                            {{--<div>--}}
                            {{--<p>--}}
                            {{--<strong>Pizzaro</strong>--}}
                            {{--<span class="wpsl-street">27, Maraicoir Street</span>--}}
                            {{--<span>Chennai Tamil Nadu 600001</span>--}}
                            {{--<span class="wpsl-country">India</span>--}}
                            {{--</p>--}}
                            {{--</div>--}}
                            {{--<div class="wpsl-direction-wrap">2.9 km--}}
                            {{--</div>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8 col-sm-6 col-lg-8 col-xs-12 map">--}}
                            <!-- <div id="wpsl-gmap" class="wpsl-gmap-canvas"></div> -->
                                <div class="contact-map">
                                    <div style="overflow:hidden;width: 1260px;height: 792px;">
                                        <iframe width="700" height="440"
                                                src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Odessa%2C%20Ukraine%2C%20Derybasivska%20street%2C%207+(Pizzaro)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"
                                                frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0"></iframe>
                                        <div>

                                        </div>
                                        <div>

                                        </div>
                                        <style>#gmap_canvas img {
                                                max-width: none !important;
                                                background: none !important
                                            }</style>
                                    </div>
                                    <br/></div>
                            </div>
                        </div>
                    </div>
                    <!-- .entry-content -->
            </div>
            <!-- #post-## -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .col-full -->
    </div>

@endsection