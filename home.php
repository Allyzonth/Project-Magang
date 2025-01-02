<?php
session_start();
?>

<?php
// Menampilkan pesan berhasil (jika ada)
if (isset($_SESSION['feedback_success'])) {
    echo '<div class="success-message">' . $_SESSION['feedback_success'] . '</div>';
    unset($_SESSION['feedback_success']); // Hapus sesi setelah ditampilkan
}

// Menampilkan pesan error (jika ada)
if (isset($_SESSION['feedback_error'])) {
    echo '<div class="error-message">' . $_SESSION['feedback_error'] . '</div>';
    unset($_SESSION['feedback_error']); // Hapus sesi setelah ditampilkan
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inosoft Trans Sistem</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  


</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

    <a href="index.php/inosoft" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="#job-openings">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>PT. INOSOFT TRANS SISTEM</h1>
          <h2>Founded in 2006, PT. INOSOFT TRANS SISTEM is a software development company based in Surabaya, Indonesia.</h2>
          <div><a href="#about" class="btn-get-started scrollto">Mulai</a></div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="assets/img/code.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Kenapa Harus Inosoft?</h3>
            <div style="text-align: justify;">
            <p class="description1">
    Kami menyediakan layanan terbaik untuk membantu dalam mengelola bisnis agar terus berkembang dengan menggunakan layanan aplikasi berbasis web dan mobile yang praktis dan andal, yang dapat diakses kapan saja dan di mana saja. Kami di sini terus berinovasi dan mengembangkan produk yang sesuai dengan kebutuhan dengan memanfaatkan teknologi terbaru yang ramah pengguna, fleksibel, dan siap pakai.
  </p>
</div>

<div class="icon-box">
  <div class="icon"><i class="bx bx-search"></i></div>
  <h4 class="title"><a href="">Layanan Terbaik</a></h4>
  <p class="description">Kami fokus pada memberikan layanan terbaik kepada pelanggan kami. Dengan pengalaman dan komitmen kami, kami menghadirkan solusi teknologi informasi yang dapat membantu bisnis Anda mencapai tujuannya.</p>
</div>

<div class="icon-box">
  <div class="icon"><i class="bx bx-code"></i></div>
  <h4 class="title"><a href="">Pengalaman dan Keahlian</a></h4>
  <p class="description"> Kami memiliki tim ahli yang memiliki pengalaman luas dalam pengembangan web dan teknologi informasi. Kami siap memberikan solusi yang sesuai dengan kebutuhan khusus Anda.</p>
</div>

<div class="icon-box">
  <div class="icon"><i class="bx bx-book"></i></div>
  <h4 class="title"><a href="">Inovasi Tanpa Henti</a></h4>
  <p class="description"> Kami selalu berada di garis depan inovasi. Kami memanfaatkan teknologi terbaru yang fleksibel untuk memastikan solusi kami selalu relevan dengan perkembangan terbaru di dunia teknologi.</p>
</div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  
  <!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container">
    <div class="section-title">
      <h2>Layanan</h2>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="icon-box">
          <h4 class="title"><a href="">Pengembangan Aplikasi Web</a></h4>
          <p class="description">Kami menyediakan layanan pengembangan aplikasi web yang andal untuk membantu Anda mencapai visi dan tujuan bisnis Anda dengan efisien dan efektif.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="icon-box">
          <h4 class="title"><a href="">Pengembangan Aplikasi Mobile</a></h4>
          <p class="description">Kami menghadirkan solusi pengembangan aplikasi mobile yang inovatif untuk memenuhi kebutuhan bisnis Anda di era digital ini.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="icon-box">
          <h4 class="title"><a href="">Desain UX/UI</a></h4>
          <p class="description">Tim desain kami menciptakan pengalaman pengguna (UX) yang menarik dan antarmuka pengguna (UI) yang estetis untuk produk Anda.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="icon-box">
          <h4 class="title"><a href="">Pengujian dan Quality Assurance</a></h4>
          <p class="description">Kami melakukan pengujian dan quality assurance untuk memastikan aplikasi Anda berfungsi dengan baik, aman, dan sesuai dengan standar kualitas yang tinggi.</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Services Section -->

<!-- ======= Team Section ======= -->
  <section id="job-openings" class="job-openings section-bg">
    <div class="container">
      <div class="section-title">
        <h2>Bergabung dengan Tim Kami</h2>
        <p>Jelajahi peluang pekerjaan menarik di bawah ini.</p>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="jobs-container" id="jobsContainer">

            <!-- Backend Developer -->
            <div class="job">
              <div class="job-info">
                <h4 class="job-title">Pengembang Backend</h4>
                <span class="job-type">Penuh waktu dan bekerja dari rumah</span>
              </div>
              <div class="job-description">
                <h5 class="job-section-title">Deskripsi Pekerjaan</h5>
                <ul class="job-list">
                  <li class="job-item">Melakukan tugas pengkodean</li>
                  <!-- Tambahkan item deskripsi pekerjaan lainnya -->
                </ul>
                <h5 class="job-section-title">Persyaratan</h5>
                <ul class="job-list">
                  <li class="job-item">Gelar Sarjana di bidang Ilmu Komputer/Teknologi Informasi atau setara.</li>
                  <!-- Tambahkan persyaratan lainnya -->
                </ul>
                <button onclick="showMore('more1')">Read more</button>
                <div id="more1" style="display:none;">
                  <!-- Deskripsi Pekerjaan Lengkap -->
                  <p>Deskripsi pekerjaan lengkap disini...</p>
                  <p>Persyaratan lengkap disini...</p>
                  <!-- Tambahkan detail lengkap pekerjaan -->
                </div>
              </div>
            </div>

            <!-- Quality Assurance -->
            <div class="job">
              <div class="job-info">
                <h4 class="job-title">Jaminan Kualitas</h4>
                <span class="job-type">Penuh waktu dan bekerja dari rumah</span>
              </div>
              <div class="job-description">
                <h5 class="job-section-title">Deskripsi Pekerjaan</h5>
                <ul class="job-list">
                  <li class="job-item">Menganalisis dan mengklarifikasi persyaratan dengan Manajer Proyek</li>
                  <!-- Tambahkan item deskripsi pekerjaan lainnya -->
                </ul>
                <h5 class="job-section-title">Persyaratan</h5>
                <ul class="job-list">
                  <li class="job-item">Gelar sarjana atau setara, lebih disukai dari Ilmu Komputer/Teknologi Informasi.</li>
                  <!-- Tambahkan persyaratan lainnya -->
                </ul>
                <button onclick="showMore('more2')">Read more</button>
                <div id="more2" style="display:none;">
                  <!-- Deskripsi Pekerjaan Lengkap -->
                  <p>Deskripsi pekerjaan lengkap disini...</p>
                  <p>Persyaratan lengkap disini...</p>
                  <!-- Tambahkan detail lengkap pekerjaan -->
                </div>
              </div>
            </div>

            <div class="job">
              <div class="job-info">
                <h4 class="job-title">Jaminan Kualitas</h4>
                <span class="job-type">Penuh waktu dan bekerja dari rumah</span>
              </div>
              <div class="job-description">
                <h5 class="job-section-title">Deskripsi Pekerjaan</h5>
                <ul class="job-list">
                  <li class="job-item">Menganalisis dan mengklarifikasi persyaratan dengan Manajer Proyek</li>
                  <!-- Tambahkan item deskripsi pekerjaan lainnya -->
                </ul>
                <h5 class="job-section-title">Persyaratan</h5>
                <ul class="job-list">
                  <li class="job-item">Gelar sarjana atau setara, lebih disukai dari Ilmu Komputer/Teknologi Informasi.</li>
                  <!-- Tambahkan persyaratan lainnya -->
                </ul>
                <button onclick="showMore('more3')">Read more</button>
                <div id="more3" style="display:none;">
                  <!-- Deskripsi Pekerjaan Lengkap -->
                  <p>Deskripsi pekerjaan lengkap disini...</p>
                  <p>Persyaratan lengkap disini...</p>
                  <!-- Tambahkan detail lengkap pekerjaan -->
                </div>
              </div>
            </div>

            <div class="job">
              <div class="job-info">
                <h4 class="job-title">Jaminan Kualitas</h4>
                <span class="job-type">Penuh waktu dan bekerja dari rumah</span>
              </div>
              <div class="job-description">
                <h5 class="job-section-title">Deskripsi Pekerjaan</h5>
                <ul class="job-list">
                  <li class="job-item">Menganalisis dan mengklarifikasi persyaratan dengan Manajer Proyek</li>
                  <!-- Tambahkan item deskripsi pekerjaan lainnya -->
                </ul>
                <h5 class="job-section-title">Persyaratan</h5>
                <ul class="job-list">
                  <li class="job-item">Gelar sarjana atau setara, lebih disukai dari Ilmu Komputer/Teknologi Informasi.</li>
                  <!-- Tambahkan persyaratan lainnya -->
                </ul>
                <button onclick="showMore('more4')">Read more</button>
                <div id="more4" style="display:none;">
                  <!-- Deskripsi Pekerjaan Lengkap -->
                  <p>Deskripsi pekerjaan lengkap disini...</p>
                  <p>Persyaratan lengkap disini...</p>
                  <!-- Tambahkan detail lengkap pekerjaan -->
                </div>
              </div>
            </div>

            <div class="job">
              <div class="job-info">
                <h4 class="job-title">Jaminan Kualitas</h4>
                <span class="job-type">Penuh waktu dan bekerja dari rumah</span>
              </div>
              <div class="job-description">
                <h5 class="job-section-title">Deskripsi Pekerjaan</h5>
                <ul class="job-list">
                  <li class="job-item">Menganalisis dan mengklarifikasi persyaratan dengan Manajer Proyek</li>
                  <!-- Tambahkan item deskripsi pekerjaan lainnya -->
                </ul>
                <h5 class="job-section-title">Persyaratan</h5>
                <ul class="job-list">
                  <li class="job-item">Gelar sarjana atau setara, lebih disukai dari Ilmu Komputer/Teknologi Informasi.</li>
                  <!-- Tambahkan persyaratan lainnya -->
                </ul>
                <button onclick="showMore('more5')">Read more</button>
                <div id="more5" style="display:none;">
                  <!-- Deskripsi Pekerjaan Lengkap -->
                  <p>Deskripsi pekerjaan lengkap disini...</p>
                  <p>Persyaratan lengkap disini...</p>
                  <!-- Tambahkan detail lengkap pekerjaan -->
                </div>
              </div>
            </div>

            <!-- Tambahkan daftar pekerjaan lainnya di sini -->

          </div>
          <div class="scroll-buttons">
            <button onclick="scrollLeft()">&#10094;</button>
            <button onclick="scrollRight()">&#10095;</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    let scrollPos = 0;
    const jobsContainer = document.getElementById('jobsContainer');

    function scrollLeft() {
      scrollPos += 200; // Sesuaikan dengan jarak scroll yang diinginkan
      jobsContainer.scrollTo({
        left: scrollPos,
        behavior: 'smooth'
      });
    }

    function scrollRight() {
      scrollPos -= 200; // Sesuaikan dengan jarak scroll yang diinginkan
      jobsContainer.scrollTo({
        left: scrollPos,
        behavior: 'smooth'
      });
    }

    function showMore(id) {
      var moreText = document.getElementById(id);
      if (moreText.style.display === "none") {
        moreText.style.display = "block";
      } else {
        moreText.style.display = "none";
      }
    }
  </script>



    <!-- ======= Feedback Section ======= -->
    <div class="container">
    <div class="section-title">
        <h2>Feedback</h2>
    </div>
    <form action="proses_feedback.php" method="post">

        <label for="name">Nama</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Feedback</label>
        <textarea id="pesan" name="pesan" rows="4" required></textarea><br>

        <input type="submit" value="Submit Feedback">
    </form>
</div>

<!-- ======= End Feedback Section ======= -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.041693934075!2d112.7888641!3d-7.3172364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa92e2895ff3%3A0x738868d76a74a8f!2sInosoft%20Trans%20Sistem!5e0!3m2!1sen!2sus!0x738868d76a74a8f" frameborder="0" allowfullscreen></iframe>
        </div>


        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Penjaringan Sari YKP Pandugo 2 No.1, Penjaringan Sari, Kec. Rungkut, Surabaya, Jawa Timur 60297, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@inosoftweb.com </p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62318700688</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
          <form action="<?php echo site_url('inosoft/submit_feedback'); ?>" method="post">
    <div class="row">
        <div class="col-md-6 form-group">
            <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
        </div>
    </div>
    <div class="form-group mt-3">
        <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
    </div>
    <div class="my-3">
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
</div>

</form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


    

  </main><!-- End #main -->
  <footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>PT. INOSOFT TRANS SISTEM</h3>
                    <p>
                        Jl. Penjaringan Sari YKP Pandugo 2 No.1 <br>
                        Kec. Rungkut, Surabaya, Jawa Timur 60297<br>
                        Indonesia <br><br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Media Sosial</h4>
                    <p>Ikuti kami di media sosial untuk mendapatkan informasi terkini:</p>
                    <div class="social-links mt-3">
                        <a href="https://twitter.com/INOSOFTWEB" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/inosoftweb" class="facebook"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/inosoft.ts/" class="instagram"><i
                                class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Aorganization%3A6998324&keywords=pt.%20inosoft%20trans%20sistem&origin=RICH_QUERY_SUGGESTION&position=2&searchId=e1535de7-8d34-4434-8ad6-5e1e5cceaa22&sid=PIM"
                            class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
</footer>


<script>
function readmore1() {
  var dots = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("btnmore1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline"; // Menggunakan 'block' untuk menampilkan semua konten
  }
}


  </script>
  <script>
    function readmore2() {
      var dots2 = document.getElementById('dots2');
      var moretext2 = document.getElementById('more2');
      var btnmore2 = document.getElementById('btnmore2');

      if (dots2.style.display === "none") {
        dots2.style.display = "inline";
        btnmore2.innerHTML = "Read more";
        moretext2.style.display = 'none';
      } else {
        dots2.style.display = "none";
        btnmore2.innerHTML = "Read less";
        moretext2.style.display = "inline";
      }
    }
  </script>
  <script>
    function readmore3() {
      var dots3 = document.getElementById('dots3');
      var moretext3 = document.getElementById('more3');
      var btnmore3 = document.getElementById('btnmore3');

      if (dots3.style.display === "none") {
        dots3.style.display = "inline";
        btnmore3.innerHTML = "Read more";
        moretext3.style.display = 'none';
      } else {
        dots3.style.display = 'none';
        btnmore3.innerHTML = "Read less";
        moretext3.style.display = 'inline';
      }
    }
  </script>
  <script>
    function readmore4() {
      var dots4 = document.getElementById('dots4');
      var moretext4 = document.getElementById('more4');
      var btnmore4 = document.getElementById('btnmore4');

      if (dots4.style.display === "none") {
        dots4.style.display = "inline";
        btnmore4.innerHTML = "Read more";
        moretext4.style.display = 'none';
      } else {
        dots4.style.display = 'none';
        btnmore4.innerHTML = "Read less";
        moretext4.style.display = 'inline';
      }
    }
  </script>
  <script>
    function readmore5() {
      var dots5 = document.getElementById('dots5');
      var moretext5 = document.getElementById('more5');
      var btnmore5 = document.getElementById('btnmore5');

      if (dots5.style.display === "none") {
        dots5.style.display = "inline";
        btnmore5.innerHTML = "Read more";
        moretext5.style.display = 'none';
      } else {
        dots5.style.display = 'none';
        btnmore5.innerHTML = "Read less";
        moretext5.style.display = 'inline';
      }
 }
</script>
<script>
function readmore6() {
  var dots = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("btnmore1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "block"; // Menggunakan 'block' untuk menampilkan semua konten
  }
}


  </script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script>
    function scrollLeft() {
      const container = document.querySelector('.jobs-container');
      container.scrollLeft -= 400; // Sesuaikan nilai sesuai kebutuhan
    }

    function scrollRight() {
      const container = document.querySelector('.jobs-container');
      container.scrollLeft += 400; // Sesuaikan nilai sesuai kebutuhan
    }

    document.getElementById('prev-job').addEventListener('click', scrollLeft);
    document.getElementById('next-job').addEventListener('click', scrollRight);


</script>
</body>

</html>