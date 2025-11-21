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

<style type="text/css">
  /* Pastikan modal selalu berada paling depan */
.modal {
  z-index: 9999 !important;
}

/* Pastikan backdrop juga berada di belakang modal tapi tetap tinggi */
.modal-backdrop {
  z-index: 9998 !important;
}

  .layanan-img {
    width: 200px;       /* ukuran gambar seragam */
    height: 150px;
    object-fit: contain; /* menjaga proporsi */
    transition: transform 0.3s;
  }

  .layanan-img:hover {
    transform: scale(1.1); /* efek hover */
  }

   /* Container slider */
  .slider {
    overflow: hidden;
    position: relative;
    width: 100%;
  }

  /* Track bergerak */
  .slide-track {
    display: flex;
    width: calc(200px * 14); /* 14 gambar total (7 asli + 7 duplikat) */
    animation: scroll 25s linear infinite;
  }

  /* Animasi scroll */
  @keyframes scroll {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(calc(-200px * 7)); /* geser 7 gambar */
    }
  }

  /* Gambar */
  .layanan-img {
    width: 180px;
    height: 120px;
    object-fit: contain;
    margin: 0 40px;
    transition: transform 0.3s;
  }

  .layanan-img:hover {
    transform: scale(1.1);
  }

</style>

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
                    <a class="nav-link" href="https://kalimandaubwskv.id/contact.php"><b>Contact</b></a>
              </li>
              <li class="nav-item dropdown">
                    <a class="nav-link" href="https://kalimandaubwskv.id/"><b>Kalimandau</b></a>
              </li>
              <li class="nav-item dropdown">
                    <a class="nav-link" href="https://kalimandaubwskv.id/faq.php"><b>FAQ</b></a>
              </li>
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b>About</b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tusi.php">Tugas dan Fungsi</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#strukturModal">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#paktaIntegritas">Pakta Integritas</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#keuangan">Pagu Anggaran TA 2025</a></li>
                    </ul>
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

<!-- Modal Pakta Integritas -->
<div class="modal fade" id="paktaIntegritas" tabindex="-1" aria-labelledby="paktaIntegritas" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paktaIntegritasLabel">Pakta Integritas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="img/integritas.jpeg" alt="Pakta Integritas" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>
</div>

<!-- Modal keuangan -->
<div class="modal fade" id="keuangan" tabindex="-1" aria-labelledby="keuangan" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="keuanganLabel">Pagu Anggaran TA 2025</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="img/keuangan.png" alt="Keuangan" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>
</div>

<br><br><br><br><br><br>
<!-- SECTION ABOUT: KALIMANDAU -->
<section id="about" class="py-5 bg-light">
  <div class="container">

    <!-- Judul Tengah -->
    <h2 class="text-center text-primary fw-bold mb-5" data-aos="fade-down">Balai Wilayah Sungai Kalimantan V</h2>

    <div class="row align-items-center flex-column-reverse flex-md-row">

      <!-- Kolom Teks -->
      <div class="col-md-6" data-aos="fade-right">
        <p class="mb-3">
 Balai Wilayah Sungai (BWS) Kalimantan V Tanjung Selor merupakan unit pelaksana teknis di bawah Direktorat Jenderal Sumber Daya Air yang bertugas mengelola sumber daya air secara terpadu dan berkelanjutan di wilayah Kalimantan Utara. 
        </p>
        <p class="mb-4">
          BWS Kalimantan V berperan dalam pembangunan, pengelolaan, dan pengawasan infrastruktur sumber daya air guna mendukung ketahanan air, pengendalian banjir, irigasi, serta pelayanan publik yang berkualitas.
        </p>

        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item bg-transparent service-item">
            <i class="fas fa-database text-warning me-2"></i> 
            <strong>Membuat Permohonan:</strong> Ajukan permohonan data sumber daya air secara online.
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
          <video class="img-fluid rounded shadow-lg" controls autoplay muted playsinline>
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
<br><br><br><br>


