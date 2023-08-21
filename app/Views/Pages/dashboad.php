
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title>Dahsboard</title>
    <style>
        .jumbotron{
            height: 50vh;
            background-image:url(<?= base_url('assets/images/jumbotron.png') ?>);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
       
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-secondary">
                <div class="col-md-4">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand ms-3" href="<?= base_url('Dash/Dash') ?>">
                     <img src="<?= base_url('assets/logo/logo.png') ?>" alt="" class="logo" style="height:4rem ">
                    </a>
                </div> 
                <div class="col-md-8">
                    <div class="collapse navbar-collapse float-end me-3" id="navbarNavAltMarkup">
                        <div class="navbar-nav float-end float-end">
                            <a href="<?= base_url('Dash/Dash/profile') ?>" class="nav-item nav-link text-light">Profile</a>
                            <a href="<?= base_url('Login/Auth/logout') ?>" class="nav-item nav-link text-light ">Log out</a> 
                        </div>
                    </div>
                </div>    
            </nav>
            
                <div class="jumbotron jumbotron-fluid p-5  d-grid align-items-center" >
                        <h1 class="text text-end text-light ">-Welcome
                        <?= $userInfo['firstname'] ?>
                        <?= $userInfo['lastname'] ?></h1>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text text-center">News and Events</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>Events</th>
                                        <th>Date</th>
                                        <th>Info</th>
                                    </tr>
                                    <tr>
                                        <th>Sample Event</th>
                                        <th>July 22,2023</th>
                                        <th>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                            <a href="#" class="text text-muted text-decoration-none">more...</a>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                        <div class="card-header">
                                <h4 class="text text-center">Mentors</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>Name</th>
                                        <th>Skills</th>
                                        <th>Info</th>
                                    </tr>
                                    <tr>
                                        <th>Clark Kent</th>
                                        <th>Data Analytics</th>
                                        <th>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                            <a href="#" class="text text-muted text-decoration-none">more...</a>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                    <h4 class="text text-center">Jobs</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>Job</th>
                                        <th>Location</th>
                                        <th>Info</th>
                                    </tr>
                                    <tr>
                                        <th>Tech Support</th>
                                        <th>CSFP</th>
                                        <th>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                            <a href="#" class="text text-muted text-decoration-none">more...</a>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
 
            </div>

            
        </div>
    </div>
</body>
</html>