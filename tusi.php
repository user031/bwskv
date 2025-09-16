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

  </style>
</head>
<body>

<!-- Navbar -->
<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
  <div class="container-fluid px-5">
    <a class="navbar-brand fw-bold" href="https://kalimandaubwskv.id/">
      <img src="img/bwskv.png" alt="Logo" height="40" class="rounded me-2">
      BWS Kalimantan V
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-3">
        <li class="nav-item"><a class="nav-link" href="/balai/bwskalimantan5/">Home</a></li>
        
        <!-- About Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="https://kalimandaubwskv.id/about.php" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
            <!-- Struktur Organisasi buka modal -->
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#strukturModal">Struktur Organisasi</a></li>
            <li><a class="dropdown-item" href="/balai/bwskalimantan5/tusi">Tugas dan Fungsi</a></li>
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
<div style="margin-top: 80px;"></div>
<section id="tusi" class="py-5 bg-light">
  <div class="container">
    <!-- Judul -->
    <h2 class="text-center text-primary fw-bold mb-5">
      Tugas dan Fungsi BWS Kalimantan V Tanjung Selor
    </h2>

    <!-- Tugas -->
    <div class="mb-5">
      <h4 class="text-dark fw-semibold border-start border-4 border-primary ps-3 mb-3">
        A. Uraian Tugas
      </h4>
      <p class="text-justify">
        Balai Wilayah Sungai mempunyai tugas sebagaimana mengacu pada
        <strong>Peraturan Menteri Pekerjaan Umum Nomor 1 Tahun 2025</strong> tentang Organisasi
        dan Tata Kerja Unit Pelaksana Teknis di Kementerian Pekerjaan Umum yaitu
        Balai Wilayah Sungai mempunyai tugas melaksanakan pengelolaan sumber
        daya air di wilayah sungai yang meliputi penyusunan program, pelaksanaan
        konstruksi, operasi dan pemeliharaan dalam rangka konservasi dan
        pendayagunaan sumber daya air serta pengendalian daya rusak air.
      </p>
    </div>

    <!-- Fungsi -->
    <div class="mb-5">
      <h4 class="text-dark fw-semibold border-start border-4 border-warning ps-3 mb-3">
        B. Uraian Fungsi
      </h4>
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <ol class="list-group list-group-numbered list-group-flush">
            <li class="list-group-item bg-transparent">Penyusunan pola pengelolaan sumber daya air dan rencana pengelolaan sumber daya air pada wilayah sungai.</li>
            <li class="list-group-item bg-transparent">Penyusunan program pengelolaan sumber daya air dan rencana kegiatan pengelolaan sumber daya air.</li>
            <li class="list-group-item bg-transparent">Pemantauan dan evaluasi penyelenggaraan atau penerapan pola pengelolaan sumber daya air.</li>
            <li class="list-group-item bg-transparent">Penyusunan studi kelayakan dan perencanaan teknis, desain, dan pengembangan sumber daya air.</li>
            <li class="list-group-item bg-transparent">Pelaksanaan pengadaan barang dan jasa sesuai ketentuan.</li>
            <li class="list-group-item bg-transparent">Pelaksanaan penerapan sistem manajemen keselamatan dan kesehatan kerja.</li>
            <li class="list-group-item bg-transparent">Pengelolaan sumber daya air (konservasi, pendayagunaan, pengendalian daya rusak).</li>
            <li class="list-group-item bg-transparent">Pengelolaan drainase utama perkotaan.</li>
            <li class="list-group-item bg-transparent">Pengelolaan sistem hidrologi.</li>
            <li class="list-group-item bg-transparent">Pengelolaan sistem informasi sumber daya air.</li>
            <li class="list-group-item bg-transparent">Pelaksanaan operasi dan pemeliharaan sumber daya air.</li>
            <li class="list-group-item bg-transparent">Pemberian bimbingan teknis pengelolaan sumber daya air.</li>
            <li class="list-group-item bg-transparent">Penyusunan rekomendasi teknis izin penggunaan sumber daya air.</li>
            <li class="list-group-item bg-transparent">Penyusunan saran teknis pengalihan alur sungai dan pemanfaatan bekas sungai.</li>
            <li class="list-group-item bg-transparent">Kajian penetapan garis sempadan sungai, danau, situ, serta jaringan irigasi.</li>
            <li class="list-group-item bg-transparent">Pemberdayaan masyarakat dalam pengelolaan sumber daya air.</li>
            <li class="list-group-item bg-transparent">Fasilitasi kegiatan tim koordinasi pengelolaan sumber daya air.</li>
            <li class="list-group-item bg-transparent">Penyusunan laporan akuntansi keuangan dan barang milik negara.</li>
            <li class="list-group-item bg-transparent">Pelaksanaan pemungutan, penerimaan, dan penggunaan biaya jasa pengelolaan sumber daya air sesuai dengan ketentuan peraturan perundang-undangan.</li>
            <li class="list-group-item bg-transparent">Pelaksanaan urusan tata usaha dan rumah tangga Balai serta komunikasi publik.</li>
            <li class="list-group-item bg-transparent">Penyusunan perjanjian kinerja dan laporan kinerja Balai.</li>
            <li class="list-group-item bg-transparent">Pelaksanaan pemantauan dan pengawasan penggunaan sumber daya air dan penyidikan tindak pidana bidang sumber daya air.</li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Subbagian & Seksi -->
    <div class="mb-5">
      <h4 class="text-dark fw-semibold border-start border-4 border-success ps-3 mb-3">
        C. Subbagian dan Seksi
      </h4>
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <ol class="list-group list-group-numbered list-group-flush">
            <li class="list-group-item bg-transparent">
              <strong>Subbagian Umum dan Tata Usaha</strong>
              <p class="mb-0">Subbagian Tata Usaha mempunyai tugas melakukan urusan kepegawaian, organisasi dan tatalaksana, penyiapan penyusunan rencana dan pengelolaan keuangan, urusan kas dan perbendaharaan, administrasi dan akuntansi keuangan, administrasi hasil pemeriksaan dan pengaduan masyarakat, penyusunan laporan berkala serta urusan tata usaha, kearsipan dan rumah tangga, serta melakukan penatausahaan, pengelolaan, administrasi dan akuntansi barang milik negara, pengamanan fisik dan proses sertifikasi barang milik negara.</p>
            </li>
            <li class="list-group-item bg-transparent">
              <strong>Seksi Keterpaduan Pembangunan Infrastruktur Sumber Daya Air</strong>
              <p class="mb-0">Seksi Program dan Perencanaan Umum mempunyai tugas melakukan penyusunan pola, program, dan rencana pengelolaan sumber daya air, analisis dan evaluasi kelayakan program dan kegiatan pengelolaan sumber daya air, analisis dampak lingkungan, penyusunan perjanjian kinerja dan laporan kinerja balai, koordinasi dan fasilitasi penerapan sistem manajemen keselamatan dan kesehatan kerja, fasilitasi pengadaan barang dan jasa, pelaksanaan pemberdayaan masyarakat di bidang program dan perencanaan umum pengelolaan sumber daya air, pengelolaan sistem hidrologi serta sistem informasi dan data sumber daya air, dan pelaksanaan koordinasi terkait pengadaan tanah.</p>
            </li>
            <li class="list-group-item bg-transparent">
              <strong>Seksi Operasi dan Pemeliharaan</strong>
              <p class="mb-0">Seksi Operasi dan Pemeliharaan mempunyai tugas melakukan penyiapan bahan penyusunan rencana kegiatan, pengendalian dan pengawasan pelaksanaan perencanaan teknik, persiapan pelaksanaan operasi dan pemeliharaan dan pelaksanaan operasi dan pemeliharaan, fasilitasi penerapan sistem manajemen keselamatan dan kesehatan kerja, fasilitasi pengadaan barang dan jasa, serta pelaksanaan pemberdayaan masyarakat di bidang operasi dan pemeliharaan, pelaksanaan penanggulangan kerusakan akibat bencana, pengelolaan sistem peringatan dini, pelaksanaan penyusunan rencana alokasi air tahunan, pelaksanaan penyusunan kajian penetapan garis sempadan sungai, garis sempadan danau, garis sempadan situ dan garis sempadan jaringan irigasi, fasilitasi kegiatan tim koordinasi pengelolaan sumber daya air pada wilayah sungai, pelaksanaan pemantauan dan pengawasan pemanfaatan sumber daya air serta, pelaksanaan penyusunan rekomendasi teknis dalam pemberian izin.</p>
            </li>
            <li class="list-group-item bg-transparent">
              <strong>Seksi Pelaksanaan</strong>
              <p class="mb-0">Seksi pelaksanaan mempunyai tugas melakukan penyiapan bahan penyusunan rencana kegiatan, penyusunan perencanaan teknik, pengendalian dan pengawasan pelaksanaan perencanaan teknik, pelaksanaan konstruksi dan nonkonstruksi, persiapan penyerahan operasi dan pemeliharaan, fasilitasi penerapan sistem manajemen keselamatan dan kesehatan kerja, fasilitasi pengadaan barang dan jasa, pelaksanaan pemberdayaan masyarakat dan pemberian bimbingan teknis kepada pemerintah daerah provinsi dan pemerintah daerah kabupaten/kota dalam pelaksanaan konstruksi sarana dan prasarana jaringan sumber air di bidang sungai, pantai, drainase utama perkotaan, irigasi, rawa, dan tambak, air tanah dan air baku, bendungan, danau, situ, embung, dan tampungan air lainnya, serta konservasi tampungan air, air tanah dan air baku, sarana dan prasarana konservasi air tanah dan air baku, serta pelaksanaan penyusunan saran teknis untuk pengalihan alur sungai dan pemanfaatan bekas sungai.</p>
            </li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Tugas Kepala Satuan Kerja -->
    <div class="mb-5">
      <h4 class="text-dark fw-semibold border-start border-4 border-danger ps-3 mb-3">
        D. Tugas Kepala Satuan Kerja Selaku Kuasa Pengguna Anggaran
      </h4>
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <ol class="list-group list-group-numbered list-group-flush">
            <li class="list-group-item bg-transparent">Melaksanakan seluruh tugas Satuan Kerja terutama pelaksanaan rencana kerja telah ditetapkan dan dituangkan dalam DIPA.</li>
            <li class="list-group-item bg-transparent">Memimpin pelaksanaan seluruh rencana kerja yang telah ditetapkan dan dituangkan dalam DIPA.</li>
            <li class="list-group-item bg-transparent">Memberikan pengarahan dan petunjuk kepada Pejabat Inti Satuan Kerja dibawahnya untuk kelancaran pelaksanaan kegiatan dan pencapaian output.</li>
            <li class="list-group-item bg-transparent">Mengusulkan struktur organisasi dan pembantu pejabat Inti Satuan Kerja yang dipimpinnya sesuai kebutuhan.</li>
            <li class="list-group-item bg-transparent">Menandatangani SK yang mengakibatkan pengeluaran (gaji non PNS, lembur, honor, vakasi, perjalanan dinas).</li>
            <li class="list-group-item bg-transparent">Melakukan pelimpahan kewenangan pelaksanaan kegiatan operasional Satuan Kerja.</li>
            <li class="list-group-item bg-transparent">Menetapkan dan menandatangani SK Susunan Anggota Panitia Pengadaan Barang/Jasa.</li>
            <li class="list-group-item bg-transparent">Menyusun dan membuat laporan seluruh kegiatan Satuan Kerja sesuai peraturan.</li>
            <li class="list-group-item bg-transparent">Melaporkan setiap kerugian negara tepat pada waktunya kepada Pengguna Anggaran.</li>
            <li class="list-group-item bg-transparent">Menyusun usulan Rencana Kegiatan Satuan Kerja tahunan (RKA-KL).</li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Tanggung Jawab -->
    <div class="mb-5">
      <h4 class="text-dark fw-semibold border-start border-4 border-info ps-3 mb-3">
        E. Tanggung Jawab Kepala Satuan Kerja
      </h4>
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <ol class="list-group list-group-numbered list-group-flush">
            <li class="list-group-item bg-transparent">Bertanggung jawab atas seluruh pelaksanaan kegiatan/rencana kerja dalam DIPA.</li>
            <li class="list-group-item bg-transparent">Bertanggung jawab atas semua penerimaan/pengeluaran Satuan Kerja yang membebani APBN.</li>
            <li class="list-group-item bg-transparent">Bertanggung jawab terhadap realisasi keuangan dan pencapaian output.</li>
            <li class="list-group-item bg-transparent">Bertanggung jawab atas penatausahaan dan pemeliharaan Barang Milik Negara.</li>
            <li class="list-group-item bg-transparent">Bertanggung jawab atas tertib penatausahaan anggaran dan pengadaan barang/jasa.</li>
            <li class="list-group-item bg-transparent">Bertanggung jawab kepada Pengguna Anggaran melalui Atasan Langsung/Pelaksana Program.</li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Pejabat Pembuat Komitmen -->
    <div>
      <h4 class="text-dark fw-semibold border-start border-4 border-secondary ps-3 mb-3">
        F. Pejabat Pembuat Komitmen
      </h4>
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <ol class="list-group list-group-numbered list-group-flush">
            <li class="list-group-item bg-transparent">Menyusun perencanaan pengadaan barang/jasa.</li>
            <li class="list-group-item bg-transparent">Menetapkan paket pekerjaan dengan ketentuan peningkatan penggunaan produksi dalam negeri.</li>
            <li class="list-group-item bg-transparent">Menetapkan dan mengesahkan HPS, jadwal, tata cara, dan lokasi pengadaan.</li>
            <li class="list-group-item bg-transparent">Menetapkan dan mengesahkan hasil pengadaan sesuai kewenangannya.</li>
            <li class="list-group-item bg-transparent">Menetapkan besaran uang muka sesuai ketentuan.</li>
            <li class="list-group-item bg-transparent">Menyiapkan, menandatangani, dan melaksanakan kontrak dengan penyedia barang/jasa.</li>
            <li class="list-group-item bg-transparent">Melaporkan pelaksanaan pengadaan barang/jasa kepada Kepala Satker.</li>
            <li class="list-group-item bg-transparent">Mengendalikan pelaksanaan kontrak.</li>
            <li class="list-group-item bg-transparent">Menyerahkan aset hasil pengadaan kepada Menteri dengan berita acara.</li>
            <li class="list-group-item bg-transparent">Menandatangani pakta integritas sebelum pengadaan dimulai.</li>
            <li class="list-group-item bg-transparent">Melaksanakan rencana kerja sesuai DIPA dengan persetujuan Kepala Satker.</li>
            <li class="list-group-item bg-transparent">Menandatangani SPK/Kontrak dan dokumen berita acara pekerjaan.</li>
            <li class="list-group-item bg-transparent">Menandatangani dokumen pengeluaran anggaran baik kontraktual maupun swakelola.</li>
            <li class="list-group-item bg-transparent">Menyiapkan dan menandatangani SPP beserta dokumen pendukungnya.</li>
            <li class="list-group-item bg-transparent">Mengajukan tagihan pembayaran kepada Bendahara Pengeluaran.</li>
            <li class="list-group-item bg-transparent">Menyusun laporan seluruh kegiatan sesuai DIPA dan menyampaikan kepada Kepala Satker.</li>
            <li class="list-group-item bg-transparent">Menyusun usulan Rencana Kegiatan Satuan Kerja Tahunan (RKA-KL).</li>
          </ol>
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

</body>
</html>



