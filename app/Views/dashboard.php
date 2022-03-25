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
