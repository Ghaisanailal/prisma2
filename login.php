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

<?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Id User dan Password tidak sesuai !</div>";
        } else if ($_GET['pesan'] == "logindulu") {
            echo "<div class='alert'>Silahkan Login dulu !</div>";
        } else if ($_GET['pesan'] == "3") {
            echo "<div class='alert'><b>Pendaftaran akun berhasil.</b> Silahkan Login menggunakan id dan password yang barusan anda buat</div>";
        }
    }
    ?>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/logos/pprisma.svg" width="180" alt="">
                </a>

                <p class="text-center">Please Enter Your Details</p>
                <form action="cek_login.php" method="post">
                  <div class="mb-3">
                    <label for="exampleInputId1" class="form-label">Id</label>
                    <input type="text" name="id" class="form-control" placeholder="Enter Id" required="required">
                  </div>
                  `
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required="required" >
                  </div>

                  <div class="d-flex align-items-center justify-content-between mb-4">
                  <Input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Login"></a>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>







