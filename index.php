<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>SMK Muh 15 - Index</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header Section ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">smkmuh15stb@gmail.com</a></i>
        <i class="bi bi-phone d-none d-sm-flex align-items-center ms-4"><span>(021) 52920657</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </section>
  <!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Muh15<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">Program</a></li>
          <li><a href="#portfolio">Sarpras</a></li>
          <li><a href="#team">Pimpinan</a></li>
          <li><a href="#recent-posts">Artikel</a></li>
          <li class="dropdown">
            <a href="#"><span>Lainnya</span>
              <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">PPDB</a></li>
              <li class="dropdown">
                <a href="#"><span>Kejuruan</span>
                  <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Jurusan DKV</a></li>
                  <li><a href="#">Jurusan RPL</a></li>
                  <li><a href="#">Jurusan BDP</a></li>
                  <li><a href="#">Jurusan BP</a></li>
                </ul>
              </li>
              <li><a href="#">Statistik Siswa</a></li>
              <li class="dropdown">
                <a href="#"><span>Ekstrakurikuler</span>
                  <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">PR IPM</a></li>
                  <li><a href="#">Hizbul Wathon</a></li>
                  <li><a href="#">Web Programming</a></li>
                  <li><a href="#">Hadrah</a></li>
                  <li><a href="#">Math Club</a></li>
                  <li><a href="#">Bisnis Club</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav>
      <!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>SMK Muh 15 Jakarta</span></h2>
          <p>School of Bussiness Multimedia</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">PPDB</a>
            <a href="https://www.youtube.com/watch?v=sbb-38qcjP8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 text-center">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100" style="height: 400px" />
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">
          <!-- Start Icon Box -->
          <?php
          // Ambil data jurusan dari tabel tb_jurusan
          $query = "SELECT * FROM tb_jurusan";
          $result = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($result)) {
            $id_jurusan = $row['id_jurusan'];
            $icon_jurusan = $row['icon_jurusan'];
            $nama_jurusan = $row['nama_jurusan'];
          ?>

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="<?php echo $icon_jurusan; ?>"></i></div>
                <h4 class="title">
                  <a href="#" class="stretched-link"><?php echo $nama_jurusan; ?></a>
                </h4>
              </div>
            </div>
          <?php
          }
          ?>
          <!-- End Icon Box -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <!-- ======= Start Main Section ======= -->
  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Tentang Kami</h2>
          <p>
            SMK Muhammadiyah 15 Jakarta Selatan adalah sekolah berbasis
            kejuruan digital, dengan pelaksanaan pembinaan berlandaskan kepada
            nilai-nilai pendidikan bernafaskan keislaman yang diambil dari
            nilai-nilai al-quran dan as-sunnah, sebagai upaya dalam mencetak
            mutu lulusan yang berkarakter pebisnis digital yang amanah dan
            berwawasan universal serta global. Melalui pembelajaran berbasis
            program unggulan.
          </p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Visi dan Misi SMK Muhammadiyah 15 Jakarta</h3>
            <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="" />
            <p>
              Visi kami adalah: <br /><br /><span class="fst-italic">"Mewujudkan sumber daya manusia berakhlakul karimah yang
                mampu menguasai IPTEK secara global berlandaskan iman dan
                taqwa."</span>
            </p>
            <p>
              Dengan visi tersebut, kami memiliki harapan tinggi untuk
              mewujudkan sumber daya manusia yang berakhlakul karimah, yaitu
              individu yang memiliki akhlak mulia yang didasarkan pada iman
              dan taqwa. Kami percaya bahwa dengan dasar moral yang kokoh,
              lulusan kami akan menjadi pionir dalam menguasai ilmu
              pengetahuan dan teknologi secara global. Visi kami adalah
              menciptakan individu yang tidak hanya kompeten dalam bidang
              akademis, tetapi juga memiliki integritas moral yang tinggi,
              yang akan membawa manfaat bagi masyarakat dan dunia.
            </p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p>Sedangkan misi kami adalah:</p>
              <ul>
                <li>
                  <i class="bi bi-check-circle-fill"></i> Menghasilkan lulusan
                  yang memiliki akhlak yang berlandaskan iman dan taqwa.
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i> Mencetak lulusan
                  yang mampu menguasai ilmu pendidikannya untuk dapat di
                  implementasikan dalam kehidupan nyata.
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i> Menjadikan lulusan
                  yang mempunyai jiwa wirausaha, kreatif, inovatif dan
                  mencipatkan lapangan pekerjaan.
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i> Menghasilkan lulusan
                  yang menguasai teknologi secara professional untuk
                  menghadapi era revolusi industri & globalisasi.
                </li>
              </ul>
              <p>
                Kami berharap bahwa melalui visi dan misi ini, lulusan kami
                akan menjadi agen perubahan yang mampu memberikan kontribusi
                positif bagi masyarakat, menghadapi tantangan dunia modern,
                menciptakan lapangan kerja, dan memimpin dalam berbagai
                bidang, dengan integritas moral yang tinggi.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="" />
                <a href="https://www.youtube.com/watch?v=sbb-38qcjP8" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Start Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <!-- Start Partnership Item -->
            <?php
            // Ambil data dari tabel tb_partnership
            $query = "SELECT * FROM tb_partnership";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
              $logo_partnership = $row['logo_partnership'];
              $nama_partnership = $row['nama_partnership'];
            ?>
              <div class="swiper-slide">
                <img src="assets/img/partnership/<?php echo $logo_partnership; ?>" class="img-fluid" alt="<?php echo $nama_partnership; ?>" />
              </div>
            <?php
            }
            ?>
            <!-- End Partnership Item -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= Start Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6">
            <img src="assets/img/stats-img.jpg" alt="" class="img-fluid" />
          </div>

          <div class="col-lg-6">
            <?php
            // Ambil tahun ajaran saat ini
            $tahun_ajaran_sekarang = date("Y"); // Misalnya, "2023"

            // Coba mengambil data statistik untuk tahun ajaran saat ini
            $query = "SELECT * FROM tb_statistik WHERE tahun_ajaran = '$tahun_ajaran_sekarang'";
            $result = mysqli_query($conn, $query);

            if ($row = mysqli_fetch_assoc($result)) {
              // Data statistik untuk tahun ajaran saat ini ditemukan
              $jumlah_siswa = $row['jumlah_siswa'];
              $jumlah_guru = $row['jumlah_guru'];
              $jumlah_kelas = $row['jumlah_kelas'];
            } else {
              // Data statistik untuk tahun ajaran saat ini tidak ditemukan
              // Coba mengambil data statistik untuk tahun ajaran terakhir
              $query = "SELECT * FROM tb_statistik ORDER BY tahun_ajaran DESC";
              $result = mysqli_query($conn, $query);

              if ($row = mysqli_fetch_assoc($result)) {
                // Data statistik untuk tahun ajaran terakhir ditemukan
                $jumlah_siswa = $row['jumlah_siswa'];
                $jumlah_guru = $row['jumlah_guru'];
                $jumlah_kelas = $row['jumlah_kelas'];
              } else {
                // Penanganan jika data tidak ditemukan untuk tahun ajaran terakhir
                $jumlah_siswa = 0;
                $jumlah_guru = 0;
                $jumlah_kelas = 0;
              }
            }

            ?>

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $jumlah_siswa; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>
                <strong>Peserta Didik</strong> terdaftar sebagai siswa aktif.
              </p>
            </div>
            <!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $jumlah_guru; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>
                <strong>Tenaga Pengajar</strong> profesional pada bidangnya
              </p>
            </div>
            <!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $jumlah_kelas; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>
                <strong>Ruang Kelas</strong> dengan fasilitas memenuhi standar
              </p>
            </div>
            <!-- End Stats Item -->

          </div>
        </div>
      </div>
    </section>
    <!-- End Stats Counter Section -->

    <!-- ======= Start Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=sbb-38qcjP8" class="glightbox play-btn"></a>
        <h3>Gabung Bersama Kami</h3>
        <p>
          Jadilah bagian dari perubahan yang kami bawa ke dunia. Bergabunglah
          dengan kami untuk memulai perjalanan pendidikan yang memenuhi visi
          dan misi kami. Daftar sekarang dan bentuk masa depan Anda bersama
          SMK Muhammadiyah 15 Jakarta.
        </p>
        <a class="cta-btn" href="#">Daftar Sekarang</a>
      </div>
    </section>
    <!-- End Call To Action Section -->

    <!-- ======= Start Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Program Unggulan</h2>
          <p>
            Berikut adalah program unggulan SMK Muhammadiyah 15 Jakarta, yang
            membuka pintu kepada peluang tak terbatas dan mempersiapkan siswa
            untuk masa depan yang penuh potensi.
          </p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <!-- Start Service Item -->
          <?php
          // Query untuk mengambil data dari tabel tb_program
          $query = "SELECT * FROM tb_program";
          $result = mysqli_query($conn, $query);

          // Loop melalui hasil query
          while ($row = mysqli_fetch_assoc($result)) {
            $icon_program = $row['icon_program'];
            $nama_program = $row['nama_program'];
            $deskripsi_program = $row['deskripsi_program'];

            // Batasi deskripsi program hanya memiliki maksimum 120 karakter
            if (strlen($deskripsi_program) > 150) {
              $deskripsi_program = substr($deskripsi_program, 0, 150);
              $last_space = strrpos($deskripsi_program, ' ');
              if ($last_space !== false) {
                $deskripsi_program = substr($deskripsi_program, 0, $last_space);
              }
              $deskripsi_program .= '...';
            }

            // Membuat item program
            echo '<div class="col-lg-4 col-md-6">';
            echo '<div class="service-item position-relative">';
            echo '<div class="icon">';
            echo "<i class=\"$icon_program\"></i>";
            echo '</div>';
            echo "<h3>$nama_program</h3>";
            echo "<p>$deskripsi_program</p>";
            echo '<a href="#" class="readmore stretched-link">Selengkapnya <i class="bi bi-arrow-right"></i></a>';
            echo '</div>';
            echo '</div>';
          }

          ?>
          <!-- End Service Item -->
        </div>
      </div>
    </section>
    <!-- End Our Services Section -->

    <!-- ======= Start Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Testimoni Alumni</h2>
          <p>
            Dengarlah langsung cerita inspiratif dari individu yang mengambil
            langkah pertama menuju kesuksesan mereka, berkat fondasi yang kami
            bangun di SMK Muhammadiyah 15 Jakarta.
          </p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <!-- Start testimonial item -->
          <div class="swiper-wrapper">
            <?php
            $query = "SELECT * FROM tb_testimoni";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
              $foto_alumni = $row['foto_alumni'];
              $nama_alumni = $row['nama_alumni'];
              $profesi_alumni = $row['profesi_alumni'];
              $komentar_alumni = $row['komentar_alumni'];

              // Batasi komentar hanya memiliki maksimum 200 karakter dan berhenti di kata terakhir
              if (strlen($komentar_alumni) > 450) {
                $komentar_alumni = substr($komentar_alumni, 0, 450);
                $last_space = strrpos($komentar_alumni, ' ');
                if ($last_space !== false) {
                  $komentar_alumni = substr($komentar_alumni, 0, $last_space);
                }
                $komentar_alumni .= '...';
              }
            ?>
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="admin/assets/img/testimoni/<?php echo $foto_alumni; ?>" class="testimonial-img flex-shrink-0" alt="" />
                      <div>
                        <h3><?php echo $nama_alumni; ?></h3>
                        <h4><?php echo $profesi_alumni; ?></h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <?php echo $komentar_alumni; ?>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
          <div div class="swiper-pagination"></div>
        </div>
        <!-- End testimonial item -->
      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Start Sarpras Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Sarana Prasarana</h2>
          <p>
            Kami percaya bahwa dengan sarana prasarana yang lengkap, siswa kami akan memiliki segala yang mereka butuhkan untuk meraih kesuksesan dalam pendidikan dan pengembangan diri.
          </p>
        </div>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-lab">Lab</li>
              <li data-filter=".filter-studio">Studio</li>
              <li data-filter=".filter-kelas">Kelas</li>
              <li data-filter=".filter-lainnya">Lainnya</li>
            </ul>
            <!-- End Portfolio Filters -->
          </div>
          <div class="row gy-4 portfolio-container">
            <?php
            $query = "SELECT * FROM tb_sarpras";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
              $foto_sarpras = $row['foto_sarpras'];
              $nama_sarpras = $row['nama_sarpras'];
              $deskripsi_sarpras = $row['deskripsi_sarpras'];
              $kategori_sarpras = $row['kategori_sarpras'];
            ?>
              <div class="col-xl-4 col-md-6 portfolio-item filter-<?php echo $kategori_sarpras; ?>">
                <div class="portfolio-wrap">
                  <a href="admin/assets/img/sarpras/<?php echo $foto_sarpras; ?>" data-gallery="portfolio-gallery-app" class="glightbox">
                    <img src="admin/assets/img/sarpras/<?php echo $foto_sarpras; ?>" class="img-fluid" alt="">
                  </a>
                  <div class="portfolio-info">
                    <h4>
                      <a href="portfolio-details.html" title="More Details"><?php echo $nama_sarpras; ?></a>
                    </h4>
                    <p>
                      <?php echo $deskripsi_sarpras; ?>
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Portfolio Item -->
            <?php
            }
            ?>
          </div>
          <!-- End Portfolio Container -->
        </div>
      </div>
    </section>
    <!-- End Sarpras Section -->

    <!-- ======= Start Pimpinan Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Pimpinan</h2>
          <p>
            Pimpinan kami berperan penting dalam membentuk budaya sekolah yang
            inklusif dan dinamis, serta berusaha untuk memberikan pengalaman
            pendidikan yang unggul bagi semua siswa.
          </p>
        </div>

        <div class="row gy-4">
          <?php
          // Query untuk mengambil data dari tabel tb_pimpinan
          $query = "SELECT * FROM tb_pimpinan";
          $result = mysqli_query($conn, $query);

          // Loop melalui hasil query
          while ($row = mysqli_fetch_assoc($result)) {
            $foto_pimpinan = "admin/assets/img/pimpinan/" . $row['foto_pimpinan'];
            $nama_pimpinan = $row['nama_pimpinan'];
            $jabatan_pimpinan = $row['jabatan_pimpinan'];
            $twitter_pimpinan = $row['twitter_pimpinan'];
            $facebook_pimpinan = $row['facebook_pimpinan'];
            $instagram_pimpinan = $row['instagram_pimpinan'];
            $linkedin_pimpinan = $row['linkedin_pimpinan'];
          ?>
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="<?php echo $foto_pimpinan; ?>" class="img-fluid" alt="" />
                <h4><?php echo $nama_pimpinan; ?></h4>
                <span><?php echo $jabatan_pimpinan; ?></span>
                <div class="social">
                  <a href="<?php echo $twitter_pimpinan; ?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo $facebook_pimpinan; ?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo $instagram_pimpinan; ?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?php echo $linkedin_pimpinan; ?>"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>

    <!-- End Pimpinan Section -->

    <!-- ======= Start Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3><strong>Pertanyaan</strong> yang Sering Diajukan</h3>
              <p>
                Kami memahami bahwa calon siswa dan orang tua mungkin memiliki
                pertanyaan sebelum memutuskan untuk bergabung dengan sekolah
                kami. Di bawah ini, kami telah merangkum beberapa pertanyaan
                yang sering diajukan:
              </p>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Apa saja program unggulan yang tersedia di SMK Muh 15?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Kami menawarkan berbagai program unggulan yang mencakup
                    tahfiz, siswa mengajar, ramadhan produktif, bussiness
                    club, web developer, dan content creator. Setiap program
                    didesain untuk memberikan pengalaman belajar yang luar
                    biasa dan relevan dengan dunia industri saat ini namun
                    tetap berlandaskan iman dan taqwa.
                  </div>
                </div>
              </div>
              <!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Apakah SMK Muh 15 menyediakan opsi bantuan keuangan bagi
                    siswanya?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Kami menyediakan berbagai opsi bantuan keuangan, termasuk
                    beasiswa berbasis prestasi dan kebutuhan seperti KJP dan
                    PIP. Kami ingin memastikan bahwa semua siswa yang
                    berkualifikasi memiliki kesempatan untuk bergabung dengan
                    SMK Muh 15.
                  </div>
                </div>
              </div>
              <!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Siapakah pimpinan sekolah dan staf pengajar di SMK Muh 15?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Saat ini SMK Muh 15 dipimpin oleh Bapak Moch. Nor Hasan,
                    S.Kom. , yang didukung oleh tim pengajar kami yang terdiri
                    dari 36 tenaga pengajar berpengalaman dan berkualitas.
                    Mereka tidak hanya memiliki komitmen terhadap pendidikan
                    berlandaskan iman dan taqwa, tetapi juga membekali siswa
                    dengan pengetahuan dan keterampilan yang relevan untuk
                    menghadapi tantangan dunia industri saat ini.
                  </div>
                </div>
              </div>
              <!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Apa saja fasilitas dan sarana prasarana yang tersedia di
                    SMK Muh 15?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Kami memiliki fasilitas modern dan lengkap yang mencakup
                    17 ruang kelas terpadu, 3 laboratorium, 3 studio, 1 aula
                    serbaguna, kantin dan area lapangan, guna menciptakan
                    lingkungan belajar yang optimal. Sarana prasarana kami
                    tidak hanya mendukung aspek pendidikan, tetapi juga
                    menciptakan lingkungan yang mendukung perkembangan
                    spiritual dan pribadi siswa.
                  </div>
                </div>
              </div>
              <!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Bagaimana cara mendaftar di SMK Muh 15?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Proses pendaftaran kami sangat sederhana. Anda dapat
                    mengunjungi halaman ppdb kami untuk informasi lebih lanjut
                    dan petunjuk mengenai langkah-langkahnya.
                  </div>
                </div>
              </div>
              <!-- # Faq item-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Start Recent Blog Posts Section ======= -->
    <?php
    // Query untuk mengambil data artikel
    $query = "SELECT a.id_artikel, a.judul_artikel, a.isi_artikel, a.tanggal_publikasi, a.kategori_artikel, a.gambar_sampul, u.nama_user, u.foto_user
          FROM tb_artikel a
          JOIN tb_user u ON a.id_user = u.id_user
          ORDER BY a.tanggal_publikasi DESC";
    $result = mysqli_query($conn, $query);

    ?>

    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Artikel</h2>
          <p>
            Dengan artikel ini, kami membagikan berita, prestasi, serta
            informasi terbaru seputar perkembangan SMK Muhammadiyah 15
            Jakarta.
          </p>
        </div>

        <div class="row gy-4">
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
            // Batasi judul artikel hanya menampilkan 50 karakter dan berhenti di kata terakhir
            $judul_artikel = $row['judul_artikel'];
            if (strlen($judul_artikel) > 50) {
              $judul_artikel = substr($judul_artikel, 0, 50); // Ambil 50 karakter pertama
              $last_space = strrpos($judul_artikel, ' '); // Cari posisi spasi terakhir
              $judul_artikel = substr($judul_artikel, 0, $last_space); // Potong hingga spasi terakhir
              $judul_artikel .= '...'; // Tambahkan tanda ...
            }
          ?>
            <div class="col-xl-4 col-md-6">
              <article>
                <div class="post-img">
                  <img src="admin/assets/img/artikel/<?php echo $row['gambar_sampul']; ?>" alt="" class="img-fluid" />
                </div>

                <p class="post-category"><?php echo $row['kategori_artikel']; ?></p>

                <h2 class="title">
                  <a href="blog-details.html"><?php echo $judul_artikel; ?></a>
                </h2>

                <div class="d-flex align-items-center">
                  <img src="admin/assets/img/user/<?php echo $row['foto_user']; ?>" alt="" class="img-fluid post-author-img flex-shrink-0" />
                  <div class="post-meta">
                    <p class="post-author"><?php echo $row['nama_user']; ?></p>
                    <p class="post-date">
                      <time datetime="<?php echo $row['tanggal_publikasi']; ?>"><?php echo date("M d, Y", strtotime($row['tanggal_publikasi'])); ?></time>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            <!-- End post list item -->
          <?php
          }
          ?>
        </div>
        <!-- End recent posts list -->
      </div>
    </section>

    <!-- End Recent Blog Posts Section -->

    <!-- ======= Start Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Kontak Kami</h2>
          <p>
            Silakan hubungi kami untuk berbagai keperluan, baik itu pertanyaan
            tentang program pendidikan, pendaftaran, atau informasi lainnya.
          </p>
        </div>

        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-4">
            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Alamat:</h4>
                  <p>
                    Jl. Karet Belakang Raya No.4, RT 10/RW 2, Karet Kuningan,
                    Setiabudi, Jakarta Selatan
                  </p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>smkmuh15stb@gmail.com</p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telepon:</h4>
                  <p>(021) 52920657</p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Jam Buka</h4>
                  <p>Senin-Jumat: 07.00 - 16.00</p>
                </div>
              </div>
              <!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Pesan Anda sudah terkirim. Terima Kasih!
                </div>
              </div>
              <div class="text-center">
                <button type="submit">Kirim Pesan</button>
              </div>
            </form>
          </div>
          <!-- End Contact Form -->
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End Main Section -->

  <!-- ======= Start Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Tentang Kami</span>
          </a>
          <p>
            SMK Muhammadiyah 15 Jakarta Selatan adalah sekolah kejuruan
            digital yang berlandaskan nilai-nilai pendidikan Islam dan program
            unggulan. Kami mencetak lulusan berkarakter pebisnis digital yang
            amanah dan berwawasan global.
          </p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Tautan Berguna</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Program</a></li>
            <li><a href="#">Sarpras</a></li>
            <li><a href="#">Pimpinan</a></li>
            <li><a href="#">Artikel</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Lainnya</h4>
          <ul>
            <li><a href="#">Visi dan Misi</a></li>
            <li><a href="#">Kejuruan</a></li>
            <li><a href="#">Ekstrakurikuler</a></li>
            <li><a href="#">Statistik Siswa</a></li>
            <li><a href="#">PPDB Mandiri</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Kontak Kami</h4>
          <p>
            Jl. Karet Belakang Raya No.4,<br />
            RT 10/RW 2, Karet Kuningan,<br />
            Setiabudi, Jakarta Selatan <br /><br />
            <strong>Telepon:</strong> (021) 52920657<br />
            <strong>Email:</strong> smkmuh15stb@gmail.com<br />
          </p>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>SMK Muh 15</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="#">Ahmad Zaky</a>
      </div>
    </div>
  </footer>
  <!-- End Footer Section -->

  <!-- ======= Start Back To Top Section ======= -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- End Back To Top Section -->

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>