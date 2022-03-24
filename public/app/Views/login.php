<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/login.css')?>">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h1>Login</h1>
                <!-- alert berhasil daftar  -->
                <!-- <div <?php //if(!empty($keterangan)){if($keterangan == 'berhasil'){return }return 'style="display:none;"';}; ?> class="alert alert-success d-flex align-items-center" role="alert">
                    <span class="material-icons">
                        check_circle
                    </span>
                    <div class="isi-alert">
                        Register berhasil
                    </div>
                </div> -->
                <!-- alert salah password  -->
                <!-- <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <span class="material-icons">
                        dangerous
                    </span>
                    <div class="isi-alert">
                        Username/Password yang dimasukan salah
                    </div>
                </div> -->
                <form action="<?= base_url('login/logincheck')?>" method="post">
                <?= csrf_field(); ?>
                    <div class="row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password Anda" aria-describedby="register">
                            <div id="register" class="form-text mt-3" onclick="window.location = '<?= base_url('login/register')?>';">Belum punya akun ?</div>
                        </div>
                    </div>
                    <button type="submit" class="btn mt-3">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>