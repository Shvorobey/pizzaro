<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizzaro</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.min.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/font-pizzaro.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/colors/red.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.mCustomScrollbar.min.css" media="all"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700"
          rel="stylesheet">
    <link rel="shortcut icon" href="/assets/images/fav-icon.png">


</head>
<body id="top" class="@yield ('body-classes')">

<div id="page" class="hfeed site">
    Вы вошли под именем: <h1 style="color:#0000ff"><strong>{{\Auth::user()->name}}</strong></h1>
    <p><a href="{{route('home')}}"><img src="http://pizzaro/assets/images/sidebar-about-2.png" alt="На главную"></a></p>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <strong> Катеория продукта: </strong> <br>
        @foreach($menu as $m)
            <input type="radio" name="menu" value="{{$m->id}}"
                   @if ($m->id==old('menu')) checked="checked" @endif> {{$m->name}} <br>
        @endforeach
        <hr>
        <strong>Название продукта:</strong> <br>
        <input type="text" name="name" placeholder="Не более 150 символов" value="{{old ('name')}}"/><br>
        @if ($errors->any('name'))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->get('name') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <hr>
        <strong>Описание продукта:</strong> <textarea name="description"
                                                      placeholder="Не менее 50 символов">{{old('description')}}</textarea><br>
        @if ($errors->any('description'))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->get('description') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <hr>
        <strong>Изображение продукта </strong> <i>370x330</i><strong> :</strong><input type="file" name="image"/><br>
        @if ($errors->any('image'))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->get('image') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <hr>
        <input type="submit" value="Сохранить"/>
    </form>
</div>

</body>
</html>



