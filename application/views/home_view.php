

<div class="preloader">
		<img src="<?php  echo base_url(); ?>assets/img/loader.gif" alt="Preloader image">
</div>


	<?php 

		if($this->session->flashdata('login_success')){
			echo '<div class="alert alert-success alert-dismissible" role="alert">';
				echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				echo $this->session->flashdata("login_success");
			echo '</div>';
		}	

		if($this->session->flashdata('registration_success')){
			echo '<div class="alert alert-success alert-dismissible" role="alert">';
				echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				echo $this->session->flashdata('registration_success');
			echo '</div>';
		}

	?>

	<?php 

		if($this->session->flashdata('login_failed')){
			echo '<div class="alert alert-danger alert-dismissible" role="alert">';
				echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				echo $this->session->flashdata("login_failed");
			echo "</div>";
		}	
		if($this->session->flashdata('registration_failed')){
			echo '<div class="alert alert-danger alert-dismissible" role="alert">';
				echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
				echo $this->session->flashdata("registration_failed");
			echo "</div>";
		}	

	?>

	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							
							<h1 class="white typed">Mind Activation Through Education.</h1>
							<span class="typed-cursor">|</span>
							<p>A Mental Health Club to create an empowered,
							healthy mindset for the students to help them develop
							their cognitive and sociocultural skills in addition to
							excellence in academics and extra curricular activities.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Upcoming Events</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Wellness club</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">psychosocial development</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">spiritual well-being</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Early Exercise</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Importance of culture</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Anger management</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Antibully workshop</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Relationship management</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Substance abuse prevention</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Premium Membership</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">Register Today</h4>
							<h4 class="white heading small-pt">20% Discount</h4>
							<!-- <a href="#" class="btn btn-white-fill expand">Register</a> -->
							<a href="#" data-toggle="modal" data-target="#user-type-modal" class="btn btn-white-fill expand">Register</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Happy Clients</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">I couldn't be more happy with the results!</h4>
								<h5 class="white heading light author">Rakesh Malhotra</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">I can't believe how much better I feel!</h4>
								<h5 class="white heading light author">Abhishek Chougale</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">Incredible transformation and I feel so Confident!</h4>
								<h5 class="white heading light author">Souvik Banerjee</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<section id="objective" class="section section-padded blue-bg">
		<div class="container">
			<div class="row text-center title section-header">
				<h2>Objectives</h2>
				<h4 class="light-white light">Achieve the best results with our wide variety of training options!</h4>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							
							<h4 class="white light">To develop and promote young mind’s own abilities to cope with the normal stresses of life for their healthy cognitive and psychosocial development.</h4>
							<h4 class="light-white light">#health #training #counselling</h4>
						</div>
						<div class="item text-center">
							
							<h4 class="white light">To impart positive sense of emotional and spiritual well-being that respects the importance of culture, interconnections and personal dignity.</h4>
							<h4 class="light-white light">#health #training #counselling</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Focus of MATE</h2>
				<h4 class="light muted">The MATE  intends to develop program on the felt needs and concerns of the youth on the basis of biopsychosocial model. The  program will be age specific, flexible and culturally appropriate. </h4>
				<h4 class="light muted">The focus on the end-users as partners for mental health issues, problems and concerns of child/adolescents/youth  including early identification of the problems.</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php  echo base_url(); ?>assets/img/icons/heart-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">How to stay healthy/wanna stay healthy/ defeat the illness not willingness</h4>
						<p class="description">Healthy lifestyles (Nutrition, physical activity, stress management, sleep)</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php  echo base_url(); ?>assets/img/icons/guru-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Let's visualise the brain and behaviour</h4>
						<p class="description">Brain model of thinking and behavior with audiovisual program</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php  echo base_url(); ?>assets/img/icons/weight-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Do technology triggers your brain or you triggers the technology</h4>
						<p class="description">Technology handling.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php  echo base_url(); ?>assets/img/icons/heart-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Let's abreast/or let's abreast through bioscope</h4>
						<p class="description">Mini Theatre for awareness and healthy thinking</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php  echo base_url(); ?>assets/img/icons/guru-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">How to/Graze the rage</h4>
						<p class="description">Anger management</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php  echo base_url(); ?>assets/img/icons/weight-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">To path the pathetic</h4>
						<p class="description">Antibully workshop.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php  echo base_url(); ?>assets/img/icons/heart-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">How to paddle the pedagogue.</h4>
						<p class="description">Teachers/counsselor sensitization.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php  echo base_url(); ?>assets/img/icons/guru-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">How to board the boards</h4>
						<p class="description">Study and exam skills.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php  echo base_url(); ?>assets/img/icons/weight-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Rationalize your relation</h4>
						<p class="description">Relationship management.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php  echo base_url(); ?>assets/img/icons/weight-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Check the threat before it's thunder</h4>
						<p class="description">Substance abuse prevention.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="cut cut-bottom"></div> -->
	</section>
	
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row text-center title section-header">
				<h2>Why MATE</h2>
				<h4 class="light-white light"></h4>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							
							<h4 class="white light">There is growing evidence of increased psychosocial problems in children and adolescents especially behavioral problems and self harm.</h4>
							
						</div>
						<div class="item text-center">
							
							<h4 class="white light">MNSUD(Mental Neurological and Substance use Disorder) major public health problems, 50% of behavioral and psychosocial problems have their onset during child/adolescence period.</h4>
							
						</div>
						<div class="item text-center">
							
							<h4 class="white light">Current Mental Health Program focus on early identifications and treatment of Disorder , not on positive mental health. Disorders are tip of iceberg</h4>
							
						</div>
						<div class="item text-center">
							
							<h4 class="white light"> Academic competition, bullying, school dropout, violence, sexual permissiveness, drug abuse, are on the rise among the youth. </h4>
							
						</div>
						<div class="item text-center">
							
							<h4 class="white light">Most of the risk taking behaviors and psychosocial problems are preventable through awareness and developing of coping mechanisms.</h4>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
	</section>
	
	
	<section id="contact-us" class="section gray-bg">
	
		<div class="container">
			<div class="row title text-center">
				<div class="col-md-5 col-md-offset-4">
					<h2 class="margin-top">Contact Us</h2>
				</div>
				
			</div>
			<div class="row">
				<!-- <div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('<?php  echo base_url(); ?>assets/img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div>
						<img src="<?php  echo base_url(); ?>assets/img/team/team3.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Ben Adamson</h4>
							<h5 class="muted regular">Fitness Instructor</h5>
						</div>
						<button data-toggle="modal" data-target="#user-type-modal" class="btn btn-blue-fill">Sign Up Now</button>
					</div>
				</div> -->
				<div class="col-md-5 col-md-offset-4" >
					<div class="team text-center">
						<div class="cover" style="background:url('<?php  echo base_url(); ?>assets/img/team/team-cover2.jpg'); background-size:cover;">
							
						</div>
						<img src="<?php  echo base_url(); ?>assets/img/team/team1.jpg" alt="Team Image" class="avatar">
						<div class="title">
<pre class="contact-info">	
ADDRESS
D-28, LGF, Lajpat Nagar 1, New Delhi - 110024
011 298 11 428
+91 9891 00 9523

mate@mate.org.in
</pre>
						</div>
						<a href="tel:+919891009523" class="btn btn-blue-fill ripple">Call Us</a>
					</div>
				</div>
				<!-- <div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('<?php  echo base_url(); ?>assets/img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div>
						<img src="<?php  echo base_url(); ?>assets/img/team/team2.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>John Phillips</h4>
							<h5 class="muted regular">Personal Trainer</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#user-type-modal" class="btn btn-blue-fill ripple">Sign Up Now</a>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- 
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Pricing</h2>
				<h4 class="light white">Choose your favorite pricing plan and sign up today!</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h4 class="white">Yoga Pilates</h4>
							<h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#user-type-modal" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/pricing2.jpg">
							<h4 class="white">Cardio Training</h4>
							<h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#user-type-modal" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	-->
	
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row text-center title section-header">
				<h2>Deliverables</h2>
				
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">One workshop program for school Counsellors/year.
								Mental health and wellness.
								Biopsychosocial model of wellness
								Common behavioural issues  & significance
							</h4>
							<h4 class="light-white light">#health #training #counselling</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">Two Workshops for Students,
								Content : health, food diet, brain function, social brain emotional brain, mind body interaction, society, family</h4>
							<h4 class="light-white light">#health #training #counselling</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must meditate.</h4>
							<h4 class="light-white light">#health #training #counselling</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">Essay Competition/Mate of the month/yea, Audio-visual and theatre based program for promotion of healthy cognitive development/Mind Body integration</h4>
							<h4 class="light-white light">#health #training #counselling</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">Access to age specific content of our all program including MATE helpline for crisis resolution</h4>
							<h4 class="light-white light">#health #training #counselling</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">One Visit to Community for School Representatives</h4>
							<h4 class="light-white light">#health #training #counselling</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- 
		User Type Modal
	 -->
	<div class="modal fade" data-backdrop="static" id="user-type-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link" data-dismiss="modal"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Tell us who you are ?</h3>
				<h3>&nbsp;</h3>
				<div class="btn-group" data-toggle="buttons">
					<p class="btn btn-primary radio-button active">
						<input type="radio" name="userType" id="Student" autocomplete="off" checked value="student"> Student
					</p>
					<p class="btn btn-primary radio-button">
						<input type="radio" name="userType" id="School" autocomplete="off" value="school"> School
					</p>
					
				</div>	
				<div class="modal-footer">
					<button id="go-button" type="button" class="btn btn-success bg-success">Go</button>
				</div>
			</div>
		</div>
	</div>


	
	<!-- 
		Login Modal
	 -->

	<div class="modal fade" data-backdrop="static" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link" data-dismiss="modal"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Log In</h3>

					<?php $attributes = array('id'=>'login_form', 'class'=>'popup-form'); ?>

					<?php echo form_open('users/login', $attributes); ?>

						<div class="form-group">
							<input name="username" class="form-control" id="username" data-validation="length" data-validation-length="min3" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<input type="password" name='password' class="form-control" id="password" data-validation="length" data-validation-length="min3"  placeholder="Enter Password">
						</div>

						<button type="submit" name='submit' class="btn btn-submit">Submit</button>

					<?php echo form_close(); ?>

			</div>
		</div>
	</div>


	<!-- a. School Name
		b. Father's Name
		c. DOB
		d. Gender
		e. Contact Number
		f. Email Id
		g. Address 
	-->
	<div class="modal fade" data-backdrop="static" id="student-registration-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link" data-dismiss="modal"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Sign Up</h3>
				
                <?php $attributes = array('id'=>'student-register-form', 'class'=>'popup-form'); ?>
                
				<?php echo form_open('users/register', $attributes); ?>

					<div class="col-md-6">
						<input type="hidden" name="registration-form" value="student">
						<div>
                            <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" id="username" data-validation="length" data-validation-length="min3" placeholder="Enter Username">
                        </div>
                        <div>
                            <input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" class="form-control" id="first_name" data-validation="length" data-validation-length="min3" placeholder="Enter First Name">
						</div>
                        <div>
                            <input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" class="form-control" id="last_name" data-validation="length" data-validation-length="min3" placeholder="Enter Last Name">
						</div>
                        <div>
                            <input type="text" name="father_name" value="<?php echo set_value('father_name'); ?>" class="form-control" id="father_name" data-validation="length" data-validation-length="min3" placeholder="Enter Your Father's Name">
                        </div>
						<div>
                            <input type="date" name="dob" value="<?php echo set_value('dob'); ?>" class="form-control" id="dob" data-validation="required" placeholder="Enter Your Date of Birth">
                        </div>
                        						
						<!--<div class="dropdown gender-dropdown">
							<input type="hidden" name="gender"/>
                            <button id="gender-button" data-validation="required" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Gender
							</button>
							<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="gender-label">
								<li class="animated lightSpeedIn"><a href="#">Male</a></li>
								<li class="animated lightSpeedIn"><a href="#">Female</a></li>
							</ul>
						</div>-->
                        <div class="dropdown gender-dropdown">
                            <input type="hidden" name="gender"/>
                            <select id="gender-select" name="answer" class="form-control form-white dropdown" data-toggle="dropdown" data-validation="required">
                                <option class="dropdown-menu animated fadeIn" value="">Gender</option>
                                <option class="animated lightSpeedIn" value="Male">Male</option>
                                <option class="animated lightSpeedIn" value="Female">Female</option>
                            </select>
                        </div>
						
					</div>
					<div class="col-md-6">
						<div>
                            <input type="phone" name="phone_number" value="<?php echo set_value('phone_number'); ?>" class="form-control" id="phone_number" data-validation="number length" data-validation-length="10" placeholder="Enter Your Contact Number">
                        </div>
                        <div>
                            <input type="email" name="email_id" value="<?php echo set_value('email_id'); ?>" class="form-control" id="email_id" data-validation="email" placeholder="Enter Email Id">
                        </div>
                        <div>
						    <input type="text" name="school_addr" value="<?php echo set_value('school_addr'); ?>" class="form-control" id="school_addr" data-validation="length" data-validation-length="min3" placeholder="Enter Your School Address">
                        </div>
                        <div>
						    <input type="password" name='pass_confirmation' class="form-control" id="pass_confirmation" data-validation="strength" data-validation-strength="2" placeholder="Enter Password">
                        </div>
                        <div>
                            <input type="password" name='pass' class="form-control" id="pass" data-validation="confirmation" placeholder="Confirm Password">
                        </div>    
					</div>

					<button type="submit" class="btn btn-submit">Submit</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>


	<!-- 
		a. Name of the School
        b. Contact Person
        c. Contact Number
        d. Email Id
        e. Address
        f. Affiliated
        g. Total Number of Students
        h. Website
	 -->
	<div class="modal fade" data-backdrop="static" id="school-registration-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link" data-dismiss="modal"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Sign Up</h3>
				<?php $attributes = array('id'=>'school-register-form', 'class'=>'popup-form'); ?>
                
				<?php echo form_open('users/register', $attributes); ?>
					<div class="col-md-6">
						<input type="hidden" name="registration-form" value="school">
                        <div>
						    <input type="text" name="username" class="form-control" id="username" data-validation="length" data-validation-length="min3" placeholder="Enter Username">
                        </div>
                        <div>
						    <input type="text" name="contact_person" class="form-control" id="contact_person" data-validation="length" data-validation-length="min3" placeholder="Enter Contact Person Name">
                        </div>
                        <div>
						    <input type="phone" name="contact_number" class="form-control" id="contact_number" data-validation="number length" data-validation-length="10" placeholder="Enter Your Contact Number">
						</div>
                        <div>
                            <input type="email" name="email_id" class="form-control" id="email_id" data-validation="email" placeholder="Enter Email Id">
						</div>
                        <div>
                            <input type="text" name="school_addr" class="form-control" id="school_addr" data-validation="length" data-validation-length="min3" placeholder="Enter Your School Address">
						</div>
					</div>
					<div class="col-md-6">
						<div>
                            <input type="number" name="school_strength" class="form-control" id="school_strength" data-validation="number required" placeholder="Total Number of Students">
                        </div>
                        <div>
				            <input type="url" name="school_website" class="form-control" id="school_website" data-validation="url" placeholder="Your School Website Address">
						</div>
                        <div>
						    <input type="password" name='pass_confirmation' class="form-control" id="pass_confirmation" data-validation="strength" data-validation-strength="2" placeholder="Enter Password">
						</div>
                        <div>
                            <input type="password" name='pass' data-validation="confirmation" class="form-control" id="pass" placeholder="Confirm Password">
                        </div>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>

	


