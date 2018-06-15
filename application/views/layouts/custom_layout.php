<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MATE - MIND ACTIVATION THROUGH EDUCATION</title>
	<meta name="description" content="Mate is a Mental Health Club to create a empowered,
	healthy mindset for the students to help them develop their cognitive and sociocultural 
	skills in addition to excellence in academics and extra curricular activities" />
	<meta name="keywords" content="mate, counselling, aiims, Wellness Club, Human interconnectedness" />
	<meta name="author" content="mind activation" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="<?php  echo base_url(); ?>assets/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>assets/css/normalize.css">
	<!-- Bootstrap -->
	 <link rel="stylesheet" href="<?php  echo base_url(); ?>assets/css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>assets/css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>assets/css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css"href="<?php  echo base_url(); ?>assets/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>assets/fonts/eleganticons/et-icons.css">
	<!-- Main style -->
    <link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>assets/css/cardio.css">

    <!-- MATE style -->
    <link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>assets/css/mate-style.css">
    
</head>




<body>
    

    <div class="main-wrapper">
        <div class="col-xs-12 col-md-12 pad-0">
				<nav class="navbar gallery-view">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mate-navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php  echo base_url(); ?>home"><img src="<?php  echo base_url(); ?>assets/img/mate-logo.jpg" data-active-url="<?php  echo base_url(); ?>assets/img/mate-logo.jpg" alt=""></a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="mate-navbar">
							<ul class="nav navbar-nav navbar-right main-nav">
								<li><a href="<?php  echo base_url(); ?>home#objective">Objectives</a></li>
								<li><a href="<?php  echo base_url(); ?>home#services">Services</a></li>
								<li><a href="<?php  echo base_url(); ?>home#team">Team</a></li>
								<li><a href="<?php  echo base_url(); ?>home#">Donate</a></li>

								<?php if($this->session->userdata('logged_in')): ?>
								<li>
									<?php $attributes = array('id'=>'logout-form'); ?>
									<?php echo form_open('users/logout', $attributes); ?>
										<a href="#" name="submit" onclick="(function(){ $('#logout-form').submit(); })();">
											Welcome, &nbsp; <span class="text-success"><?php echo $this->session->userdata('username'); ?></span>
											<i class="fa fa-power-off text-success"></i>
										</a>
									<?php echo form_close(); ?>
								</li>
								<?php else: ?>
									<li><a href="#" data-toggle="modal" data-target="#login-modal">Log In</a></li>
									<li><a href="#"  data-toggle="modal" data-target="#user-type-modal" class="btn btn-blue">Sign Up</a></li>
								<?php endif; ?>
								
								
							</ul>
						</div>
						<!-- /.navbar-collapse -->
					</div>
					<!-- /.container-fluid -->
				</nav>


				<?php $this->load->view($main_view); ?>
			
		<footer>
			<div class="container">
				<!--
				<div class="row">
					<div class="col-sm-6 text-center-mobile">
						<h3 class="white">Reserve a Free Trial Class!</h3>
						<h5 class="light regular light-white">Shape your body and improve your health.</h5>
						<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>
					</div>
					<div class="col-sm-6 text-center-mobile">
						<h3 class="white">Opening Hours <span class="open-blink"></span></h3>
						<div class="row opening-hours">
							<div class="col-sm-6 text-center-mobile">
								<h5 class="light-white light">Mon - Fri</h5>
								<h3 class="regular white">9:00 - 22:00</h3>
							</div>
							<div class="col-sm-6 text-center-mobile">
								<h5 class="light-white light">Sat - Sun</h5>
								<h3 class="regular white">10:00 - 18:00</h3>
							</div>
						</div>
					</div>
				</div>
				-->
				<div class="row bottom-footer text-center-mobile">
					<div class="col-sm-8">
						<p>&copy; 2018 All Rights Reserved. Powered by <a href="https://inguin.in/">Inguin</a></p>
					</div>
					<div class="col-sm-4 text-right text-center-mobile">
						<ul class="social-footer">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
			<!-- Holder for mobile navigation -->
			<div class="mobile-nav">
				<ul>
				</ul>
				<a href="#" class="close-link"><i class="arrow_up"></i></a>
			</div>
		</div>
    </div>


    <!-- Scripts -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/typewriter.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.onepagenav.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/mate-script.js"></script>
    <!--<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>-->
    <!--<script src="<?php echo base_url(); ?>assets/js/jquery.form-validator.min.js"></script>-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
</body>
</html>