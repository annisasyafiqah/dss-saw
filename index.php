<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Forms</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="formSiswa.php">
          <i class="bi bi-file-earmark-person"></i>
          <span>Form Siswa</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="form-alternatif.php">
          <i class="bi bi-file-earmark-person"></i>
          <span>Form Tambah Alternatif</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="form-kriteria.php">
          <i class="bi bi-file-earmark-person"></i>
          <span>Form Tambah Kriteria</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="form-bobot.php">
          <i class="bi bi-file-earmark-person"></i>
          <span>Form Tambah Bobot</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="form-skala.php">
          <i class="bi bi-file-earmark-person"></i>
          <span>Form Tambah Skala</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="form-matrix-keputusan.php">
          <i class="bi bi-file-earmark-person"></i>
          <span>Form Data Matrix Keputusan</span>
        </a>
      </li><!-- End Profile Page Nav -->
      

      <li class="nav-heading">Data Tables </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="dt_alternatif.php">
          <i class="bi bi-question-circle"></i>
          <span>Data Alternatif</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="dt_kriteria.php">
          <i class="bi bi-envelope"></i>
          <span>Data Kriteria</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="dt_bobot.php">
          <i class="bi bi-card-list"></i>
          <span>Data Bobot</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="dt_skala.php">
          <i class="bi bi-dash-circle"></i>
          <span>Data Skala</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="dt_matrixkeputusan.php">
          <i class="bi bi-file-earmark"></i>
          <span>Data Matrix Keputusan</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="vmatrixkeputusan.php">
          <i class="bi bi-file-earmark"></i>
          <span>Perhitungan SAW</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
                        <div class="container-fluid">
                            <div class="row flex-md-row-reverse">
                                <div class="col-md-4">
                                    <img src="assets\img\casual-life-3d-cat-sitting-on-bookshelf.png" >
                                </div>
                                <div class="col-md-6 mt-4 mt-md-0">
                                    <h1>Admin Simple<br> PPDB<br> Metode SAW</h1>
                                    <div class="mt-4 md-4">
                                        <p>Admin untuk penerimaan mahasiswa baru<br> dengan memanfaatkan metode SAW</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>

  </main><!-- End #main -->

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Made by <strong><span>Annisa Syafiqah</span></strong>. with <i class="bi bi-heart-fill"></i>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>