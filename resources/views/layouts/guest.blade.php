<!DOCTYPE html>
<html lang="en">
<head>
    {{-- googlrMap_API_key = AIzaSyD2rZ3VJs5GIxlHKZxbx8P28oGNSldlINI --}}
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> 6kfurniture </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/LOGvery-small-than-6kf.png') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-03.css') }}">
    @livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>


	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a href="#" style="font-size:18px;font-weight:bolder"><span class="icon label-before fa fa-mobile"></span>contact: (+250) 785307126</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-en.png') }}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-fra.png') }}" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="kinyarwanda" href="#"><span class="img label-before"><img width="20" height="20" src="{{ asset('assets/images/lang-rw.png') }}" alt="lang-ger" ></span>Kinyarwanda</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >

										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"  style="max-width: 60px" ><img width="60"  height="60"  style="max-width: 50px" src="{{ asset('assets/images/logo.png') }}" alt="6K"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">Wishlist</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="#" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										@if(Cart::count() > 0)
										<span class="index">{{ Cart::count() }} items</span>
										@endif
										<span class="title">CART</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky" style="position:sticky">
					<div class="primary-nav-section d-flex justify-content-between">

					@livewire('category-navigation-component')


						<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">

							<li class="menu-item">
								<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
							</li>
							{{-- <li class="menu-item">
								<a href="/shop" class="link-term mercado-item-title">Shop</a>
							</li> --}}
							<li class="menu-item">
								<a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
							</li>
							@if(Route::has('login'))
							  @auth
								@if(Auth::user()->utype === 'ADM')
								<li style="z-index: 99999" class="menu-item home-icon ">
									 <div class="dropdown" style="float-left">
										<a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
										  My Account ({{Auth::user()->name}})
										</a>

										<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<li><a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
											<li><a title="Logout" href="{{ route('admin.categories') }}"  >Categories</a></li>
											<li><a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a></li>
											<form id="logout-form" method="POST" action="{{ route('logout') }}" >
												@csrf
												</form>
											</ul>
									 </div>
								 </li>

								@else
							<li style="z-index: 99999" class="menu-item home-icon ">
									 <div class="dropdown" style="float-left">
										<a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
										  My Account ({{Auth::user()->name}})
										</a>

										<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<li><a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
											<li><a title="Logout" href="{{ route('admin.categories') }}"  >Categories</a></li>
											<li><a title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a></li>
											<form id="logout-form" method="POST" action="{{ route('logout') }}" >
												@csrf
												</form>
											</ul>
									 </div>
								 </li>
								@endif


							  @else
								<li class="menu-item"><a title="Login or Register" href="{{ route('login') }}">Login</a></li>
								<li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">Register</a></li>
							  @endif
							@endif
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>

        {{$slot}}

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Kigali, Kicukiro</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+250) 785307126</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">6kfurniture22@gmail.com</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">My Account</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">My Account</a></li>
												<li class="menu-item"><a href="#" class="link-term">Brands</a></li>
												<li class="menu-item"><a href="#" class="link-term">Gift Certificates</a></li>
												<li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
								   <h3 class="item-header">Social network</h3>
									<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="https://twitter.com/Furniture6k" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="https://web.facebook.com/kfurniture.furniturer.9" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										</ul>
									</div>
										<div class="wrap-footer-item footer-item-second">
											<h3 class="item-header">Sign up for newsletter</h3>
											<div class="item-content">
												<div>
													<form action="#" id="frm-newletter">
														<input type="email" class="input-email form-control" name="email" value="" placeholder="Enter your email address"><br>
														<button class="btn btn-submitx">Subscribe</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
						   <div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Map</h3>
                                  <div class="item-content">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.46328416765!2d30.100115015413614!3d-1.968707637308129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac5a13c74d16a75c!2sSonatubes!5e0!3m2!1sen!2srw!4v1614692765129!5m2!1sen!2srw" width="350" height="400" style="border:1;" allowfullscreen="" loading="lazy"></iframe>
                                  </div>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">We Using Safe Payments:</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="{{ asset('assets/images/payment.png')}}" style="max-width: 260px;font-weight:bolder">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

						</div>



					</div>
				</div>



			</div>
			<br>

			<div class="coppy-right-box my-4">
				<div class="container">
					<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
					<div class="coppy-right-item item-left " style="text-align:center">
						<p class="coppy-right-text">Copyright © 2021 6kfurniture  All rights reserved</p>
					</div>
					</div>
					<div class="col-sm-3"></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/js/functions.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    @livewireScripts
</body>
</html>

