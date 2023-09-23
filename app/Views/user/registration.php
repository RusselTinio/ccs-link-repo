<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="author" content="codepixer">
	
	<meta name="description" content="">

	<meta name="keywords" content="">
	
	<meta charset="UTF-8">
	
	<title>CCSLINK</title>

	<link rel="icon" href="<?= base_url('assets/logo/ccs_logo.png') ?>" type="image/x-icon">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/linearicons.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/font-awesome.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/bootstrap.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/magnific-popup.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/nice-select.css') ?>">					
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/animate.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/owl.carousel.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/main.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/landingPage/css/style.css') ?>">
		<link rel="stylesheet" type="text" href="<?= base_url('style/landingPage/css/owl.carousel.min.css') ?>">
	</head>
	<body>

		  <header id="header" id="home">
			<div class="container">
				<div class="row align-items-center justify-content-between d-flex">
				  <div id="logo">
					<a href="landingpage.html"><img src="landingPage/img/logo.png" alt="" title="" /></a>
				  </div>
				  <nav id="nav-menu-container">
					<ul class="nav-menu">
					  <li class="menu-active"><a href="<?= base_url('Home') ?>">Home</a></li>
					  <li><a href=" ">About Us</a></li> 
					  <li><a href="<?= base_url('Login/Auth') ?>">Log In</a></li>  
					  <li class="text text-light">|</li>      
					  <li><a href="registrationforUser.html">Sign Up</a></li>      				          
					</ul>
				  </nav>	    		
				</div>
			</div>
		  </header>


		
          <section class="banner-area2 relative" id="home">
            <div class="overlay2 overlay-bg2"></div>
            <div class="container">
                <div class="row">
                    <div class="banner-content2 col-lg-12 pt-5">
                            <div class="banner-title2 text-uppercase">
                            </div>
                        </div>
                </div>
            </div>
        </section>

		<section class="popular-post-area pt-1">
            <div class="ex-form-1 pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3">
                            <div class="text-box mt-1 mb-1">
                                <p class="mb-2">Fill out the form below to sign up for the service. Already signed up? Then just <a class="blue" href="<?= base_url('Login/Auth') ?>">Log In</a></p>
    
                                <!-- Sign Up Form -->
                                <form action="<?= base_url('Login/Auth/saveUser') ?>" method="post">
									<?= csrf_field() ?>
									<?php if(!empty(session()->getFlashdata('fail'))):?>
                                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                                    <?php endif?>
                                    <div class="mb-2 form-floating">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="First Name" name="firstname">
										<span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'firstname'):'' ?>       
                                        </span>
                                    </div>
                                    <div class="mb-2 form-floating">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" name="lastname">
										<span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'lastname'):'' ?>       
                                        </span>
                                    </div>
                                    <div class="mb-2 form-floating">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username"> 
										<span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'username'):'' ?>       
                                        </span>
                                    </div>
                                    <div class="mb-2 form-floating">
                                        <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password">
										<span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'password'):'' ?>       
                                        </span>
                                    </div>
									<div class="mb-2 form-floating">
                                        <input type="password" class="form-control" id="floatingInput" placeholder="Confirm Password" name="cpassword">
										<span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'cpassword'):'' ?>       
                                        </span>
                                    </div>
                                    <div class="mb-2 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="privacy">
                                        <label class="form-check-label" for="exampleCheck1">I agree with the site's stated <a href="privacy.html" data-toggle="modal" data-target="#myModalPrivacy">Privacy Policy</a> and <a href="terms.html" data-toggle="modal" data-target="#myModalTerm">Terms & Conditions</a></label><br>
										<span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'privacy'):'' ?>       
                                        </span>
                                    </div>
									<input type="submit" class="form-control-submit-button" value="Register">
                                </form>
                                <!-- end of sign up form -->
    
                            </div> <!-- end of text-box -->
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of ex-basic-1 -->
            <!-- end of basic -->
        </section>
  <!-- Privacy policy modal -->
  <div id="myModalPrivacy" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <h1>Privacy Agreement </h1><br>
		<p>Last Update: September 2023</p>
		<p>1. Introduction
Welcome to “CCSLINK: DATA-DRIVEN ALUMNI TRACER WEB APPLICATION”. 
This Privacy Agreement outlines how we collect, use, and protect your personal information when 
you use our services. By accessing or using the System, you consent to the practices described in this Privacy Agreement.</p><br>
<p>2. Information We Collect
2.1. Personal Information: We may collect personal information, including but not limited to names, contact information (email addresses, phone numbers, mailing addresses), academic history, employment history, and other data provided voluntarily by users.
2.2. Automatically Collected Information: We may collect certain information automatically when you use the System, including IP addresses, browser type, device information, and usage data. We may use cookies and similar tracking technologies to collect this information.</p><br>
<p>3. How We Use Your Information
3.1. Alumni Services: We use your personal information to provide alumni-related services, including alumni directories, news and events updates, career or job opportunities, and communication with fellow alumni.
3.2. System Improvement: We may use aggregated and anonymized data to improve the System's features, functionality, and user experience.</p><br>
<p>4. Data Security
We implement reasonable security measures to protect your personal information from unauthorized access, disclosure, or alteration. However, no method of data transmission over the Internet or electronic storage is entirely secure, so we cannot guarantee absolute security.</p><br>
<p>5. Your Privacy Choices
5.1. Access and Update: You may access, update, or correct your personal information through your account settings.</p><br>
<p>6. Changes to this Privacy Agreement
We may update this Privacy Agreement from time to time. We will notify you of any material changes by email or through the System. Your continued use of the System after such modifications constitutes your acceptance of the updated Privacy Agreement.</p><br>
<p>7. Contact Information
If you have any questions or concerns about this Privacy Agreement or our data practices, please contact us at dhvsuccslink@gmail.com.</p><br>
<p>8. Governing Law
This Privacy Agreement is governed by and construed in accordance with the laws of The Data Privacy Act of 2012, without regard to its conflict of law principles.
By using the System, you agree to the terms of this Privacy Agreement.</p><br>


    <!-- Modal terms and conditions-->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="myModalTerm" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <h1>Terms and Conditions </h1><br>
		<p>Last Update: September 2023</p>
		<p>1. Acceptance of Terms
