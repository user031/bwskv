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
    <a class="navbar-brand fw-bold" href="index.html">
      <img src="img/bwskv.png" alt="Logo" height="40" class="rounded me-2">
      BWS Kalimantan V
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-3">
        <li class="nav-item"><a class="nav-link" href="/balai/bwskalimantan5/">Home</a></li>
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
      <h1 class="news-title mb-3">Sidang Pleno Ke-I TKPSDA WS Berau - Kelai Tahun 2025.</h1>
      <p class="news-meta mb-4"><i class="bi bi-calendar-event"></i> 25 Agustus 2025 | <i class="bi bi-person-circle"></i> Admin BWSKALV</p>
      
      <div class="news-content">
        <img src="uploads/img_4.jpg" alt="Berita 1">
          <p>
            Dalam rangka melaksanakan amanat Peraturan Menteri Pekerjaan Umum Republik Indonesia Nomor 2 Tahun 2024 serta mendukung fungsi TKPSDA WS Berau–Kelai, telah diselenggarakan Sidang Pleno Ke-I TKPSDA WS Berau - Kelai Tahun 2025.

          Sidang yang digelar secara hybrid (daring dan luring) ini dibuka langsung oleh Ketua TKPSDA WS Berau – Kelai, Yusliando, Kepala Balai Wilayah Sungai Kalimantan V Tanjung Selor, Bpk.
          Mustafa dan dihadiri oleh para anggota TKPSDA WS Berau – Kelai yang berasal dari unsur pemerintah dan non pemerintah
          </p>
          <p>
            Sidang Pleno Ke-I ini bertujuan untuk membahas mengenai Monitoring dan Evaluasi Matriks PSIH3 (Pengololaan Sistem Informasi Hidrologi,Hidrometeorologi,Hidrogeologi) yang merupakan bagian dari upaya penguatan tata kelola sumber daya air secara terpadu dan berkelanjutan pada wilayah sungai Berau–Kelai.

            Pembahasan mencakup beberapa aspek penting, antara lain:
            - Capaian pelaksanaan kegiatan pengelolaan sumber daya air di wilayah sungai Berau–Kelai selama periode sebelumnya dan yang sedang berjalan;<br>
            - Evaluasi efektivitas pelaksanaan program berdasarkan indikator yang telah ditetapkan dalam Matriks PSIH3;<br>
            - Identifikasi kendala dan tantangan di lapangan yang dihadapi oleh para pelaku pengelolaan sumber daya air, baik dari unsur pemerintah, masyarakat, maupun dunia usaha;
          </p>
Sidang ini juga menjadi forum strategis untuk menyampaikan aspirasi dan masukan dari para pemangku kepentingan, serta memastikan bahwa proses pengambilan keputusan dalam
pengelolaan sumber daya air melibatkan prinsip partisipatif, transparan, dan akuntabel.

Harapan bersama:
Kolaborasi antarlembaga dalam penyelarasan data, pembangunan infrastruktur pemantauan, serta peningkatan kualitas dan keterbukaan informasi hidrologi demi pengelolaan DAS Berau-Kelai yang berkelanjutan dan adaptif terhadap risiko bencana.

#SigapMembangunNegeriUntukRakyat
</p>
      </div>

      <div class="mt-4">
        <a href="/balai/bwskalimantan5/" class="btn btn-outline-primary"><i class="bi bi-arrow-left"></i> Kembali ke Berita</a>
      </div>
    </div>

    <!-- Sidebar -->
    <!-- Sidebar -->
    <div class="col-lg-4">
      <div class="sidebar-card">
        <h5>Berita Lainnya</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="/balai/bwskalimantan5/news-1">🌐 Sidang Pleno Ke-2 TKPSDA WS Sesayap Tahun 2025</a></li>
          <li class="list-group-item"><a href="/balai/bwskalimantan5/news-2">🌐 Penandatanganan Kontrak Pekerjaan Pembangunan Pengaman Pantai Padaidi (Lanjutan)</a></li>
          <li class="list-group-item"><a href="/balai/bwskalimantan5/news-3">🌐 Penandatanganan Kontrak Paket Tender/Seleksi Bidang Irigasi dan Rawa</a></li>
          <li class="list-group-item"><a href="/balai/bwskalimantan5/news-4">🌐 Sidang Pleno Ke-I TKPSDA WS Berau - Kelai Tahun 2025</a></li>
          <li class="list-group-item"><a href="/balai/bwskalimantan5/news-5">🌐 Pengembangan Kapasitas TPM untuk sukseskan P3-TGAI Tahun 2025</a></li>
        </ul>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>