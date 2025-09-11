<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Berita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Favicon -->
  <link rel="icon" type="image/png" href="img/default-pu.png">
  <style>
    body {
      background-color: #f5f7fa;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    .news-header {
      margin-top: 120px;
    }
    .news-title {
      font-size: 2.2rem;
      font-weight: 700;
      line-height: 1.4;
    }
    .news-meta {
      font-size: 14px;
      color: gray;
    }
    .news-content img {
      max-width: 100%;
      border-radius: 15px;
      margin: 25px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .news-content p {
      line-height: 1.8;
      text-align: justify;
    }
    /* Sidebar */
    .sidebar-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      padding: 20px;  
      margin-top: 130px; /* ✅ tambahkan margin-top agar turun sejajar dengan img */
    }
    .sidebar-card h5 {
      font-weight: 700;
      margin-bottom: 20px;
      border-bottom: 2px solid #0d6efd;
      display: inline-block;
      padding-bottom: 5px;
      color: #0d6efd;
    }
    .sidebar-card .list-group-item {
      border: none;
      padding: 12px 0;
      transition: 0.2s;
    }
    .sidebar-card .list-group-item a {
      text-decoration: none;
      color: #333;
      display: block;
    }
    .sidebar-card .list-group-item:hover {
      background-color: #f0f4ff;
      border-radius: 8px;
      padding-left: 10px;
    }
    /* Tombol kembali */
    .btn-outline-primary {
      border-radius: 25px;
      padding: 10px 20px;
      font-weight: 500;
    }
    footer {
      margin-top: 60px;
    }
    /* ✅ Responsif: hapus margin di layar kecil */
    @media (max-width: 991.98px) {
  .sidebar-card {
    margin-top: 20px; /* lebih kecil biar rapi di mobile */
  }
}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
  <div class="container-fluid px-5">
    <a class="navbar-brand fw-bold" href="/kalimantan5/">
      <img src="img/bwskv.png" alt="Logo" height="40" class="rounded me-2">
      BWS Kalimantan V
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-3">
        <li class="nav-item"><a class="nav-link" href="/kalimantan5/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Konten Berita -->
<div class="container-fluid px-5 news-header">
  <div class="row gx-5">
    <!-- Kolom Utama -->
    <div class="col-lg-8">
      <h1 class="news-title mb-3">Upacara Bendera HUT Ke-80 Republik Indonesia</h1>
      <p class="news-meta mb-4"><i class="bi bi-calendar-event"></i> 25 Agustus 2025 | <i class="bi bi-person-circle"></i> Admin BWSKALV</p>
      
      <div class="news-content">
        <img src="uploads/img_5.jpeg" alt="Berita 1">
          <p>
            Balai Wilayah Sungai Kalimantan V Tanjung Selor melaksanakan kegiatan Gerakan Irigasi Bersih di Daerah Irigasi (D.I) Tanjung Aru Kab. Sebatik Kalimantan Utara dilanjutkan dengan diskusi bersama dengan tema "Irigasi sebagai Penopang Swasembada Pangan", berkolaborasi dengan Dinas Pertanian, Dinas PUPR Kab Nunukan, DPRD Kab Nunukan dan Pihak Akademis Politeknik Kab Nunukan, serta P3A dan Gabungan Kelompok Tanitani D.I. Tanjung Aru.

            Kegiatan ini merupakan bagian dari rangkaian peringatan HUT ke-80 Republik Indonesia, sekaligus aksi nyata sebagai upaya menjaga kelancaran aliran air irigasi demi keberlangsungan produksi pangan.

            BWS Kalimantan V memegang peran strategis dalam mendukung Asta Cita Presiden RI Bapak Prabowo Subianto, khususnya swasembada pangan. Dengan pemeliharaan dan rehabilitasi jaringan irigasi, ketersediaan air untuk lahan pertanian dapat terjamin sehingga produktivitas pangan tetap terjaga.

            Menurut gabungan kelompok tani setempat, rehabilitasi jaringan irigasi oleh BWS Kalimantan V telah membantu mengurangi genangan dan banjir yang sebelumnya kerap merendam lahan persawahan mereka, sehingga aktivitas bercocok tanam menjadi lebih lancar dan hasil panen lebih optimal.

            Melalui kegiatan ini, diharapkan terjalin sinergi antara pemerintah, masyarakat, dan seluruh pemangku kepentingan dalam menjaga jaringan irigasi dan kelestarian lingkungan.
          </p>
      </div>

      <div class="mt-4">
        <a href="/kalimantan5/" class="btn btn-outline-primary"><i class="bi bi-arrow-left"></i> Kembali ke Berita</a>
      </div>
    </div>

    <!-- Sidebar -->
    <!-- Sidebar -->
    <div class="col-lg-4">
      <div class="sidebar-card">
        <h5>Berita Lainnya</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="/kalimantan5/news-1">🌐 Sidang Pleno Ke-2 TKPSDA WS Sesayap Tahun 2025</a></li>
          <li class="list-group-item"><a href="/kalimantan5/news-2">🌐 Penandatanganan Kontrak Pekerjaan Pembangunan Pengaman Pantai Padaidi (Lanjutan)</a></li>
          <li class="list-group-item"><a href="/kalimantan5/news-3">🌐 Penandatanganan Kontrak Paket Tender/Seleksi Bidang Irigasi dan Rawa</a></li>
          <li class="list-group-item"><a href="/kalimantan5/news-4">🌐 Sidang Pleno Ke-I TKPSDA WS Berau - Kelai Tahun 2025</a></li>
          <li class="list-group-item"><a href="/kalimantan5/news-5">🌐 Pengembangan Kapasitas TPM untuk sukseskan P3-TGAI Tahun 2025</a></li>
        </ul>
      </div>
    </div>  </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>