<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BWS Kalimantan 5</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">   

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="img/default-pu.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<!-- Navbar -->
<div class="header-container">
<!--bagian header-->
  <div class="header">
    <div class="header-left">
      <img src="img/default-pu.png" alt="Logo PU">
      <div class="header-text">
        <b>BALAI WILAYAH SUNGAI KALIMANTAN V</b><br>
        Direktorat Jenderal Sumber Daya Air<br>
        Kementerian Pekerjaan Umum
      </div>
    </div>
    <div class="header-right">
      <span id="clock"></span>
      <i class="fas fa-sign-in-alt"></i>
    </div>
  </div>
<!--bagian header-->
    <nav class="navbar navbar-expand-lg" style="">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 20px;">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                    <a class="nav-link" href=""><b>Home</b></a>
              </li>   
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b>About</b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tusi.php">Tugas dan Fungsi</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#strukturModal">Struktur Organisasi</a></li>
                    </ul>
                </li>
              <li class="nav-item dropdown">
                    <a class="nav-link" href="https://kalimandaubwskv.id/"><b>Services</b></a>
              </li>
              <li class="nav-item dropdown">
                    <a class="nav-link" href="https://kalimandaubwskv.id/contact.php"><b>Contact</b></a>
              </li>
              <li class="nav-item dropdown">
                    <a class="nav-link" href="https://kalimandaubwskv.id/faq.php"><b>FAQ</b></a>
              </li>  
            </ul>
        </div>
    </div>
</nav>
</div>

<!-- Modal Struktur Organisasi -->
<div class="modal fade" id="strukturModal" tabindex="-1" aria-labelledby="strukturModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="strukturModalLabel">Struktur Organisasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="img/struktur.jpg" alt="Struktur Organisasi" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>
</div>


<br><br><br><br><br><br>
<!-- SECTION ABOUT: KALIMANDAU -->
<section id="about" class="py-5 bg-light">
  <div class="container">

    <!-- Judul Tengah -->
    <h2 class="text-center text-primary fw-bold mb-5" data-aos="fade-down">KALIMANDAU</h2>

    <div class="row align-items-center flex-column-reverse flex-md-row">

      <!-- Kolom Teks -->
      <div class="col-md-6" data-aos="fade-right">
        <p class="mb-3">
          <strong>KALIMANDAU</strong> (Kalimantan Lima Andal Dalam Pelayanan Terpadu) adalah pusat layanan terpadu yang menekankan prinsip 
          <strong>keterbukaan</strong>, <strong>efisiensi</strong>, dan <strong>akuntabilitas</strong> dalam menyediakan informasi kepada masyarakat.
        </p>
        <p class="mb-4">
          Dengan mengadopsi konsep <strong>satu pintu</strong>, unit ini menjamin aksesibilitas dan kemudahan bagi masyarakat untuk memperoleh informasi yang relevan dan akurat.
        </p>

        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item bg-transparent service-item">
            <i class="fas fa-database text-warning me-2"></i> 
            <strong>Membuat Permohonan:</strong> Ajukan permohonan data sumber daya air secara online.
          </li>
          <li class="list-group-item bg-transparent service-item">
            <i class="fas fa-search-location text-warning me-2"></i> 
            <strong>Tracking Layanan:</strong> Lacak status permohonan dan pengaduan Anda.
          </li>
          <li class="list-group-item bg-transparent service-item">
            <i class="fas fa-poll text-warning me-2"></i> 
            <strong>Pengaduan dan Survei:</strong> Berikan umpan balik dan bantu tingkatkan pelayanan kami.
          </li>
        </ul>

        <a href="https://kalimandaubwskv.id/layanan/permohonan-informasi/" class="btn btn-primary px-4 shadow-sm ripple">
          <i class="fas fa-arrow-right me-1"></i> Mulai Permohonan
        </a>
      </div>

      <!-- Kolom Gambar -->
      <div class="col-md-6 mb-4 mb-md-0 text-center" data-aos="fade-left">
        <div class="parallax-img">
          <video class="img-fluid rounded shadow-lg" autoplay muted loop playsinline>
            <source src="uploads/opening.mp4" type="video/mp4">
            Browser kamu tidak mendukung video HTML5.
          </video>
        </div>
      </div>

    </div>
  </div>
