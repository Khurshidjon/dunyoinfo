<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!--title-->
    <title>DUNYO.INFO</title>

	<!--CSS-->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/subscribe-better.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
	<link id="preset" rel="stylesheet" type="text/css" href="{{ asset('frontend/css/presets/preset1.css') }}">
	<link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">

	<!--Google Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
	    <script src="{{ asset('frontend/js/html5shiv.js') }}"></script>
	    <script src="{{ asset('frontend/js/respond.min.js') }}"></script>
	<![endif]-->

    <link rel="shortcut icon" href="{{ asset('frontend/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <link href="{{ asset('frontend/css/resp.css') }}" rel="stylesheet">
    <style>
        @media (max-width: 767px){
            .homepage-five #weather, .homepage-two #weather {
                display: block;
                font-size: 10px;
            }
            .valyuta-container{
                font-size: 10px;
            }
            .navbar-right {
                margin-bottom: 10px;
            }
        }
        @media (min-width: 768px){
            .navbar-right {
                margin-right: unset;
                /*float: unset !important;*/
            }
            .valyuta-container .list-inline{
                margin-top: 15px;
                /*margin-right: 12pc;*/
            }
        }
        .valyuta-container{
            text-align: center;
        }
        .valyuta-container #euro_diff_up, #usd_diff_up, #ruble_diff_up{
            color: green;
            font-weight: bold;
        }
        .valyuta-container #euro_diff_down, #usd_diff_down, #ruble_diff_down{
            color: red;
            font-weight: bold;
        }
    </style>
    @php
	$lang = App::getLocale();
