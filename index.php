<?php //require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/constants.php"); ?>
<?php require_once("includes/functions.php"); 
$pagetitle= 'Home' ;
?>

<?php require_once("includes/pagination.php"); ?>
	<?php
 
	include('includes/header.php');
 

    ?>
 
			<!-- Header Section End Here -->
			
				<!-- Site Content -->
				<title>
				<?php  echo $pagetitle; ?>
				</title>
				
			<div id="main">
				<!-- banner slider Start Here -->
				<section class="rev_slider_wrapper banner-section">
					<div class="rev_slider banner-slider">
						<ul>
							<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-1" >
								<!-- MAIN IMAGE -->
								<img src="<?php echo SITE_PATH ?>assets/img/slide-banner-01.jpg" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">

								<div
								data-endspeed="500"
								data-easing="easeOutCirc"
								data-start="500"
								data-speed="700"
								data-y="103"
								data-x="152"
								class="tp-caption sft">
									<!--<span class="btn btn-bg">FEATURED CAUSE</span>-->
								</div>

								<div
								data-endspeed="800"
								data-easing="easeOutCirc"
								data-start="800"
								data-speed="700"
								data-y="150"
								data-x="152"
								<?php /*?>class="tp-caption sft banner-heading">
									<h2 style="color:#ecc731;"><strong><!--propagating health and environmental improvement-->
                                    <!--USING MEDIA TO AMPLIFY<br>THE WOICE OF THE PEOPLE--></strong>
									
									<!--for a sustainable
									
									Africa--></h2><?php */?>
								</div>

								<div
								data-endspeed="1000"
								data-easing="easeOutCirc"
								data-start="1000"
								data-speed="700"
								data-y="304"
								data-x="152"
								<?php /*?>class="tp-caption sft banner-summary">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										
										Pellentesque egestas nisl at dui tempus.There are many
										
										variations of passages of .
									</p>
								</div><?php */?>

								<div
								data-endspeed="1200"
								data-easing="easeOutCirc"
								data-start="1200"
								data-speed="700"
								data-y="416"
								data-x="152"
								class="tp-caption sft">
									<?php /*?><a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".donate-form" class="btn btn-default"><!--Donate NOW--></a><?php */?>
								</div>
							</li>
							<!-- SLIDE  -->
                            
                            <li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-1" >
								<!-- MAIN IMAGE -->
								<img src="<?php echo SITE_PATH ?>assets/img/slide-banner-0111.jpg" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">

								<div
								data-endspeed="500"
								data-easing="easeOutCirc"
								data-start="500"
								data-speed="700"
								data-y="103"
								data-x="152"
								<?php /*?>class="tp-caption sft">
									<!--<span class="btn btn-bg">FEATURED CAUSE</span>-->
								</div><?php */?>

								<div
								data-endspeed="800"
								data-easing="easeOutCirc"
								data-start="800"
								data-speed="700"
								data-y="150"
								data-x="152"
								<?php /*?>class="tp-caption sft banner-heading">
									<h2 style="color:#ecc731;"><strong><!--propagating health and environmental improvement-->
                                    <!--USING MEDIA TO AMPLIFY<br>THE WOICE OF THE PEOPLE--></strong>
									
									<!--for a sustainable
									
									Africa--></h2>
								</div><?php */?>

								<div
								data-endspeed="1000"
								data-easing="easeOutCirc"
								data-start="1000"
								data-speed="700"
								data-y="304"
								data-x="152"
								<?php /*?>class="tp-caption sft banner-summary">
									<!--<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										
										Pellentesque egestas nisl at dui tempus.There are many
										
										variations of passages of .
									</p>--><?php */?>
								</div>

								<div
								data-endspeed="1200"
								data-easing="easeOutCirc"
								data-start="1200"
								data-speed="700"
								data-y="416"
								data-x="152"
								<?php /*?>class="tp-caption sft">
									<a data-toggle="<?php echo SITE_PATH ?>modal" href="external.php" data-target=".donate-form" class="btn btn-default"><!--Donate NOW--></a><?php */?>
								</div>
							</li>
							<!-- SLIDE  -->
                            <!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-1" >
								<!-- MAIN IMAGE -->
								<img src="<?php echo SITE_PATH ?>assets/img/slide-banner-011.jpg" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">

								<div
								data-endspeed="500"
								data-easing="easeOutCirc"
								data-start="500"
								data-speed="700"
								data-y="103"
								data-x="152"
								class="tp-caption sft">
									<!--<span class="btn btn-bg">FEATURED CAUSE</span>-->
								</div>

								<div
								data-endspeed="800"
								data-easing="easeOutCirc"
								data-start="800"
								data-speed="700"
								data-y="150"
								data-x="152"
								class="tp-caption sft banner-heading">
									<!--<h2 style="color:#ecc731;"><strong>Using Media to Amplify<br>the Voice of the People</strong>
									
									</h2>-->
								</div>

								<div
								data-endspeed="1000"
								data-easing="easeOutCirc"
								data-start="1000"
								data-speed="700"
								data-y="304"
								data-x="152"
								class="tp-caption sft banner-summary">
									<!--<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										
										Pellentesque egestas nisl at dui tempus.There are many
										
										variations of passages of .
									</p>-->
								</div>

								<div
								data-endspeed="1200"
								data-easing="easeOutCirc"
								data-start="1200"
								data-speed="700"
								data-y="416"
								data-x="152"
								class="tp-caption sft">
									<?php /*?><a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".donate-form" class="btn btn-default"><!--Donate NOW--></a><?php */?>
								</div>
							</li>
                            <!-- SLIDE  -->
                            
                            
								<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-2" >
							
								<img src="<?php echo SITE_PATH ?>assets/img/slide-banner-03.jpg" alt="banner" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

								<?php /*?><div
								data-endspeed="500"
								data-easing="easeOutCirc"
								data-start="500"
								data-speed="500"
								data-y="406"
								data-x="152"
								class="tp-caption sfb feature-btn ">
									<span class="btn btn-warning btn-sm">FEATURED CAUSE</span>
								</div><?php */?>
								<div
								data-endspeed="800"
								data-easing="easeOutCirc"
								data-start="800"
								data-speed="500"
								data-y="448"
								data-x="152"
								class="tp-caption sfb">
									<!--<div class="trans-grey"></div>-->
								</div>
								<?php /*?><div
								data-endspeed="1500"
								data-easing="easeOutCirc"
								data-start="1500"
								data-speed="1000"
								data-y="466"
								data-x="177"
								class="tp-caption banner-heading bottom-animation text-white sfb">
									<h2 class="h1"><strong>Donate &amp; Help</strong>
									
									African Children for Education</h2>
								</div><?php */?>
								<?php /*?><div
								data-endspeed="1700"
								data-easing="easeOutCirc"
								data-start="1700"
								data-speed="700"
								data-y="550"
								data-x="177"
								class="tp-caption sfb donate-button">
									<a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".donate-form" class="btn-link"><!--Donate NOW<--></a>
								</div><?php */?>

							</li>
							<!-- SLIDE  -->
							<?php /*?><li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-3">
								<!-- MAIN IMAGE -->
								<img src="<?php echo SITE_PATH ?>assets/img/slide-banner-02.jpg" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">

								<div
								data-endspeed="500"
								data-easing="easeOutCirc"
								data-start="500"
								data-speed="700"
								data-y="103"
								data-x="152"
								class="tp-caption sft banner-feaure">
									<span class="btn btn-bg">FEATURED CAUSE</span>
								</div>

								<div
								data-endspeed="800"
								data-easing="easeOutCirc"
								data-start="800"
								data-speed="700"
								data-y="150"
								data-x="152"
								class="tp-caption sft third-style banner-heading banner-title">
									<h2 style="color:#ecc731;"><strong>Donate &amp; Help</strong>
									
									African Youth for Education</h2>
								</div>
								<div
								data-endspeed="1000"
								data-easing="easeOutCirc"
								data-start="1000"
								data-speed="700"
								data-y="244"
								data-x="152"
								class="tp-caption sft third-style banner-summary banner-description">
									<!--<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										
										Pellentesque egestas nisl at dui tempus.There are many
										
										variations of passages of .
									</p>-->
								</div>

								<div
								data-endspeed="1200"
								data-easing="easeOutCirc"
								data-start="1200"
								data-speed="700"
								data-y="354"
								data-x="152"
								class="tp-caption sft banner-btn">
									<a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".donate-form" class="btn btn-default">Donate NOW</a>
								</div>
							</li><?php */?>
						</ul>
					</div>
				</section>
				<!-- banner slider End Here -->
	<!-- Our Causes Section Start Here-->
				<section class="our-causes">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="page-header section-header clearfix">
									<h2>You can help lots of people by donating little. <strong> See our causes</strong></h2>
								</div>

								<div class="article-list flexslider article-slider progressbar">
									<ul class="slides">
  
									<li>
									<div class="items zoom">
										<h3 class="h6">Help Children and Youth  access Education in Africa</h3>
										<a href="<?php echo SITE_PATH ?>" class="img-thumb">
											<figure>
											<img src="assets/img/img-slide-01.jpg" alt="">
											</figure>
											</a>
										<?php /*?><div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
												<span class="progress-value">72% </span>
											</div>
										</div>
										<span class="donation">Donation : <span class="value">$78,354 <small>/ $1,26,500</small></span></span>
										<p>
											<!--Lorem ipsum dolor sit consectetur adipiscing elit ellentesque. Future stuffs also goes...-->
										</p>
										<a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".donate-form" class="btn btn-default"><!--DONATE NOW--></a><?php */?>
									</div>
									</li>
									<li>
									<div class="items zoom">
										<h3 class="h6">Educate Communities on Environment and Health Developement</h3>
										<a href="<?php echo SITE_PATH ?>" class="img-thumb">
											<figure>
											<img src="<?php echo SITE_PATH ?>assets/img/img-slide-0202.jpg" alt="">
											</figure>
											</a>
										<?php /*?><div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
												<span class="progress-value">60% </span>
											</div>
										</div>
										<span class="donation">Donation : <span class="value">$78,354 <small>/ $1,26,500</small></span></span>
										<p>
											<!--Lorem ipsum dolor sit consectetur adipiscing elit ellentesque. Future stuffs also goes...-->
										</p>
										<a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".donate-form" class="btn btn-default"><!--DONATE NOW--></a><?php */?>
									</div>
									</li>
									<li>
									<div class="items zoom">
										<h3 class="h6">Educate African Youths on their Human Right and Welfare</h3>
										<a href="<?php echo SITE_PATH ?>#" class="img-thumb">
											<figure>
								<?php /*?>	<img src="<?php echo SITE_PATH ?>assets/img/img-slide-02.jpg" alt=""><?php */?>
                                <img src="<?php echo SITE_PATH ?>assets/img/img-slide-002.jpg" alt="">
											</figure>
											</a>
										<?php /*?><div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
												<span class="progress-value">80% </span>
											</div>
										</div>
										<span class="donation">Donation : <span class="value">$78,354 <small>/ $1,26,500</small></span></span>
										<p>
											<!--Lorem ipsum dolor sit consectetur adipiscing elit ellentesque. Future stuffs also goes...-->
										</p>
										<a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".donate-form" class="btn btn-default"><!--DONATE NOW--></a>
									</div><?php */?>
									</li>
                                    
                                    
                                    
									<?php /*?><li>
									<div class="items zoom">
										<h3 class="h6">Help african children for Education</h3>
										<a href="#" class="img-thumb">
											<figure>
											<img src="<?php echo SITE_PATH ?>assets/img/img-slide-001.jpg" alt="">
                                         
											</figure>
											</a>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
												<span class="progress-value">72% </span>
											</div>
										</div>
										<span class="donation">Donation : <span class="value">$78,354 <small>/ $1,26,500</small></span></span>
										<p>
											Lorem ipsum dolor sit consectetur adipiscing elit ellentesque. Future stuffs also goes...
										</p>
										<a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".donate-form" class="btn btn-default">DONATE NOW</a>
									</div>
									</li>
									<li>
									<div class="items zoom">
										<h3 class="h6">Using the media to power the voice of the people</h3>
										<a href="#" class="img-thumb">
											<figure>
											<img src="<?php echo SITE_PATH ?>assets/img/img-slide-002.jpg" alt="">
											</figure>
											</a>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
												<span class="progress-value">60% </span>
											</div>
										</div>
										<span class="donation">Donation : <span class="value">$78,354 <small>/ $1,26,500</small></span></span>
										<p>
											Lorem ipsum dolor sit consectetur adipiscing elit ellentesque. Future stuffs also goes...
										</p>
										<a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".donate-form" class="btn btn-default">DONATE NOW</a>
									</div>
									</li>
                                    <li>
									<div class="items zoom">
										<h3 class="h6">Help build library for African Children / Youths</h3>
										<a href="#" class="img-thumb">
											<figure>
											<img src="<?php echo SITE_PATH ?>assets/img/img-slide-003.jpg" alt="">
											</figure>
											</a>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
												<span class="progress-value">60% </span>
											</div>
										</div>
										<span class="donation">Donation : <span class="value">$78,354 <small>/ $1,26,500</small></span></span>
										<p>
											Lorem ipsum dolor sit consectetur adipiscing elit ellentesque. Future stuffs also goes...
										</p>
										<a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".donate-form" class="btn btn-default">DONATE NOW</a>
									</div>
                                    </li>
<?php */?>									<?php /*?></li>
                                    <li>
									<div class="items zoom">
										<h3 class="h6">Help girls to get Education</h3>
										<a href="#" class="img-thumb">
											<figure>
											<img src="assets/img/img-slide-004.jpg" alt="">
											</figure>
											</a>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
												<span class="progress-value">60% </span>
											</div>
										</div>
										<span class="donation">Donation : <span class="value">$78,354 <small>/ $1,26,500</small></span></span>
										<p>
											Lorem ipsum dolor sit consectetur adipiscing elit ellentesque. Future stuffs also goes...
										</p>
										<a data-toggle="modal" href="external.php" data-target=".donate-form" class="btn btn-default">DONATE NOW</a>
									</div>
									</li>
                                    
									<li>
									<div class="items zoom">
										<h3 class="h6">Help us to send Vegetables to Africa</h3>
										<a href="#" class="img-thumb">
											<figure>
											<img src="assets/img/img-slide-005.jpg" alt="">
											</figure>
											</a>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
												<span class="progress-value">80% </span>
											</div>
										</div>
										<span class="donation">Donation : <span class="value">$78,354 <small>/ $1,26,500</small></span></span>
										<p>
											Lorem ipsum dolor sit consectetur adipiscing elit ellentesque. Future stuffs also goes...
										</p>
										<a data-toggle="modal" href="external.php" data-target=".donate-form" class="btn btn-default">DONATE NOW</a>
									</div>
									</li>
									<li>
									<div class="items zoom">
										<h3 class="h6">Help african children to have homes</h3>
										<a href="#" class="img-thumb">
											<figure>
											<img src="assets/img/img-slide-006.jpg" alt="">
											</figure>
											</a>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
												<span class="progress-value">72% </span>
											</div>
										</div>
										<span class="donation">Donation : <span class="value">$78,354 <small>/ $1,26,500</small></span></span>
										<p>
											Lorem ipsum dolor sit consectetur adipiscing elit ellentesque. Future stuffs also goes...
										</p>
										<a data-toggle="modal" href="external.php" data-target=".donate-form" class="btn btn-default">DONATE NOW</a>
									</div>
									</li>
									<li>
									<div class="items zoom">
										<h3 class="h6">Help girls to get Education</h3>
										<a href="#" class="img-thumb">
											<figure>
											<img src="assets/img/img-slide-007.jpg" alt="">
											</figure>
											</a>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
												<span class="progress-value">60% </span>
											</div>
										</div>
										<span class="donation">Donation : <span class="value">$78,354 <small>/ $1,26,500</small></span></span>
										<p>
											Lorem ipsum dolor sit consectetur adipiscing elit ellentesque. Future stuffs also goes...
										</p>
										<a data-toggle="modal" href="external.php" data-target=".donate-form" class="btn btn-default">DONATE NOW</a>
									</div>
									</li>
									
                                    <li>
									<div class="items zoom">
										<h3 class="h6">Help us to send Vegetables to Africa</h3>
										<a href="#" class="img-thumb">
											<figure>
											<img src="assets/img/img-slide-008.jpg" alt="">
											</figure>
											</a>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
												<span class="progress-value">80% </span>
											</div>
										</div>
										<span class="donation">Donation : <span class="value">$78,354 <small>/ $1,26,500</small></span></span>
										<p>
											Lorem ipsum dolor sit consectetur adipiscing elit ellentesque. Future stuffs also goes...
										</p>
										<a data-toggle="modal" href="external.php" data-target=".donate-form" class="btn btn-default">DONATE NOW</a>
									</div>
									</li><?php */?>
 								
								
								</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
	<!-- Our Causes Section End Here-->

	<!-- How To Help Section Start Here -->
				<section class="how-to-help">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 ">
								<header class="page-header section-header">
									<h2>How you can help? <strong>See below</strong></h2>
								</header>

								<div class="row help-list">
									<div class="col-xs-12 col-sm-6 col-lg-5">
										<article class="media">
											<a class="pull-left warning-icon-box" href="<?php echo SITE_PATH ?>our-story.php"><i class="icon-volume"></i></a>
											<div class="media-body less-width">
												<h3 class="media-heading">Our Story</h3>
												<p>
													We use media to Amplify the Voice of the People
												</p>
											</div>
										</article>
										<article class="media">
											<a class="pull-left warning-icon-box" href="<?php echo SITE_PATH ?>volunteer.php"><i class="icon-user"></i></a>
											<div class="media-body less-width">
												<h3 class="media-heading">Become Volunteer</h3>
												<p>
				Be part of our growing community by helping Children and Youth  access Education in Africa
												</p>
											</div>
										</article>
										<article class="media">
											<a class="pull-left warning-icon-box" href="<?php echo SITE_PATH ?>external.php" data-toggle="modal" data-target=".donate-form"><i class="icon-heart"></i></a>
											<div class="media-body less-width">
												<h3 class="media-heading">Send Donation</h3>
												<p>
							Send donation and help reach millions of children and youth in Africa
												</p>
											</div>
										</article>
									</div>
									
                                    
                                   <div class="col-xs-12 col-sm-6 col-lg-6 col-lg-offset-1">
											<div class="thumbnail">
												<section class="flex-slide flexslider">
													<ul class="slides">
													<li>
														<a class="img-thumb" href="<?php echo SITE_PATH ?>javascript:;"><img src="<?php echo SITE_PATH ?>assets/img/img-slide-04.jpg" alt=""></a>
													</li>
													<li>
														<a class="img-thumb" href="<?php echo SITE_PATH ?>javascript:;"><img src="<?php echo SITE_PATH ?>assets/img/img-slide-008.jpg" alt=""></a></li>
                                                        <li>
                                                      <a class="img-thumb" href="<?php echo SITE_PATH ?>javascript:;"><img src="<?php echo SITE_PATH ?>assets/img/img-slide-0099.jpg" alt=""></a>  
													</li>
                                                     <li>
                                                      <a class="img-thumb" href="<?php echo SITE_PATH ?>javascript:;"><img src="<?php echo SITE_PATH ?>assets/img/img-slide-0000.jpg" alt=""></a>  
													</li>
													</ul>
												</section>

												

											</div>

										</div>
									<!--	<div class="embed-responsive embed-responsive-16by9">
                                        <img src="assets/img/a1.jpg">
											 <iframe src="assets/img/br.mp4" width="300" height="250" ></iframe>
                                             <iframe src="temp/br.mp4" width="300" height="250"></iframe>
                                            <img  src="assets/img/video-frame.jpg" alt="Click to play" data-video="http://www.youtube.com/embed/zP_D_YKnwi0?autoplay=1"/>-->
											</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>
	<!-- How To Help Section End Here-->

	<!-- Become Volunteer Section Start Here -->
				<section class="parallax-section parallax">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-7 col-md-5">
								<h2>Become <strong>Volunteer</strong></h2>
								<p>
									Be part of our growing community by helping children further their education. 
								</p>
								<a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".join-now-form" class="btn btn-default">Join Now</a>
							</div>
						</div>
					</div>
				</section>
	<!-- Become Volunteer Section End Here -->

	<!-- Latest News Section Start Here -->
				<?php /*?><section class="latest-news ">
					<div class="container anim-section">
						<div class="row">
							<div class="col-xs-12">
								<header class="page-header section-header clearfix">
									<h2>Checkout whats going on. <strong>Latest News</strong></h2>
								</header>

								<div class="article-list row">
									<div class="items zoom col-xs-12 col-sm-4">
										<a href="<?php echo SITE_PATH ?>#" class="img-thumb">
											<figure>
											<img src="assets/img/doctor-44.jpg" alt="">
											</figure>
											</a>
										<h3>Corona Virus- How to help</h3>
										<span class="date">03 March 2020</span><!--<span class="posted-in">Posted In : category</span>-->
										<p>
											Coronavirus Relief
Support coronavirus relief efforts led by SDII vetted nonprofit partners.
 
										</p>
										<a href="<?php echo SITE_PATH ?>blog-full-width.php" class="btn btn-default">READ MORE</a>
									</div>
									<div class="items zoom col-xs-12 col-sm-4">
										<a href="<?php echo SITE_PATH ?>#" class="img-thumb">
											<figure>
											<img src="<?php echo SITE_PATH ?>assets/img/img-slide-05.jpg" alt="">
											</figure>
											</a>
										<h3>Australian Wildfires - How to help</h3>
										<span class="date">03 Feb. 2020</span><!--<span class="posted-in">Posted In : category</span>-->
										<p>
                                Australian Wildfires Relief
                                Support local organizations in Australia responding to the bushfires.
                                Donate Now
										</p>
										<a href="<?php echo SITE_PATH ?>blog-full-width.php" class="btn btn-default">READ MORE</a>
									</div>
                                    
                                    
									<div class="items zoom col-xs-12 col-sm-4">
										<a href="<?php echo SITE_PATH ?>#" class="img-thumb">
											<figure>
											<img src="<?php echo SITE_PATH ?>assets/img/slide-banner-0332.jpg" alt="">
											</figure>
											</a>
										<h3>Africa Kids Education - How to help</h3>
										<span class="date">03 DEC 2013</span><span class="posted-in"><!--Posted In : category--></span>
										<p>
											Lorem ipsum dolor sit consectetur adipiscing elit ellentesque small project decriptions
										</p>
										<a href="<?php echo SITE_PATH ?>blog-full-width.php" class="btn btn-default">READ MORE</a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</section><?php */?>
	<!-- Latest News Section End Here -->

	<!--Testimonial Section Start Here -->			
				<section class="testimonial parallax">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="testimonial-slider flexslider">
									<ul class="slides">
										<li>
									<div class="slide">
										<h2>Donation Holders say <strong> Read Below </strong></h2>
										<blockquote>
											<p>
												“Etiam imperdiet metus ut pretium gravida uisque et vestibulum lacus. Maecenas at lacinia lacus. ”
											</p>
											<footer>
												<span>Jhon doe</span>
												<cite>(New media of Marketing firm)</cite>
											</footer>
										</blockquote>
									</div>
									</li>
									<li>
									<div class="slide">
										<h2>Donation Holders say <strong> Read Below</strong></h2>
										<blockquote>
											<p>
												“Etiam imperdiet metus ut pretium gravida uisque et vestibulum lacus. Maecenas at lacinia lacus. ”
											</p>
											<footer>
												<span>Jhony Waker</span>
												<cite>(CEO at NewCompany)</cite>
											</footer>
										</blockquote>
									</div>
									</li>
									<li>
									<div class="slide">
										<h2>Donation Holders say <strong> Read Below</strong></h2>
										<blockquote>
											<p>
												“Etiam imperdiet metus ut pretium gravida uisque et vestibulum lacus. Maecenas at lacinia lacus. ”
											</p>
											<footer>
												<span>Tony Vedvik</span>
												<cite>(Head Sales of Sense Technology)</cite>
											</footer>
										</blockquote>
									</div>
								</li>
								</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
	<!--Testimonial Section End Here -->

			</div>
	<!--Content End Here -->
	<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