</section>
                
</section>
<!-- bagian section heroes -->

<!-- Headline Berita -->
<section class="py-3">
  <div class="container">
    <h2 class="text-center section-title mb-5">Headline Berita</h2>

    <div class="swiper headline-swiper">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="card">
            <img src="uploads/img_1.jpg" class="card-img-top" alt="Berita 1">
            <div class="card-body">
              <p class="card-text">Sidang Pleno Ke-2 TKPSDA WS Sesayap Tahun 2025.</p>
              <a href="berita-1.php" class="btn btn-primary btn-sm">Baca</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="card">
            <img src="uploads/img_2.jpg" class="card-img-top" alt="Berita 2">
            <div class="card-body">

              <p class="card-text">Penandatanganan Kontrak Pekerjaan Pembangunan Pengaman Pantai Padaidi.</p>
              <a href="berita-2.php" class="btn btn-primary btn-sm">Baca</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="card">
            <img src="uploads/img_3.jpg" class="card-img-top" alt="Berita 3">
            <div class="card-body">
                <p class="card-text">Penandatanganan Kontrak Paket Tender/Seleksi Bidang Irigasi dan Rawa.</p>
              <a href="berita-3.php" class="btn btn-primary btn-sm">Baca</a>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide">
          <div class="card">
            <img src="uploads/img_4.jpg" class="card-img-top" alt="Berita 4">
            <div class="card-body">
              <p class="card-text">Sidang Pleno Ke-I TKPSDA WS Berau - Kelai Tahun 2025.</p>
              <a href="berita-4.php" class="btn btn-primary btn-sm">Baca</a>
            </div>
          </div>
        </div>

        <!-- Slide 5 -->
        <div class="swiper-slide">
          <div class="card">
            <img src="uploads/img_7.jpg" class="card-img-top" alt="Berita 3">
            <div class="card-body">
              <p class="card-text">Pengembangan Kapasitas TPM untuk sukseskan P3-TGAI Tahun 2025</p>
              <a href="berita-5.php" class="btn btn-primary btn-sm">Baca</a>
            </div>
          </div>
        </div>

        <!-- Slide 6 -->
        <div class="swiper-slide">
          <div class="card">
            <img src="uploads/img_6.jpeg" class="card-img-top" alt="Berita 3">
            <div class="card-body">
              <p class="card-text">Penandatanganan Kontrak Paket Tender/Seleksi Bidang Irigasi dan Rawa.</p>
              <a href="berita-6.php" class="btn btn-primary btn-sm">Baca</a>
            </div>
          </div>
        </div>

        <!-- Slide 7 -->
        <div class="swiper-slide">
          <div class="card">
            <img src="uploads/img_5.jpeg" class="card-img-top" alt="Berita 3">
            <div class="card-body">
              <p class="card-text">Upacara Bendera Hari Ulang Tahun Ke-80 Republik Indonesia.</p>
              <a href="berita-7.php" class="btn btn-primary btn-sm">Baca</a>
            </div>
          </div>
        </div>

        <!-- Slide 7 -->
        <div class="swiper-slide">
          <div class="card">
            <img src="uploads/img_8.png" class="card-img-top" alt="Berita 3">
            <div class="card-body">
              <p class="card-text">Jaringan Irigasi Air Tanah (JIAT) : Air adalah kehidupan.</p>
              <a href="berita-8.php" class="btn btn-primary btn-sm">Baca</a>
            </div>
          </div>
        </div>


      </div>
      <!-- Swiper navigation -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>