1.1. Welcome to “CCSLINK: DATA-DRIVEN ALUMNI TRACER WEB APPLICATION”. By accessing or using the System, you agree to comply with and be bound by these Terms and Conditions and receive an email for a survey every 3 months. If you do not agree to these terms, please do not use the System.</p><br>
<p>2. Eligibility
2.1. You must be an Alumnus of the college and use your own Student ID/Number as your username.
2.2. You must be a registered user of the System and meet the eligibility criteria to access and use certain features and services.</p><br>
<p>3. User Registration
3.1. You may be required to register your DHVSU account to access specific features of the System. You agree to provide accurate, current, and complete information during the registration process.
3.2. You are responsible for maintaining the confidentiality of your account credentials and for any activities conducted through your account.</p><br>
<p>4. Use of the System
4.1. You agree to use the System in compliance with all applicable laws, regulations, and these Terms and Conditions.
4.2. You may not use the System for any unlawful, harmful, or unauthorized purposes, including but not limited to harassment, spamming, or distributing malware.</p><br>
<p>5. User Content
5.1. By submitting User Content, you grant CCSLINK a non-exclusive, royalty-free, worldwide, perpetual, and sublicensable right to use, reproduce, modify, adapt, publish, translate, distribute, and display your User Content.
5.3. You are solely responsible for the accuracy, legality, and appropriateness of your User Content.</p><br>
<p>6. Privacy
6.1. Your use of the System is subject to our Privacy Agreement, which governs the collection, use, and protection of your personal information.</p><br>
<p>7. Intellectual Property
7.1. The System and its content, including but not limited to text, graphics, logos, icons, images, audio, and video, are protected by intellectual property laws. You may not reproduce, distribute, or use any of the content without prior written consent.</p><br>
<p>8. Termination
8.1. CCSLINK reserves the right to suspend or terminate your access to the System at its discretion, without notice, if you violate these Terms and Conditions.</p><br>
<p>9. Disclaimers
9.1. The System is provided "as is" without warranties of any kind, either express or implied.</p><br>
<p>10. Limitation of Liability
10.1. CCSLINK shall not be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in connection with your use of the System.</p><br>
<p>11. Changes to Terms and Conditions
<p>12. Governing Law
12.1. These Terms and Conditions are governed by and construed in accordance with the laws of The Data Privacy Act of 2012, without regard to its conflict of law principles.</p><br>
<p>13. Contact Information
13.1. If you have any questions or concerns about these Terms and Conditions, please contact us at dhvsuccslink@gmail.com</p><br>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>































				
			<footer class="footer-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>Contact Info</h6>
								<ul class="footer-nav">
									<li><a href="#">Lorem ispun</a></li>
									<li><a href="#">Lorem ispun</a></li>
									<li><a href="#">Lorem ispun</a></li>
									<li><a href="#">Lorem ispun</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Send us feedback</h6>
								
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Type here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type here '" required="" type="feedback">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div> 
										
											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Submit</button>
											</div> 
										</div>		
										<div class="info"></div>
									</form>
								</div>		
							</div>
						</div>					
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
				
			</footer>
					

			<script src="<?= base_url('style/landingPage/js/vendor/jquery-2.2.4.min.js') ?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?= base_url('style/landingPage/js/vendor/bootstrap.min.js') ?>"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="<?= base_url('style/landingPage/js/easing.min.js') ?>"></script>			
			<script src="<?= base_url('style/landingPage/js/hoverIntent.js') ?>"></script>
			<script src="<?= base_url('style/landingPage/js/superfish.min.js') ?>"></script>	
			<script src="<?= base_url('style/landingPage/js/jquery.ajaxchimp.min.js') ?>"></script>
			<script src="<?= base_url('style/landingPage/js/jquery.magnific-popup.min.js') ?>"></script>	
			<script src="<?= base_url('style/landingPage/js/owl.carousel.min.js') ?>"></script>			
			<script src="<?= base_url('style/landingPage/js/jquery.sticky.js') ?>"></script>
			<script src="<?= base_url('style/landingPage/js/jquery.nice-select.min.js') ?>"></script>			
			<script src="<?= base_url('style/landingPage/js/parallax.min.js') ?>"></script>		
			<script src="<?= base_url('style/landingPage/js/mail-script.js') ?>"></script>	
			<script src="<?= base_url('style/landingPage/js/main.js') ?>"></script>
			<script src="<?= base_url('style/landingPage/js/donation.js') ?>"></script>
		</body>
	</html>



