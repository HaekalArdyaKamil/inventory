<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
      rel="stylesheet"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      crossorigin="anonymous"
    ></script>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
    <title>Dashboard</title>
</head>

<body class="sb-nav-fixed">
    <nav
      class="sb-topnav navbar navbar-expand"
      style="background-color: #b77a1f"
    >
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.html" style="color: white"
        >Inventaris</a
      >
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
        style="color: white"
      >
        <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search-->
      <!-- Navbar-->
      <ul
        class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0 d-md-inline-block"
      >
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fas fa-user fa-fw"></i
          ></a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >
            <li><a class="dropdown-item" href="#!">Settings</a></li>
            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#!">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav
          class="sb-sidenav accordion"
          id="sidenavAccordion"
          style="background-color: #302009"
        >
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading">Main Navigation</div>
              <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
              </a>

              <a class="nav-link" href="<?= base_url('/index') ?>">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-chart-area"></i>
                </div>
                Barang
              </a>

              <a class="nav-link" href="<?= base_url('/pinjam') ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Pinjam
              </a>

              <a class="nav-link" href="<?= base_url('/supplier') ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Supplier
              </a>

              <a class="nav-link" href="<?= base_url('/stok') ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Stok
              </a>

              <a class="nav-link" href="<?= base_url('/user') ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Pengguna
              </a>

              <a class="nav-link" href="#">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Laporan
              </a>
            </div>
          </div>
          <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Ahmad Jhonny
          </div>
        </nav>
      </div>

      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Supplier</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Supplier</li>
            </ol>

            <div class="container-fluid col-lg-10">
            <div class="card padd">
                <div class="card-body">
                    <div class="couple">
                        <h1 class="card-title">Supplier</h1>
                        <a class="btn btn-add" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="material-icons">
                                add
                            </span>
                        </a>
                    </div>
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
            </div>
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
                        <img class="ganti" style="width: 50%; height: 50%;" src="<?= base_url('img/no-image.png') ?>">

                        <div class="kanan">
                            <h4 class="detail" id="detail_nama"></h4>
                            <h4 class="detail" id="detail_spesifikasi"></h4>
                            <h4 class="detail" id="detail_lokasi"></h4>
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
                    <h1 id="judulModal" class="card-title">Tambah Data</h1>
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
                        <div class="row mb-3">
                            <label for="foto" class="col-form-label">Foto</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto">
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
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">
                Copyright &copy; INVENTARIS SMKN 1 2022
              </div>
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
     <script src="js/dashboard.js"></script> 
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
      crossorigin="anonymous"
    ></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?= base_url('js/supplier.js') ?>"></script>
</body>

</html>