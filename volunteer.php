<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/constants.php"); 
$pagetitle="volunteer";  ?>
			<?php
			include_once ("includes/header.php");
			?>
			<!-- Header Section End Here -->
			<!-- site content -->
			<div id="main">
			<!-- Breadcrumb Section Start Here -->
				<!--<div class="breadcrumb-section">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Become Volunteer</h1>
								<ul class="breadcrumb">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li class="active">
										Become Volunteer
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->
			<!-- Breadcrumb Section End Here -->

				<div class="container mission-page" id="page-info">
					<div class="row">
						<div class="col-xs-12">
							<!-- Help Us Section Start Here-->
							<section class="help-us">
								<header class="page-header section-header clearfix">
									<h2>We need you, <strong class="border-none">Help us around</strong></h2>
								</header>
								<figure>
								<img src="<?php echo SITE_PATH ?>assets/img/help.jpg" alt="">
								</figure>
							</section>
							<!-- Help Us Section End Here-->
							<!-- Process Step Section Start Here-->
							<section class="process-section anim-section text-center">
								<header class="page-header section-header clearfix">
									<h2>How you can apply, <strong>Here is process</strong></h2>
								</header>
								<div class="row processes">
									<div class="col-xs-12 col-sm-3">
										<div class="process-step">
											Step 1
										</div>
										<h3 class="h4">Choose programme</h3>
										<p>
											choose the programme you want to sponsor 
										</p>
									</div>
									<div class="col-xs-12 col-sm-3">
										<div class="process-step">
											Step 2
										</div>
										<h3 class="h4">Fill the form</h3>
										<p>
											Fill the pop-up form on the screen
										</p>
									</div>
									<div class="col-xs-12 col-sm-3">
										<div class="process-step">
											Step 3
										</div>
										<h3 class="h4">complete the registration</h3>
										<p>
											Complete the registration form requirements
										</p>
									</div>
									<div class="col-xs-12 col-sm-3">
										<div class="process-step">
											Step 4
										</div>
										<h3 class="h4">Welcome to the team</h3>
										<p>
											Upon completion of the donations you will recieve a message to your an email
										</p>
									</div>
								</div>
								<p class="text-center">
									<a data-toggle="modal" href="<?php echo SITE_PATH ?>external.php" data-target=".join-now-form" class="btn btn-default btn-lg join-today">JOIN TODAY</a>
								</p>
							</section>
							<!-- Process Step Section End Here-->
						</div>
					</div>
				</div>

			</div>
			<!-- site content ends -->

			<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
		