<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="<?= base_url('vendor/') ?>assetberanda/images/UMP.png" type="">

    <title>Beranda - Universitas Muhammadiyah Palangka Raya</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor/') ?>assetberanda/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="<?= base_url('vendor/') ?>assetberanda/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?= base_url('vendor/') ?>assetberanda/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?= base_url('vendor/') ?>assetberanda/css/responsive.css" rel="stylesheet" />
    <style>
    .img-box-slider {
        width: 80%;
    }

    .jurusan p {
        font-size: 12px;
    }

    .detail-box-jurusan {
        height: 180px;
        /* Sesuaikan dengan tinggi maksimum yang diinginkan */
        overflow: hidden;
    }

    html {
        scroll-behavior: smooth;
    }
    </style>

</head>

<body>

    <div class="hero_area">

        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="<?= base_url('vendor/') ?>assetberanda/images/hero-bg.png" alt="">
            </div>
        </div>

        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="<?= site_url('controllerBeranda') ?>">
                        <span>
                            UMPR
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#daftar">Daftar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tentang">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#jurusan">Jurusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#rekomendasi">Rekomendasi Jurusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#alumni">Alumni</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('controllerLogin') ?>"> <i class="fa fa-user"
                                        aria-hidden="true"></i> Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Universitas Muhammadiyah <br>
                                            Palangka Raya
                                        </h1>
                                        <p>
                                            Selamat datang di Universitas Muhammadiyah Palangka Raya, tempat di mana
                                            ilmu dan keunggulan bersatu. Mari jadikan perjalanan pendidikanmu
                                            menginspirasi dan memberi makna!
                                        </p>
                                        <div class="btn-box">
                                            <a href="https://pmb.umpr.ac.id/" class="btn1">
                                                Kunjungin UMPR
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <div class="img-box-slider">
                                            <img src="<?= base_url('vendor/') ?>assetberanda/images/UMP.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Universitas Muhammadiyah <br>
                                            Palangka Raya
                                        </h1>
                                        <p>
                                            Eksplorasi potensimu di tengah keindahan alam Palangka Raya! Universitas
                                            Muhammadiyah menghadirkan lingkungan belajar yang mendukung, dikelilingi
                                            oleh budaya yang kaya dan keramahan masyarakat.
                                        </p>
                                        <div class="btn-box">
                                            <a href="https://pmb.umpr.ac.id/" class="btn1">
                                                Kunjungin UMPR
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="<?= base_url('vendor/') ?>assetberanda/images/UMP.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Universitas Muhammadiyah <br>
                                            Palangka Raya
                                        </h1>
                                        <p>
                                            Inovasi, integritas, dan inspirasi. Di Universitas Muhammadiyah Palangka
                                            Raya, kami mengembangkan pemimpin masa depan dengan fokus pada nilai-nilai
                                            ini. Bergabunglah dengan kami dan jadilah bagian dari perubahan positif!
                                        </p>
                                        <div class="btn-box">
                                            <a href="https://pmb.umpr.ac.id/" class="btn1">
                                                Kunjungin UMPR
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="<?= base_url('vendor/') ?>assetberanda/images/UMP.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>

        </section>
        <!-- end slider section -->
    </div>


    <!-- service section -->

    <section class="service_section layout_padding" id="daftar">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Daftar <span>Sekarang</span>
                    </h2>
                    <p>
                        Daftar sekarang juga, proses pendaftaran yang mudah dan cepat. Hanya perlu menekan/menyentuh
                        salah satu Jalur Pendaftaran dibawah kemudian ikuti petunjuk didalamnya. Buruan…!!!
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/s2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Jalur Reguler
                                </h5>
                                <p>
                                    Jalur ini adalah metode pendaftaran umum yang terbuka untuk semua calon mahasiswa.
                                    Calon mahasiswa mendaftar melalui prosedur penerimaan yang telah ditentukan,
                                    termasuk ujian masuk atau seleksi tertulis.
                                </p>
                                <a href="https://pmb.umpr.ac.id/jalur-pendaftaran/ujian-saringan-masuk/">
                                    Daftar Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/w4.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Jalur Undangan Rektor
                                </h5>
                                <p>
                                    Jalur ini merupakan undangan khusus dari Rektor Universitas Muhammadiyah Palangka
                                    Raya. Calon mahasiswa yang memenuhi kriteria tertentu, seperti prestasi akademis
                                    atau non-akademis yang luar biasa, dapat diundang langsung untuk mendaftar melalui
                                    jalur ini.
                                </p>
                                <a href="https://pmb.umpr.ac.id/jalur-pendaftaran/undangan-rektor/">
                                    Daftar Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/s3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Jalur RPL
                                </h5>
                                <p>
                                    Jalur ini memberikan kesempatan bagi calon mahasiswa yang memiliki pengalaman kerja
                                    atau pendidikan formal sebelumnya. Calon mahasiswa dapat mengajukan pengakuan
                                    terhadap kompetensi yang telah diperoleh sebelumnya untuk mempercepat proses
                                    pendidikan mereka.
                                </p>
                                <a href="https://pmb.umpr.ac.id/rpl/">
                                    Daftar Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/s1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Jalur KIP Kuliah
                                </h5>
                                <p>
                                    Jalur ini diperuntukkan bagi calon mahasiswa yang memenuhi syarat Kartu Indonesia
                                    Pintar Kuliah. Calon mahasiswa dapat menggunakan Kartu Indonesia Pintar Kuliah
                                    mereka untuk mempermudah akses ke pendidikan tinggi di Universitas Muhammadiyah
                                    Palangka Raya.
                                </p>
                                <a href="https://pmb.umpr.ac.id/jalur-pendaftaran/kip/">
                                    Daftar Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="https://pmb.umpr.ac.id/">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end service section -->


    <!-- about section -->

    <section class="about_section layout_padding" id="tentang">
        <div class="container  ">
            <div class="heading_container heading_center">
                <h2>
                    Tentang <span>UMPR</span>
                </h2>
                <p>
                    Selamat Datang di Universitas Muhammadiyah Palangkaraya
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="<?= base_url('vendor/') ?>assetberanda/images/umprabout.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <h3>
                            Kami adalah UMPR
                        </h3>
                        <p>
                            Universitas Muhammadiyah Palangkaraya adalah perguruan tinggi swasta yang bervisikan Unggul
                            dalam Ilmu Pengetahuan dan Teknologi yang Berlandaskan Iman dan Taqwa. Universitas
                            Muhammadiyah Palangkaraya kampus dengan sumber daya manusia yang berkomitmen untuk memahami
                            dan menerapkan nilai-nilai Islam dalam upaya membangun akhlaqul karimah. Serta menghasilkan
                            sumber daya manusia yang memiliki integritas, kompeten dan berdaya saing dalam pengembangan
                            keilmuan dan profesi.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- team section -->
    <section class="team_section layout_padding" id="jurusan">
        <div class="container-fluid">
            <div class="heading_container heading_center">
                <h2 class="">
                    Pilihan Jenjang <span> Pendidikan</span>
                </h2>
            </div>

            <div class="team_container jurusan">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/fisip.jpg" class="img1" alt="">
                            </div>
                            <div class="detail-box-jurusan">
                                <h5>
                                    Fakultas Ilmu Sosial dan Politik
                                </h5>
                                <p>
                                    S-2 Magister Administrasi Publik (Unggul)
                                </p>
                                <p>
                                    S-1 Ilmu Administrasi Negara (Unggul)
                                </p>
                                <p>
                                    S-1 Ilmu Komunikasi (Baik Sekali)
                                </p>
                            </div>
                            <a href="https://fisip.umpr.ac.id/"><button type="button"
                                    class="btn btn-primary mb-3">Selengkapnya</button></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/fkip.jpg" class="img1" alt="">
                            </div>
                            <div class="detail-box-jurusan">
                                <h5>
                                    Fakultas Keguruan Dan Ilmu Pendidikan
                                </h5>
                                <p>
                                    S-2 Pendidikan Dasar (Baik)
                                </p>
                                <p>
                                    S-1 Bimbingan dan Konseling (Baik Sekali)
                                </p>
                                <p>
                                    S-1 Pendidikan Ekonomi (Unggul)
                                </p>
                                <p>
                                    S-1 Pendidikan Guru Sekolah Dasar (Baik Sekali)
                                </p>
                            </div>
                            <a href="https://fkip.umpr.ac.id/"><button type="button"
                                    class="btn btn-primary mb-3">Selengkapnya</button></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/fapertahut.jpg" class="img1"
                                    alt="">
                            </div>
                            <div class="detail-box-jurusan">
                                <h5>
                                    Fakultas Pertanian Dan Kehutanan
                                </h5>
                                <p>
                                    S-1 Agroteknologi (Baik Sekali)
                                </p>
                                <p>
                                    S-1 Kehutanan (Baik Sekali)
                                </p>
                            </div>
                            <a href="https://fapertahut.umpr.ac.id/"><button type="button"
                                    class="btn btn-primary mb-3">Selengkapnya</button></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/fai.jpg" class="img1" alt="">
                            </div>
                            <div class="detail-box-jurusan">
                                <h5>
                                    Fakultas Agama Islam
                                </h5>
                                <p>
                                    S1 – Pendidikan Guru Madrasah Ibtidaiyah (Baik)
                                </p>
                                <p>
                                    S-1 Pendidikan Agama Islam/Tarbiyah (Baik Sekali)
                                </p>
                                <p>
                                    S1 – Hukum Keluarga / Ahwal Al Syakhsiyah (Baik Sekali)
                                </p>
                            </div>
                            <a href="https://fai.umpr.ac.id/"><button type="button"
                                    class="btn btn-primary mb-3">Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team_container jurusan">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/fbit.jpg" class="img1" alt="">
                            </div>
                            <div class="detail-box-jurusan">
                                <h5>
                                    Fakultas Bahasa, Ilmu Pengetahuan dan Teknologi
                                </h5>
                                <p>
                                    S-1 Pendidikan Teknologi Informasi (Baik Sekali)
                                </p>
                                <p>
                                    S-1 Pendidikan Biologi (Proses)
                                </p>
                                <p>
                                    S-1 Pendidikan Bahasa Inggris (Proses)
                                </p>
                            </div>
                            <a href="https://fbit.umpr.ac.id/"><button type="button"
                                    class="btn btn-primary mb-3">Selengkapnya</button></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/ft.jpg" class="img1" alt="">
                            </div>
                            <div class="detail-box-jurusan">
                                <h5>
                                    Fakultas Teknik
                                </h5>
                                <p>
                                    S-1 Teknik Sipil (Baik Sekali)
                                </p>
                                <p>
                                    S-1 Teknik Lingkungan (Baik)
                                </p>
                            </div>
                            <a href="https://ft.umpr.ac.id/"><button type="button"
                                    class="btn btn-primary mb-3">Selengkapnya</button></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/fbi.jpg" class="img1" alt="">
                            </div>
                            <div class="detail-box-jurusan">
                                <h5>
                                    Fakultas Bisnis dan Informatika
                                </h5>
                                <p>
                                    S-1 Ilmu Komputer (Baik)
                                </p>
                                <p>
                                    S-1 Sistem Informasi (Baik)
                                </p>
                                <p>
                                    S-1 Bisnis Digital (Proses)
                                </p>
                            </div>
                            <a href="https://fbi.umpr.ac.id/"><button type="button"
                                    class="btn btn-primary mb-3">Selengkapnya</button></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/fik.jpg" class="img1" alt="">
                            </div>
                            <div class="detail-box-jurusan">
                                <h5>
                                    Fakultas Ilmu Kesehatan
                                </h5>
                                <p>
                                    D-3 Analis Kesehatan (Baik Sekali)
                                </p>
                                <p>
                                    D-3 Farmasi (Baik Sekali)
                                </p>
                            </div>
                            <a href="https://fik.umpr.ac.id/"><button type="button"
                                    class="btn btn-primary mb-3">Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team section -->

    <section class="about_section layout_padding" id="rekomendasi">
        <div class="container  ">
            <div class="heading_container heading_center">
                <h2>
                    Bingung Mau <span>Jurusan Apa??</span>
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="<?= base_url('vendor/') ?>assetberanda/images/bingung.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <p>
                            Temukan jurusan idealmu! Bingung memilih jurusan? Gunakan sistem rekomendasi kami untuk
                            menemukan jurusan yang sesuai dengan minat dan potensimu. Ayo coba sekarang!
                        </p>
                        <a href="<?= site_url('controllerBeranda/formAnalisis') ?>">
                            Coba Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- client section -->

    <section class="client_section layout_padding" id="alumni">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>
                    Apa kata <span>Alumni</span>
                </h2>
            </div>
            <div class="carousel-wrap ">
                <div class="owl-carousel client_owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/client1.jpg" alt=""
                                    class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            Muhammad Abdul Gani
                                        </h6>
                                        <p>
                                            Lulusan Ilmu Komputer, angkatan 2023
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Studi di Ilmu Komputer di Universitas Muhammadiyah Palangkaraya membuka pintu bagi
                                    saya ke dunia teknologi. Saya belajar tidak hanya tentang kode, tetapi juga tentang
                                    bagaimana teknologi dapat menciptakan dampak positif dalam masyarakat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/client2.jpg" alt=""
                                    class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            Tiara Nur Oktaviani
                                        </h6>
                                        <p>
                                            Lulusan Administrasi Negara, angkatan 2023
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Belajar di Administrasi Negara UM Palangkaraya tidak hanya memberikan pemahaman
                                    teoritis, tetapi juga keterampilan praktis dalam mengelola pemerintahan. Saya
                                    berterima kasih karena telah membentuk saya menjadi seorang profesional yang
                                    berkomitmen pada pelayanan publik. </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/client1.jpg" alt=""
                                    class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            Rizki Prasetyo
                                        </h6>
                                        <p>
                                            Lulusan Teknik Sipil, angkatan 2022
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Studi di Jurusan Teknik Sipil UM Palangkaraya membuka jalan bagi saya untuk menjadi
                                    seorang insinyur konstruksi. Saya telah terlibat dalam berbagai proyek infrastruktur
                                    dan membangun komunitas melalui pembangunan yang berkelanjutan. </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="<?= base_url('vendor/') ?>assetberanda/images/client2.jpg" alt=""
                                    class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            Ahmad Rahman
                                        </h6>
                                        <p>
                                            Lulusan Farmasi, angkatan 2021
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Menempuh pendidikan di Jurusan Farmasi UM Palangkaraya adalah perjalanan yang tak
                                    terlupakan. Kini, saya menjadi seorang apoteker yang berkomitmen untuk memberikan
                                    pelayanan farmasi yang berkualitas dan edukasi kesehatan kepada masyarakat. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->


    <!-- info section -->

    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-10 info_col">
                    <div class="info_contact">
                        <h4>
                            Alamat
                        </h4>
                        <div class="contact_link_box">
                            <a
                                href="https://www.bing.com/maps?osid=bb7808a4-6598-4d05-9992-ef6cb57c7e62&cp=-2.223133~113.917022&lvl=17&pi=0&imgid=945b2e2c-4c22-4746-be35-d7cc84822424&v=2&sV=2&form=S00027">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Lokasi
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Hubungi +62 536 3222184
                                </span>
                            </a>
                            <a href="https://um.palangkaraya@gmail.com">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    um.palangkaraya@gmail.com
                                </span>
                            </a>
                            <a href="https://www.instagram.com/umpalangkaraya?igshid=OGQ5ZDc2ODk2ZA==">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <span>
                                    @umpalangkaraya
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 info_col">
                    <div class="info_detail">
                        <img src="<?= base_url('vendor/') ?>assetberanda/images/UMP.png" alt="" style="height: 200px;">
                    </div>
                </div>
            </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <section class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Muhammad Abdul Gani</a>
            </p>
        </div>
    </section>
    <!-- footer section -->

    <!-- jQery -->
    <script type="text/javascript" src="<?= base_url('vendor/') ?>assetberanda/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="<?= base_url('vendor/') ?>assetberanda/js/bootstrap.js"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script type="text/javascript" src="<?= base_url('vendor/') ?>assetberanda/js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>