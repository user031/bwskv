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


  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9fa;
    }

	.navbar-custom {
	  background: linear-gradient(90deg, rgba(22, 69, 134, 1), #fff);
	  border-bottom: 5px solid #f4c029;
	  box-shadow: 0 2px 5px rgba(12, 86, 191, 0.8);
	  position: sticky;
	  top: 0;
	  z-index: 1030; /* pastikan di atas hero image */
	}
    .navbar-brand img {
      max-height: 50px;
    }

    .nav-link {
      color: #343a40 !important;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: #0d6efd !important;
    }

    .swiper-slide .card {
      height: 100%;
      border-radius: 12px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
      overflow: hidden;
      transition: transform 0.3s;
    }

    .swiper-slide .card:hover {
      transform: translateY(-5px);
    }

    .card-img-top {
      height: 520px;
      object-fit: cover;
    }

    .swiper-button-next,
    .swiper-button-prev {
      color: #0d6efd;
    }

    h2.section-title {
      font-weight: 700;
      font-size: 2.2rem;
      color: #0d6efd;
    }

    .btn-primary {
      background-color: #0d6efd;
      border: none;
    }

    .btn-primary:hover {
      background-color: #084298;
    }


/* Styling khusus untuk section #about */
#about {
  position: relative;
  overflow: hidden;
}

/* Tambah aksen dekorasi berupa blob */
#about::before {
  content: "";
  position: absolute;
  top: -50px;
  left: -50px;
  width: 200px;
  height: 200px;
  background: rgba(59,130,246,0.15);
  border-radius: 50%;
  filter: blur(60px);
  z-index: 0;
}
#about::after {
  content: "";
  position: absolute;
  bottom: -60px;
  right: -60px;
  width: 250px;
  height: 250px;
  background: rgba(16,185,129,0.15);
  border-radius: 50%;
  filter: blur(70px);
  z-index: 0;
}

#about .container {
  position: relative;
  z-index: 1; /* supaya konten di atas dekorasi */
}

/* Heading */
#about h2 {
  font-size: 2.2rem;
  letter-spacing: 1px;
  margin-bottom: 2rem;
  text-transform: uppercase;
}

/* Paragraf */
#about p {
  font-size: 1rem;
  line-height: 1.7;
  color: #334155;
}

/* List layanan */
#about .list-group-item {
  border: none;
  font-size: 0.95rem;
  padding-left: 0;
  display: flex;
  align-items: start;
}
#about .list-group-item i {
  font-size: 1.1rem;
  margin-top: 3px;
}

/* Tombol */
#about .btn {
  border-radius: 50px;
  font-weight: 500;
  transition: all .3s ease;
}
#about .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.15);
}

/* Gambar GIF */
#about img {
  max-width: 85%;
  border-radius: 1.25rem;
  box-shadow: 0 8px 24px rgba(0,0,0,0.12);
  animation: float 4s ease-in-out infinite;
}

/* Animasi float untuk GIF */
@keyframes float {
  0% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
  100% { transform: translateY(0); }
}

/* Dropdown muncul saat hover (hanya di desktop, min-width 992px) */
@media (min-width: 992px) {
  .navbar .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; /* biar nempel */
  }
}  

  /* Hover animasi untuk list */
  .service-item {
    transition: transform 0.3s, background 0.3s;
    cursor: pointer;
  }
  .service-item:hover {
    transform: translateX(8px);
    background: rgba(0, 123, 255, 0.05);
  }

  /* Parallax efek */
  .parallax-img img {
    transition: transform 0.5s ease;
  }
  .parallax-img:hover img {
    transform: scale(1.05) rotate(1deg);
  }

  /* Ripple button */
  .ripple {
    position: relative;
    overflow: hidden;
  }
  .ripple-effect {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.5);
    transform: scale(0);
    animation: ripple 0.6s linear;
    pointer-events: none;
  }
  @keyframes ripple {
    to { transform: scale(4); opacity: 0; }
  }

  </style>
</head>
<body>

<!-- Navbar -->
<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
  <div class="container-fluid px-5">
    <a class="navbar-brand fw-bold">
      <img src="img/bwskv.png" alt="Logo" height="40" class="rounded me-2">
      BWS Kalimantan V
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-3">
        <li class="nav-item"><a class="nav-link" href="https://kalimandaubwskv.id/">Home</a></li>
        
        <!-- About Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="https://kalimandaubwskv.id/about.php" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
            <!-- Struktur Organisasi buka modal -->
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#strukturModal">Struktur Organisasi</a></li>
            <li><a class="dropdown-item" href="tusi.php">Tugas dan Fungsi</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="https://kalimandaubwskv.id/contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="https://kalimandaubwskv.id/index.php#layanan">Services</a></li>
      </ul>
    </div>
  </div>
</nav>

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

<!-- End Navbar -->

<!-- End Navbar -->


<br><br><br><br>
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
          <img src="img/132338804_kalimandau-adalah.gif" alt="KALIMANDAU" class="img-fluid rounded shadow-lg">
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
              <p class="card-text">Upacara Bendera HUT Ke-80 Republik Indonesia.</p>
              <a href="berita-7.php" class="btn btn-primary btn-sm">Baca</a>
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
</section>

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

</body>
</html>



