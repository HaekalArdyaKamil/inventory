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
            <a class="navbar-brand">Dashboard Inventaris</a>
            <div class="d-flex">
                <h2 class="uname"><?= $_SESSION['nama']; ?></h2>
                <a class="btn btn-logout" href="<?= base_url('logout') ?>">Keluar</a>
            </div>
        </div>
    </nav>
    <div class="row width-max">
        <div class="menu-side col-lg-2">
            <a class="btn" href="<?= base_url('dashboard/index') ?>">Barang</a>
            <a class="btn" href="<?= base_url('dashboard/pinjam') ?>">Pinjam Barang</a>
            <a class="btn" href="<?= base_url('dashboard/stok') ?>">Stok</a>
            <a class="btn" href="<?= base_url('dashboard/transaksi') ?>">Transaksi Barang</a>
            <a class="btn" href="<?= base_url('dashboard/supplier') ?>">Supplier</a>
        </div>
        <div class="container-fluid col-lg-10">
            <div class="card padd">
                <div class="card-body">
                    <div class="couple">
                        <h1 class="card-title">Barang</h1>
                        <a class="btn btn-add" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="material-icons">
                                add
                            </span>
                        </a>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kondisi</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($barang as $brg) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $brg['nama_barang']; ?></td>
                                    <td><?= $brg['kondisi']; ?></td>
                                    <td><?= $brg['jumlah_barang']; ?></td>
                                    <td>
                                        <a class="material-icons icon detail" data-id="<?= $brg['id_barang']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            visibility
                                        </a>
                                        <a class="material-icons icon ubah" data-id="<?= $brg['id_barang']; ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            edit
                                        </a>
                                        <a href="<?= base_url('dashboard/delete/' . $brg['id_barang']) ?>" class="material-icons icon">
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
    <!-- modal detail -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-detail">
                <div class="modal-header">
                    <h1 id="juduldModal" class="card-title">Detail Data Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex">
                        <img src="<?= base_url('img/no-image.png') ?>">
                        <div class="kanan">
                            <h1 class="detail" id="detail_nama"></h1>
                            <h1 class="detail" id="detail_spesifikasi"></h1>
                            <h1 class="detail" id="detail_lokasi"></h1>
                            <h1 class="detail" id="detail_kondisi"></h1>
                            <h1 class="detail" id="detail_jumlah"></h1>
                            <h1 class="detail" id="detail_sumber"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal tambah dan edit -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 id="judulModal" class="card-title">Tambah Data Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('dashboard/save') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id_barang" id="id_barang">
                        <div class="row mb-3">
                            <label for="nama" class="col-form-label">Nama Barang</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Barang">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="spesifikasi" class="col-form-label">Spesifikasi</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="spesifikasi" id="spesifikasi" placeholder="Spesifikasi Barang">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lokasi" class="col-form-label">Lokasi Barang</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi Barang">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kondisi" class="col-form-label">Kondisi Barang</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="kondisi" id="kondisi" placeholder="Kondisi Barang">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jumlah" class="col-form-label">Jumlah Barang</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Barang">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sumber" class="col-form-label">Sumber Dana</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="sumber" id="sumber" placeholder="Sumber Dana">
                            </div>
                        </div>
                        <div class="d-flex float-end">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/script.js') ?>"></script>
</body>

</html>