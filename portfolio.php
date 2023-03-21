<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/constants.php");
$pagetitle="portfolio"; ?>
			<?php
			include_once ("includes/header.php");
			?>
			<!-- Header Section End Here -->

			<!-- site content -->
			<div id="main">
			<!--Breadcrumb Section Start Here-->
				<!--<div class="breadcrumb-section">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Portfolio</h1>
								<ul class="breadcrumb">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li class="active">
										Portfolio
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->
				<!--Breadcrumb Section End Here-->
			

				<div class="content-wrapper" id="page-info">

					<!-- Gallery sections Start Here -->
					<section class="we-help gallery-wrap">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<!--Sub Breadcrumb Section Start Here-->
                                    
                                    
									<ol class="breadcrumb">
									<li class="active">
										<h4>Portfolio</h4>
									</li>
                                    </ol>
                                      <!--<ol class="breadcrumb">  
                                        <li>
											<a href="#">Causes 1</a>
										</li>
										<li class="active">
											<a href="#">Causes 2</a>
										</li>
										<li>
											<a href="#">Causes 3</a>
										</li>
										<li>
											Causes 4
										</li>
									</ol>-->
									<!--Sub Breadcrumb Section Start Here-->
									<!--Gallery Section Start Here-->
									<div class="row gallery">
                                    
                                    <div class="cols-xs-12 col-sm-4">
											<div class="thumbnail embed-vedio-block">

												<div class="embed-responsive embed-responsive-16by9">
													<img  src="<?php echo SITE_PATH ?>assets/img/img-slide-005.jpg" alt="Click to play" data-video="http://www.youtube.com/embed/wN3gueLT0D8?autoplay=1"/>
												</div>

					
												<!--<p>
													We love to show how passionate to our cultural norms and value. this is who we are and we are proud of who we are-->
												</p>

											</div>
										</div>

										<div class="cols-xs-12 col-sm-4">
											<div class="thumbnail">
												<section class="flex-slide flexslider">
													<ul class="slides">
													<li>
														<a class="img-thumb" href="javascript:;"><img src="<?php echo SITE_PATH ?>assets/img/img-slide-04.jpg" alt=""></a>
													</li>
													<li>
														<a class="img-thumb" href="javascript:;"><img src="<?php echo SITE_PATH ?>assets/img/img-slide-008.jpg" alt=""></a>
													</li>
													</ul>
												</section>

												<h3 align="center" class="h3"><a href="<?php echo SITE_PATH ?>#">Recent events</a></h3>
												<p>
													<!--Phllus felis purus placerat vel augue vitae aliquam tincidunt dolor sed hendrerit diam in mattis mollis donecut-->
												</p>

											</div>

										</div>

										<div class="cols-xs-12 col-sm-4">
											<div class="thumbnail">

												<a class="img-thumb" href="<?php echo SITE_PATH ?>#">
													<img src="<?php echo SITE_PATH ?>assets/img/img-slide-001.jpg" alt=""></a>

												<h3 class="h3"><a href="<?php echo SITE_PATH ?>#">Provide Knowledge for children</a></h3>
												<p>
													<!--Phllus felis purus placerat vel augue vitae aliquam tincidunt dolor sed hendrerit diam in mattis mollis donecut-->
												</p>

											</div>
										</div>
                                    
										<div class="cols-xs-12 col-sm-4">
											<div class="thumbnail">
												<a class="img-thumb" href="<?php echo SITE_PATH ?>#">
                                                	<?php /*?><a class="img-thumb" href="<?php echo SITE_PATH ?>portfolio-detail.php"><?php */?>
													<img src="<?php echo SITE_PATH ?>assets/img/img-slide-05.jpg" alt=""></a>

												<h3 align="center" class="h3"><a href="<?php echo SITE_PATH ?>#">Need for Human right awareness</a></h3>
												<p>
													<!--Phllus felis purus placerat vel augue vitae aliquam tincidunt dolor sed hendrerit diam in mattis mollis donecut-->
												</p>

											</div>
										</div>
										<div class="cols-xs-12 col-sm-4">
											<div class="thumbnail">

												<a class="img-thumb" href="<?php echo SITE_PATH ?>#">
													<img src="<?php echo SITE_PATH ?>assets/img/img-slide-01.jpg" alt=""></a>

												<h3 class="h3"><a href="<?php echo SITE_PATH ?>#">Inspiring the youths</a></h3>
												<p>
												<!--	Phllus felis purus placerat vel augue vitae aliquam tincidunt dolor sed hendrerit diam in mattis mollis donecut-->
												</p>

											</div>
										</div>
										<div class="cols-xs-12 col-sm-4">
											<div class="thumbnail">

												<a class="img-thumb" href="<?php echo SITE_PATH ?>#">
													<img src="<?php echo SITE_PATH ?>assets/img/img-slide-04.jpg" alt=""></a>

												<h3 align="center" class="h3"><a href="<?php echo SITE_PATH ?>#">Community grounds and improvements </a></h3>
												<p>
												<!--	Phllus felis purus placerat vel augue vitae aliquam tincidunt dolor sed hendrerit diam in mattis mollis donecut-->
												</p>

											</div>
										</div>
										

										<?php /*?><div class="cols-xs-12 col-sm-4">
											<div class="thumbnail">
												<a class="img-thumb" href="portfolio-detail.php">
													<img src="assets/img/img-slide-003" alt=""></a>

												<h3 class="h3"><a href="portfolio-detail.php">Heading title</a></h3>
												<p>
													Phllus felis purus placerat vel augue vitae aliquam tincidunt dolor sed hendrerit diam in mattis mollis donecut
												</p>

											</div>
										</div>

										<div class="cols-xs-12 col-sm-4">
											<div class="thumbnail">
												<a class="fancybox-effects-a img-thumb" href="portfolio-detail.php">
													<img src="assets/img/img-slide-008" alt=""></a>
												<h3 class="h3"><a href="portfolio-detail.php">Heading title</a></h3>
												<p>
													Phllus felis purus placerat vel augue vitae aliquam tincidunt dolor sed hendrerit diam in mattis mollis donecut
												</p>

											</div>
										</div>

										<div class="cols-xs-12 col-sm-4">
											<div class="thumbnail">
												<a class="fancybox-effects-a img-thumb" href="portfolio-detail.php">
													<img src="assets/img/img-slide-002.jpg" alt=""></a>

												<h3 class="h3"><a href="portfolio-detail.php">Heading title</a></h3>
												<p>
													Phllus felis purus placerat vel augue vitae aliquam tincidunt dolor sed hendrerit diam in mattis mollis donecut
												</p>

											</div>
										</div><?php */?>



									</div>

								<!--Gallery Section End Here-->
								</div>

								<!--Pagination Section Start Here-->

								<div class="cols-xs-12 text-center">

									<ul class="pagination">
										<li>
											<a href="#">Prev</a>
										</li>
										<li class="active">
											<a href="#">1</a>
										</li>
										<li>
											<a href="#">2</a>
										</li>
										<li>
											<a href="#">3</a>
										</li>
										<li>
											<a href="#">4</a>
										</li>
										<li>
											<a href="#">Next</a>
										</li>
									</ul>

								</div>

								<!--Pagination Section Start Here-->

							</div>
						</div>
					</section>
					<!-- Gallery sections Start Here -->

				</div>

			</div>
			<!-- site content ends -->

			<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer2.php");
			?>
	