<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>@yield('title')</title>
		
	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="template/assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="template/assets/css/main.css">
	    <link rel="stylesheet" href="template/assets/css/green.css">
	    <link rel="stylesheet" href="template/assets/css/owl.carousel.css">
		<link rel="stylesheet" href="template/assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="template/assets/css/owl.theme.css">-->
		<link href="template/assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="template/assets/css/animate.min.css">
		<link rel="stylesheet" href="template/assets/css/rateit.css">
		<link rel="stylesheet" href="template/assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="template/assets/css/config.css">

		<link href="template/assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="template/assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="template/assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="template/assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="template/assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<!-- Demo Purpose Only. Should be removed in production : END -->

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="template/assets/css/font-awesome.min.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="template/assets/images/favicon.ico">

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="template/assets/js/html5shiv.js"></script>
			<script src="template/assets/js/respond.min.js"></script>
		<![endif]-->

    </head>
    <!-- For demo purposes – can be removed on production : End -->
<body>
		@yield('content')
	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="template/assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="template/assets/js/bootstrap.min.js"></script>
	
	<script src="template/assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="template/assets/js/owl.carousel.min.js"></script>
	
	<script src="template/assets/js/echo.min.js"></script>
	<script src="template/assets/js/jquery.easing-1.3.min.js"></script>
	<script src="template/assets/js/bootstrap-slider.min.js"></script>
    <script src="template/assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="template/assets/js/lightbox.min.js"></script>
    <script src="template/assets/js/bootstrap-select.min.js"></script>
    <script src="template/assets/js/wow.min.js"></script>
	<script src="template/assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
