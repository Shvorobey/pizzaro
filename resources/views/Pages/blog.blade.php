@extends ('layout')

@section ('body-classes','blog right-sidebar')

@section('content')

    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb" >
                    <a href="{{route('home')}}">Главная</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Блог
                </nav>
            </div>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main" >
                    <div class="posts">
                        @foreach($posts as $post)
                        <article id="post-359" class="post-359 post type-post status-publish format-image has-post-thumbnail sticky hentry category-technology tag-event tag-festival tag-music tag-woocommerce post_format-post-format-image">
                            <header class="entry-header">
                                <div class="media-attachment">
                                    <div class="post-thumbnail">
                                        <a href="blog-single.html">
                                            <img width="1619" height="827" src="{{$post->cover}}" class="attachment-full size-full wp-post-image" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <h1 class="alpha entry-title">
                                    <a href="blog-single.html" rel="bookmark">{{$post->title}}</a>
                                </h1>
                                <div class="entry-meta">
                                    <div class="cat-links">
                                        <a href="blog-single.html" rel="category tag">Technology</a>
                                    </div>
                                    <span class="posted-on">
                                 <a href="blog-single.html" rel="bookmark">
                                 <time class="entry-date published" datetime="2016-10-13T14:53:25+00:00">{{$post->created_at}}</time>
                                 </a>
                                 </span>
                                    <div class="author">
                                        <div class="label">Автор:</div>
                                        <a href="{{route('posts-by-autor', $post->user->id )}}" title="Posts by {{$post->user->name}}" rel="author">{{$post->user->name}}</a>
                                    </div>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p>{{$post->body}}</p>
                                <div class="post-readmore">
                                    <a href="blog-single.html" class="read-more-text">Read More</a>
                                </div>
                                <span class="comments-link">
                              <a href="#">Leave a comment</a>
                              </span>
                            </div>
                        </article>
                        @endforeach
                        <!-- #post-## -->
                        {{--<article id="post-356" class="post-356 post type-post status-publish format-audio hentry category-design category-music category-social tag-audio tag-awsome tag-buy-it tag-music  post_format-post-format-audio">--}}
                            {{--<header class="entry-header">--}}
                                {{--<div class="media-attachment">--}}
                                    {{--<iframe style="height=:165px; width:100%;" width="870" height="165" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/229791977&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>--}}
                                {{--</div>--}}
                                {{--<h1 class="alpha entry-title">--}}
                                    {{--<a href="blog-single.html" rel="bookmark">Music for Dinner &#8211; Audio Player</a>--}}
                                {{--</h1>--}}
                                {{--<div class="entry-meta">--}}
                                    {{--<div class="cat-links">--}}
                                        {{--<a href="blog-single.html" rel="category tag">Design</a>,--}}
                                        {{--<a href="blog-single.html" rel="category tag">Music</a>,--}}
                                        {{--<a href="blog-single.html" rel="category tag">Social</a>--}}
                                    {{--</div>--}}
                                    {{--<span class="posted-on">--}}
                                 {{--<a href="blog-single.html" rel="bookmark">--}}
                                 {{--<time class="entry-date published" datetime="2016-10-13T14:47:34+00:00">October 13, 2016</time>--}}
                                 {{--</a>--}}
                                 {{--</span>--}}
                                    {{--<div class="author">--}}
                                        {{--<div class="label">Posted by:</div>--}}
                                        {{--<a href="blog-single.html" title="Posts by farook" rel="author">farook</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</header>--}}
                            {{--<!-- .entry-header -->--}}
                            {{--<div class="entry-content">--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>--}}
                                {{--<div class="post-readmore">--}}
                                    {{--<a href="blog-single.html" class="read-more-text">Read More</a>--}}
                                {{--</div>--}}
                                {{--<span class="comments-link"><a href="#">Leave a comment</a></span>--}}
                            {{--</div>--}}
                        {{--</article>--}}
                        {{--<!-- #post-## -->--}}
                        {{--<article id="post-354" class="post-354 post type-post status-publish format-video hentry category-videos tag-awsome tag-buy-it  tag-video tag-wordpress post_format-post-format-video">--}}
                            {{--<header class="entry-header">--}}
                                {{--<div class="media-attachment">--}}
                                    {{--<div class="video-container">--}}
                                        {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                            {{--<iframe src="https://player.vimeo.com/video/153747736" width="870" height="490" allowfullscreen></iframe>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<h1 class="alpha entry-title">--}}
                                    {{--<a href="blog-single.html" rel="bookmark">This is how we Baking our Pizza &#8211; Video Post</a>--}}
                                {{--</h1>--}}
                                {{--<div class="entry-meta">--}}
                                    {{--<div class="cat-links">--}}
                                        {{--<a href="blog-single.html" rel="category tag">Videos</a>--}}
                                    {{--</div>--}}
                                    {{--<span class="posted-on">--}}
                                 {{--<a href="blog-single.html" rel="bookmark">--}}
                                 {{--<time class="entry-date published updated" datetime="2016-10-13T14:44:11+00:00">October 13, 2016</time>--}}
                                 {{--</a>--}}
                                 {{--</span>--}}
                                    {{--<div class="author">--}}
                                        {{--<div class="label">Posted by:</div>--}}
                                        {{--<a href="blog-single.html" title="Posts by farook" rel="author">farook</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</header>--}}
                            {{--<!-- .entry-header -->--}}
                            {{--<div class="entry-content">--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>--}}
                                {{--<div class="post-readmore">--}}
                                    {{--<a href="blog-single.html" class="read-more-text">Read More</a>--}}
                                {{--</div>--}}
                                {{--<span class="comments-link">--}}
                              {{--<a href="#">Leave a comment</a>--}}
                              {{--</span>--}}
                            {{--</div>--}}
                        {{--</article>--}}
                        <!-- #post-## -->
                        <article id="post-343" class="post-343 post type-post status-publish format-quote hentry category-links-quotes category-uncategorized tag-awsome tag-bootstrap tag-clean-design tag-woocommerce tag-wordpress post_format-post-format-quote">
                            <h1 style="display:none;">test</h1>
                            <div class="entry-content">
                                <blockquote>
                                    <p>Quisque a commodo lectus. Nunc vel dolor sed libero venenatis egestas. Cras non volutpat enim. Cras molestie purus id lorem sodales, in facilisis erat tristique. Aliquam luctus orci aliquet augue eleifend.</p>
                                    <cite> Steve Kowalsky</cite>
                                </blockquote>
                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-## -->
                        {{--<article id="post-340" class="post-340 post type-post status-publish format-link hentry category-links-quotes category-news category-social tag-awsome tag-bootstrap tag-buy-it tag-clean-design  tag-woocommerce tag-wordpress post_format-post-format-link">--}}
                            {{--<h1 style="display:none;">test</h1>--}}
                            {{--<div class="entry-content">--}}
                                {{--<p>If you are looking for a developer on ThemeForest &#8211; check out the link</p>--}}
                                {{--<p>--}}
                                    {{--<a href="http://www.transvelo.com" target="_blank">--}}
                                        {{--<span>http://www.transvelo.com</span>--}}
                                    {{--</a>--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            {{--<!-- .entry-content -->--}}
                        {{--</article>--}}
                        <!-- #post-## -->
                        {{--<article id="post-255" class="post-255 post type-post status-publish format-standard hentry category-uncategorized">--}}
                            {{--<header class="entry-header">--}}
                                {{--<h1 class="alpha entry-title">--}}
                                    {{--<a href="blog-single.html" rel="bookmark">Iced Caramel Latte</a>--}}
                                {{--</h1>--}}
                                {{--<div class="entry-meta">--}}
                                    {{--<div class="cat-links">--}}
                                        {{--<a href="blog-single.html" rel="category tag">Uncategorized</a>--}}
                                    {{--</div>--}}
                                    {{--<span class="posted-on">--}}
                                 {{--<a href="blog-single.html" rel="bookmark">--}}
                                 {{--<time class="entry-date published updated" datetime="2016-10-04T13:53:51+00:00">October 4, 2016</time>--}}
                                 {{--</a>--}}
                                 {{--</span>--}}
                                    {{--<div class="author">--}}
                                        {{--<div class="label">Posted by:</div>--}}
                                        {{--<a href="#" title="Posts by farook" rel="author">farook</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</header>--}}
                            {{--<!-- .entry-header -->--}}
                            {{--<div class="entry-content">--}}
                                {{--<p>Quisque pretium turpis non tempus cursus. Nulla consequat, mi nec pellentesque imperdiet, mi quam congue magna, tristique commodo.</p>--}}
                                {{--<div class="post-readmore">--}}
                                    {{--<a href="blog-single.html" class="read-more-text">Read More</a>--}}
                                {{--</div>--}}
                                {{--<span class="comments-link">--}}
                              {{--<a href="#">Leave a comment</a>--}}
                              {{--</span>--}}
                            {{--</div>--}}
                        {{--</article>--}}
                        <!-- #post-## -->
                        {{--<article id="post-251" class="post-251 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">--}}
                            {{--<header class="entry-header">--}}
                                {{--<div class="media-attachment">--}}
                                    {{--<div class="post-thumbnail">--}}
                                        {{--<a href="blog-single.html">--}}
                                            {{--<img width="1619" height="827" src="assets/images/blog/blog-2.jpg" class="attachment-full size-full wp-post-image" alt="" />--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<h1 class="alpha entry-title">--}}
                                    {{--<a href="blog-single.html" rel="bookmark">5th International Pizza Festival with New Better Competitors from All over the World.</a>--}}
                                {{--</h1>--}}
                                {{--<div class="entry-meta">--}}
                                    {{--<div class="cat-links">--}}
                                        {{--<a href="blog-single.html" rel="category tag">Uncategorized</a>--}}
                                    {{--</div>--}}
                                    {{--<span class="posted-on">--}}
                                 {{--<a href="blog-single.html" rel="bookmark">--}}
                                 {{--<time class="entry-date published" datetime="2016-10-04T13:49:25+00:00">October 4, 2016</time>--}}
                                 {{--</a>--}}
                                 {{--</span>--}}
                                    {{--<div class="author">--}}
                                        {{--<div class="label">Posted by:</div>--}}
                                        {{--<a href="#" title="Posts by farook" rel="author">farook</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</header>--}}
                            {{--<!-- .entry-header -->--}}
                            {{--<div class="entry-content">--}}
                                {{--<p>Although the legendary Double Burger really needs no introduction, please allow us... Tucked in between three soft buns are two all-beef patties.</p>--}}
                                {{--<div class="post-readmore">--}}
                                    {{--<a href="blog-single.html" class="read-more-text">Read More</a>--}}
                                {{--</div>--}}
                                {{--<span class="comments-link">--}}
                              {{--<a href="blog-single.html">Leave a comment</a>--}}
                              {{--</span>--}}
                            {{--</div>--}}
                        {{--</article>--}}
                        <!-- #post-## -->
                    </div>
                    <!-- /.posts -->
                    {{--<nav id="post-navigation" class="navigation pagination"  aria-label="Post Navigation">--}}
                        {{--<span class="screen-reader-text">Posts navigation</span>--}}
                        {{--<div class="nav-links">--}}
                            {{--<ul class='page-numbers'>--}}
                                {{--<li><span class='page-numbers current'>1</span></li>--}}
                                {{--<li><a class='page-numbers' href='#'>2</a></li>--}}
                                {{--<li><a class="next page-numbers" href="#">Next Page &nbsp;&nbsp;&nbsp;&rarr;</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</nav>--}}
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
            <div id="secondary" class="widget-area" role="complementary">
                <div id="pizzaro_about_widget-2" class="widget pizzaro_about_widget">
                    <div class="about-image">
                        <img alt="" class="featured-image" src="assets/images/sidebar-about-1.jpg">
                        <img alt="" class="logo" src="assets/images/sidebar-about-2.png">
                    </div>
                    <div class="about-info">
                        <h2>Welcome</h2>
                        <p>Cras convallis nisl sit amet commodo molestie. Donec gravida, sem et ornare fringilla, metus dui aliquet est, gravida.</p>
                        <ul class="social-icons list-inline">
                            <li><a class="fa fa-facebook" href="#"></a></li>
                            <li><a class="fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-instagram" href="#"></a></li>
                            <li><a class="fa fa-youtube" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div id="search-2" class="widget widget_search">
                    <form role="search" method="get" class="search-form" action="blog-single.html">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                        </label>
                        <input type="submit" class="search-submit" value="Search" />
                    </form>
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
                <div id="tag_cloud-2" class="widget widget_tag_cloud">
                    <span class="gamma widget-title">Popular Tags</span>
                    <div class="tagcloud">
                        <a href='#' class='tag-link-39 tag-link-position-1' title='1 topic'>amazon like</a>
                        <a href='#' class='tag-link-46 tag-link-position-2' title='1 topic'>audio</a>
                        <a href='#' class='tag-link-27 tag-link-position-3' title='5 topics'>awsome</a>
                        <a href='#' class='tag-link-28 tag-link-position-4' title='2 topics'>bootstrap</a>
                        <a href='#' class='tag-link-32 tag-link-position-5' title='3 topics'>buy it</a>
                        <a href='#' class='tag-link-33 tag-link-position-6' title='2 topics'>clean design</a>
                        <a href='#' class='tag-link-48 tag-link-position-7' title='1 topic'>event</a>
                        <a href='#' class='tag-link-47 tag-link-position-8' title='1 topic'>festival</a>
                        <a href='#' class='tag-link-45 tag-link-position-9' title='3 topics'>music</a>
                        <a href='#' class='tag-link-29 tag-link-position-10' title='4 topics'>template</a>
                        <a href='#' class='tag-link-42 tag-link-position-11' title='1 topic'>video</a>
                        <a href='#' class='tag-link-30 tag-link-position-12' title='4 topics'>woocommerce</a>
                        <a href='#' class='tag-link-31 tag-link-position-13' title='4 topics'>wordpress</a>
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
                </div>
            </div>

            <nav class="woocommerce-pagination">
                <ul class="page-numbers">
                    @if ($posts->currentPage()!=1)
                        <li><a class="next page-numbers" href="?page=1">Первая страница</a></li>
                        <li><a class="next page-numbers" href="{{$posts->previousPageUrl()}}"> < </a></li>
                    @endif

                    @if ($posts->count ()>0)
                        @for ($count=1; $count<=$posts->lastPage(); $count++)
                            <li><a class="page-numbers @if ($count==$posts->currentPage()) current @endif" href="?page={{$count}}">{{$count}}</a></li>

                        @endfor

                    @else
                        <h1> <font size="15" color="aqua" face="Arial"> Мы работаем над тем, чтобы здесь что-то появилось ;) </font> </h1>
                    @endif
                    @if ($posts->currentPage() != $posts->lastPage())
                        <li><a class="next page-numbers" href="{{$posts->nextPageUrl()}}"> > </a></li>
                        <li><a class="next page-numbers" href="?page={{$posts->lastPage()}}">Последняя страница</a></li>
                    @endif
                </ul>
            </nav>




            <!-- #secondary -->
        </div>
        <!-- .col-full -->
    </div>


@endsection


@section ('subscribed')
    <section class="newsletter-subscription stretch-full-width"  style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/26.jpg ); height: 460px;">
        <div class="caption">
            <h3 class="title">Подписаться на рассылку</h3>
            <span class="marketing-text">Подпишитесь на нашу рассылку! <br> Горячие предложения и промокоды. </span>
            <form action="{{route('mail-subscribed')}}" method="POST">
                @csrf
                <div class="newsletter-form">
                    <input type="email" name="email" placeholder="Ведите свой e-mail">
                    <button class="button" type="submit">Подписаться</button>
                </div>
            </form>
        </div>
    </section>
@endsection