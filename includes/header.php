<!DOCTYPE html>
<html lang="en">
	<head>
    <title><?php  echo $pagetitle; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
        <!--SPONTANEOUS DEVELOPMENT INTERNATIONAL INITIATIVE-->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo SITE_PATH ?>favicon.ico">
		<!-- google fonts -->
		<!--<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>-->
		<!-- Bootstrap -->
		<link href="<?php echo SITE_PATH ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo SITE_PATH ?>assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="<?php echo SITE_PATH ?>assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo SITE_PATH ?>assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="<?php echo SITE_PATH ?>assets/css/global.css" rel="stylesheet">
		<link href="<?php echo SITE_PATH ?>assets/css/style.css" rel="stylesheet">
		<link href="<?php echo SITE_PATH ?>assets/css/responsive.css" rel="stylesheet">
		<link href="<?php echo SITE_PATH ?>assets/css/skin.less" rel="stylesheet/less">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
<!--Header Section Start Here -->
		<div id="wrapper">

<header id="header">
				<div class="container">
					<div class="row primary-header">
						<a href="<?php echo SITE_PATH ?>index.php" class="col-xs-12 col-sm-2 brand" title="Welcome to Spontanous Development international Initiative"><img src="<?php echo SITE_PATH ?>assets/img/logo.png" alt="sdii"></a>
						<div class="social-links col-xs-12 col-sm-10">
							<a href="<?php echo SITE_PATH ?>volunteer.php" class="btn btn-default btn-volunteer">Become volunteer</a>
							<ul class="social-icons hidden-xs">
								<li>
									<a href="<?php echo SITE_PATH ?>http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="<?php echo SITE_PATH ?>http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="<?php echo SITE_PATH ?>http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href=<?php echo SITE_PATH ?>"http://dribble.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li>
								<!--<li>
									<a href="http://pinterest.com" target="_blank"><i class="fa fa-vimeo-square"></i></a>
								</li>-->

							</ul>
						</div>
					</div>
				</div>
				<div class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav>
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="<?php echo SITE_PATH ?>index.php"  data-toggle=""  class="submenu-icon">Home <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!--<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="index.php">Index-1</a>
											</li>
											<li>
												<a href="index2.php">Index-2</a>
											</li>
											<li>
												<a href="index3.php">Index-3</a>
											</li>
											
										</ul>
									</div>-->
								</li>

								
								<li>
									<a href="<?php echo SITE_PATH ?>javascript:;" data-toggle="dropdown" class="submenu-icon">features <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<?php /*?><li>
												<a href="<?php echo SITE_PATH ?>our_story.php">Our Story</a>
											</li>
											<li><?php */?>
												<a href="<?php echo SITE_PATH ?>our_mission.php">Our Vision</a>
											</li>
                                           <!-- <li>
												<a href="our-mission.php">Our Mission</a>
											</li>-->
											<li>
												<a href="<?php echo SITE_PATH ?>volunteer.php">Become a Volunteer</a>
											</li>
											<!--<li>
												<a href="gallery-two-column.php">Gallery 2 Columns</a>
											</li>
											<li>
												<a href="gallery.php">Gallery 3 Columns</a>
											</li>-->
											<li>
												<a href="<?php echo SITE_PATH ?>#">Faq </a>
											</li>
											<!--<li>
												<a href="error404.php">404 Error </a>
											</li>
											<li>
												<a href="event.php">event </a>
											</li>
											<li>
												<a href="event-details.php">Event-Details </a>
											</li>
											
											<li>
												<a href="donation-payment-fail.php">Payment-Fail </a>
											</li>
											<li>
												<a href="donation-payment-success.php">Payment-Success </a>
											</li>
											<li>
												<a href="launch.php">launch </a>
											</li>-->
										</ul>
									</div>
									<!-- end  -->

								</li>
                                <?php /*?><li>
									<a href="javascript:;"  data-toggle="dropdown"  class="submenu-icon">Causes <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->

									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="causes.php">Causes Home</a>
											</li>
											<li>
												<a href="causes-detail.php">Causes Details full width</a>
											</li>
											<li>
												<a href="causes-detail-with-sidebar.php">Causes Details with sidebar</a>
											</li>

										</ul>
									</div>
								</li><?php */?>
								<?php /*?><li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">Store <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
										<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="shop-listing.php">Shop Listing</a>
											</li>
											<li>
												<a href="shop-detail.php">Shop Detail</a>
											</li>
											<li>
												<a href="shoping-cart.php">Shoping Cart</a>
											</li>
											
											<li>
												<a href="checkout.php">Checkout</a>
											</li>

										</ul>
									</div>
								</li><?php */?>
								
								<li>
									<a href="<?php echo SITE_PATH ?>javascript:;" data-toggle="dropdown" class="submenu-icon">Gallery <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="<?php echo SITE_PATH ?>portfolio.php">Portfolio</a>
											</li>
											<!--<li>
												<a href="portfolio-detail.php">Portfolio Detail</a>
											</li>-->

										</ul>
									</div>
								</li>
								<li>
									<a href="<?php echo SITE_PATH ?>#" data-toggle="" class="submenu-icon">Blog <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<!--<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="blog-full-width.php">Blog Full Width</a>
											</li>
											<li>
												<a href="blog-full-width-details.php">Blog Detail Full Width</a>
											</li>

										</ul>
									</div>-->
								</li>
								<li>
									<a href="<?php echo SITE_PATH ?>contact_us.php">contact us</a>
								</li>

							</ul>
							</nav>
							
							<!--<form class="navbar-form navbar-right search-form" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search Here">
								</div>
								<button type="submit">
									<i class="icon-search"></i>
								</button>
							</form>-->
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</div>

			</header>
			