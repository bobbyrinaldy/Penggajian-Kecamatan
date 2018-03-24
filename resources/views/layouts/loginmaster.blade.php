<!DOCTYPE html>
<html>
<head>
<title>Login Aplikasi Sistem Penggajian</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{asset('assets/img/logo.png')}}" type="image/gif" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flaty User login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="signin/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- js -->
<script src="signin/js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	@yield('content')
	<!-- //main -->
	<!-- copyright -->
	<div class="w3copyright-agile">
		<p>© 2017 Kecamatan Bandung Kulon. All rights reserved</p>
	</div>
	<!-- //copyright -->
	<script>
	$('.form').find('input, textarea').on('keyup blur focus', function (e) {
	  var $this = $(this),
		  label = $this.prev('label');

		  if (e.type === 'keyup') {
				if ($this.val() === '') {
			  label.removeClass('active highlight');
			} else {
			  label.addClass('active highlight');
			}
		} else if (e.type === 'blur') {
			if( $this.val() === '' ) {
				label.removeClass('active highlight');
				} else {
				label.removeClass('highlight');
				}
		} else if (e.type === 'focus') {

		  if( $this.val() === '' ) {
				label.removeClass('highlight');
				}
		  else if( $this.val() !== '' ) {
				label.addClass('highlight');
				}
		}

	});
	</script>
</body>
</html>
