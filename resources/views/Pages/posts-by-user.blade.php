@extends ('layout')

@section ('body-classes','blog right-sidebar')

@section('content')

    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb" >
                    <a href="{{route('home')}}">Главная</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span><a href="{{route('blog')}}">Блог</a>
                </nav>
            </div>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main" >
                    <div class="posts">
                        <h3>Все посты автора </h3><h1>{{$user->name}}</h1>
                        @foreach($user->posts as $post)
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
                                        <div class="label">Категории:</div>
                                        @foreach($post->categories as $category)
                                            <div class="cat-links">
                                                <a href="{{route('posts-by-category', $category->key)}}" rel="category tag">{{$category->categories}}</a>
                                            </div>
                                        @endforeach
                                        <span class="posted-on">
                                 <a href="blog-single.html" rel="bookmark">
                                     <div class="label">Создан:</div>
                                 <time class="entry-date published" datetime="{{$post->created_at}}">{{$post->created_at}}</time>
                                 </a>
                                 </span>
                                        <div class="author">
                                            <div class="label">Автор:</div>
                                            <a href="blog-single.html" title="Posts by {{$post->user->name}}" rel="author">{{$post->user->name}}</a>
                                        </div>
                                    </div>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p>{{$post->short_body}} ...</p>
                                    <div class="post-readmore">
                                        <a href="blog-single.html" class="read-more-text">Читать далее ...</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>deleted_at
                </main>
            </div>
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