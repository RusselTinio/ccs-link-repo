	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<meta name="author" content="codepixer">
		
		<meta name="description" content="">
	
		<meta name="keywords" content="">
		
		<meta charset="UTF-8">
		
		<title>CCS-Link | Job Listing</title>

		<link rel="icon" href="<?= base_url('assets/logo/ccs_logo.png') ?>" type="image/x-icon">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			
			<link rel="stylesheet" href="<?= base_url('style/jobPage/css/linearicons.css')?>">
			<link rel="stylesheet" href="<?= base_url('style/jobPage/css/font-awesome.min.css')?>">
			<link rel="stylesheet" href="<?= base_url('style/jobPage/css/bootstrap.css')?>">
			<link rel="stylesheet" href="<?= base_url('style/jobPage/css/magnific-popup.css')?>">
			<link rel="stylesheet" href="<?= base_url('style/jobPage/css/nice-select.css')?>">					
			<link rel="stylesheet" href="<?= base_url('style/jobPage/css/animate.min.css')?>">
			<link rel="stylesheet" href="<?= base_url('style/jobPage/css/owl.carousel.css')?>">
			<link rel="stylesheet" href="<?= base_url('style/jobPage/css/main.css')?>">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
					<?= $this->include('navbar') ?>    
			    </div>
			  </header>


			
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
								
							<form action="<?= base_url('Dash/Dash/jobFilter') ?>" class="serach-form-area" method="POST">
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-4 form-cols">
										<input type="text" class="form-control" name="keyword" placeholder="what are you looking for?">
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects">
										<input type="text" class="form-control" name="area" placeholder="Area, city or town">
										</div>
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects2">
											<select name="category">
												<option value="" selected>All Category</option>
												<option value="fulltime">full-time</option>
												<option value="part-time">part-time</option>
												<option value="inter">internship</option>
												
											</select>
										</div>										
									</div>
									<div class="col-lg-2 form-cols">
									    <button type="submit" class="btn btn-info" onclick="filter()">
									      <span class="lnr lnr-magnifier" ></span> Search
									    </button>
									</div>								
								</div>
							</form>	
							
						</div>											
					</div>
				</div>
			</section>
			
		
			
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								<li><a href="#">Recent</a></li>
								<li><a href="<?= base_url('Dash/Dash/jobFilter?category=full-time') ?>">Full Time</a></li>
								<li><a href="<?= base_url('Dash/Dash/jobFilter?category=intern') ?>">Intern</a></li>
								<li><a href="<?= base_url('Dash/Dash/jobFilter?category=part-time') ?>">part Time</a></li>
							</ul>		
							<?php foreach($jobdata as $data): ?>														
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="<?= base_url('upload/jobs/').$data['job_cover'] ?>" alt="" height="100" width="100" class="m-2">
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="#"><h4><?= $data['job_title'] ?></h4></a>
											<h6></h6>					
										</div>
									</div>
									<p>
										<?= $data['job_description'] ?>	
									</p>
									<h5 id="job-catogory">Job Nature:<?=  $data['job_category']?></h5>
									<p class="address"><span class="lnr lnr-map"></span> <?=$data['city'] ?> </p>
									<p class="address"><span class="lnr lnr-database"></span> <?= $data['job_salary'] ?></p>
									<p class="address"><span class="lnr lnr-database"></span> <?= $data['job_email'] ?></p>
									<p class="address"><span class="lnr lnr-database"></span> <?= $data['job_contacts'] ?></p>
									<p class="address"><span class="lnr lnr-database"></span> <?= $data['job_website'] ?></p>
								</div>
							</div>	
							<?php endforeach; ?>
							<a class="text-uppercase loadmore-btn mx-auto d-block" href="<?= base_url('Dash/Dash/job') ?>">Load More job Posts</a>

						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>Jobs by Location</h4>
								<ul class="cat-list">
									<?php foreach($jobAddress as $job):?>
									<li><a class="justify-content-between d-flex" href="<?= base_url('Dash/Dash/jobFilter?area=').$job['city'] ?>"><p><?= $job['city'] ?></p><span><?=$job['addressCount']?></span></a></li>
									<?php endforeach; ?>
								</ul>
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

			<script src="<?= base_url('style/jobPage/js/vendor/jquery-2.2.4.min.js') ?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?= base_url('style/jobPage/js/vendor/bootstrap.min.js') ?>"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="<?= base_url('style/jobPage/js/easing.min.js') ?>"></script>			
			<script src="<?= base_url('style/jobPage/js/hoverIntent.js') ?>"></script>
			<script src="<?= base_url('style/jobPage/js/superfish.min.js') ?>"></script>	
			<script src="<?= base_url('style/jobPage/js/jquery.ajaxchimp.min.js') ?>"></script>
			<script src="<?= base_url('style/jobPage/js/jquery.magnific-popup.min.js') ?>"></script>	
			<script src="<?= base_url('style/jobPage/js/owl.carousel.min.js') ?>"></script>			
			<script src="<?= base_url('style/jobPage/js/jquery.sticky.js') ?>"></script>
			<script src="<?= base_url('style/jobPage/js/jquery.nice-select.min.js') ?>"></script>			
			<script src="<?= base_url('style/js/parallax.min.js') ?>"></script>		
			<script src="<?= base_url('style/js/mail-script.js') ?>"></script>	
			<script src="<?= base_url('style/jobPage/js/main.js') ?>"></script>	
			<script src="<?= base_url('script/job.js') ?>"></script>
		</body>
	</html>



