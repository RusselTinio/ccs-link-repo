<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="author" content="codepixer">
	
	<meta name="description" content="">

	<meta name="keywords" content="">
	
	<meta charset="UTF-8">
	
	<title>CCS-Link | Profile</title>

	<link rel="icon" href="<?= base_url('assets/logo/ccs_logo.png') ?>" type="image/x-icon">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/linearicons.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/font-awesome.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/bootstrap.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/magnific-popup.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/nice-select.css') ?>">                  
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/animate.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/main.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/swiper-bundle.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/style/style/profilePage/css/swiper.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/profilePage/css/profile-css.css') ?>">
		<link rel="stylesheet" href="<?= base_url('style/modal.css') ?>">

	</head>
	<body>
		<header id="header" id="home">
			<div class="container">
				<?= $this->include('navbar') ?>    
			</div>
		</header>


		<section class="post-area section-gap">
			<div class="container">
				<div class="row gutters-sm">
					
					<div class="col-md-8">
						<div class="card mb-3">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped table-borderless">
										<thead>
											<tr>
												<th>Activity</th>
												<th>Time Stamp</th>
											</tr>  
										</thead>
									<tbody>
										<?php foreach ($auditData as $data): ?>
										<tr>
											<td><?=  $data['activity']?></td>
											<td><?= $data['timestamp']?></td>
										</tr>
										<?php endforeach; ?>
								</tbody>
								</table>
								<br>
							
							</div>
							</div>
						</div>		
					</div>
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

			
			  </div>    
			
		</footer>
				

		<script src="<?= base_url('style/profilePage/js/vendor/jquery-2.2.4.min.js') ?>"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="<?= base_url('style/profilePage/js/vendor/bootstrap.min.js') ?>"></script>          
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="<?= base_url('style/profilePage/js/easing.min.js') ?>"></script>            
		<script src="<?= base_url('style/style/profilePage/js/hoverIntent.js') ?>"></script>
		<script src="<?= base_url('style/profilePage/js/superfish.min.js') ?>"></script> 
		<script src="<?= base_url('style/profilePage/js/jquery.ajaxchimp.min.js') ?>"></script>
		<script src="<?= base_url('style/profilePage/js/jquery.magnific-popup.min.js') ?>"></script> 
		<script src="<?= base_url('style/profilePage/js/owl.carousel.min.js') ?>"></script>          
		<script src="<?= base_url('style/profilePage/js/jquery.sticky.js') ?>"></script>
		<script src="<?= base_url('style/profilePage/js/jquery.nice-select.min.js') ?>"></script>
		<script src="<?= base_url('style/profilePage/js/main.js') ?>"></script>  
		<script src="<?= base_url('style/profilePage/js/swiper-bundle.min.js') ?>"></script> 
		<script src="<?= base_url('style/profilePage/js/script.js') ?>"></script>
		<script src="<?= base_url('style/js/parallax.min.js')?>"></script>
		<script src="<?= base_url('style/js/mail-script.js')?>"></script>
		<script src="<?= base_url('script/profile.js')?>"></script>
		
	</body>
</html>