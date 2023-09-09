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
        <link href="<?= base_url('style/assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('style/landingPage/css/swiper-bundle.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('style/landingPage/css/swiper.css') ?>">
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
        <link rel="stylesheet" href="<?= base_url('style/landingpage.css') ?>"/>
    </head>
    
    <body>
          <header id="header" id="home">
            <div class="container">
                <?= $this->include('navbar') ?> 
                <div class="search-bar">
                    <div class="row height d-flex justify-content-center align-items-center">
                      <div class="col-md-6">
                        <div class="form">
                          <i class="fa fa-search"></i>
                          <input type="text" class="form-control form-input" placeholder="Search anything...">
                          <span class="left-pan"><i class="fa fa-microphone"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </header>
        
          <section id="hero">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url(<?= base_url('style/landingPage/image/CCSLINK-logo-bg.png') ?>);">
                  <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                      <h2>Welcome, <span><?= $userInfo['firstname'] ?>  <?= $userInfo['lastname'] ?></span></h2>
                      <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="popular-post-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="active-popular-post-carusel">	
                        <?php foreach($newsData as $data): ?>
                            <div class="single-popular-post d-flex flex-row">
                                <div class="thumb">
                                    <img src="landingPage/image/pic_2.png" alt="">
                                    <a class="btns text-uppercase" href="<?=base_url('Dash/Dash/news') ?>">view more</a>
                                </div>
                                <div class="details">
                                    <a href="#"><h4><?= $data['news_title'] ?></h4></a>
                                    <p>
                                        <?= $data['news_desc'] ?>
                                    </p>
                                </div>
                            </div>	
                        <?php endforeach; ?>																																						
                    </div>
                </div>
            </div>	
        </section>

        <section>
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <h1 class="text-center"><b>Top Mentors</b></h1>
                            <div class="card-wrapper swiper-wrapper">
                                <<?php foreach($mentorData as $data): ?>
                                    <div class="card swiper-slide ">
                                        <div class="image-content">
                                            <span class="overlay-slider"></span>
                
                                            <div class="card-image">
                                                <img src="<?= base_url('upload/profile/') .$data['image']?>" alt="" class="card-img">
                                            </div>
                                        </div>
                
                                        <div class="card-content">
                                            <h2 class="name"><?= $data['firstname'] ?> <?= $data['lastname'] ?></h2>
                                            <div class="description">
                                            <li> <?= $data['title'] ?></li>
                                            </div>
                                            <div class="icons">
                                                <li>Contact Information: </li>
                                                <li><i class="fa fa-phone"> <?= $data['number'] ?> </i></li>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                                <a href="#"><i class="fa fa-google"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php  endforeach; ?>
                            </div>
                        </div>
            
                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>
                        <div class="swiper-pagination"></div>
                    </div>										
                </div>
            </div>
        </section>	
        
        <section id="slider" class="pt-5">
            <div class="container">
                <h1 class="text-center"><b>Donations</b></h1>
                <div class="slider">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="<?= base_url('style/landingPage/image/donation_1.jpg') ?>">
                            </div>
                            <h5 class="text-center">Raise money for charities</h5>
                            <p class="text-center">Choose from over 20,000 charities, we’ll send the money directly to them</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="<?= base_url('style/landingPage/image/donation_2.jpg') ?>">
                            </div>
                            <h5 class="text-center">Donate to charity</h5>
                            <p class="text-center">Support a charity with a one-off or monthly donation</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="<?= base_url('style/landingPage/image/donation_3.jpg') ?>">
                            </div>
                            <h5 class="text-center">Raise money for your own cause</h5>
                            <p class="text-center">We pay what you raise into your personal bank account</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="popular-post-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="active-popular-post-carusel">
                        <?php foreach($jobData as $data): ?>            
                            <div class="single-popular-post d-flex flex-row">
                                <div class="thumb">
                                    <img src="<?= base_url('upload/jobs/') .$data['job_cover'] ?>" alt="" height="100" width="100">
                                    <a class="btns text-uppercase" href="<?= base_url('Jobs') ?>">view job post</a>
                                </div>
                                <div class="details">
                                    <a href="#"><h4><?= $data['job_title'] ?></h4></a>
                                    <h6><?= $data['job_address'] ?></h6>
                                    <p>
                                    <?= $data['job_description'] ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>																																							
                    </div>
                </div>
            </div>	
        </section>
        
        <section id="ccs">
            <div class="ccs-1">
                <h1>DHVSU College of Computing Studies</h1>
            </div>
            <div id="ccs-2">
                <div class="content-box lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <i class="fa fa-book"></i>
                                    <h3>Mision</h3>
                                    <hr>
                                    <p>The College of Computing Studies is commited to deliver quality education by providing knowledge and skills
                                        to its clientele to privide the IT industry and government with proficient and competitive IT Professionals.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <i class="fa fa-globe"></i>
                                    <h3>Vision</h3>
                                    <hr>
                                    <p>The College of Computing Studies will be the lead institution creating knowledge and providing technical skills and training
                                        in the field of Information and Communication Technology in the region.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <i class="fa fa-pencil"></i>
                                    <h3>Objectives</h3>
                                    <hr>
                                    <p>To provide an advance understanding of information technology concepts, methods, and practices that can be applied in solving problems and addressing current technological issue; a broad base of application domain.</p>
										<p>To provide insights and expertise in helping students to become accomplished professionals with holistic knowledge in Information Technology related fields and to contribute in the development and application of new through competent faculty and relevant curriculum.</p>
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
            
        </footer>
                

        <script src="<?= base_url('') ?>style/landingPage/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="<?= base_url('style/landingPage/js/vendor/bootstrap.min.js') ?>"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
          <script src="<?= base_url('style/landingPage/js/easing.min.js') ?>"></script>			
        <script src="<?= base_url('style/landingPage/js/hoverIntent.js') ?>"></script>
        <script src="<?= base_url('style/landingPage/js/superfish.min.js') ?>"></script>	
        <script src="<?= base_url('style/style/landingPage/js/jquery.ajaxchimp.min.js') ?>"></script>
        <script src="<?= base_url('style/landingPage/js/jquery.magnific-popup.min.js') ?>"></script>	
        <script src="<?= base_url('style/landingPage/js/owl.carousel.min.js') ?>"></script>			
        <script src="<?= base_url('style/landingPage/js/jquery.sticky.js') ?>"></script>
        <script src="<?= base_url('style/landingPage/js/jquery.nice-select.min.js') ?>"></script>			
        <script src="<?= base_url('style/landingPage/js/parallax.min.js') ?>"></script>		
        <script src="<?= base_url('style/landingPage/js/mail-script.js') ?>"></script>	
        <script src="<?= base_url('style/landingPage/js/main.js') ?>"></script>
        <script src="<?= base_url('style/landingPage/js/donation.js') ?>"></script>
        <script src="<?= base_url('style/assets/vendor/aos/aos.js') ?>"></script>
        <script src="<?= base_url('style/landingPage/js/swiper-bundle.min.js') ?>"></script> 
        <script src="<?= base_url('style/landingPage/js/script.js') ?>"></script>
      <script src="<?= base_url('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    </body>
</html>



