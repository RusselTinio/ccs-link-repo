<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widt h=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
   

    <title>Log In</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4 mt-5" >
                <h4>Log In</h4><hr>
                <form action="" method="POST"> 
                <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <br>
                    <a href="<?= base_url('viewRegister') ?>">No account? Register</a>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block offset-5 mt-3" type="submit" value="log in">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>