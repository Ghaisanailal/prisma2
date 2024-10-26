<?php
ob_start();
session_start();
require_once "config/database.php"; // Memanggil file koneksi dengan database
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prisma</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
   <!--- untuk mengecek sesi di index -->
   <?php
   $ids = $_SESSION['id'];

  // jika tidak ada level yang ditemukan pada sesi login, maka akan diarahkan ke halaman login.php dengan tambahan pesan gagal.
  // fitur ini digunakan agar yang belum login tidak dapat masuk ke dalam aplikasi.
  if ($_SESSION['level'] == "") {
    header("location:login.php?pesan=gagal");
  }
  ?>

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.php" class="text-nowrap logo-img">
            <img src="assets/images/logos/prismaa.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
           <!--- untuk menampilkan menu sesuai dengan level -->
    <?php
    if ($_SESSION['level'] == "Admin") {
      include 'menu/menu-admin.php'; // Jika level pengguna yang login @Admin, maka akan memanggil file menu-admin.php yang terdapat pada folder menu.

    } else if ($_SESSION['level'] == "Pegawai") {
      include 'menu/menu-pegawai.php'; // Jika level pengguna yang login @Pegawai, maka akan memanggil file menu-admin.php yang terdapat pada folder menu.

    } 
    ?>
  </nav>

  <div class="container-fluid">
    <!--- untuk menampilkan routes sesuai dengan level -->

  </div>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">

        <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="assets/images/profile/user-1.png" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <a href="?page=users-edit&id=<?php echo $ids ?>" class="btn btn-outline-primary mx-3 mt-2 d-block">                      <i class="ti ti-user fs-6"></i>
                      My Account</a>
                    </a>
                   
                    <a href="logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-14 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
              <?php
    if ($_SESSION['level'] == "Admin") {
      include 'routes/admin-routes.php'; // jika level pengguna yang login @Admin, maka akan dipanggil file admin-routes.php yang berada pada folder routes.

    } else if ($_SESSION['level'] == "Pegawai") {
      include 'routes/pegawai-routes.php'; // jika level pengguna yang login @Pegawai, maka akan dipanggil file pegawai-routes.php yang berada pada folder routes.

    }
    ?>              </div>
            </div>
          </div>
 
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">by <a href="https://instagram.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">PrismaGrup</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>
<?php
ob_end_flush(); // Menghentikan output buffering
?>