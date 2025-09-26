<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Berita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .news-header {
      margin-top: 120px; /* biar tidak ketutup navbar */
    }
    .news-title {
      font-size: 2rem;
      font-weight: 700;
    }
    .news-meta {
      font-size: 14px;
      color: gray;
    }
    .news-content img {
      max-width: 100%;
      border-radius: 12px;
      margin: 20px 0;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.html">
      <img src="img/bwskv.png" alt="Logo" height="40" class="rounded me-2">
      BWS Kalimantan V
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-3">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Konten Berita -->
<div class="container news-header">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <h1 class="news-title mb-3">Judul Berita 1</h1>
      <p class="news-meta mb-4"><i class="bi bi-calendar-event"></i> 25 Agustus 2025 | <i class="bi bi-person-circle"></i> Admin BWSKALV</p>
      
      <div class="news-content">
        <img src="uploads/img_1.jpg" alt="Berita 1">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quaerat, dicta
          labore dolore cupiditate possimus alias tempora mollitia consequatur, assumenda
          quasi modi, aliquid illum dolores minus unde nostrum delectus! Ipsam.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in lorem et arcu
          iaculis hendrerit. Quisque porta orci sed dui tincidunt, vel luctus metus feugiat.
          Suspendisse nec diam vel mauris tristique lacinia in in justo.
        </p>
        <p>
          Sed euismod, magna a fermentum dignissim, urna mi blandit ex, vitae laoreet mi mi nec
          massa. Integer feugiat tortor a sapien gravida, nec pulvinar lacus elementum.
        </p>
      </div>

      <div class="mt-4">
        <a href="index.html" class="btn btn-outline-primary"><i class="bi bi-arrow-left"></i> Kembali ke Berita</a>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light mt-5 pt-4 pb-3 text-center">
  <div class="container">
    <p class="mb-0">© 2025 SISDA BWSKALV</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
