<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>School Lunch Menu</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
	

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><i style="color:#fff; font-size:60px" class="fa fa-cutlery"></i></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="#banner">Lunch Menu</a></div>
								<div class="site-slogan">Brought to you by <a target="_blank" href="http://mount-pleasant-primary.co.uk">Mount Pleasant Primary School</a></div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										
										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="#banner">Home</a></li>
												<li><a href="#week1">Week 1</a></li>
												<li><a href="#week2">Week 2</a></li>
												<li><a href="#week3">Week 3</a></li>
												<li><a href="#week4">Week 4</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-6 column" data-animation-effect="fadeIn">
						
							<?php
							// The current date
							$week_of_year=(int)date("W");
							$menu_week =  ($week_of_year % 4) +1;   // Rotates every 4 weeks. As the menu week is one week ahead of the current calendar week we need to "+1"

							$day_of_week=(int)date("N");
							$menu_option_day = $day_of_week;     // Days of the week from 1 ( Monday ) to 7  (Sunday)

							echo "<h1 class='text-center'>We are on <span>Week $menu_week</span></h1>";
							echo "<h1 class='text-center'>Today is <span>"; echo date('l'); echo "</span></h1>";
							?>
								
						</div>
						<div class="col-md-6 column text-center" data-animation-effect="fadeIn">
							<h2 class="menu-layout"><span>Today's Menu</span></h2>
							<h2 class="menu-layout">Main Courses</h2>
								<h3 class="menu-layout">$main1</h3>
									<h3 class="menu-layout"><span>or</span></h3>
								<h3 class="menu-layout">$main2</h3>
							<h2 class="menu-layout">Dessert</h2>
								<h3 class="menu-layout">$Pud</h3>
									<h5 class="menu-layout">Click <a href="#">here</a> to view the menu for this week</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-12 hidden-xs">
						<h1 id="week1" class="title text-center"><span>Week 1 Menu</span></h1>
						<?php include 'includes/week1.php';?>
					</div>
					<div class="col-md-12  visible-xs-block">
						<h1 id="week1" class="title text-center"><span>Week 1 Menu</span></h1>
						<?php include 'includes/week1-mobile.php';?>
					</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->
		
		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12 hidden-xs">
						<h1 id="week2" class="title text-center"><span>Week 2 Menu</span></h1>
						<?php include 'includes/week2.php';?>
					</div>
					<div class="col-md-12  visible-xs-block">
						<h1 id="week2" class="title text-center"><span>Week 2 Menu</span></h1>
						<!--<?php include 'includes/week2-mobile.php';?>	
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->
		
		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12 hidden-xs">
						<h1 id="week3" class="title text-center"><span>Week 3 Menu</span></h1>
						<?php include 'includes/week3.php';?>
					</div>
					<div class="col-md-12  visible-xs-block">
						<h1 id="week3" class="title text-center"><span>Week 3 Menu</span></h1>
						<!--<?php include 'includes/week3-mobile.php';?>	
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->
		
		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12 hidden-xs">
						<h1 id="week4" class="title text-center"><span>Week 4 Menu</span></h1>
						<?php include 'includes/week4.php';?>
					</div>
					<div class="col-md-12  visible-xs-block">
						<h1 id="week4" class="title text-center"><span>Week 4 Menu</span></h1>
						<!--<?php include 'includes/week4-mobile.php';?> 	
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		

		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

		<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2014 Worthy by <a href="http://htmlcoder.me" target="_blank">HtmlCoder</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
