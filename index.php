
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Merdeka SPP</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="assets/index2.html"><b>Merdeka SPP</b></a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Untuk Login Bagi Siswa</p>
        <hr>
        <?php 
        if(isset($_GET['info'])){
          if($_GET['info'] == "gagal"){ ?>
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-exclamation-triangle"></i> Mohon Maaf</h5>
              Login gagal! username dan password salah!
            </div>
          <?php } else if($_GET['info'] == "logout"){ ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Terima Kasih</h5>
              Anda telah berhasil logout
            </div>
          <?php }else if($_GET['info'] == "login"){ ?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-info"></i> Mohon Maaf</h5>
              Anda harus login terlebih dahulu
            </div>
          <?php } } ?>
          <br>

          <form action="cek_login_siswa.php" method="post">
            <div class="input-group mb-3">
              <input type="text" name="nisn" class="form-control" placeholder="NISN">
              <div class="input-group-append">
                <div class="input-group-text">
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name="nis" class="form-control" placeholder="NIS">
              <div class="input-group-append">
                <div class="input-group-text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
              </div>            
              <div class="col-12">
                <hr>
                <a href="login.php" class="btn btn-info btn-block">Halaman Login Petugas</a>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>

<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
