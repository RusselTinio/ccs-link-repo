<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widt h=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
   

    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4  mt-5 p-5 bg-secondary" style="height: 4   0rem;" >
                <h4 class="text text-light">Sign Up</h4>
                <form action="<?= base_url('Login/Auth/saveUser') ?>" method="POST"> 
                <?= csrf_field() ?>

                <?php if(!empty(session()->getFlashdata('fail'))):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif?>

                <?php if(!empty(session()->getFlashdata('success'))):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif?>


                    <div class="form-group mb-6">
                        <label for=""></label>
                        <input type="text" class="form-control" name="firstname" value="<?= set_value('firstname') ?>" placeholder="First Names">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'firstname'):'' ?>       
                        </span>
                    </div>
                    <div class="form-group mb-6">
                        <label for=""></label>
                        <input type="text" class="form-control" name="lastname" value="<?= set_value('lastname') ?>" placeholder="Last Name">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'lastname'):'' ?>       
                        </span>
                    </div>
                    <div class="form-group mb-6">
                        <label for=""></label>
                        <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" placeholder="Username">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'username'):'' ?>       
                        </span>
                    </div>
                    <div class="form-group mb-6">
                        <label for=""></label>
                        <input type="password" class="form-control" name="password" value="<?= set_value('password') ?>" placeholder="Password">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'password'):'' ?>       
                        </span>
                    </div>
                    <div class="form-group mb-6">
                        <label for=""></label>
                        <input type="password" class="form-control" name="cpassword" value="<?= set_value('cpassword') ?>" placeholder="Confirm Password">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'cpassword'):'' ?>       
                        </span>
                    </div>
                    <br>
                    <a href="<?= base_url('Login/Auth') ?>" class="text text-info text-decoration-none">Already Registered? Log in</a>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info  offset-5 mt-3 " type="submit" value="Register">
                    </div>
                    
                </form>
            </div>
          
        </div>
    </div>
</body>
</html>