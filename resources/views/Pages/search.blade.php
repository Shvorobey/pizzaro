@extends ('layout')

@section ('body-classes','blog right-sidebar')

@section('content')
{{--{{dd ($posts)}}--}}
<h1> <font size="15" color="aqua" face="Arial"> Форма для отображения результатов поиска все еще в разработке. Совсем скоро она будет готова.</font> </h1>

    @foreach($posts as $post)
        <tr>{{$post->appends(['q' => \Illuminate\Support\Facades\Input::get('q')])->links()}}
            <td class="align-left">{{$post->id}}</td>
            <td class="align-left">{{$post->title }}</td>
            <td class="align-left">{{$post->body }}</td>
        </tr>
    @endforeach
@endsection