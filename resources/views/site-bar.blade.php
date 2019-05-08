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
        </div>
    </div>
    <div id="search-2" class="widget widget_search">
        <hr>
        <form role="search" action="{{route('searchSimple')}}" method="GET" class="search-form">
            <div class="row">
                <div class="col-xs-10">
                    <div class="form-group">
                        <input type="text" class="search-field" name="q" placeholder="Найти в блогах"
                               value="{{ old('q') }}" required>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input class="btn btn-info" type="submit" class="search-submit" value="Искать">
                    </div>
                </div>
            </div>
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
    <div id="tag_cloud-2" class="widget widget_tag_cloud">
        <span class="gamma widget-title">Мы в соц. сетях:</span>
        <ul>
            @inject ('networks', '\App\Services\GetSocialNetworks' )
            @foreach($networks->getSocialNetworks() as $network)
                <Ol><a class="fa {{$network->icon}}" href="{{$network->key}}"> {{$network->name}}</a></Ol>
            @endforeach
        </ul>
    </div>

    <!-- weather widget start -->
    <div id="tag_cloud-2" class="widget widget_tag_cloud">
    <span class="gamma widget-title">Прогноз погоды:</span>
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
    </div>
        <!-- weather widget end -->
    </div>
    <script type="text/javascript" charset="UTF-8"
            src="//sinoptik.ua/informers_js.php?title=4&amp;wind=2&amp;cities=303018950,303010783,303014487&amp;lang=ru"></script>
    <script type="text/javascript"
            src="//ra.revolvermaps.com/0/0/8.js?i=0xwy2m6nuym&amp;m=0&amp;c=ff0000&amp;cr1=ffffff&amp;f=arial&amp;l=33"
            async="async"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        var delay = 600;
        $(document).ready(function() {
            $(".widget_tag_cloud span").bind("click", function(event) {
                var parent = $(event.target).parent();
                var a = parent.find("a");
                if ($(a).is(":visible")) $(a).slideUp(delay);
                else $(a).slideDown(delay);
            });
        });
    </script>
    <script type="text/javascript">
        var delay = 500;
        $(document).ready(function() {
            $(".about-info h2").bind("click", function(event) {
                var parent = $(event.target).parent();
                var p = parent.find("p");
                if ($(p).is(":visible")) $(p).slideUp(delay);
                else $(p).slideDown(delay);
            });
        });
    </script>
</div>