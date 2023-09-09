<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="author" content="codepixer">
	
	<meta name="description" content="">

	<meta name="keywords" content="">
	
	<meta charset="UTF-8">
	
	<title>CCS-Link | News and Events</title>

	<link rel="icon" href="<?= base_url('assets/logo/ccs_logo.png') ?>" type="image/x-icon">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			
			<link rel="stylesheet" href="<?= base_url('style/donationPage/css/linearicons.css') ?>">
			<link rel="stylesheet" href="<?= base_url('style/donationPage/css/font-awesome.min.css') ?>">
			<link rel="stylesheet" href="<?= base_url('style/donationPage/css/bootstrap.css') ?>">
			<link rel="stylesheet" href="<?= base_url('style/donationPage/css/magnific-popup.css') ?>">
			<link rel="stylesheet" href="<?= base_url('style/donationPage/css/nice-select.css') ?>">					
			<link rel="stylesheet" href="<?= base_url('style/donationPage/css/animate.min.css') ?>">
			<link rel="stylesheet" href="<?= base_url('style/donationPage/css/owl.carousel.css') ?>">
			<link rel="stylesheet" href="<?= base_url('style/donationPage/css/main.css') ?>">
			<link rel="stylesheet" href="<?= base_url('style/donationPage/css2/style.css') ?>">

	</head>
	<body>

		<header id="header" id="home">
		    <div class="container">
				<?= $this->include('navbar') ?>    
		    </div>
		</header>

		<section id="blog" class="blog">
				<div class="container" data-aos="fade-up">
		  
				  <div class="row">
		  
					<div class="col-lg-8 entries">
						<?php foreach($newsData as $data): ?>
						<article class="entry">
		  
						<div class="entry-img">
						  <img src="<?= base_url('upload/news').$data['news_image'] ?>" alt="" class="img-fluid">
						</div>
		  
						<h2 class="entry-title">
							<?= $data['news_title'] ?>	
						</h2>
		  
						<div class="entry-meta">
						  <ul>
							<ul>
								<li class="d-flex align-items-center"><?= $data['news_date'] ?></li>
							  </ul>
						  </ul>
						</div>
		  
						<div class="entry-content">
						  <p>
								<?= $data['news_desc'] ?>
						 </p>
						  <div class="read-more">
							<a href="newsandevents.html">Read More</a>
						  </div>
						</div>
		  
					  </article><!-- End blog entry -->
						<?php endforeach; ?>
					  
		  
					</div><!-- End blog entries list -->
		  
					<div class="col-lg-4">
		  
					  <div class="sidebar">
		  
					
							
						<h3 class="sidebar-title">Recent Posts</h3>
						
							<div class="sidebar-item recent-posts">
								<div class="post-item clearfix">
								
								</div>
							</div><!-- End sidebar recent posts-->
						
							<div class="sidebar-item recent-posts">
							<div class="post-item clearfix">
								<img src="<?= base_url('style/donationPage/imgs/blog2.jpg') ?>" alt="">
								<h4><a href="newsandevents.html">Et dolores corrupti quae illo quod dolor</a></h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>
			
							</div><!-- End sidebar recent posts-->
						
					  </div><!-- End sidebar -->
		  
					</div><!-- End blog sidebar -->
		  
				  </div>
		  
				</div>
			  </section>
				
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



