<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title><?= $title ?></title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header ">
                <h2 class="offset-5 ">Welcome, Alumin</h2>
            </div>
            <div class="card-body">
                <table class="table ">
                    <tbody>
                        <tr>
                            <td><a href="<?= base_url('Login/Auth/index'); ?>" class="btn  btn-outline-primary btn-lg  d-flex justify-content-center">Log In</a></td>
                            <td><a href="<?= base_url('Login/Auth/viewRegister'); ?>" class="btn btn-outline-success btn-lg  d-flex justify-content-center">Register</a></td>
                            <td><a href="<?= base_url('AdminController/Admin'); ?>" class="btn btn-outline-info btn-lg  d-flex justify-content-center">Admin</a></td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>