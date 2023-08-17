<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='<?= base_url('bootstrap/css/bootstrap.css') ?>' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body>
<div class="col-md-12 bg-secondary">
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
                    <a href="<?= base_url('Dash/MentoringController') ?>" class="nav-item nav-link text-light">Mentoring</a>
                        <a href="<?= base_url('Dash/ProfileController') ?>" class="nav-item nav-link text-light">Profile</a>
                        <a href="<?= base_url('Login/Auth/logout') ?>" class="nav-item nav-link text-light ">Log out</a> 
                    </div>
                </div>
            </div>    
        </nav>    
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="btn btn-outline-primary" data-toggle="collapse" href="#form" role="button">Become a Mentor</a>
            </div>
            <div class="col-md-12">
                <div class="card mt-4 collapse px-2" id="form">
                <?php if (!$mentorProfile): ?>
                    <form action="<?= base_url('Dash/MentoringController/addMentor') ?>" method="post">
                <?php else:?>
                    <form action="<?= base_url('Dash/MentoringController/updateMentor') ?>" method="post">
                <?php endif?>
                    
                        <div class="row">
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="">First name</label>
                                    <input type="text" name="firstname" class="form-control" value="<?= $userData['firstname'] ?>">
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="">Last name</label>
                                    <input type="text" name="lastname" class="form-control" value="<?= $userData['lastname'] ?>">
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control" value="<?= $profileData['title'] ?>">
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="">Contact Number</label>
                                    <input type="text" name="contact" class="form-control" value="<?= $contactData['number'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="">Facebook</label>
                                    <input type="text" name="facebook" class="form-control" value="<?= $contactData['facebook'] ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">LinkIn</label>
                                    <input type="text" name="linkin" class="form-control" value="<?= $contactData['linkin'] ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Gmail</label>
                                    <input type="text" name="gmail" class="form-control" value="<?= $contactData['email'] ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Degree</label>
                                    <input type="text" name="degree" class="form-control" value="<?= $mentorProfile['degree']?>">
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-12">
                                <textarea name="description" class="form-control"  rows="5"> <?= $profileData['description'] ?></textarea>
                            </div>
                        </div>
                        <?php if (!$mentorProfile): ?>
                            <div class="row my-2">
                                <div class="col-md-12">
                                    <input type="submit" value="Submit" class="btn btn-primary float-end">
                                </div>
                        <?php else:?>
                            <div class="row my-2">
                                <div class="col-md-12">
                                    <input type="submit" value="Update" class="btn btn-primary float-end">
                                </div>
                            </div>
                        <?php endif?>
                        
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <?php if (!$mentorData): ?>
                <div class="row p-2">
                    <div class="col">
                        <span class="text">No data yet</span>
                    </div>
                </div>
            <?php else: ?>
                <?php foreach($mentorData as $row):?>
                    <div class="col-md-4 mb-4">
                        <div class="card p-5">
                            <h1 class="text"><?= $row['firstname'] ?> <?= $row['lastname'] ?> </h1>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif; ?>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Then, include the Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="<?= base_url('script/profile.js') ?>"></script>
</body>
</html>