<div id="secondary" class="widget-area" role="complementary">
    <div id="pizzaro_about_widget-2" class="widget pizzaro_about_widget">
        <div class="about-image">
            <img alt="" class="featured-image" src="https://palyanizza.if.ua/wp-content/uploads/2018/11/welcom.jpg">
            <img alt="" class="logo" src="http://pizzaro/assets/images/sidebar-about-2.png">
        </div>
        <div class="about-info">
            <h2>Добро пожаловать</h2>
            <p>Чтобы хорошо готовить, недостаточно любить покушать. Надо полюбить сам процесс, вкладывать в каждую его
                минуту любовь.</p>
            <ul class="social-icons list-inline">
                @inject ('networks', '\App\Services\GetSocialNetworks' )

                @foreach($networks->getSocialNetworks() as $network)
                    <li><a class="fa {{$network->icon}}" href="{{$network->key}}"></a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="search-2" class="widget widget_search">
        <hr>
        <form role="search" method="get" class="search-form" action="blog-single.html">
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" class="search-field" placeholder="Найти..." value="" name="s"/>
            </label>
            <input type="submit" class="search-submit" value="Search"/>
        </form>
        <hr>
    </div>
    <div id="tag_cloud-2" class="widget widget_tag_cloud">
        <hr>
        <span class="gamma widget-title">Категории:</span>
        <div class="tagcloud">
            @inject('categories', '\App\Services\CategoriesForSidebar')

            {{ $categories->show_categories() }}

            <hr>
        </div>
    </div>


    {{--Sinoptik informer--}}
    {{--<div id="SinoptikInformer" style="width:311px;"--}}
         {{--class="SinoptikInformer type5c1">--}}
        {{--<div class="siHeader">--}}
            {{--<div class="siLh">--}}
                {{--<div class="siMh">--}}
                    {{--<a onmousedown="siClickCount();" class="siLogo" href="https://sinoptik.ua/" target="_blank"--}}
                       {{--rel="nofollow" title="Погода"> </a>Погода <span id="siHeader"></span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="siBody">--}}
            {{--<a onmousedown="siClickCount();" href="https://sinoptik.ua/погода-одесса" title="Погода в Одессе"--}}
               {{--target="_blank">--}}
                {{--<div class="siCity">--}}
                    {{--<div class="siCityName">--}}
                        {{--<span>Одесса (Одеса)</span>--}}
                    {{--</div>--}}
                    {{--<div id="siCont0" class="siBodyContent">--}}
                        {{--<div class="siLeft">--}}
                            {{--<div class="siTerm"></div>--}}
                            {{--<div class="siT" id="siT0"></div>--}}
                            {{--<div id="weatherIco0"></div>--}}
                        {{--</div>--}}
                        {{--<div class="siInf"><p>влажность: <span id="vl0"></span></p>--}}
                            {{--<p>давление: <span id="dav0"></span></p>--}}
                            {{--<p>ветер: <span id="wind0"></span></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a onmousedown="siClickCount();" href="https://sinoptik.ua/погода-киев" title="Погода в Киеве"--}}
               {{--target="_blank">--}}
                {{--<div class="siCity">--}}
                    {{--<div class="siCityName"><span>Киев</span>--}}
                    {{--</div>--}}
                    {{--<div id="siCont1" class="siBodyContent">--}}
                        {{--<div class="siLeft">--}}
                            {{--<div class="siTerm"></div>--}}
                            {{--<div class="siT" id="siT1"></div>--}}
                            {{--<div id="weatherIco1"></div>--}}
                        {{--</div>--}}
                        {{--<div class="siInf">--}}
                            {{--<p>влажность: <span id="vl1"></span></p>--}}
                            {{--<p>давление: <span id="dav1"></span></p>--}}
                            {{--<p>ветер: <span id="wind1"></span></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a><a onmousedown="siClickCount();" href="https://sinoptik.ua/погода-львов" title="Погода во Львове"--}}
                   {{--target="_blank">--}}
                {{--<div class="siCity">--}}
                    {{--<div class="siCityName"><span>Львов</span></div>--}}
                    {{--<div id="siCont2" class="siBodyContent">--}}
                        {{--<div class="siLeft">--}}
                            {{--<div class="siTerm"></div>--}}
                            {{--<div class="siT" id="siT2"></div>--}}
                            {{--<div id="weatherIco2"></div>--}}
                        {{--</div>--}}
                        {{--<div class="siInf">--}}
                            {{--<p>влажность: <span id="vl2"></span></p>--}}
                            {{--<p>давление: <span id="dav2"></span></p>--}}
                            {{--<p>ветер: <span id="wind2"></span></p></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<div class="siLinks">Погода на 10 дней от <a href="https://sinoptik.ua/10-дней" title="Погода на 10 дней"--}}
                                                         {{--target="_blank" onmousedown="siClickCount();"> sinoptik.ua</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="siFooter">--}}
            {{--<div class="siLf">--}}
                {{--<div class="siMf"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--Sinoptik informer--end--}}

