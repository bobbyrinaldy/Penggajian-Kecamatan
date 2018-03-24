<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>Aplikasi Sistem Penggajian</title>
		<!-- Meta Description -->
    <link rel="icon" href="{{asset('assets/img/logo.png')}}" type="image/gif" sizes="16x16">
    
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google Font -->

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="onepage/css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="onepage/css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="onepage/css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="onepage/css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="onepage/css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="onepage/css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="onepage/js/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="body">

		<!-- preloader -->
		<div id="preloader">
			<img src="onepage/img/preloader.gif" alt="Preloader">
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->

					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="onepage/img/logo_bdg.png" alt="Brandi">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav" style="z-index: 1;">
                        <li><a href="#body">Home</a></li>
                        @guest
                          <li><a href="/login" target="_blank" id='login'>Login</a></li>
                          {{-- <li><a href="/register" target="_blank" id='register'>Register</a></li> --}}
                        @else
                          <li><a href="/home" id='admin'>Admin</a></li>
                          <li>
                            <a href="{{ route('logout') }}" id="logout"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                          Logout

                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                        @endguest
                    </ul>
                </nav>
				<!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->



        <!--
        Home Slider
        ==================================== -->

		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>
				<!-- End Indicators bullet -->

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">

					<!-- single slide -->
					<div class="item active" style="background-image: url(onepage/img/banner1.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated"><span> Selamat Datang</span></h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">di Kecamatan Bandung Kulon</span></h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">Melaksanakan sebagian kewenangan yang dilimpahkan oleh Walikota di bidang pemerintahan, pembangunan, perekonomian, kemasyarakatan, ketentraman, dan ketertiban serta koordinasi dan instansi otonom dan UPTD di wilayah kerjanya.</p>

							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->

					<!-- single slide -->
					<div class="item" style="background-image: url(onepage/img/banner1.jpg);">
						<div class="carousel-caption">
							<h3 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated"><span> Aplikasi Sistem Penggajian </span></h3>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">Kecamatan Bandung Kulon</span></h3>
							<p data-wow-duration="500ms" class="wow slideInRight animated">Aplikasi yang diperuntukan sebagai perhitungan pemotongan penggajian dan pembuatan slip gaji pegawai.</p>

							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->

				</div>
				<!-- End Wrapper for slides -->

			</div>
		</section>

        <!--
        End Home SliderEnd
        ==================================== -->

        <!--
        Features
        ==================================== -->

		<section id="features" class="features">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>
              VISI & MISI <br>
              Kecamatan Bandung Kulon
            </h2><br>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<!-- service item -->
					<div class="col-md-6 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-github fa-2x"></i>
							</div>

							<div class="service-desc">
								<h3>VISI</h3>
								<p>Mewujudkan Kecamatan Bandung Kulon Sebagai Kecamatan Yang Unggul</p>
							</div>
						</div>
					</div>
					<!-- end service item -->

					<!-- service item -->
					<div class="col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>

							<div class="service-desc">
								<h3>MISI</h3>
                <ul>
                    <li>1. Mewujudkan Pelayanan yang Prima</li>
                    <li>2. Mewujudkan Tertib Administrasi Pemerintahan Kecamatan</li>
                </ul>
							</div>
						</div>
					</div>
					<!-- end service item -->

					<!-- end service item -->

				</div>
			</div>
		</section>

        <!--
        End Features
        ==================================== -->


        <!--
        Our Works
        ==================================== -->

		<section id="works" class="works clearfix">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center">
						<h2>Kegiatan - Kegiatan</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

				</div>
			</div>

			<div class="project-wrapper">

				<figure class="mix work-item branding">
					<img src="onepage/img/works/item-1.png" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-1.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>giat sosialisasi gerakan ayo bayar zakat</h4>
					</figcaption>
				</figure>

				<figure class="mix work-item web">
					<img src="onepage/img/works/item-2.png" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-2.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>upacara peringatan hardiknas di balkot bandung</h4>
					</figcaption>
				</figure>

				<figure class="mix work-item logo-design">
					<img src="onepage/img/works/item-3.png" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-3.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>kegiatan apel</h4>
					</figcaption>
				</figure>

				<figure class="mix work-item photography">
					<img src="onepage/img/works/item-4.png" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-4.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Rapat Minggon</h4>
					</figcaption>
				</figure>

				<figure class="mix work-item branding">
					<img src="onepage/img/works/item-5.png" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-5.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>sosialisasi tentang TB dan paru </h4>
					</figcaption>
				</figure>

				<figure class="mix work-item web">
					<img src="onepage/img/works/item-6.png" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-6.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>sosialisasi gerkan magrib mengaji </h4>
					</figcaption>
				</figure>

				<figure class="mix work-item logo-design">
					<img src="onepage/img/works/item-7.png" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-7.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>mepeling akte kelahiran disukcapil bandung</h4>
					</figcaption>
				</figure>

				<figure class="mix work-item photography">
					<img src="onepage/img/works/item-8.png" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-8.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>perayaan hari jadi kota bandung yang ke 207 thn</h4>
					     </figcaption>
				</figure>

			</div>


		</section>

        <!--
        End Our Works
        ==================================== -->

        <!--
        Meet Our Team
        ==================================== -->

		<section id="team" class="team">
			<div class="container">
				<div class="row">

					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Pegawai Kecamatan Bandung Kulon</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="onepage/img/team/camat.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5> Drs.Dadan Haeri Guratman M.Si</h5>
								<p>Kepala Kecamatan</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4> Drs.Dadan Haeri G.,M.Si</h4>
						<span>Kepala Kecamatan</span>
					</figure>
					<!-- end single member -->

					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="onepage/img/team/kepala_keuangan.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Asep Padil Yamin SE</h5>
								<p>Kepala Sub Bagian Program dan Keuangan </p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Asep Padil Yamin.,SE</h4>
						<span>Kepala Sub Bagian Program dan Keuangan </span>
					</figure>
					<!-- end single member -->

					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="onepage/img/team/bendahara.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Nurhayati </h5>
								<p>Pengadministrasi Keuangan</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Nurhayati</h4>
						<span>Pengadministrasi Keuangan</span>
					</figure>
					<!-- end single member -->

					<!-- single member -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="member-thumb">
							<img src="onepage/img/team/pelayanan.png" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5> Iis Saidah S, Sos</h5>
								<p>Pengadministrasi Pelayanan Khusus</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4> Iis Saidah S, Sos</h4>
						<span>Pengadministrasi Pelayanan Khusus</span>
					</figure>
					<!-- end single member -->

				</div>
			</div>
		</section>

        <!--
        End Meet Our Team
        ==================================== -->

		<!--
        Some fun facts
        ==================================== -->
		<section id="contact" class="contact">
			<div class="container">
				<div class="row mb50">

					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Contact</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					<!-- contact address -->
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
							<h3>Alamat Kantor Kecamatan Bandung Kulon</h3>
							<p>Jl. Holis No.210/191 A, Caringin, </p>
							<p>Bandung Kulon, Kota Bandung, Jawa Barat 40212</p>
							<p>(022) 6015113</p>
						</div>
					</div>
					<!-- end contact address -->

					<!-- contact form -->
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<h3>Say hello!</h3>
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<input type="text" name="name" id="name" placeholder="Name" class="form-control">
									</div>
									<div class="input-field">
										<input type="email" name="email" id="email" placeholder="Email" class="form-control">
									</div>
								</div>
								<div class="input-group">
									<textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
								</div>
								<div class="input-group">
									<input type="submit" id="form-submit" class="pull-right" value="Send message">
								</div>
							</form>
						</div>
					</div>
					<!-- end contact form -->

					<!-- footer social links -->
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<ul class="footer-social">
							<li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
							<li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
							<li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
							<li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
						</ul>
					</div>
					<!-- end footer social links -->

				</div>
			</div>
		</section>

        <!--
        End Contact Us
        ==================================== -->




		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="onepage/js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="onepage/js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="onepage/js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="onepage/js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="onepage/js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="onepage/js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="onepage/js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="onepage/js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
        <script src="onepage/js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="onepage/js/wow.min.js"></script>
		<script>
		    $("#register").click(function(){
		      $(this).location.href='/register';
		    });
		    $("#login").click(function(){
		      $(this).location.href='/login';
		    });
        $("#logout").click(function(){
		      $(this).location.href='/logout';
		    });
		    $("#admin").click(function(){
		      $(this).location.href='/home';
		    });

			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script>
		<!-- Custom Functions -->
        <script src="onepage/js/custom.js"></script>

		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */

				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
    </body>
</html>
