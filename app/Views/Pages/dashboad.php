<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css' integrity='sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==' crossorigin='anonymous'/>
    <title>Dahsboard</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
              <h4>Dahsboard</h4>  
              <table class="table table-hover">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $userInfo['first_name'] ?></td>
                        <td><?= $userInfo['last_name'] ?></td>
                        <td><?= $userInfo['username'] ?></td>
                        <td><a href="<?= base_url('Login/Auth/logout') ?>" class="btn btn-danger">logout</a></td>
                    </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</body>
</html>