</section class="poster">
<div class="container py-5">
  <div class="row g-4">
    
    <!-- PENGUMUMAN -->
    <div class="col-md-6">
      <h5 class="section-title text-center">PENGUMUMAN</h5>
      <div class="highlight-bar"></div>

      <!-- Item 1 -->
      <div class="card mb-3 announcement-card">
        <div class="row g-0">
          <div class="col-auto">
            <img src="uploads/pengumuman1.jpg" alt="img">
          </div>
          <div class="col">
            <div class="card-body">
              <h6 class="card-title fw-semibold">Open Recruitment OP Inpres Tahap II dan III TA 2025</h6>
              <p class="card-text"><small class="text-muted">11 April 2023 | Dilihat 4207 kali</small></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="card mb-3 announcement-card">
        <div class="row g-0">
          <div class="col-auto">
            <img src="uploads/pengumuman2.jpg" alt="img">
          </div>
          <div class="col">
            <div class="card-body">
              <h6 class="card-title fw-semibold">Penjaringan Calon Anggota TKPSDA WS Berau-Kelai Periode 2026-2031</h6>
              <p class="card-text"><small class="text-muted">11 April 2023 | Dilihat 533 kali</small></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="card mb-3 announcement-card">
        <div class="row g-0">
          <div class="col-auto">
            <img src="uploads/pengumuman3.jpg" alt="img">
          </div>
          <div class="col">
            <div class="card-body">
              <h6 class="card-title fw-semibold">Penjaringan Calon Anggota TKPSDA WS Sesayap Periode 2026-2031</h6>
              <p class="card-text"><small class="text-muted">04 April 2023 | Dilihat 722 kali</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-3">
        <button class="btn btn-warning px-4">SELENGKAPNYA</button>
      </div>
    </div>

    <!-- AGENDA -->
    <div class="col-md-6">
      <h5 class="section-title text-center">Petunjuk Pengaduan</h5>
      <div class="highlight-bar"></div>

      <!-- SLIDESHOW -->
      <div class="agenda-card text-center">
        <img id="agenda-slideshow" src="uploads/sop1.jpg" alt="Agenda"
             class="img-fluid rounded mb-3" style="max-height:300px; object-fit:cover; cursor:pointer;">
        <h5 class="fw-bold">Petunjuk pengaduan layanan</h5>
        <p class="text-muted">Klik gambar untuk memperbesar</p>
      </div>
    </div>

  </div>
</div>
</section>

<!-- ===== MODAL UNTUK LIHAT GAMBAR BESAR ===== -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <button type="button" class="btn-close ms-auto me-2 mt-2 bg-light rounded-circle"
              data-bs-dismiss="modal" aria-label="Close"></button>
      <img id="modalImage" src="" alt="Gambar Besar" class="img-fluid rounded shadow">
    </div>
  </div>
</div>

