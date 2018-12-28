
<div id="secondary" class="widget-area" role="complementary">
    <div id="pizzaro_about_widget-2" class="widget pizzaro_about_widget">
        <div class="about-image">
            <img alt="" class="featured-image" src="https://palyanizza.if.ua/wp-content/uploads/2018/11/welcom.jpg">
            <img alt="" class="logo" src="http://pizzaro/assets/images/sidebar-about-2.png">
        </div>
        <div class="about-info">
            <h2>Добро пожаловать</h2>
            <p>Чтобы хорошо готовить, недостаточно любить покушать. Надо полюбить сам процесс, вкладывать в каждую его минуту любовь.</p>
            <ul class="social-icons list-inline">
                @inject ('networks', '\App\Services\GetSocialNetworks' )

                @foreach($networks->getSocialNetworks() as $network)
                    <li><a class="fa {{$network->icon}}" href="{{$network->key}}"></a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="search-2" class="widget widget_search">
        <hr>
        <form role="search" method="get" class="search-form" action="blog-single.html">
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" class="search-field" placeholder="Найти..." value="" name="s" />
            </label>
            <input type="submit" class="search-submit" value="Search" />
        </form>
        <hr>
    </div>
    <div id="tag_cloud-2" class="widget widget_tag_cloud">
        <hr>
        <span class="gamma widget-title">Категории:</span>
        <div class="tagcloud">
            @inject('categories', '\App\Services\CategoriesForSidebar')



            {{ $categories->show_categories() }}


            {{--<a href='#' class='tag-link-39 tag-link-position-1' title='1 topic'>{{ $categories->show_categories() }}</a>--}}
            {{--<a href='#' class='tag-link-46 tag-link-position-2' title='1 topic'>audio</a>--}}
            {{--<a href='#' class='tag-link-27 tag-link-position-3' title='5 topics'>awsome</a>--}}
            {{--<a href='#' class='tag-link-28 tag-link-position-4' title='2 topics'>bootstrap</a>--}}
            {{--<a href='#' class='tag-link-32 tag-link-position-5' title='3 topics'>buy it</a>--}}
            {{--<a href='#' class='tag-link-33 tag-link-position-6' title='2 topics'>clean design</a>--}}
            {{--<a href='#' class='tag-link-48 tag-link-position-7' title='1 topic'>event</a>--}}
            {{--<a href='#' class='tag-link-47 tag-link-position-8' title='1 topic'>festival</a>--}}
            {{--<a href='#' class='tag-link-45 tag-link-position-9' title='3 topics'>music</a>--}}
            {{--<a href='#' class='tag-link-29 tag-link-position-10' title='4 topics'>template</a>--}}
            {{--<a href='#' class='tag-link-42 tag-link-position-11' title='1 topic'>video</a>--}}
            {{--<a href='#' class='tag-link-30 tag-link-position-12' title='4 topics'>woocommerce</a>--}}
            {{--<a href='#' class='tag-link-31 tag-link-position-13' title='4 topics'>wordpress</a>--}}
        <hr>
        </div>
    </div>
    <div id="woocommerce_products-2" class="widget woocommerce widget_products">
        <span class="gamma widget-title">Best Deals</span>
        <ul class="product_list_widget">
            <li>
                <a href="#" title="Orange Juice">
                    <img width="180" height="180" src="assets/images/blog/sidebar-product-1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="28" />
                    <span class="product-title">Orange Juice</span>
                </a>
                <span class="widget-price">
                           <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>1.90</span>
                           </span>
            </li>
            <li>
                <a href="#" title="Cola Bottle">
                    <img width="180" height="180" src="assets/images/blog/sidebar-product-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="22" />
                    <span class="product-title">Cola Bottle</span>
                </a>
                <span class="widget-price">
                           <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>2.90</span>
                           </span>
            </li>
            <li>
                <a href="#" title="Hawaii Vegetarian Pizza">
                    <img width="180" height="180" src="assets/images/blog/sidebar-product-3.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="13" />
                    <span class="product-title">Hawaii Vegetarian Pizza</span>
                </a>
                <span class="widget-price">
                           <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>39.80</span>&ndash;<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>59.90</span>
                           </span>
            </li>
            <li>
                <a href="#" title="Grand Italiano">
                    <img width="180" height="180" src="assets/images/blog/sidebar-product-4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="2" />
                    <span class="product-title">Grand Italiano</span>
                </a>
                <span class="widget-price">
                           <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>22.90</span></del>
                           <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>19.90</span></ins>
                           </span>
            </li>
        </ul>
        <hr>
    </div>
</div>
{{--<div id="pizzaro_recent_posts_widget-2" class="widget pizzaro_recent_posts_widget">--}}
    {{--<span class="gamma widget-title">Recent Posts</span>--}}
    {{--<ul>--}}
        {{--<li>--}}
            {{--<div class="post-thumbnail">--}}
                {{--<a href="blog-single.html">--}}
                    {{--<img width="300" height="153" src="assets/images/blog/blog-s-1.jpg" class="attachment-medium size-medium wp-post-image" alt="4" />--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="post-content">--}}
                              {{--<span class="comments-link">--}}
                              {{--<a href="blog-single.html">&nbsp;</a>--}}
                              {{--</span>--}}
                {{--<span class="post-date">October 13, 2016</span>--}}
                {{--<a class ="post-name" href="blog-single.html">Pizza Festival – Reopen</a>--}}
            {{--</div>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<div class="post-thumbnail">--}}
                {{--<a href="blog-single.html">--}}
                    {{--<img alt="" src="//placehold.it/370x220" />--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="post-content">--}}
                              {{--<span class="comments-link">--}}
                              {{--<a href="blog-single.html">&nbsp;</a>--}}
                              {{--</span>--}}
                {{--<span class="post-date">October 13, 2016</span>--}}
                {{--<a class ="post-name" href="blog-single.html">Music for Dinner &#8211; Audio Player</a>--}}
            {{--</div>--}}
        {{--</li>--}}
    {{--</ul>--}}
{{--</div>--}}