<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
      rel="stylesheet"
    />
    <link href="css/dashboard.css" rel="stylesheet" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      crossorigin="anonymous"
    ></script>
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
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="row">
              <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                  <div class="card-body">Barang</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-between"
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                  <div class="card-body">Supplier</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-between"
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                  <div class="card-body">Transaksi Pinjaman</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-between"
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                  <div class="card-body">Sumber Dana</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-between"
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                  <div class="card-body">Pengguna</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-between"
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                  <div class="card-body">Laporan</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-between"
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                  <div class="card-body">Ruangan</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-between"
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                  <div class="card-body">Data Barang</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-between"
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                  <div class="card-body">More Info</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-between"
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                  <div class="card-body">More Info</div>
                  <div
                    class="card-footer d-flex align-items-center justify-content-between"
                  >
                    <a class="small text-white stretched-link" href="#"
                      >View Details</a
                    >
                    <div class="small text-white">
                      <i class="fas fa-angle-right"></i>
                    </div>
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
    
  </body>
</html>
>>>>>>> 708bb263d0f67993cdbc6faab5a59d738b27468b
