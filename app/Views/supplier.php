<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Inventory </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">Inventory</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="supplier">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Supplier
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Supplier</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Supplier</li>
                    </ol>
                    <div class="card mb-4">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Supplier</th>
                                    <th>Alamat</th>
                                    <th class="min-width-15">Telp</th>
                                    <th class="min-width-10">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($supplier as $spr) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $spr['nama_supplier']; ?></td>
                                        <td><?= $spr['alamat_supplier']; ?></td>
                                        <td><?= $spr['telp_supplier']; ?></td>
                                        <td>
                                            <a class="material-icons icon add" data-id="<?= $spr['id_supplier']; ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                add
                                            </a>
                                            <a class="material-icons icon detail" data-id="<?= $spr['id_supplier']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                visibility
                                            </a>
                                            <a class="material-icons icon ubah" data-id="<?= $spr['id_supplier']; ?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                edit
                                            </a>
                                            <a href="<?= base_url('supplier/delete/' . $spr['id_supplier']) ?>" class="material-icons icon">
                                                delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- modal detail -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-detail">
                                <div class="modal-header">
                                    <h1 id="juduldModal" class="card-title">Detail Data Supplier</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="d-flex">

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
                                    <h1 id="judulModal" class="card-title">Tambah Data Supplier</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('supplier/save') ?>" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="id_supplier" id="id_supplier">
                                        <div class="row mb-3">
                                            <label for="nama" class="col-form-label">Nama Supplier</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Supplier">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="spesifikasi" class="col-form-label">Alamat Supplier</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="spesifikasi" id="spesifikasi" placeholder="Alamat Supplier">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="lokasi" class="col-form-label">Telp Supplier</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Telp Supplier">
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
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>