@endphp
</head>
<!--/head-->
<body class="box-width">
	<div id="main-wrapper" class="homepage-two">
		<div class="topbar">
			<div class="container">
				<div id="date-time"></div>
				<div id="topbar-right">
					<div id="weather">
						<ul class="list-inline">
                            <li class="list-inline-item">
                                <button class="btn" id="getText"><i class="fa fa-volume-up"></i></button>
                            </li>
                            <li class="list-inline-item">
                                <div class="dropdown">
                                    <div class="icon_accessibility dataTooltip" data-toggle="dropdown" data-placement="bottom" title="" data-original-title="Mahsus imkoniyatlar" aria-expanded="true">
                                        <a href="#" style="font-size: 15px">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right specialViewArea no-propagation">
                                        <div class="triangle"></div>
                                        <div class="appearance">
                                            <p class="specialTitle">Кўриниш</p>
                                            <div class="squareAppearances">
                                                <div class="squareBox spcNormal" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Oddiy ko`rinish">A</div>
                                            </div>
                                            <div class="squareAppearances">
                                                <div class="squareBox spcWhiteAndBlack" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Oq-qora ko`rinish">A</div>
                                            </div>
                                            <div class="squareAppearances">
                                                <div class="squareBox spcDark" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Qorong`ilashgan ko`rinish">A</div>
                                            </div>
                                            <div class="squareAppearances">
                                                <div class="squareBox spcNoImage" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Расмли"></div>
                                            </div>
                                        </div>
                                        <div class="appearance">
                                            <p class="specialTitle">Шрифт ўлчами</p>
                                            <div class="block">
                                                <div class="sliderText"><span class="range">0</span>% га катталаштириш</div>
                                                <div id="fontSizer" class="defaultSlider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                    <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="more_margin"></div>
                                        <div class="appearance">
                                            <div class="pull-right">

                                            </div>
                                        </div>
                                        <div class="more_margin"></div>
                                        <div class="appearance">
                                            <div class="specialViewCopyrightText"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
							@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
								<li class="list-inline-item">
									<a rel="alternate" hreflang="{{ $localeCode }}" class="text-uppercase {{ $lang==$localeCode?'text-info':'' }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
										{{ $properties['native'] }}
									</a>
								</li>
							@endforeach
						</ul>
					</div>
					<div class="searchNlogin">
						<ul>
							<li class="search-icon"><i class="fa fa-search"></i></li>
							<li class="dropdown user-panel"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
								<div class="dropdown-menu top-user-section">
									<div class="top-user-form">
										<form id="top-login" role="form">
											<div class="input-group" id="top-login-username">
												<span class="input-group-addon"><img src="{{ asset('frontend/images/others/user-icon.png') }}" alt="" /></span>
												<input type="text" class="form-control" placeholder="Username" required="">
											</div>
											<div class="input-group" id="top-login-password">
												<span class="input-group-addon"><img src="{{ asset('frontend/images/others/password-icon.png') }}" alt="" /></span>
												<input type="password" class="form-control" placeholder="Password" required="">
											</div>
											<div>
												<p class="reset-user">Forgot <a href="#">Password/Username?</a></p>
												<button class="btn btn-danger" type="submit">Login</button>
											</div>
										</form>
									</div>
									<div class="create-account">
										<a href="#">Create a New Account</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="search">
							<form role="form">
								<input type="text" class="search-form" autocomplete="off" placeholder="Type & Press Enter">
							</form>
						</div>
                        <!--/.search-->
					</div>
                    <!-- searchNlogin -->
				</div>
			</div>
		</div>
		<div id="navigation">
			<div class="navbar" role="banner">
				<div class="container">
					<div class="top-add">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only"> Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

                            <a style="margin-left: -32px" class="navbar-brand" href="{{ route('frontend.index') }}">
                                <img class="main-logo img-responsive" style="width: 12.4em; margin-top: -10px" src="{{ asset('frontend/images/presets/preset1/logo_'. $lang .'.png') }}" alt="logo">
                            </a>
						</div>
						<div class="navbar-right">
                            <div class="text-center">
                                <div class="valyuta-container">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span><b id="usd_code"></b></span>
                                            <span id="usd_price"></span>
                                            <span id="usd_diff"></span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span><b id="ruble_code"></b></span>
                                            <span id="ruble_price"></span>
                                            <span id="ruble_diff"></span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span><b id="euro_code"></b></span>
                                            <span id="euro_price"></span>
                                            <span id="euro_diff"></span>
                                        </li>
                                        <li class="list-inline-item" style="margin-left: 150px; font-size: 27px">
                                            <span id="city"></span>
                                            <span id="icon"></span>
                                            <span id="now_weather"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div id="app">
                            </div>
                        </div>
					</div>
				</div>
				<div id="menubar">
					<div class="container">
						<nav id="mainmenu" class="navbar-left collapse navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="home"><a href="{{ route('frontend.index') }}" class="">@lang('pages.home_menu')</a></li>
								@foreach ($menus as $menu)
								@php
									//dd($menu->hasParent())
								@endphp
									<li class="business dropdown">
										<a href="javascript:void(0);" class="{{ $menu->hasParent!=null?'dropdown-toggle':'' }}" data-toggle="dropdown">{{ $menu->{'name_'.$lang} }}</a>
										@if ($menu->hasParent)
											<ul class="dropdown-menu">
												@foreach ($menu->submenu as $submenu)
													<li><a href="#">{{ $submenu->{'name_'.$lang} }}</a></li>
												@endforeach
											</ul>
										@endif
									</li>
								@endforeach
							</ul>
						</nav>
					</div>
				</div><!--/#navigation-->
			</div><!--/#navigation-->
		</div><!--/#navigation-->

        @yield('content')

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="widget">
							<h1 class="section-title title">About Us</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<address>
								<p>Address : 123 Gegrit, London, England</p>
								<p>Call : +1234-222-3333</p>
								<p>Email: <a href="#">info@newspress.com</a></p>
							</address>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget">
							<h1 class="section-title title">Flickr Gallery</h1>
							<ul>
								<li><a href="{{ asset('frontend/images/post/flicker/1.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/1.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/2.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/2.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/3.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/3.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/4.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/4.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/5.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/5.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/6.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/6.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/7.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/7.jpg') }}" alt="" /></a></li>
								<li><a href="{{ asset('frontend/images/post/flicker/8.jpg') }}" class="image-link"><img class="img-responsive" src="{{ asset('frontend/images/post/flicker/8.jpg') }}" alt="" /></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget news-letter">
							<h1 class="section-title title">Weekly NewsLetter</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

							<form action="#" method="post" id="subscribe-form" name="subscribe-form">
								<input type="text" placeholder="Your E-mail" name="email">
								<button type="submit" name="subscribe" id="subscribe" >Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.footer-widget-->

		<footer id="footer">
			<div class="footer-top">
				<div class="container text-center">
					<div class="logo-icon"><img class="img-responsive" src="{{ asset('frontend/images/presets/preset1/logo_en.png') }}" style="width: 18em" alt="" /></div>
				</div>
			</div>
			<div class="footer-menu">
				<div class="container">
					<ul class="nav navbar-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Advertisement</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="bottom-widgets">
				<div class="container">
					<div class="col-sm-4">
						<div class="widget">
							<h2>Category</h2>
							<ul>
								<li><a href="#">Business</a></li>
								<li><a href="#">Politics</a></li>
								<li><a href="#">Sports</a></li>
								<li><a href="#">World</a></li>
								<li><a href="#">Technology</a></li>
							</ul>
							<ul>
								<li><a href="#">Environment</a></li>
								<li><a href="#">Health</a></li>
								<li><a href="#">Entertainment</a></li>
								<li><a href="#">Lifestyle</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="widget">
							<h2>Editions</h2>
							<ul>
								<li><a href="#">United States</a></li>
								<li><a href="#">China</a></li>
								<li><a href="#">India</a></li>
								<li><a href="#">Maxico</a></li>
								<li><a href="#">Middle East</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget">
							<h2>Tag</h2>
							<ul>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Sports</a></li>
								<li><a href="#">Featured</a></li>
								<li><a href="#">World</a></li>
								<li><a href="#">Fashion</a></li>
							</ul>
							<ul>
								<li><a href="#">Environment</a></li>
								<li><a href="#">Health</a></li>
								<li><a href="#">Entertainment</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Business</a></li>
							</ul>
							<ul>
								<li><a href="#">Tech</a></li>
								<li><a href="#">Movie</a></li>
								<li><a href="#">Music</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="widget">
							<h2>Products</h2>
							<ul>
								<li><a href="#">Ebook</a></li>
								<li><a href="#">Baby Product</a></li>
								<li><a href="#">Magazine</a></li>
								<li><a href="#">Sports Elements</a></li>
								<li><a href="#">Technology</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container text-center">
					<p><a href="#">DUNYO.INFO </a>&copy; {{ date('Y') }} </p>
				</div>
			</div>
		</footer>
	</div><!--/#main-wrapper-->


	<div class="subscribe-me text-center">
		<h1>Don’t Miss The Hottest News</h1>
		<h2>Subscribe our Newsletter</h2>
		<a href="#close" class="sb-close-btn"><img class="<img-responsive></img-responsive>" src="{{ asset('frontend/images/others/close-button.png') }}" alt="" /></a>
		<form action="#" method="post" id="popup-subscribe-form" name="subscribe-form">
			<div class="input-group">
				<span class="input-group-addon"><img src="{{ asset('frontend/images/others/icon-message.png') }}" alt="" /></span>
				<input type="text" placeholder="Enter your email" name="email">
				<button type="submit" name="subscribe">Go</button>
			</div>
		</form>
	</div><!--/.subscribe-me-->



		<!--/Preset Style Chooser-->
{{--	<div class="style-chooser">--}}
{{--		<div class="style-chooser-inner">--}}
{{--			<a href="#" class="toggler"><i class="fa fa-life-ring fa-spin"></i></a>--}}
{{--			<h4>Presets Color</h4>--}}
{{--			<ul class="preset-list clearfix">--}}
{{--				<li class="preset1 active" data-preset="1"><a href="#" data-color="preset1"></a></li>--}}
{{--				<li class="preset2" data-preset="2"><a href="#" data-color="preset2"></a></li>--}}
{{--				<li class="preset3" data-preset="3"><a href="#" data-color="preset3"></a></li>--}}
{{--				<li class="preset4" data-preset="4"><a href="#" data-color="preset4"></a></li>--}}
{{--				<li class="preset5" data-preset="5"><a href="#" data-color="preset5"></a></li>--}}
{{--				<li class="preset6" data-preset="6"><a href="#" data-color="preset6"></a></li>--}}
{{--			</ul>--}}
{{--		</div>--}}
{{--    </div>--}}
	<!--/End:Preset Style Chooser-->

	<!--/#scripts-->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.simpleWeather.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.sticky-kit.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.easy-ticker.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.subscribe-better.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/switcher.js') }}"></script>
    <script>
        const proxyurl = "https://cors-anywhere.herokuapp.com/";
        const url = 'http://cbu.uz/ru/arkhiv-kursov-valyut/json/';
        // const url = 'https://nbu.uz/exchange-rates/json/';

        fetch(proxyurl + url)
            .then(response => response.text())
            .then(contents => {
                var data = JSON.parse(contents);
                document.getElementById('usd_code').innerText = data[0].Ccy;
                document.getElementById('usd_price').innerText = data[0].Rate;


                document.getElementById('ruble_code').innerText = data[2].Ccy;
                document.getElementById('ruble_price').innerText = data[2].Rate;


                document.getElementById('euro_code').innerText = data[1].Ccy;
                document.getElementById('euro_price').innerText = data[1].Rate;
                var usd_diff = data[0].Diff;
                var euro_diff = data[1].Diff;
                var ruble_diff = data[2].Diff;

                if(usd_diff >= 0){
                    document.getElementById('usd_diff').innerHTML = '<sup id="usd_diff_up">' + usd_diff + ' <i class="fa fa-long-arrow-up"></i> </sup>';
                }else if(usd_diff < 0){
                    document.getElementById('usd_diff').innerHTML = '<sup id="usd_diff_down">' + usd_diff + ' <i class="fa fa-long-arrow-down"></i> </sup>';
                }

                if(euro_diff >= 0){
                    document.getElementById('euro_diff').innerHTML = '<sup id="euro_diff_up">' + euro_diff + ' <i class="fa fa-long-arrow-up"></i> </sup>';
                }else if(euro_diff < 0){
                    document.getElementById('euro_diff').innerHTML = '<sup id="euro_diff_down">' + euro_diff + ' <i class="fa fa-long-arrow-down"></i> </sup>';
                }


                if(ruble_diff >= 0){
                    document.getElementById('ruble_diff').innerHTML = '<sup id="ruble_diff_up">' + ruble_diff + ' <i class="fa fa-long-arrow-up"></i> </sup>';
                }else if(ruble_diff < 0){
                    document.getElementById('ruble_diff').innerHTML = '<sup id="ruble_diff_down">' + ruble_diff + ' <i class="fa fa-long-arrow-down"></i> </sup>';
                }
                // console.log(data);
            })
            .catch(() => console.log("Can’t access " + url + " response. Blocked by browser?"))

        $.ajax({
            url: 'https://api.openweathermap.org/data/2.5/weather?id=1512569&appid=c354362d45fd0ee15f9c2ee19b24d6ae',
            type: 'GET',
            success: function (data) {
                var now_weather = data.main.temp - 273.15;
                var day_weather = data.main.temp_max - 273.15;
                var afternoon_weather = data.main.temp_min - 273.15;
                // console.log(data);
                $('#now_weather').html(now_weather + '<sup>°C</sup>');

                $('#city').text(data.name);
                $('#icon').html("<img src='https://openweathermap.org/img/w/" + data.weather[0].icon + ".png' id='pogoda' style='width:55px; height: 55px;'>");
            },
            error: function(response) {
                console.log(JSON.stringify(response));
            }
        });
        $(function () {
            $('#getText').on('click', function () {
                responsiveVoice.speak(window.getSelection().toString(), 'Russian Male');
            });
        })
    </script>
    <script src="{{ asset('frontend/js/responsivevoice.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.coockie.js') }}"></script>
    <script src="{{ asset('frontend/js/sw.js') }}"></script>
</body>
</html>
