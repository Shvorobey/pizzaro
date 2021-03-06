@extends ('layout')

@section ('body-classes','blog right-sidebar')

@section('content')

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('home')}}">Главная</a><span class="delimiter"><i
                                class="po po-arrow-right-slider"></i></span><a href="{{route('blog')}}">Блог</a>
                </nav>
            </div>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="posts">
                        <h3>Все посты категории </h3>
                        <h1>{{$category->categories}}</h1>
                        @foreach($category->post as $post)
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
                                        <a href="{{route('single-post', $post->id)}}"
                                           rel="bookmark">{{$post->title}}</a>
                                    </h1>
                                    <div class="entry-meta">
                                        <div class="label">Категории:</div>
                                        @foreach($post->categories as $categor)
                                            <div class="cat-links">
                                                <a href="{{route('posts-by-category', $categor->key)}}"
                                                   rel="category tag">{{$categor->categories}}</a>
                                            </div>
                                        @endforeach
                                        <span class="posted-on">
                                 {{--<a href="#" rel="bookmark">--}}
                                     <div class="label">Создан:</div>
                                 <time class="entry-date published"
                                       datetime="2016-10-13T14:53:25+00:00">{{$post->created_at->format('d.m.Y г. в H:i')}}</time>
                                 {{--</a>--}}
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
                                    <p>{{$post->body}}</p>
                                    <div class="post-readmore">
                                        <a href="{{route('single-post', $post->id)}}" class="read-more-text">Читать
                                            далее ...</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </main>
            </div>
            @include ('site-bar')
        </div>
        @include('subscribed')
    </div>


@endsection
