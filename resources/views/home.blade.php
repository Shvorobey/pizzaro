@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{\Auth::user()->name}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Вход выполнен успешно!
                    </div>
                </div>
                <script type="text/javascript"> var css_file = document.createElement("link");
                    css_file.setAttribute("rel", "stylesheet");
                    css_file.setAttribute("type", "text/css");
                    css_file.setAttribute("href", 'https://s.bookcdn.com/css/w/booked-wzs-widget-160x275.css?v=0.0.1');
                    document.getElementsByTagName("head")[0].appendChild(css_file);

                    function setWidgetData(data) {
                        if (typeof (data) != 'undefined' && data.results.length > 0) {
                            for (var i = 0; i < data.results.length; ++i) {
                                var objMainBlock = document.getElementById('m-booked-bl-simple-week-vertical-29867');
                                if (objMainBlock !== null) {
                                    var copyBlock = document.getElementById('m-bookew-weather-copy-' + data.results[i].widget_type);
                                    objMainBlock.innerHTML = data.results[i].html_code;
                                    if (copyBlock !== null) objMainBlock.appendChild(copyBlock);
                                }
                            }
                        } else {
                            alert('data=undefined||data.results is empty');
                        }
                    } </script>

            </div>

        </div>
    </div>
@endsection
