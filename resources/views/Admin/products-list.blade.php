
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
<div id="page" class="hfeed site">

    Вы вошли под именем:  <h1 style="color:#0000ff"><strong>{{\Auth::user()->name}}</strong></h1>
    <p><a href="{{route('home')}}"><img src="http://pizzaro/assets/images/sidebar-about-2.png"  alt="На главную"></a></p>
<table>
    @foreach($products as $product)

        <tr>
            <td> {{$product->id}} </td>
            <td> {{$product->name}} </td>
            <td> <form method="POST" action="/admin/products-delete">
                    @csrf
                    @method ('DELETE')
                    <input type="hidden" name="id" value="{{$product->id}}"/>
                    <input type="submit" value="Удалить"/>
                </form></td>
            <td> <form method="GET" action="{{route('form-action-update')}}">
                    @csrf

                    <input type="hidden" name="id" value="{{$product->id}}"/>
                    <input type="submit" value="Изменить"/>
                </form> </td>

        </tr>

    @endforeach
</table>
</div>

</body>
</html>



