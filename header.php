<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Gamez Bootstarp Website Template | Home :: w3layouts</title>
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {
	
	var filterList = {
	
		init: function () {
		
			// MixItUp plugin
			// http://mixitup.io
			$('#portfoliolist').mixitup({
				targetSelector: '.portfolio',
				filterSelector: '.filter',
				effects: ['fade'],
				easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
			});				
		
		},
		
		hoverEffect: function () {
		
			// Simple parallax effect
			$('#portfoliolist .portfolio').hover(
				function () {
					$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
					$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
				},
				function () {
					$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
					$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
				}		
			);				
		
		}

	};
	
	// Run the show!
	filterList.init();
	
	
});	
</script>
</head>
<body>
<!-- Header Starts Here -->
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="wp-emilias/index-php/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
		</div>
		<span class="menu"></span>
		<div class="navigation">
			<ul class="navig cl-effect-3" >
				<li><a href="wp-emilias/index-php/">Inicio</a></li>
				<li><a href="#">o projeto</a></li>
				<li><a href="wp-emilias/blog/">Blog</a></li>
				<li><a href="wp-emilias/agenda/">Agenda</a></li>
				<li><a href="wp-emilias/contato/">Contato</a></li>
			</ul>
			<div class="search-bar">
					<input type="text" placeholder="search" required=""  value="search"/>
					<input type="submit" value="" />
			</div>
			<div class="clearfix"></div>
			<script>
				$( "span.menu" ).click(function() {
				  $( ".navigation" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
