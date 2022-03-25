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
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand">Inventory</a>
            <div class="d-flex">

                <a class="btn btn-logout" href="<?= base_url('logout') ?>">Keluar</a>
            </div>
        </div>
    </nav>
    <div class="row width-max">
        <div class="menu-side col-lg-2">
            <a class="btn" href="<?= base_url('/index') ?>">Barang</a>
            <a class="btn" href="<?= base_url('/pinjam') ?>">Pinjam Barang</a>
            <a class="btn" href="<?= base_url('/stok') ?>">Stok</a>
            <a class="btn" href="<?= base_url('/user') ?>">User</a>
            <a class="btn" href="<?= base_url('/supplier') ?>">Supplier</a>
<<<<<<< HEAD
            <a class="btn" href="<?= base_url('/pemakaian') ?>">Laporan perbaikan</a>
=======
>>>>>>> 708bb263d0f67993cdbc6faab5a59d738b27468b
        </div>
        <div class="container-fluid col-lg-10">
            <div class="card padd">
                <div class="card-body">
                    <div class="couple">
                        <h1 class="card-title">User</h1>
                        <a class="btn btn-add" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="material-icons">
                                add
                            </span>
                        </a>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th class="min-width-10">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($user as $u) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $u['nama']; ?></td>
                                    <td><?= $u['username']; ?></td>
                                    <td><?= $u['level']; ?></td>
                                    <td>
                                        <a class="material-icons icon detail" data-id="<?= $u['id_user']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            visibility
                                        </a>
                                        <a class="material-icons icon ubah" data-id="<?= $u['id_user']; ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            edit
                                        </a>
                                        <a href="<?= base_url('user/delete/' . $u['id_user']) ?>" class="material-icons icon">
                                            delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/supplier.js') ?>"></script>
</body>

</html>