<!-- Section Layanan -->
<section class="layanan py-5" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef); border-radius: 20px;">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">Daftar Layanan</h2>
    <div class="row g-4">

      <!-- Card Layanan -->
      <div class="col-md-4">
        <div class="card-layanan text-center p-4 shadow-sm h-100">
          <div class="icon-wrapper mb-3">
            <i class="bi bi-cloud-sun-fill"></i>
          </div>
          <h5 class="fw-bold">Hidrologi Sesayap</h5>
          <p class="text-muted">Akses data curah hujan real-time dari pos pengamatan di wilayah sungai.</p>
          <a href="https://kalimandaubwskv.id/maps/sesayap/hidrologi-sesayap.php" class="btn btn-primary rounded-pill px-4">Lihat</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-layanan text-center p-4 shadow-sm h-100">
          <div class="icon-wrapper mb-3">
            <i class="bi bi-droplet-fill"></i>
          </div>
          <h5 class="fw-bold">Hidroklimatologi Sesayap</h5>
          <p class="text-muted">Pantau tinggi muka air sungai secara real-time dari jaringan telemetri.</p>
          <a href="https://kalimandaubwskv.id/maps/sesayap/klimatologi-sesayap.php" class="btn btn-primary rounded-pill px-4">Lihat</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-layanan text-center p-4 shadow-sm h-100">
          <div class="icon-wrapper mb-3">
            <i class="bi bi-map-fill"></i>
          </div>
          <h5 class="fw-bold">Hidrogeologi Sesayap</h5>
          <p class="text-muted">Lihat peta interaktif wilayah sungai Sesayap dan Berau-Kelai.</p>
          <a href="https://kalimandaubwskv.id/maps/sesayap/cat-sesayap.php" class="btn btn-primary rounded-pill px-4">Lihat</a>
        </div>
      </div>

      <!-- Baris 2 -->
      <div class="col-md-4">
        <div class="card-layanan text-center p-4 shadow-sm h-100">
          <div class="icon-wrapper mb-3">
            <i class="bi bi-bar-chart-fill"></i>
          </div>
          <h5 class="fw-bold">Hidrologi Berau-Kelai</h5>
          <p class="text-muted">Analisis pola hujan dan aliran air untuk mendukung perencanaan.</p>
          <a href="https://kalimandaubwskv.id/maps/berau-kelai/das-berau-kelai.php" class="btn btn-primary rounded-pill px-4">Lihat</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-layanan text-center p-4 shadow-sm h-100">
          <div class="icon-wrapper mb-3">
            <i class="bi bi-database-fill"></i>
          </div>
          <h5 class="fw-bold">Hidroklimatologi Berau-Kelai</h5>
          <p class="text-muted">Kelola data hidrologi, hidroklimatologi, dan hidrogeologi secara terpusat.</p>
          <a href="https://kalimandaubwskv.id/maps/berau-kelai/klimatologi-berau-kelai.php" class="btn btn-primary rounded-pill px-4">Lihat</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-layanan text-center p-4 shadow-sm h-100">
          <div class="icon-wrapper mb-3">
            <i class="bi bi-shield-lock-fill"></i>
          </div>
          <h5 class="fw-bold">Hidrogeologi Berau-Kelai</h5>
          <p class="text-muted">Sistem keamanan untuk memastikan data tetap terjaga.</p>
          <a href="https://kalimandaubwskv.id/maps/berau-kelai/cat-berau-kelai.php" class="btn btn-primary rounded-pill px-4">Lihat</a>
        </div>
      </div>

      <!-- Baris 3 -->
      <div class="col-md-4">
        <div class="card-layanan text-center p-4 shadow-sm h-100">
          <div class="icon-wrapper mb-3">
            <i class="bi bi-newspaper"></i>
          </div>
          <h5 class="fw-bold">Permohonan Informasi</h5>
          <p class="text-muted">Dapatkan berita terkini terkait pengelolaan sumber daya air.</p>
          <a href="https://kalimandaubwskv.id/layanan/permohonan-informasi/" class="btn btn-primary rounded-pill px-4">Lihat</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-layanan text-center p-4 shadow-sm h-100">
          <div class="icon-wrapper mb-3">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <h5 class="fw-bold">Layanan Rekomtek</h5>
          <p class="text-muted">Informasi lokasi pos pengamatan beserta koordinatnya.</p>
          <a href="https://kalimandaubwskv.id/layanan/rekomtek/" class="btn btn-primary rounded-pill px-4">Lihat</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-layanan text-center p-4 shadow-sm h-100">
          <div class="icon-wrapper mb-3">
            <i class="bi bi-gear-fill"></i>
          </div>
          <h5 class="fw-bold">Layanan Pengaduan</h5>
          <p class="text-muted">Atur konfigurasi dan pengelolaan modul SIH3.</p>
          <a href="https://kalimandaubwskv.id/layanan/pengaduan/" class="btn btn-primary rounded-pill px-4">Lihat</a>
        </div>
      </div>

    </div>
  </div>

<footer class="bg-dark text-light pt-5 pb-3">
  <div class="container text-center"> <!-- Tambahkan text-center di sini -->
    <div class="row justify-content-center">

      <!-- Kolom 1: Logo dan Deskripsi -->
      <div class="col-md-3 mb-3">
        <img src="img/default-pu.png" alt="Logo" style="max-width: 120px; height: auto; border-radius:20px;" class="mb-3 mx-auto d-block">
        <p style="font-size: 14px;">
          KALIMANDAU (Kalimantan Lima Andal Dalam Pelayanan Terpadu) adalah pusat layanan terpadu yang menekankan prinsip keterbukaan, efisiensi, dan akuntabilitas dalam menyediakan informasi kepada masyarakat.
        </p>
      </div>

      <!-- Kolom 2: Web Links -->
      <div class="col-md-2 mb-3">
        <h6 class="fw-bold">Links</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-light">Home</a></li>
          <li><a href="#" class="text-decoration-none text-light">About</a></li>
          <li><a href="#" class="text-decoration-none text-light">Services</a></li>
          <li><a href="#" class="text-decoration-none text-light">Contact</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Newsletter -->
      <div class="col-md-4 mb-3">
        <p class="mb-1 fw-bold">Follow us</p>
        <div class="sosial-vertikal">
          <a href="#" class="text-light"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
          <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

