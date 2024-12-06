<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 col-4">
        <div class="card">
            <div class="card-header bg-secondary text-white" align=" center">
                <h2>LOGIN</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error') ?>
                        </div>
                    <?php } ?>
                    <div class="mb-3">
                        <label for="inputUsername" class="form-label">Username</label> <br>
                        <input type="text" name="member_username" class="form-control" value="<?php echo session()->getFlashdata('member_username') ?>" id="inputUsername" aria-label="Username" aria-describedby="basic-addon1" placeholder="Masukan Username">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label> <br>


                        <input type="password" name="member_password" class="form-control" id="inputPassword" aria-label="Username" aria-describedby="basic-addon1" placeholder="Masukan Password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="login" class="btn btn-secondary" value="LOGIN" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>