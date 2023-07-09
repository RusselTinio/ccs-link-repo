
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title>Dahsboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-title p-1">
                        <h3>User details:</h3>
                    </div>
                    <div class="card-body">
                    <div class="card-text d-flex justify-content-center">
                        <h5>First Name: <?= $userInfo['first_name'] ?></h5>
                        <h5>Last Name: <?= $userInfo['last_name'] ?></h5>
                        <h5>Username:  <?= $userInfo['username'] ?></h5>
                         </div>
                    </div>         
                </div>
            </div>
            <div class="col-md-4 p-1">
                <div class="card">
                    <div class="card-title">
                        <h3>Profile</h3>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-primary">Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-1">
                <div class="card">
                    <div class="card-title">
                        <h3>Log out</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= base_url('Login/Auth/logout') ?>" class="btn btn-danger">Log out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>