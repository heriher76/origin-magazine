<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Shareable -->
		<title>Origin Magazine Indonesia</title>
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
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img src="{{ url('front/images/logo.png') }}" alt="Magz Logo">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<li><a href="category.html">Home</a></li>
							<li class="dropdown magz-dropdown">
								<a href="category.html">Profil <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="index.html">Kedai Kopi</a></li>
									<li><a href="category.html">Komunitas</a></li>
									<li><a href="category.html">Sosok</a></li>
								</ul>
							</li>
							<li><a href="category.html">Berita</a></li>
							<li><a href="category.html">Event</a></li>
							<li><a href="category.html">Promosi</a></li>
							<li><a href="category.html">Kolom Opini</a></li>
							<!-- <li class="dropdown magz-dropdown"><a href="#">Akun Saya <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="icon ion-person"></i> Dashboard</a></li>
									<li><a href="#"><i class="icon ion-log-out"></i> Logout</a></li>
								</ul>
							</li> -->
						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>

		<section class="home">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						
						<div class="owl-carousel owl-theme slide" id="featured">
							<div class="item active">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ url('front/images/news/img04.jpg') }}" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="category.html">Computer</a></div>
										<h1><a href="single.html">Phasellus iaculis quam sed est elementum vel ornare ligula venenatis</a></h1>
										<div class="time">December 26, 2016</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ url('front/images/news/img14.jpg') }}" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="category.html">Travel</a></div>
										<h1><a href="single.html">Class aptent taciti sociosqu ad litora torquent per conubia nostra</a></h1>
										<div class="time">December 10, 2016</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ url('front/images/news/img13.jpg') }}" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="category.html">International</a></div>
										<h1><a href="single.html">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
										<div class="time">October 12, 2016</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ url('front/images/news/img05.jpg') }}" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="category.html">Lifestyle</a></div>
										<h1><a href="single.html">Mauris elementum libero at pharetra auctor Fusce ullamcorper elit</a></h1>
										<div class="time">November 27, 2016</div>
									</div>
								</article>
							</div>
						</div>

						<div class="line">
							<div>Berita Terbaru</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="row">
									<article class="article col-md-12">
										<div class="inner">
											<figure>
												<a href="single.html">
													<img src="{{ url('front/images/news/img10.jpg') }}" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 10, 2016</div>
													<div class="category"><a href="category.html">Healthy</a></div>
												</div>
												<h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
												<footer>
													<a class="btn btn-primary more" href="single.html">
														<div>More</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
									<article class="article col-md-12">
										<div class="inner">
											<figure>
												<a href="single.html">
													<img src="{{ url('front/images/news/img06.jpg') }}" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 22, 2016</div>
													<div class="category"><a href="category.html">Healthy</a></div>
												</div>
												<h2><a href="single.html">Exercitation ullamco laboris nisi ut aliquip</a></h2>
												<p>Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat sollicitudin ut est. In fringilla dui dui.</p>
												<footer>
													<a class="btn btn-primary more" href="single.html">
														<div>More</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="row">
									<article class="article col-md-12">
										<div class="inner">
											<figure>                                
												<a href="single.html">
													<img src="{{ url('front/images/news/img05.jpg') }}" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 09, 2016</div>
													<div class="category"><a href="category.html">Lifestyle</a></div>
												</div>
												<h2><a href="single.html">Mauris elementum libero at pharetra auctor</a></h2>
												<p>Vivamus in efficitur mi. Nullam semper justo ut elit lacinia lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
												<footer>
													<a class="btn btn-primary more" href="single.html">
														<div>More</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
									<article class="article col-md-12">
										<div class="inner">
											<figure>
												<a href="single.html">
													<img src="{{ url('front/images/news/img07.jpg') }}" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 21, 2016</div>
													<div class="category"><a href="category.html">Sport</a></div>
												</div>
												<h2><a href="single.html">Sed do eiusmod tempor incididunt ut labore</a></h2>
												<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris elementum libero at pharetra auctor.</p>
												<footer>
													<a class="btn btn-primary more" href="single.html">
														<div>More</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
						
						<div class="line">
							<div>Berita Lainnya</div>
						</div>
						<div class="row">
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="single.html">
											<img src="{{ url('front/images/news/img11.jpg') }}" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">Film</a>
											</div>
											<div class="time">December 19, 2016</div>
										</div>
										<h1><a href="single.html">Donec consequat arcu at ultrices sodales quam erat aliquet diam</a></h1>
										<p>
										Donec consequat, arcu at ultrices sodales, quam erat aliquet diam, sit amet interdum libero nunc accumsan nisi.
										</p>
										<footer>
											<a class="btn btn-primary more" href="single.html">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="single.html">
											<img src="{{ url('front/images/news/img02.jpg') }}" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">Travel</a>
											</div>
											<div class="time">December 18, 2016</div>
										</div>
										<h1><a href="single.html">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
										<p>
											Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat sollicitudin ut est. In fringilla dui.
										</p>
										<footer>
											<a class="btn btn-primary more" href="single.html">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="single.html">
											<img src="{{ url('front/images/news/img03.jpg') }}" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
											<a href="#">Travel</a>
											</div>
											<div class="time">December 16, 2016</div>
										</div>
										<h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum Proin venenatis pellentesque arcu</a></h1>
										<p>
											Nulla facilisis odio quis gravida vestibulum. Proin venenatis pellentesque arcu, ut mattis nulla placerat et.
										</p>
										<footer>
											<a class="btn btn-primary more" href="single.html">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="single.html">
											<img src="{{ url('front/images/news/img09.jpg') }}" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">Healthy</a>
											</div>
											<div class="time">December 16, 2016</div>
										</div>
										<h1><a href="single.html">Maecenas blandit ultricies lorem id tempor enim pulvinar at</a></h1>
										<p>
											Maecenas blandit ultricies lorem, id tempor enim pulvinar at. Curabitur sit amet tortor eu ipsum lacinia malesuada.
										</p>
										<footer>
											<a class="btn btn-primary more" href="single.html">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
						
						<aside>
							<h1 class="aside-title">Event <a href="#" class="all">Lihat Semua <i class="ion-ios-arrow-right"></i></a></h1>
							<div class="aside-body">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img07.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img14.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img09.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img11.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">dui augue facilisis lacus fringilla pulvinar massa felis quis velit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img06.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">neque est semper nulla, ac elementum risus quam a enim</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img03.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Morbi vitae nisl ac mi luctus aliquet a vitae libero</a></h1>
										</div>
									</div>
								</article>
							</div>
						</aside>

						<aside>
						
							<h1 class="title-col">
								Promosi
								<div class="carousel-nav" id="hot-news-nav">
									<div class="prev">
										<i class="ion-ios-arrow-left"></i>
									</div>
									<div class="next">
										<i class="ion-ios-arrow-right"></i>
									</div>
								</div>
							</h1>
							<div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img09.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">Lifestyle</a></div>
												<div class="time">December 22, 2016</div>
											</div>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img01.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">Lifestyle</a></div>
												<div class="time">December 22, 2016</div>
											</div>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img05.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">Lifestyle</a></div>
												<div class="time">December 22, 2016</div>
											</div>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img02.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">Travel</a></div>
												<div class="time">December 21, 2016</div>
											</div>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img13.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">International</a></div>
												<div class="time">December 20, 2016</div>
											</div>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img08.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">Computer</a></div>
												<div class="time">December 19, 2016</div>
											</div>
										</div>
									</div>
								</article>
							</div>
						
						</aside>

					</div>
				</div>
			</div>
		</section>

		<section class="best-of-the-week">
			<div class="container">
				<h1><div class="text">Kolom Opini</div>
					<div class="carousel-nav" id="best-of-the-week-nav">
						<div class="prev">
							<i class="ion-ios-arrow-left"></i>
						</div>
						<div class="next">
							<i class="ion-ios-arrow-right"></i>
						</div>
					</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{ url('front/images/news/img03.jpg') }}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
										<div class="time">December 11, 2016</div>
								</div>
								<h2><a href="single.html">tempor interdum Praesent tincidunt</a></h2>
								<p>Praesent tincidunt, leo vitae congue molestie.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{ url('front/images/news/img16.jpg') }}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 09, 2016</div>
								</div>
								<h2><a href="single.html">Maecenas porttitor sit amet turpis a semper</a></h2>
								<p> Proin vulputate, urna id porttitor luctus, dui augue facilisis lacus.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{ url('front/images/news/img15.jpg') }}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
								</div>
								<h2><a href="single.html">Fusce ac odio eu ex volutpat pellentesque</a></h2>
								<p>Vestibulum ante ipsum primis in faucibus orci luctus</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{ url('front/images/news/img14.jpg') }}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
								</div>
								<h2><a href="single.html">Nulla facilisis odio quis gravida vestibulum</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{ url('front/images/news/img01.jpg') }}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
								</div>
								<h2><a href="single.html">Fusce Ullamcorper Elit At Felis Cursus Suscipit</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.html">
									<img src="{{ url('front/images/news/img11.jpg') }}" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
								</div>
								<h2><a href="single.html">Donec consequat arcu at ultrices sodales</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>

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
								<br>
								<a href="page.html" class="btn btn-magz white">Tentang Kami <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Menu </h1>
							<div class="block-body">
								<ul>
									<li><a href="#">Profil Kedai Kopi</a></li>
									<li><a href="#">Profil Komunitas</a></li>
									<li><a href="#">Berita Seputar Kopi</a></li>
									<li><a href="#">Profil Sosok</a></li>
									<li><a href="#">Event</a></li>
									<li><a href="#">Promosi Produk</a></li>
									<li><a href="#">Kolom Opini</a></li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Berita Terbaru</h1>
							<div class="block-body">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img12.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Donec consequat lorem quis augue pharetra</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img14.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">eu dapibus risus aliquam etiam ut venenatis</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img15.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum </a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="{{ url('front/images/news/img16.jpg') }}" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Proin venenatis pellentesque arcu vitae </a></h1>
										</div>
									</div>
								</article>
								<a href="#" class="btn btn-magz white btn-block">Lihat Semua <i class="ion-ios-arrow-thin-right"></i></a>
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
	</body>
</html>