<!-- weather widget start -->
    <div id="m-booked-bl-simple-week-vertical-29867">
        <div class="booked-wzs-160-275 weather-customize" style="background-color:#0e2629; width:314px;" id="width4 ">
            <a target="_blank" class="booked-wzs-top-160-275" href="https://www.booked.net/"><img
                        src="//s.bookcdn.com/images/letter/s5.gif" alt="booked.net"/></a>
            <div class="booked-wzs-160-275_in">
                <div class="booked-wzs-160-275-data">
                    <div class="booked-wzs-160-275-left-img wrz-01"></div>
                    <div class="booked-wzs-160-275-right">
                        <div class="booked-wzs-day-deck">
                            <div class="booked-wzs-day-val">
                                <div class="booked-wzs-day-number">-2</div>
                                <div class="booked-wzs-day-dergee">
                                    <div class="booked-wzs-day-dergee-val">&deg;</div>
                                    <div class="booked-wzs-day-dergee-name">C</div>
                                </div>
                            </div>
                            <div class="booked-wzs-day">
                                <div class="booked-wzs-day-d">-2&deg;</div>
                                <div class="booked-wzs-day-n">-2&deg;</div>
                            </div>
                        </div>
                        <div class="booked-wzs-160-275-info">
                            <div class="booked-wzs-160-275-city">Одесса</div>
                            <div class="booked-wzs-160-275-date">Пятница, 04</div>
                        </div>
                    </div>
                </div>
                <a target="_blank" href="https://nochi.com.ua/weather/odessa-7764" class="booked-wzs-bottom-160-275">
                    <table cellpadding="0" cellspacing="0" class="booked-wzs-table-160">
                        <tr>
                            <td class="week-day"><span class="week-day-txt">Суббота</span></td>
                            <td class="week-day-ico">
                                <div class="wrz-sml wrzs-22"></div>
                            </td>
                            <td class="week-day-val">-1&deg;</td>
                            <td class="week-day-val">-3&deg;</td>
                        </tr>
                        <tr>
                            <td class="week-day"><span class="week-day-txt">Воскресенье</span></td>
                            <td class="week-day-ico">
                                <div class="wrz-sml wrzs-22"></div>
                            </td>
                            <td class="week-day-val"><span class="plus">+</span>1&deg;</td>
                            <td class="week-day-val">-1&deg;</td>
                        </tr>
                        <tr>
                            <td class="week-day"><span class="week-day-txt">Понедельник</span></td>
                            <td class="week-day-ico">
                                <div class="wrz-sml wrzs-22"></div>
                            </td>
                            <td class="week-day-val">-2&deg;</td>
                            <td class="week-day-val">-4&deg;</td>
                        </tr>
                        <tr>
                            <td class="week-day"><span class="week-day-txt">Вторник</span></td>
                            <td class="week-day-ico">
                                <div class="wrz-sml wrzs-22"></div>
                            </td>
                            <td class="week-day-val">-7&deg;</td>
                            <td class="week-day-val">-9&deg;</td>
                        </tr>
                        <tr>
                            <td class="week-day"><span class="week-day-txt">Среда</span></td>
                            <td class="week-day-ico">
                                <div class="wrz-sml wrzs-01"></div>
                            </td>
                            <td class="week-day-val">-6&deg;</td>
                            <td class="week-day-val">-9&deg;</td>
                        </tr>
                        <tr>
                            <td class="week-day"><span class="week-day-txt">Четверг</span></td>
                            <td class="week-day-ico">
                                <div class="wrz-sml wrzs-22"></div>
                            </td>
                            <td class="week-day-val">-1&deg;</td>
                            <td class="week-day-val">-4&deg;</td>
                        </tr>
                    </table>
                    <div class="booked-wzs-center"><span class="booked-wzs-bottom-l">Прогноз на неделю</span></div>
                </a></div>
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
        <script type="text/javascript" charset="UTF-8"
                src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=7764&type=4&scode=124&ltid=3540&domid=604&anc_id=4847&cmetric=1&wlangID=20&color=0e2629&wwidth=314&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script>
        <!-- weather widget end -->
    </div>
    <script type="text/javascript" charset="UTF-8"
            src="//sinoptik.ua/informers_js.php?title=4&amp;wind=2&amp;cities=303018950,303010783,303014487&amp;lang=ru"></script>
    {{--<script type="text/javascript"--}}
            {{--src="//ra.revolvermaps.com/0/0/8.js?i=0xwy2m6nuym&amp;m=0&amp;c=ff0000&amp;cr1=ffffff&amp;f=arial&amp;l=33"--}}
            {{--async="async"></script>--}}
</div>