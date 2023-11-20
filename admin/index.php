<?php
include '../koneksi.php';

// Ambil data siswa dari database
$query = "SELECT * FROM tb_statistik ORDER BY tahun_ajaran DESC";
$result = mysqli_query($conn, $query);
// $num_rows = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Dashboard - NiceAdmin</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Start Header Section ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <!-- Start Logo -->
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" />
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <!-- Start Profile Nav -->
        <li class="nav-item dropdown pe-3">
          <!-- Start Profile Image Nav -->
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" />
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span></a>
          <!-- End Profile Image Icon -->

          <!-- Start Profile Dropdown Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul>
          <!-- End Profile Dropdown Items -->
        </li>
        <!-- End Profile Nav -->
      </ul>
    </nav>
  </header>
  <!-- ======= End Header Section ======= -->

  <!-- ======= Start Sidebar Section ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-jurusan.php">
          <i class="bi bi-mortarboard"></i>
          <span>Jurusan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-program.php">
          <i class="bi bi-star"></i>
          <span>Program Unggulan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-pimpinan.php">
          <i class="bi bi-briefcase"></i>
          <span>Pimpinan Sekolah</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-statistik.php">
          <i class="bi bi-bar-chart"></i>
          <span>Statistik Siswa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-sarpras.php">
          <i class="bi bi-building"></i>
          <span>Sarana Prasarana</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-artikel.php">
          <i class="bi bi-newspaper"></i>
          <span>Artikel</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-testimoni.php">
          <i class="bi bi-chat-square-quote"></i>
          <span>Testimoni Alumni</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-partnership.php">
          <i class="bi bi-puzzle"></i>
          <span>Partnership</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-telephone"></i>
          <span>Contact</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-user.php">
          <i class="bi bi-people"></i>
          <span>User</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>
    </ul>
  </aside>
  <!-- ======= End Sidebar Section ======= -->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- Jumlah Siswa Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Siswa <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <?php
                      // Ambil jumlah siswa untuk tahun ajaran saat ini
                      $query_current = "SELECT jumlah_siswa FROM tb_statistik WHERE tahun_ajaran = YEAR(CURRENT_DATE())";
                      $result_current = mysqli_query($conn, $query_current);
                      $data_current = mysqli_fetch_assoc($result_current);
                      $jumlah_siswa_current = $data_current['jumlah_siswa'];

                      // Ambil jumlah siswa untuk tahun ajaran sebelumnya
                      $previous_year = date('Y') - 1;
                      $query_previous = "SELECT jumlah_siswa FROM tb_statistik WHERE tahun_ajaran = $previous_year";
                      $result_previous = mysqli_query($conn, $query_previous);
                      $data_previous = mysqli_fetch_assoc($result_previous);
                      $jumlah_siswa_previous = $data_previous['jumlah_siswa'];

                      // Hitung kenaikan dalam persentase
                      $kenaikan = round(($jumlah_siswa_current - $jumlah_siswa_previous) / $jumlah_siswa_previous * 100);

                      if ($kenaikan > 0) {
                        $keterangan = "increase";
                      } elseif ($kenaikan < 0) {
                        $keterangan = "decrease";
                      } else {
                        $keterangan = "no change";
                      }

                      // Tampilkan jumlah siswa dan kenaikan dalam persentase
                      echo "<h6>$jumlah_siswa_current</h6>";
                      echo "<span class='text-success small pt-1 fw-bold'>$kenaikan%</span>";
                      echo "<span class='text-muted small pt-2 ps-1'>$keterangan</span>";

                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Jumlah Siswa Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">
                    Jumlah Guru <span>| This Year</span>
                  </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-briefcase"></i>
                    </div>
                    <div class="ps-3">
                      <?php
                      // Ambil jumlah siswa untuk tahun ajaran saat ini
                      $query_current = "SELECT jumlah_guru FROM tb_statistik WHERE tahun_ajaran = YEAR(CURRENT_DATE())";
                      $result_current = mysqli_query($conn, $query_current);
                      $data_current = mysqli_fetch_assoc($result_current);
                      $jumlah_siswa_current = $data_current['jumlah_guru'];

                      // Ambil jumlah siswa untuk tahun ajaran sebelumnya
                      $previous_year = date('Y') - 1;
                      $query_previous = "SELECT jumlah_guru FROM tb_statistik WHERE tahun_ajaran = $previous_year";
                      $result_previous = mysqli_query($conn, $query_previous);
                      $data_previous = mysqli_fetch_assoc($result_previous);
                      $jumlah_siswa_previous = $data_previous['jumlah_guru'];

                      // Hitung kenaikan dalam persentase
                      $kenaikan = round(($jumlah_siswa_current - $jumlah_siswa_previous) / $jumlah_siswa_previous * 100);

                      if ($kenaikan > 0) {
                        $keterangan = "increase";
                      } elseif ($kenaikan < 0) {
                        $keterangan = "decrease";
                      } else {
                        $keterangan = "no change";
                      }

                      // Tampilkan jumlah siswa dan kenaikan dalam persentase
                      echo "<h6>$jumlah_siswa_current</h6>";
                      echo "<span class='text-success small pt-1 fw-bold'>$kenaikan%</span>";
                      echo "<span class='text-muted small pt-2 ps-1'>$keterangan</span>";

                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">
                    Jumlah Kelas <span>| This Year</span>
                  </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-door-open"></i>
                    </div>
                    <div class="ps-3">
                      <?php
                      // Ambil jumlah siswa untuk tahun ajaran saat ini
                      $query_current = "SELECT jumlah_kelas FROM tb_statistik WHERE tahun_ajaran = YEAR(CURRENT_DATE())";
                      $result_current = mysqli_query($conn, $query_current);
                      $data_current = mysqli_fetch_assoc($result_current);
                      $jumlah_siswa_current = $data_current['jumlah_kelas'];

                      // Ambil jumlah siswa untuk tahun ajaran sebelumnya
                      $previous_year = date('Y') - 1;
                      $query_previous = "SELECT jumlah_kelas FROM tb_statistik WHERE tahun_ajaran = $previous_year";
                      $result_previous = mysqli_query($conn, $query_previous);
                      $data_previous = mysqli_fetch_assoc($result_previous);
                      $jumlah_siswa_previous = $data_previous['jumlah_kelas'];

                      // Hitung kenaikan dalam persentase
                      $kenaikan = round(($jumlah_siswa_current - $jumlah_siswa_previous) / $jumlah_siswa_previous * 100);

                      if ($kenaikan > 0) {
                        $keterangan = "increase";
                      } elseif ($kenaikan < 0) {
                        $keterangan = "decrease";
                      } else {
                        $keterangan = "no change";
                      }

                      // Tampilkan jumlah siswa dan kenaikan dalam persentase
                      echo "<h6>$jumlah_siswa_current</h6>";
                      echo "<span class='text-success small pt-1 fw-bold'>$kenaikan%</span>";
                      echo "<span class='text-muted small pt-2 ps-1'>$keterangan</span>";

                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(
                        document.querySelector("#reportsChart"), {
                          series: [{
                              name: "Sales",
                              data: [31, 40, 28, 51, 42, 82, 56],
                            },
                            {
                              name: "Revenue",
                              data: [11, 32, 45, 32, 34, 52, 41],
                            },
                            {
                              name: "Customers",
                              data: [15, 11, 32, 18, 9, 24, 11],
                            },
                          ],
                          chart: {
                            height: 350,
                            type: "area",
                            toolbar: {
                              show: false,
                            },
                          },
                          markers: {
                            size: 4,
                          },
                          colors: ["#4154f1", "#2eca6a", "#ff771d"],
                          fill: {
                            type: "gradient",
                            gradient: {
                              shadeIntensity: 1,
                              opacityFrom: 0.3,
                              opacityTo: 0.4,
                              stops: [0, 90, 100],
                            },
                          },
                          dataLabels: {
                            enabled: false,
                          },
                          stroke: {
                            curve: "smooth",
                            width: 2,
                          },
                          xaxis: {
                            type: "datetime",
                            categories: [
                              "2018-09-19T00:00:00.000Z",
                              "2018-09-19T01:30:00.000Z",
                              "2018-09-19T02:30:00.000Z",
                              "2018-09-19T03:30:00.000Z",
                              "2018-09-19T04:30:00.000Z",
                              "2018-09-19T05:30:00.000Z",
                              "2018-09-19T06:30:00.000Z",
                            ],
                          },
                          tooltip: {
                            x: {
                              format: "dd/MM/yy HH:mm",
                            },
                          },
                        }
                      ).render();
                    });
                  </script>
                  <!-- End Line Chart -->
                </div>
              </div>
            </div>
            <!-- End Reports -->

          </div>
        </div>
        <!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">
          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">
                Artikel Sekolah <span>| Lastest</span>
              </h5>

              <div class="news">
                <?php
                // Mengambil data artikel dari database (misalnya menggunakan MySQLi)
                $query = "SELECT * FROM tb_artikel LIMIT 5"; // Mengambil 5 artikel pertama
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                  $id_artikel = $row['id_artikel'];
                  $judul_artikel = $row['judul_artikel'];
                  $isi_artikel = $row['isi_artikel'];
                  $gambar_sampul = $row['gambar_sampul'];

                  // Batasi isi artikel menjadi 100 karakter tanpa memotong kata terakhir
                  if (strlen($isi_artikel) > 75) {
                    $isi_artikel = substr($isi_artikel, 0, 75); // Ambil 100 karakter pertama
                    $lastSpace = strrpos($isi_artikel, ' '); // Temukan posisi spasi terakhir
                    $isi_artikel = substr($isi_artikel, 0, $lastSpace); // Potong hingga spasi terakhir
                    $isi_artikel .= '...';
                  }
                ?>

                  <div class="post-item clearfix">
                    <img src="assets/img/artikel/<?php echo $gambar_sampul; ?>" alt="<?php echo $judul_artikel; ?>" />
                    <h4><a href="pages-artikel.php"><?php echo $judul_artikel; ?></a></h4>
                    <p><?php echo strip_tags($isi_artikel); ?></p>
                  </div>

                <?php
                }
                ?>
              </div>
              <!-- End sidebar recent posts-->
            </div>
          </div>
          <!-- End News & Updates -->
        </div>
        <!-- End Right side columns -->
      </div>
    </section>
  </main>
  <!-- End #main -->

  <!-- ======= Start Footer Section ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>SMK Muh 15</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="#">Ahmad Zaky</a>
    </div>
  </footer>
  <!-- ======= End Footer Section ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae cupiditate nemo iusto quis aut tempora deleniti? Harum quam omnis, magni optio ipsum amet. Expedita recusandae architecto cumque incidunt! Iste ipsam voluptatum officia dicta facilis aut temporibus? Expedita nesciunt atque iusto, voluptas aspernatur officia rem hic reprehenderit deserunt sunt beatae molestias provident nam facere quod laudantium eos perferendis corporis laborum suscipit enim nostrum ratione? Nam provident velit a neque, culpa ea molestiae rem aut atque vitae voluptatem libero quia eligendi quae doloremque. Fuga asperiores nobis modi, placeat eius odit minima eaque, id nisi eligendi, reprehenderit soluta dicta! Sit dolores nam numquam est ex. Et, commodi excepturi saepe optio reprehenderit sequi veniam ratione voluptate iusto tempore officiis doloribus natus dolore, modi laudantium, assumenda obcaecati molestiae provident tempora at aspernatur? Est quia iste culpa quis provident reiciendis voluptas molestias assumenda, ut optio iusto autem vitae similique, magnam repudiandae perferendis et harum magni asperiores eligendi. Aut, fuga, labore nulla quaerat omnis sed reprehenderit officia ut nesciunt recusandae debitis repudiandae incidunt minus veniam esse inventore beatae sequi optio atque corporis eligendi perferendis! Quaerat ex sapiente voluptatum porro velit quo dolorem voluptas voluptatem ducimus. Commodi doloremque dicta iusto incidunt fuga assumenda voluptatum consectetur provident quod non!