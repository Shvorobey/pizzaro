<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizzaro</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/assets/css/font-pizzaro.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/assets/css/colors/red.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.mCustomScrollbar.min.css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/images/fav-icon.png">





</head>
<body id="top" class="@yield ('body-classes')">
<div id="page" class="hfeed site"><form action="" method="post" enctype="multipart/form-data">
    @csrf
        Название продукта: <input type="text" name="name" placeholder="Наименование продукта" /><br><hr>
        Описание продукта:<textarea name="description" placeholder="Описание продукта"></textarea><br><hr>
        Изображение продукта:<input type="file" name="image" /><br><hr>
    <input type="submit" value="Сохранить"/>
</form>
</div>
<script type="text/javascript" src="//ra.revolvermaps.com/0/0/8.js?i=0xwy2m6nuym&amp;m=0&amp;c=ff0000&amp;cr1=ffffff&amp;f=arial&amp;l=33" async="async"></script>

</body>
</html>


                    {{--<article id="post-359" class="post-359 post type-post status-publish format-image has-post-thumbnail sticky hentry category-technology tag-event tag-festival tag-music tag-woocommerce post_format-post-format-image">--}}
                        {{--<header class="entry-header">--}}
                            {{--<div class="media-attachment">--}}
                                {{--<div class="post-thumbnail">--}}
                                    {{--<img width="1619" height="827" src="{{$posts->cover}}" class="attachment-full size-full wp-post-image" alt="" />--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<h1 class="entry-title">{{$posts->title}}</h1>--}}
                            {{--<div class="entry-meta">--}}
                                {{--<div class="label">Категории:</div>--}}
                                {{--@foreach($posts->categories as $category)--}}
                                    {{--<div class="cat-links">--}}
                                        {{--<a href="{{route('posts-by-category', $category->key)}}" rel="category tag">{{$category->categories}}</a>--}}
                                    {{--</div>--}}
                                {{--@endforeach--}}

                                {{--<span class="posted-on">--}}
                                    {{--<div class="label">Создан:</div>--}}
                                    {{--<time class="entry-date published" datetime="{{$posts->created_at}}">{{$posts->created_at->format('d.m.Y г. в H:i')}}</time>--}}
                                    {{--<div class="label">Обновлен:</div>--}}
                                    {{--<time class="updated" datetime="{{$posts->updated_at}}">{{$posts->updated_at}}</time>--}}

                                {{--</span>--}}
                                {{--<div class="author">--}}
                                    {{--<div class="label">Автор:</div>--}}
                                    {{--<a href="{{route('posts-by-autor', $posts->user->id )}}" title="Posts by {{$posts->user->name}}" rel="author">{{$posts->user->name}}</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</header>--}}
                        {{--<!-- .entry-header -->--}}
                        {{--<div class="entry-content">--}}
                            {{--<p class="highlight">{{$posts->body}} </p>--}}
                            {{--<div class="row">--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<blockquote>--}}
                                        {{--<p>Pellentesque sodales augue eget ultricies ultricies. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur sagittis ultrices condimentum.</p>--}}
                                    {{--</blockquote>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}


                        {{--<section id="comments" class="comments-area" aria-label="Post Comments">--}}
                            {{--<div id="respond" class="comment-respond">--}}
                              {{--<span id="reply-title" class="gamma comment-reply-title">Оставить комментарий--}}
                              {{--<small>--}}
                              {{--<a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>--}}
                              {{--</small>--}}
                              {{--</span>--}}
                                {{--<form  id="commentform" class="comment-form" novalidate>--}}
                                    {{--<p class="comment-notes">--}}
                                        {{--<span id="email-notes">Ваш email не будет опубликован.</span> <span class="required"></span>--}}
                                    {{--</p>--}}
                                    {{--<p class="comment-form-comment">--}}
                                        {{--<label for="comment">Комментарий</label>--}}
                                        {{--<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525"></textarea>--}}
                                    {{--</p>--}}
                                    {{--<p class="comment-form-author">--}}
                                        {{--<label for="author">Имя <span class="required"></span></label>--}}
                                        {{--<input id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required='true' required='required' />--}}
                                    {{--</p>--}}
                                    {{--<p class="comment-form-email">--}}
                                        {{--<label for="email">Email <span class="required"></span></label>--}}
                                        {{--<input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required='true' required='required' />--}}
                                    {{--</p>--}}
                                    {{--<p class="form-submit">--}}
                                        {{--<input name="submit" type="submit" id="submit" class="submit" value="Сохранить комментарий" />--}}
                                        {{--<input type='hidden' name='comment_post_ID' value='359' id='comment_post_ID' />--}}
                                        {{--<input type='hidden' name='comment_parent' id='comment_parent' value='0' />--}}
                                    {{--</p>--}}
                                {{--</form>--}}
                            {{--</div>--}}

                        {{--</section>--}}

                    {{--</article>--}}
                    {{--<!-- #post-## -->--}}
                {{--</main>--}}
                {{--<!-- #main -->--}}
            {{--</div>--}}
            {{--<!-- #primary -->--}}
            {{--@include ('site-bar')--}}

        {{--</div>--}}
        {{--@include('subscribed')--}}

    {{--</div>--}}
    {{--</div>--}}

{{--@endsection--}}
