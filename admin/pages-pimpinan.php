<?php
include '../koneksi.php';

// Ambil data siswa dari database
$query = "SELECT * FROM tb_pimpinan";
$result = mysqli_query($conn, $query);
// $num_rows = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Pimpinan - NiceAdmin</title>
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
    <!-- ======= Start Logo Section ======= -->
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" />
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo Section -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <!-- ======= Start Profile Nav Section ======= -->
        <li class="nav-item dropdown pe-3">
          <!-- ======= Start Profile Image Nav Section ======= -->
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" />
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span></a>
          <!-- End Profile Image Icon -->

          <!-- ======= Start Profile Dropdown Icon Section ======= -->
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
          <!-- End Profile Dropdown Items Section -->
        </li>
        <!-- End Profile Nav Section -->
      </ul>
    </nav>
  </header>
  <!-- End Header Section -->

  <!-- ======= Start Sidebar Section ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
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
        <a class="nav-link" href="pages-pimpinan.php">
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
  <!-- End Sidebar Section -->

  <!-- ======= Start Main Section ======= -->
  <main id="main" class="main">
    <!-- ======= Start Title Section ======= -->
    <div class="pagetitle">
      <h1>Pimpinan Sekolah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Pimpinan Sekolah</li>
        </ol>
      </nav>
    </div>
    <!-- End Title Section -->

    <!-- ======= Start Card Section ======= -->
    <section class="section">
      <div class="row">
        <!-- ======= Start Column 1 Section ======= -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar Pimpinan Sekolah</h5>
              <a href="#tambah-data"><button type="button" class="btn btn-success">Tambah Data</button></a><br><br>
              <p>
                Pada tabel dibawah ini, akan ditampilkan data berupa foto, nama, posisi dan sosial media dari pimpinan SMK Muh 15.
              </p>
              <!-- ======= Start Notification Section ======= -->
              <?php
              if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "upload_fail") {
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Sorry, there was an error uploading your record!
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                } else if ($_GET['pesan'] == "upload_success") {
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      The record has been uploaded!
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                } else if ($_GET['pesan'] == "update_fail") {
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Sorry, there was an error updating your record!
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                } else if ($_GET['pesan'] == "update_success") {
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      The record has been updated!
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                } else if ($_GET['pesan'] == "delete_fail") {
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Sorry, there was an error deleting your record!
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                } else if ($_GET['pesan'] == "delete_success") {
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      The record has been deleted!
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                } else if ($_GET['pesan'] == "file_duplicate") {
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Sorry, same file name is detected!
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                } else if ($_GET['pesan'] == "file_too_large") {
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Sorry, your file is too large! Maximum file size is 5MB.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                } else if ($_GET['pesan'] == "database_error") {
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Sorry, database error detected
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                }
              }
              ?>
              <!-- End Notification Section -->

              <!-- Start Table Section -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Twitter</th>
                    <th scope="col">Facebook</th>
                    <th scope="col">Instagram</th>
                    <th scope="col">Linkedin</th>
                    <th scope="col" class="text-center" width="120px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Start Looping Section -->
                  <?php
                  if ($result) {
                    $no = 1; // Untuk nomor urut
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<th scope='row'>" . $no . "</td>";
                      echo "<td><img src='assets/img/pimpinan/" . $row['foto_pimpinan'] . "' style='width:75px'></td>";
                      echo "<td>" . $row['nama_pimpinan'] . "</td>";
                      echo "<td>" . $row['jabatan_pimpinan'] . "</td>";
                      echo "<td>" . $row['twitter_pimpinan'] . "</td>";
                      echo "<td>" . $row['facebook_pimpinan'] . "</td>";
                      echo "<td>" . $row['instagram_pimpinan'] . "</td>";
                      echo "<td>" . $row['linkedin_pimpinan'] . "</td>";
                      echo "<td><a href='pages-pimpinan-edit.php?id=" . $row['id_pimpinan'] . "'><button type='button' class='btn btn-warning'><i class='bi bi-pencil'></i></button></a> | 
                          <a href='pages-pimpinan-delete.php?id=" . $row['id_pimpinan'] . "'><button type='button' class='btn btn-danger'><i class='bi bi-trash'></i></button></a></td>";
                      echo "</tr>";
                      $no++;
                    }
                    mysqli_free_result($result);
                  } else {
                    header("location:pages-pimpinan.php?pesan=database_error");
                  }

                  ?>
                  <!-- End Looping Section -->
                </tbody>
              </table>
              <?php // echo $num_rows 
              ?>
              <!-- End Table Section -->
            </div>
          </div>
        </div>
        <!-- End Column 1 Section -->

        <!-- ======= Start Column 2 Section ======= -->
        <div class="col-lg-12" id="tambah-data">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data</h5>
              <!-- ======= Start Vertical Form Section ======= -->
              <form class="row g-3" action="pages-pimpinan-create.php" method="post" enctype="multipart/form-data">
                <div class="col-md-4">
                  <label for="namaPimpinan" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="namaPimpinan" name="namaPimpinan" required />
                </div>
                <div class="col-md-4">
                  <label for="jabatanPimpinan" class="form-label">Jabatan</label>
                  <input type="text" class="form-control" id="jabatanPimpinan" name="jabatanPimpinan" required />
                </div>
                <div class="col-md-4">
                  <label for="fileToUpload" class="form-label">Upload Foto</label>
                  <input class="form-control" type="file" id="fileToUpload" name="fileToUpload" accept=".jpg,.jped,.gif,.png" required />
                  <p class="lh-2 fst-italic pt-2 mb-0 text-muted" style="font-size: 13px">
                    Catatan: Unggah dengan rasio 1:1 (persegi).
                  </p>
                </div>
                <div class="col-md-6">
                  <label for="twitter_pimpinan" class="form-label">Twitter URL</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="twitter_pimpinan">https://twitter.com/</span>
                    <input type="text" class="form-control" id="twitter_pimpinan" name="twitterPimpinan" aria-describedby="twitter_pimpinan" placeholder="@username">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="facebook_pimpinan" class="form-label">Facebook URL</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="facebook_pimpinan">https://www.facebook.com/</span>
                    <input type="text" class="form-control" id="facebook_pimpinan" name="facebookPimpinan" aria-describedby="facebook_pimpinan" placeholder="username">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="instagram_pimpinan" class="form-label">Instagram URL</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="instagram_pimpinan">https://www.instagram.com/</span>
                    <input type="text" class="form-control" id="instagram_pimpinan" name="instagramPimpinan" aria-describedby="instagram_pimpinan" placeholder="username">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="linkedin_pimpinan" class="form-label">Linkedin URL</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="linkedin_pimpinan">https://www.linkedin.com/in/</span>
                    <input type="text" class="form-control" id="linkedin_pimpinan" name="linkedinPimpinan" aria-describedby="linkedin_pimpinan" placeholder="username">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                  <button type="reset" class="btn btn-secondary">
                    Reset
                  </button>
                </div>
              </form>
              <!-- End Vertical Form Section -->
            </div>
          </div>
        </div>

        <!-- End Column 2 Section -->

      </div>
    </section>
    <!-- End Card Section -->
  </main>
  <!-- End Main Section -->

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
  <!-- End Footer Section -->

  <!-- ======= Start Back To Top Section ======= -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- End Back To Top Section -->

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