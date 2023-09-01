<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="author" content="codepixer">
	
	<meta name="description" content="">

	<meta name="keywords" content="">
	
	<meta charset="UTF-8">
	
	<title>Mentorship</title>

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
			<div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                    <a href="home.html"><img src="<?= base_url('style/landingPage/img/logo.png') ?>" alt="" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href="<?= base_url('Dash/Dash')?>">Home</a></li>
                      <li><a href="<?= base_url('dash/dash/news') ?>">News and Events</a></li>
                      <li><a href="<?= base_url('dash/dash/job') ?>">Jobs</a></li>
                      <li><a href="<?= base_url('Dash/Mentorship') ?>">Mentoring</a></li>
                      <li><a href="form.html">Survey</a></li>
                      <li><a href="<?= base_url('Dash/profileController') ?>">Profile</a></li>
                      <img class="d-flex pl-3" src="<?=  base_url('style/landingPage/img/profile.png')?>" alt="Profile" />
                    </ul>
                  </nav>	    		
                </div>
			</div>
		  </header>

			
		<section class="post-area section-gap">
			<div class="container">
				<div class="row gutters-sm">
					<div class="col-md-4 mb-3">
					  <div class="card">
						<div class="card-body">
						  <div class="d-flex flex-column align-items-center text-center">
						  <?php if (!$profile['image']): ?>
							<img src="<?=base_url("upload/profile/no_profile.jpg")?>" heigh="200" width="200" class="mb-3">
						  <?php else: ?>
							<img src="<?= base_url('upload/profile/').$profile['image'] ?>" alt="Admin" class="rounded-circle" width="150">
						  <?php endif; ?>
							
							<div class="mt-3">
							  <h4><?= $userInfo['firstname']?>  <?= $userInfo['lastname'] ?></h4>
							  <p class="text-secondary mb-1"><?= $profile['title'] ?></p>
							  <p class="text-secondary mb-1"> "<?= $profile['description']?>"</p>
							  <details class="dropdown">
								<summary role="button">
									<button class="btn btn-primary">Print</button>
								  <a class="button btn btn-primary">
									<i class="fa fa-cog text-white"></i>
								 </a>
								</summary>
								<ul>
								  <li><a href="#deactivate" data-toggle="modal">Deactivate</a></li>
							  </ul>
							</details>
							 
							 
							  
							</div>
						  </div>
						</div>
					  </div>
					  <div class="card mt-3">
						<ul class="list-group list-group-flush">
						  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
							<span class="text-secondary"><?=$contact['website']?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
							<span class="text-secondary"><?= $contact['email'] ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
							<span class="text-secondary"><?= $contact['linkin'] ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
							<span class="text-secondary"><?= $contact['facebook'] ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
							<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
							<span class="text-secondary"><?= $contact['number'] ?></span>
						  </li>
						</ul>
					  </div>
					</div>
					<div class="col-md-8">
					  <div class="card mb-3">
						<div class="card-body">
							<div class="btn-text-right">
								<a href="#edit-profile" data-toggle="modal"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
							</div>
						  <div class="row">
							<div class="col-sm-3">
							  <h6 class="mb-0">Full Name</h6>
							</div>
							<div class="col-sm-9 text-secondary">
							  <?= $userInfo['firstname'] ?>
							  <?= $profile['middlename'] ?>
							  <?= $userInfo['lastname'] ?>
							  <?= $profile['extension'] ?>
							</div>
						  </div>
						  <hr>
						  <div class="row">
							<div class="col-sm-3">
							  <h6 class="mb-0">Gender</h6>
							</div>
							<div class="col-sm-9 text-secondary">
							  <?= $profile['gender'] ?>
							</div>
						  </div>
						  <hr>
						  <div class="row">
							<div class="col-sm-3">
							  <h6 class="mb-0">Civil Status</h6>
							</div>
							<div class="col-sm-9 text-secondary">
							  <?= $profile['civilStatus']?>
							</div>
						  </div>
						  <hr>
						  <div class="row">
							<div class="col-sm-3">
							  <h6 class="mb-0">Address</h6>
							</div>
							<div class="col-sm-9 text-secondary">
							  <?= $profile['address'] ?>
							</div>
						  </div>
						  <hr>
						  <div class="row">
							
						
						  </div>
						  <hr>
						</div>
							<div id="edit-profile" class="modal fade">
								<form action="" method="post">
									<div class="modal-dialog modal-confirm">
									<div class="modal-content">
										<div class="header">
										<h4 class="modal-title w-100">Edit Information</h4> 
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										</div>
										<div class="modal-body">
											<div class="formbold-mb-5">
											<label for="name" class="formbold-form-label"> Full name </label>
											<input type="text"name="firstname" id="name" placeholder="Enter First Name" value="<?= $userInfo['firstname'] ?>" class="formbold-form-input mb-5"/>
											<input type="text"name="lastname" id="name" placeholder="Enter Last Name" value="<?= $userInfo['lastname'] ?>" class="formbold-form-input mb-5"/>
											<input type="text"name="middlename" id="name" placeholder="Enter Middle Name" value="<?= $profile['middlename'] ?>" class="formbold-form-input mb-5"/>
											<input type="text"name="extension" id="name" placeholder="Enter extension" value="<?= $profile['extension'] ?>" class="formbold-form-input mb-5"/>
											</div>
											<div class="formbold-mb-5">
											<label for="phone" class="formbold-form-label"> Gender </label>
											<input
												type="text"
												name="gender"
												id="description"
												placeholder="gender"
												class="formbold-form-input"
												value="<?= $profile['gender'] ?>"
											/>
											</div>
											<div class="formbold-mb-5">
												<label for="phone" class="formbold-form-label"> Civil Status </label>
												<input
												type="text"
												name="civilStatus"
												id="description"
												placeholder="Enter Phone no."
												class="formbold-form-input"
												value="<?= $profile['civilStatus'] ?>"
												/>
											</div>
											<div class="formbold-mb-5">
												<label for="phone" class="formbold-form-label"> Address </label>
												<input
												type="text"
												name="address"
												id="description"
												placeholder="Enter Address"
												class="formbold-form-input"
												value="<?= $profile['address'] ?>"
												/>
											</div>
											
												<div class="modal-footer justify-content-center">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
													<input type="submit" class="btn btn-dark" value="Update" ></input>
												</div>
											</div>
										</div>
									</div>
							  </form>
							</div>
					  </div>
		
					  <div class="row gutters-sm">
						<div class="col-sm-6 mb-3">
						  <div class="card h-100">
							<div class="card-body">
								<div class="btn-text-right">
									<a href="#edit-event" data-toggle="modal"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button></a>
								</div>
							  <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Experience:</h6>
							<?php foreach($experience as $data): ?>
								<div class="row2">
									<div class="col-sm-3">
									<h6 class="mb-0 ">Position <a href="<?= base_url('Dash/ExpController/editExp/' .$data['id']) ?>" class="btn btn-primary me-5">edit</a>
										<a href="<?= base_url('Dash/ExpController/deleteExp/' .$data['id']) ?>" class="btn btn-danger">delete</a>
										</h6>
									
									</div>
									<div class="col-sm-9 text-secondary">
									<?= $data['position'] ?>
									</div>
								</div>
							 	<hr>
								<div class="row2">
									<div class="col-sm-3">
									<h6 class="mb-0">Organization</h6>
									</div>
									<div class="col-sm-9 text-secondary">
									<?= $data['org'] ?>
									</div>
								</div>
							 	<hr>
								<div class="row2">
									<div class="col-sm-3">
									<h6 class="mb-0">Year</h6>
									</div>
									<div class="col-sm-9 text-secondary">
									<?= $data['startYear'] ?>-<?= $data['endYear'] ?>
									</div>
								</div>
								<hr>
							<?php endforeach; ?>
							  
							</div>
						  </div>
						</div>
						<div class="col-sm-6 mb-3">
						  <div class="card h-100">
							<div class="card-body">
								<div class="btn-text-right">
									<a href="#edit-skills" data-toggle="modal"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button></a>
							</div>
							  <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Education:</h6>
							<?php foreach($education as $data): ?>
							  <div class="row2">
								<div class="col-sm-3">
								  <h6 class="mb-0">Program</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?= $data['program'] ?>
								</div>
							  </div>
							  <hr>
							  <div class="row2">
								<div class="col-sm-3">
								  <h6 class="mb-0">Degree</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								<?= $data['degree'] ?>
								</div>
							  </div>
							  <hr>
							  <div class="row2">
								<div class="col-sm-3">
								  <h6 class="mb-0">School</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								  <?= $data['school'] ?>
								</div>
							  </div>
							  <hr>
							  <div class="row2">
								<div class="col-sm-3">
								  <h6 class="mb-0">Year</h6>
								</div>
								<div class="col-sm-9 text-secondary">
								  <?= $data['startYear'] ?>-<?= $data['endYear'] ?>
								</div>
							  </div>
							  <hr>
							<?php endforeach; ?>
							</div>
						  </div>
						</div>
						<div id="edit-event" class="modal fade">
							<div class="modal-dialog modal-confirm">
							  <div class="modal-content">
								<div class="header">
								  <h4 class="modal-title w-100">Experience</h4> 
										  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<form action="<?= base_url('Dash/ExpController') ?>" method="post">
								<div class="modal-body">
									<div class="formbold-mb-5">
									  <label for="name" class="formbold-form-label"> Position </label>
									  <input
										type="text"
										name="position"
										id="name"
										placeholder="Enter Position"
										class="formbold-form-input"
									  />
									</div>
									<div class="formbold-mb-5">
									  <label for="phone" class="formbold-form-label"> Organization </label>
									  <input
										type="text"
										name="org"
										id="description"
										placeholder="Enter Organization"
										class="formbold-form-input"
									  />
									</div>
									<div class="formbold-mb-5">
										<label for="phone" class="formbold-form-label">Year Started </label>
										<input
										  type="number"
										  name="startYear"
										  id="description"
										  min="1900"
										  max="2050"
										  step="1"
										  class="formbold-form-input"
										/>
									  </div>
									  <div class="formbold-mb-5">
										<label for="phone" class="formbold-form-label"> Year  Ended</label>
										<input
										  type="number"
										  name="endYear"
										  id="description"
										  min="1900"
										  max="2050"
										  step="1"
										  class="formbold-form-input"
										/>
									  </div>
									  <div class="modal-footer justify-content-center">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
														<input type="submit" class="btn btn-dark" value="Add">
													  </div>
									</div>
								</form>
								</div>
							  </div>
							</div>
							<div id="edit-skills" class="modal fade">
								<div class="modal-dialog modal-confirm">
								  <div class="modal-content">
									<div class="header">
									  <h4 class="modal-title w-100">Skills</h4> 
											  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<form action="<?= base_url('Dash/EdController') ?>" method="post">
									<div class="modal-body">
									<div class="formbold-mb-5">
										  <label for="name" class="formbold-form-label"> Program</label>
										  <input
											type="text"
											name="program"
											id="name"
											placeholder="Enter Program"
											class="formbold-form-input"
										  />
										</div>
										<div class="formbold-mb-5">
										  <label for="name" class="formbold-form-label"> Degree </label>
										  <input
											type="text"
											name="degree"
											id="name"
											placeholder="Enter Position"
											class="formbold-form-input"
										  />
										</div>
										<div class="formbold-mb-5">
										  <label for="phone" class="formbold-form-label"> School </label>
										  <input
											type="text"
											name="school"
											id="description"
											placeholder="Enter Organization"
											class="formbold-form-input"
										  />
										</div>
										<div class="formbold-mb-5">
											<label for="phone" class="formbold-form-label"> Year Started </label>
											<input
											  type="number"
											  name="startYear"
											  id="description"
											  min="1900"
											  max="2050"
											  step="1"
											  
											  class="formbold-form-input"
											/>
										  </div>
										  <div class="formbold-mb-5">
											<label for="phone" class="formbold-form-label"> Year Ended</label>
											<input
											  type="number"
											  name="endYear"
											  id="description"
											  min="1900"
											  max="2050"
											  step="1"
											  class="formbold-form-input"
											/>
										  </div>
										  
										  <div class="modal-footer justify-content-center">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
															<input type="submit" class="btn btn-dark" value="Add">
														  </div>
										</div>
									</form>
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

			 <!--Deactivate-->
			 <div id="deactivate" class="modal fade">
				<div class="modal-dialog modal-confirm">
				  <div class="modal-content">
					<div class="header">                    
					  <h4 class="modal-title w-100">Are you sure to deactivate this account?</h4>   
							  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
	  
						<div class="formbold-mb-5">
						  <label for="name" class="formbold-form-label"> Enter password for confirmation. </label>
						  <input
							type="text"
							name="name"
							id="name"
							placeholder="Enter Password"
							class="formbold-form-input"
						  />
						</div>
						  <div class="modal-footer justify-content-center">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
											<button type="button" class="btn btn-danger">Confirm</button>
										  </div>
						</div>
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
		<script src="js/parallax.min.js"></script>
		<script src="js/mail-script.js"></script>
		
	</body>
</html>