<!-- bagian section Layanan Terkait -->
<section class="layanan-terkait py-5 bg-white" data-aos="fade-up">
  <div class="container">
    <h3 class="mb-4 fw-bold text-center text-primary">Layanan Terkait</h3>

    <div class="slider">
      <div class="slide-track">
        
        <!-- ULANGI GAMBAR 2x AGAR LOOP HALUS -->
        
        <!-- Gambar asli -->
        <a href="https://sippn.menpan.go.id/" target="blank">
          <img src="uploads/1247706655_icon_PAN-RB.png" class="layanan-img">
        </a>

        <a href="https://www.lapor.go.id/" target="blank">
          <img src="uploads/1967987138_icon_lapor.png" class="layanan-img">
        </a>

        <a href="https://sahabat.pu.go.id/eppid/" target="blank">
          <img src="uploads/152554528_icon_eppid.png" class="layanan-img">
        </a>

        <a href="https://gol.itjen.pu.go.id/" target="blank">
          <img src="uploads/1741312358_icon_egratifikasi.png" class="layanan-img">
        </a>

        <a href="https://wispu.pu.go.id/" target="blank">
          <img src="uploads/1382854572_icon_wispu.png" class="layanan-img">
        </a>

        <a href="https://wispu.pu.go.id/" target="blank">
          <img src="img/wrdc.png" class="layanan-img">
        </a>

        <a href="https://sihka.sda.pu.go.id/sign-in" target="blank">
          <img src="img/sihla.png" class="layanan-img">
        </a>

        <!-- Duplikasi agar loop tidak putus -->
        <a href="https://sippn.menpan.go.id/" target="blank">
          <img src="uploads/1247706655_icon_PAN-RB.png" class="layanan-img">
        </a>

        <a href="https://www.lapor.go.id/" target="blank">
          <img src="uploads/1967987138_icon_lapor.png" class="layanan-img">
        </a>

        <a href="https://sahabat.pu.go.id/eppid/" target="blank">
          <img src="uploads/152554528_icon_eppid.png" class="layanan-img">
        </a>

        <a href="https://gol.itjen.pu.go.id/" target="blank">
          <img src="uploads/1741312358_icon_egratifikasi.png" class="layanan-img">
        </a>

        <a href="https://wispu.pu.go.id/" target="blank">
          <img src="uploads/1382854572_icon_wispu.png" class="layanan-img">
        </a>

        <a href="https://wispu.pu.go.id/" target="blank">
          <img src="img/wrdc.png" class="layanan-img">
        </a>

        <a href="https://sihka.sda.pu.go.id/sign-in" target="blank">
          <img src="img/sihla.png" class="layanan-img">
        </a>

      </div>
    </div>

  </div>
</section>
<!-- bagian section Layanan Terkait -->


<!-- bagian section FAQ -->
<section class="faq py-5 bg-light">
  <div class="container">
    <h3 class="text-center fw-bold mb-4 text-primary">Frequently Asked Questions</h3>

    <div class="accordion" id="faqAccordion">

      <!-- FAQ 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading1">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
            Apa itu KALIMANDAU BWS Kalimantan V?
          </button>
        </h2>
        <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            <b><strong>KALIMANDAU</strong> adalah aplikasi Layanan Informasi Publik milik Balai Wilayah Sungai Kalimantan V Tanjung Selor yang menekankan prinsip keterbukaan, efisiensi, dan akuntabilitas dalam menyediakan informasi kepada masyarakat dengan mengadopsi konsep satu pintu.</b>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
            Apakah seluruh Informasi Publik adalah informasi yang dapat diakses oleh Publik?
          </button>
        </h2>
        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Ya. Seluruh Informasi Publik dapat diakses oleh masyarakat, kecuali informasi yang dikecualikan/rahasia.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
            Berapa lama pemohon informasi publik mendapat pemberitahuan tertulis atas permohonan yang diajukan?
          </button>
        </h2>
        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Kementerian PUPR menyampaikan tanggapan tertulis atas permohonan informasi publik maksimal 10 hari kerja sejak permohonan diterima, dan dapat diperpanjang 7 hari kerja.
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
            Adakah Biaya Tarif dalam layanan informasi publik?
          </button>
        </h2>
        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Layanan informasi publik tidak dipungut biaya. Namun biaya penggandaan atau perekaman ditanggung oleh pemohon, kecuali informasi yang sudah memiliki tarif resmi PNBP.
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqHeading5">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
            Waktu layanan informasi?
          </button>
        </h2>
        <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Layanan informasi dilaksanakan pada hari kerja, Senin sampai Jumat pukul 08.00 – 16.00 WIB.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- bagian section FAQ -->

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
      <p class="mb-0">© 2025 BWSKALV</p>
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

</body>
</html>

