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
                                            <a href="{{route('single-post', $post->id)}}">
                                                <img width="1619" height="827" src="{{$post->cover}}" class="attachment-full size-full wp-post-image" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <h1 class="alpha entry-title">
                                        <a href="{{route('single-post', $post->id)}}" rel="bookmark">{{$post->title}}</a>
                                    </h1>
                                    <div class="entry-meta">
                                        <div class="label">Категории:</div>
                                        @foreach($post->categories as $category)
                                            <div class="cat-links">
                                                <a href="{{route('posts-by-category', $category->key)}}" rel="category tag">{{$category->categories}}</a>
                                            </div>
                                        @endforeach
                                        <span class="posted-on">
                                            <div class="label">Создан:</div>
                                 <time class="entry-date published" datetime="{{$post->created_at}}">{{$post->created_at->format('d.m.Y г. в H:i')}}</time>
                                        </span>
                                        <div class="author">
                                            <div class="label">Автор:</div>
                                            {{$post->user->name}}
                                        </div>
                                    </div>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p>{{$post->short_body}} ...</p>
                                    <div class="post-readmore">
                                        <a href="{{route('single-post', $post->id)}}" class="read-more-text">Читать далее ...</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </main>
                @include('subscribed')
            </div>
            @include ('site-bar')

        </div>
    </div>

@endsection


