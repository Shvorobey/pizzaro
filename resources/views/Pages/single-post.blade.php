@extends ('layout')

@section ('body-classes','blog right-sidebar single single-post')

@section('content')

    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                    <a href="{{route('home')}}">Главная</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>
                    <a href="{{route('blog')}}">Блог</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>{{$posts->title}}
                </nav>
            </div>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main" >
                    <article id="post-359" class="post-359 post type-post status-publish format-image has-post-thumbnail sticky hentry category-technology tag-event tag-festival tag-music tag-woocommerce post_format-post-format-image">
                        <header class="entry-header">
                            <div class="media-attachment">
                                <div class="post-thumbnail">
                                    <img width="1619" height="827" src="{{$posts->cover}}" class="attachment-full size-full wp-post-image" alt="" />
                                </div>
                            </div>
                            <h1 class="entry-title">{{$posts->title}}</h1>
                            <div class="entry-meta">
                                <div class="label">Категории:</div>
                                @foreach($posts->categories as $category)
                                    <div class="cat-links">
                                        <a href="{{route('posts-by-category', $category->key)}}" rel="category tag">{{$category->categories}}</a>
                                    </div>
                                @endforeach

                                <span class="posted-on">
                                    <div class="label">Создан:</div>
                                    <time class="entry-date published" datetime="{{$posts->created_at}}">{{$posts->created_at}}</time>
                                    <div class="label">Обновлен:</div>
                                    <time class="updated" datetime="{{$posts->updated_at}}">{{$posts->updated_at}}</time>

                                </span>
                                <div class="author">
                                    <div class="label">Автор:</div>
                                    <a href="{{route('posts-by-autor', $posts->user->id )}}" title="Posts by {{$posts->user->name}}" rel="author">{{$posts->user->name}}</a>
                                </div>
                            </div>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <p class="highlight">{{$posts->body}} </p>
                            <div class="row">

                                <div class="col-md-6">
                                    <blockquote>
                                        <p>Pellentesque sodales augue eget ultricies ultricies. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur sagittis ultrices condimentum.</p>
                                    </blockquote>
                                </div>
                            </div>

                            </div>


                        <section id="comments" class="comments-area" aria-label="Post Comments">
                            <div id="respond" class="comment-respond">
                              <span id="reply-title" class="gamma comment-reply-title">Leave a Reply
                              <small>
                              <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
                              </small>
                              </span>
                                <form  id="commentform" class="comment-form" novalidate>
                                    <p class="comment-notes">
                                        <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                    </p>
                                    <p class="comment-form-comment">
                                        <label for="comment">Comment</label>
                                        <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525"></textarea>
                                    </p>
                                    <p class="comment-form-author">
                                        <label for="author">Name <span class="required">*</span></label>
                                        <input id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required='true' required='required' />
                                    </p>
                                    <p class="comment-form-email">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required='true' required='required' />
                                    </p>
                                    <p class="comment-form-url">
                                        <label for="url">Website</label>
                                        <input id="url" name="url" type="url" value="" size="30" maxlength="200" />
                                    </p>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit" value="Post Comment" />
                                        <input type='hidden' name='comment_post_ID' value='359' id='comment_post_ID' />
                                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                    </p>
                                </form>
                            </div>

                        </section>

                    </article>
                    <!-- #post-## -->
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
                <div id="pizzaro_recent_posts_widget-2" class="widget pizzaro_recent_posts_widget">
                    <span class="gamma widget-title">Recent Posts</span>
                    <ul>
                        <li>
                            <div class="post-thumbnail">
                                <a href="blog-single.html">
                                    <img width="300" height="153" src="assets/images/blog/blog-s-1.jpg" class="attachment-medium size-medium wp-post-image" alt="4" />
                                </a>
                            </div>
                            <div class="post-content">
                              <span class="comments-link">
                              <a href="blog-single.html">&nbsp;</a>
                              </span>
                                <span class="post-date">October 13, 2016</span>
                                <a class ="post-name" href="blog-single.html">Pizza Festival – Reopen</a>
                            </div>
                        </li>
                        <li>
                            <div class="post-thumbnail">
                                <a href="blog-single.html">
                                    <img alt="" src="//placehold.it/370x220" />
                                </a>
                            </div>
                            <div class="post-content">
                              <span class="comments-link">
                              <a href="blog-single.html">&nbsp;</a>
                              </span>
                                <span class="post-date">October 13, 2016</span>
                                <a class ="post-name" href="blog-single.html">Music for Dinner &#8211; Audio Player</a>
                            </div>
                        </li>
                    </ul>
                </div>
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