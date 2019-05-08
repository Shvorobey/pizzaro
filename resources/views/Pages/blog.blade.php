@extends ('layout')

@section ('body-classes','blog right-sidebar')

@section('content')

        <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('home')}}">Главная</a><span class="delimiter"><i
                                class="po po-arrow-right-slider"></i></span>Блог
                </nav>
            </div>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="posts">
                        @foreach($posts as $post)
                            <article id="post-359"
                                     class="post-359 post type-post status-publish format-image has-post-thumbnail sticky hentry category-technology tag-event tag-festival tag-music tag-woocommerce post_format-post-format-image">
                                <header class="entry-header">
                                    <div class="media-attachment">
                                        <div class="post-thumbnail">
                                            <a href="{{route('single-post', $post->id)}}">
                                                <img width="1619" height="827" src="{{$post->cover}}"
                                                     class="attachment-full size-full wp-post-image" alt=""/>
                                            </a>
                                        </div>
                                    </div>
                                    <h1 class="alpha entry-title">
                                        <a href="{{route('single-post', $post->id)}}" rel="bookmark"><p
                                                    class="fun-hover">{{$post->title}} </p></a>
                                    </h1>
                                    <div class="entry-meta">
                                        <div class="label">Категории:</div>
                                        @foreach($post->categories as $category)
                                            <div class="cat-links">
                                                <a href="{{route('posts-by-category', $category->key)}}"
                                                   class="fun-hover" rel="category tag">{{$category->categories}}</a>
                                            </div>
                                        @endforeach
                                        <span class="posted-on">
                                 <a href="{{route('single-post', $post->id)}}" rel="bookmark">
                                     </a>
                                   <div class="label">Создан:</div>
                                 <time class="entry-date published"
                                       datetime="{{$post->created_at}}">{{$post->created_at->format('d.m.Y г. в H:i')}}</time>

                                 </span>
                                        <div class="author">
                                            <div class="label">Автор:</div>
                                            <a href="{{route('posts-by-autor', $post->user->id )}}"
                                               title="Posts by {{$post->user->name}}"
                                               rel="author">{{$post->user->name}}</a>
                                        </div>
                                    </div>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p>{{$post->short_body}}...</p>
                                    <div class="post-readmore">
                                        <a href="{{route('single-post', $post->id)}}" class="read-more-text">Читать
                                            далее ...</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                        <article id="post-343"
                                 class="post-343 post type-post status-publish format-quote hentry category-links-quotes category-uncategorized tag-awsome tag-bootstrap tag-clean-design tag-woocommerce tag-wordpress post_format-post-format-quote">
                            <h1 style="display:none;">test</h1>
                            <div class="entry-content">
                                <blockquote>
                                    @inject ('quote', 'App\Services\GetRandomQuoteService' )

                                    @foreach($quote->getRandomQuote() as $quotes)

                                        <p> {{$quotes->quote}} </p>
                                        <cite> {{$quotes->autor_name}}</cite>
                                    @endforeach
                                </blockquote>
                            </div>
                            <!-- .entry-content -->
                        </article>

                    </div>

                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
            @include ('site-bar')

        </div>

        <nav class="woocommerce-pagination">
            <ul class="page-numbers">
                @if ($posts->currentPage()!=1)
                    <li><a class="next page-numbers" href="?page=1">Первая страница</a></li>
                    <li><a class="next page-numbers" href="{{$posts->previousPageUrl()}}"> < </a></li>
                @endif

                @if ($posts->count ()>0)
                    @for ($count=1; $count<=$posts->lastPage(); $count++)
                        <li><a class="page-numbers @if ($count==$posts->currentPage()) current @endif"
                               href="?page={{$count}}">{{$count}}</a></li>

                    @endfor

                @else
                    <h1><font size="15" color="aqua" face="Arial"> Мы работаем над тем, чтобы здесь что-то появилось
                            ;) </font></h1>
                @endif
                @if ($posts->currentPage() != $posts->lastPage())
                    <li><a class="next page-numbers" href="{{$posts->nextPageUrl()}}"> > </a></li>
                    <li><a class="next page-numbers" href="?page={{$posts->lastPage()}}">Последняя страница</a></li>
                @endif
            </ul>
        </nav>


        <!-- #secondary -->
    </div>
    @include('subscribed')
        <br>

        <script src = "/js/hello.js"> </script>
@endsection


