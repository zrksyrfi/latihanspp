<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
  <div class="container">
    <!-- logo -->
    <a href="#" class="navbar-brand">
      <img src="../assets/dist/img/logo_mdk.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Merdeka SPP</span>
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- navbar -->
      <?php if ($_SESSION['level']=="admin") { ?>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">Mater Data</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="kelas.php" class="dropdown-item">Data Kelas</a></li>
              <li><a href="siswa.php" class="dropdown-item">Data Siswa</a></li>
              <li><a href="spp.php" class="dropdown-item">Data SPP</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="petugas.php" class="nav-link">Data Petugas</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">Pembayaran</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="transaksi_pembayaran.php" class="dropdown-item">Transaksi Pembayaran</a></li>
              <li><a href="histori_pembayaran.php" class="dropdown-item">Histori Pembayaran</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="laporan.php" class="nav-link">Laporan</a>
          </li>
        </ul>
      <?php } else { ?>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">Pembayaran</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="transaksi_pembayaran.php" class="dropdown-item">Transaksi Pembayaran</a></li>
              <li><a href="histori_pembayaran.php" class="dropdown-item">Histori Pembayaran</a></li>
            </ul>
          </li>
        </ul>
      <?php } ?>
    </div>

    <!-- navbar kanan -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <!-- logout -->
      <li class="">
        <a class="nav-link" href="../logout.php">
          <i class="fas fa-upload"></i> Logout
        </a>
      </li>
    </ul>
  </div>
</nav>