<!-- Kolom 4: Peta -->
<div class="col-md-3 mb-3">
  <h6 class="fw-bold">Our location</h6>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.1582841231841!2d117.60532026950404!3d3.2991443956640444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32146b754e80ce0d%3A0xa063b73d28925f65!2sJl.%20Bhayangkara%20No.59D%2C%20Karang%20Anyar%2C%20Kec.%20Tarakan%20Bar.%2C%20Kota%20Tarakan%2C%20Kalimantan%20Utara!5e0!3m2!1sen!2sid!4v1719732265405!5m2!1sen!2sid"
    width="100%"
    height="150"
    style="border:0; border-radius:10px;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
         <!-- Copyright -->
    <div class="mt-4 pt-3 border-top">
      <p class="mb-0">© 2025 SISDA BWSKALV</p>
    </div>

    </div>
  </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.headline-swiper', {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    speed: 700,
    slidesPerView: 3,
    spaceBetween: 24,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      576: { slidesPerView: 2 },
      992: { slidesPerView: 3 }
    }
  });

</script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });

  // Ripple effect untuk button
  document.querySelectorAll('.ripple').forEach(btn => {
    btn.addEventListener('click', function (e) {
      let circle = document.createElement('span');
      circle.classList.add('ripple-effect');
      this.appendChild(circle);
      let d = Math.max(this.clientWidth, this.clientHeight);
      circle.style.width = circle.style.height = d + 'px';
      let rect = this.getBoundingClientRect();
      circle.style.left = e.clientX - rect.left - d/2 + 'px';
      circle.style.top = e.clientY - rect.top - d/2 + 'px';
      setTimeout(() => circle.remove(), 600);
    });
  });
</script>

<!-- ===== SCRIPT SLIDESHOW + KLIK GAMBAR ===== -->
<script>
  // --- Slideshow otomatis ---
  const agendaImages = [
    "uploads/sop1.jpg",
    "uploads/sop2.jpg",
    "uploads/sop3.jpg"
  ];

  let index = 0;
  const slideshow = document.getElementById("agenda-slideshow");
  const modalImage = document.getElementById("modalImage");

  setInterval(() => {
    index = (index + 1) % agendaImages.length;
    slideshow.src = agendaImages[index];
  }, 3000);

  // --- Klik gambar untuk memperbesar ---
  slideshow.addEventListener("click", () => {
    modalImage.src = slideshow.src; // ambil gambar yang sedang tampil
    const myModal = new bootstrap.Modal(document.getElementById('imageModal'));
    myModal.show();
  });
</script>

<script>
    function updateClock() {
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        const now = new Date();
        const day = days[now.getDay()];
        const date = now.getDate();
        const month = months[now.getMonth()];
        const year = now.getFullYear();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');

        const timeString = `${day}, ${date} ${month} ${year} - ${hours}:${minutes}:${seconds}`;
        document.getElementById('clock').textContent = timeString;
    }

    setInterval(updateClock, 1000);
    updateClock();

    function animateRunningText(textId, cloneId, positionRatio) {
        const runningText = document.getElementById(textId);
        const runningTextClone = document.getElementById(cloneId);
        const wrapperWidth = runningText.parentElement.offsetWidth;
        const contentWidth = runningText.scrollWidth;

        let animationDuration = (contentWidth / 1000) * 10;

        runningText.style.transform = `translateX(${wrapperWidth * positionRatio}px)`;
        runningTextClone.style.transform = `translateX(${(wrapperWidth * positionRatio) + contentWidth}px)`;

        runningText.style.transition = `none`;
        runningTextClone.style.transition = `none`;

        requestAnimationFrame(() => {
            runningText.style.transition = `transform ${animationDuration}s linear`;
            runningTextClone.style.transition = `transform ${animationDuration}s linear`;

            runningText.style.transform = `translateX(-${contentWidth}px)`;
            runningTextClone.style.transform = `translateX(0)`;
        });

        runningText.addEventListener('transitionend', () => {
            animateRunningText(textId, cloneId, positionRatio);
        });
    }

</script>

</body>
</html>

// 
