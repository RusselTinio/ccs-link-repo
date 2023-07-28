<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widt h=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
   

    <title>CCS-LINK Log In</title>
</head>
<body>
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4  mt-5 p-5 bg-secondary" style="height: 30rem;" >
                <h4 class="text text-light">Log In</h4>
                <form action="<?= base_url('Login/Auth/check') ?>" method="POST" class=""> 
                <?= csrf_field() ?>
                <?php if(!empty(session()->getFlashdata('fail'))):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif?>
                    <div class="form-group">
                        <input type="text" class="form-control mt-3" name="username" value="<?= set_value('username') ?>" placeholder="Username">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'username'):'' ?>       
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control mt-3" name="password" placeholder="Password">
                        <span class="text-danger text-sm">
                        <span class="text-danger text-sm">
                            <?= isset($validation) ? display_error($validation, 'password'):'' ?>       
                        </span>
                    </div>
                    <br>
                    <a href="<?= base_url('Login/Auth/viewRegister') ?>" class="text text-decoration-none text-info">No account? Register</a>
                    <a href="<?= base_url('AdminController/Admin') ?>" class="text text-decoration-none text-info float-end">log in as admin</a>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-block offset-5 mt-3" type="submit" value="log in">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>