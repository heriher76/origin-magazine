<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Shareable -->
		<title>@yield('title')</title>
		<link rel="icon" href="{{ url('front/images/logo_origin.png') }}" type="image/png">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{ url('front/scripts/bootstrap/bootstrap.min.css') }}">
		<!-- IonIcons -->
		<link rel="stylesheet" href="{{ url('front/scripts/ionicons/css/ionicons.min.css') }}">
		<!-- Toast -->
		<link rel="stylesheet" href="{{ url('front/scripts/toast/jquery.toast.min.css') }}">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="{{ url('front/scripts/owlcarousel/dist/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ url('front/scripts/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{ url('front/scripts/magnific-popup/dist/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ url('front/scripts/sweetalert/dist/sweetalert.css') }}">
		<!-- Custom style -->
		<link rel="stylesheet" href="{{ url('front/css/style.css') }}">
		<link rel="stylesheet" href="{{ url('front/css/skins/all.css') }}">
		<!-- <link rel="stylesheet" href="css/demo.css"> -->
		@yield('styles')
	</head>

	<body class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="index.html">
									<img src="{{ url('front/images/logo.png') }}" alt="Magz Logo">
								</a>
							</div>						
						</div>
						<div class="col-md-9 col-sm-12">
							<form class="search" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Cari Berita...">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
								</div>
								
							</form>								
						</div>
						<!-- <div class="col-md-3 col-sm-12 text-right">
							<ul class="nav-icons">
								<li><a href="register.html"><i class="ion-person-add"></i><div>Register</div></a></li>
								<li><a href="login.html"><i class="ion-person"></i><div>Login</div></a></li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>

			<!-- Start nav -->
			@include('partials._nav')
			<!-- End nav -->
		</header>

		<section class="home">
			<div class="container">
				<div class="row">

					@yield('contents')
					
				</div>
			</div>
		</section>

		@yield('top-footer')

		<!-- Start footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Hubungi Kami</h1>
							<div class="block-body">
								<figure class="foot-logo">
									<img src="{{ url('front/images/logo-light.png') }}" class="img-responsive" alt="Logo">
								</figure>
								<p class="brand-description">
									<b>Abdul Rokib</b><br>
									WhatsApp : +62 831 4955 2462 <br>
									Email : redaksi.origin@gmail.com
								</p>
								<!-- <a href="" class="btn btn-magz white">Tentang Kami <i class="ion-ios-arrow-thin-right"></i></a> -->
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Menu </h1>
							<div class="block-body">
								<ul>
									<li><a href="{{ url('profile/coffee-shop') }}">Profil Kedai Kopi</a></li>
									<li><a href="{{ url('profile/community') }}">Profil Komunitas</a></li>
									<li><a href="{{ url('profile/figure') }}">Profil Sosok</a></li>
									<li><a href="{{ url('news') }}">Berita Seputar Kopi</a></li>
									<li><a href="{{ url('events') }}">Event</a></li>
									<li><a href="{{ url('promotions') }}">Promosi Produk</a></li>
									<li><a href="{{ url('opinions') }}">Kolom Opini</a></li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Promosi</h1>
							<div class="block-body">
								@foreach($footPromotions as $foot)
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="{{ url('promotions') }}">
												<img src="{{ url('promotion/'.$foot->thumbnail) }}" alt="">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="{{ url('promotions') }}">{{ $foot->title }}</a></h1>
										</div>
									</div>
								</article>
								@endforeach
								<a href="{{ url('promotions') }}" class="btn btn-magz white btn-block">Lihat Semua <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<div class="block">
							<h1 class="block-title">Ikuti Kami</h1>
							<div class="block-body">
								<p>Ikuti kami dan terus update informasi terbaru.</p>
								<ul class="social trp">
									<li>
										<a href="#" class="facebook">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-twitter-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-youtube-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="googleplus">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-googleplus"></i>
										</a>
									</li>
									<li>
										<a href="#" class="instagram">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-instagram-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tumblr">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-tumblr"></i>
										</a>
									</li>
									<li>
										<a href="#" class="dribbble">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-dribbble"></i>
										</a>
									</li>
									<li>
										<a href="#" class="linkedin">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#" class="skype">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-skype"></i>
										</a>
									</li>
									<li>
										<a href="#" class="rss">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-rss"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; ORIGIN MAGAZINE INDONESIA 2019
							<div>
								Made with <i class="ion-heart"></i> by <a href="http://heriher76.github.io">HeriHerPlay</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		<!-- JS -->
		<script src="{{ url('front/js/jquery.js') }}"></script>
		<script src="{{ url('front/js/jquery.migrate.js') }}"></script>
		<script src="{{ url('front/scripts/bootstrap/bootstrap.min.js') }}"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="{{ url('front/scripts/jquery-number/jquery.number.min.js') }}"></script>
		<script src="{{ url('front/scripts/owlcarousel/dist/owl.carousel.min.js') }}"></script>
		<script src="{{ url('front/scripts/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ url('front/scripts/easescroll/jquery.easeScroll.js') }}"></script>
		<script src="{{ url('front/scripts/sweetalert/dist/sweetalert.min.js') }}"></script>
		<script src="{{ url('front/scripts/toast/jquery.toast.min.js') }}"></script>
		<!-- <script src="{{ url('front/js/demo.js') }}"></script> -->
		<script src="{{ url('front/js/e-magz.js') }}"></script>

		@yield('scripts')

	</body>
</html>