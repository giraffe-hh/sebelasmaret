<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Ahsan Mughal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNS - Universitas Sebelas Maret</title>
    <!-- Bootstrap CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <!-- Remix Icons  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Fancy Box CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <!-- AOS CDN  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<header class="bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">UNS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Akademik UNS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Research</a>
                    </li>
                </ul>
                <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary me-2" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</header>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top py-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/logo-uns-landscape.png" alt="" style="height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-outdent" id="icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="#">Kedudukan Tugas dan Fungsi</a></li>
                            <li><a class="dropdown-item" href="#">Staf DIRKOA</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sop">SOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#document">Dokumen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <!-- <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Welcome to UNS</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">WE ARE TEAM OF TALENTED DESIGNERS MAKING WEBSITES WITH BOOTSTRAP</h5>
                    <div data-aos="fade-up" data-aos-delay="50">
                        <a href="#" class="btn btn-brand me-2">Get Started</a>
                        <a href="#" class="btn btn-light ms-2">Our Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="home" class="align-items-center">
        <div id="headlineCarousel" class="carousel slide container-fluid px-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                // Mengambil data dari file .json
                $json_data = file_get_contents('headline.json');
                $headline = json_decode($json_data, true);

                // Variabel untuk melacak apakah slide pertama
                $isFirstSlide = true;

                // Melakukan looping untuk setiap berita/headline
                foreach ($headline as $item) {
                    $image = $item['image'];
                    $title = $item['title'];
                    $description = $item['description'];
                    $link = $item['link'];
                ?>
                    <div class="carousel-item <?php echo $isFirstSlide ? 'active' : ''; ?>">
                        <div class="content-horizontal">
                            <div class="image-horizontal">
                                <img src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="text-horizontal">
                                <h5 class="mt-4"><?php echo $title; ?></h5>
                                <p><?php echo $description; ?></p>
                                <a href="<?php echo $link; ?>">Baca Selengkapnya <i class="ri-arrow-right-s-line"></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                    // Set variabel $isFirstSlide menjadi false setelah slide pertama
                    $isFirstSlide = false;
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#headlineCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#headlineCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Layanan</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row g-4 text-center">
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="card h-100">
                        <div class="card-header bg-primary p-2">
                            <div>
                                <i class="ri-file-chart-fill" style="font-size: 50px; color: white;"></i>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Laporan Keuangan</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="card h-100">
                        <div class="card-header bg-primary p-2">
                            <div>
                                <i class="ri-flow-chart" style="font-size: 50px; color: white;"></i>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Prosedur Operasional</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="card h-100">
                        <div class="card-header bg-primary p-2">
                            <div>
                                <i class="ri-survey-fill" style="font-size: 50px; color: white;"></i>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Form dan Blanko</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="card h-100">
                        <div class="card-header bg-primary p-2">
                            <div>
                                <i class="ri-arrow-go-back-fill" style="font-size: 50px; color: white;"></i>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Pengembalian UKT</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="card h-100">
                        <div class="card-header bg-primary p-2">
                            <div>
                                <i class="ri-hammer-fill" style="font-size: 50px; color: white;"></i>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Pemeliharaan Jalan Gedung dan Bangunan</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="card h-100">
                        <div class="card-header bg-primary p-2">
                            <div>
                                <i class="ri-tools-fill" style="font-size: 50px; color: white;"></i>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Pemeliharaan Peralatan Mesin</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="card h-100">
                        <div class="card-header bg-primary p-2">
                            <div>
                                <i class="ri-file-reduce-fill" style="font-size: 50px; color: white;"></i>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Penghapusan Aset</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="card h-100">
                        <div class="card-header bg-primary p-2">
                            <div>
                                <i class="ri-file-list-2-fill" style="font-size: 50px; color: white;"></i>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Inventarisasi Aset</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4  h-100">
                        <div class="iconbox">
                            <i class="ri-file-chart-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Laporan Keuangan</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4 h-100">
                        <div class="iconbox">
                            <i class="ri-flow-chart"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Prosedur Operasional</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4 h-100">
                        <div class="iconbox">
                            <i class="ri-survey-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Form dan Blanko</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <div class="service theme-shadow p-lg-5 p-4 h-100">
                        <div class="iconbox">
                            <i class="ri-arrow-go-back-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Pengembalian UKT</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <div class="service theme-shadow p-lg-5 p-4 h-100">
                        <div class="iconbox">
                            <i class="ri-hammer-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Pemeliharaan Jalan Gedung dan Bangunan</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <div class="service theme-shadow p-lg-5 p-4 h-100">
                        <div class="iconbox">
                            <i class="ri-tools-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Pemeliharaan Peralatan Mesin</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <div class="service theme-shadow p-lg-5 p-4 h-100">
                        <div class="iconbox">
                            <i class="ri-file-reduce-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Penghapusan Aset</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <div class="service theme-shadow p-lg-5 p-4 h-100">
                        <div class="iconbox">
                            <i class="ri-file-list-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Inventarisasi Aset</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="partofus" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Bagian dari Kami</h1>
                        <div class="line"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-6 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <a href="http://keuangan.uns.ac.id/">
                            <div class="iconbox">
                                <i class="ri-coins-fill"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Bagian Keuangan</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <a href="#">
                            <div class="iconbox">
                                <i class="ri-box-3-fill"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Bagaian Aset dan Logistik</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet fugiat sunt distinctio?</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="video" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Video</h1>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <!-- <div id="videoCarousel" class="carousel slide container-fluid px-0" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/G-sicA62cOY?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/n6XVTEE-1I4?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-10">
                        <!-- iframe for playing video -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe id="video-player" class="video-player embed-responsive-item" src="https://www.youtube.com/embed/G-sicA62cOY" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <!-- Video gallery with thumbnails -->
                        <div class="video-gallery">
                            <div class="mb-2">
                                <img class="video-thumbnail active" src="https://img.youtube.com/vi/G-sicA62cOY/0.jpg" alt="Video 1" data-video-src="https://www.youtube.com/embed/G-sicA62cOY">
                            </div>

                            <div class="mb-2">
                                <img class="video-thumbnail" src="https://img.youtube.com/vi/n6XVTEE-1I4/0.jpg" alt="Video 2" data-video-src="https://www.youtube.com/embed/n6XVTEE-1I4">
                            </div>
                            <div class="mb-2">
                                <img class="video-thumbnail" src="https://img.youtube.com/vi/-5AdILmhKRQ/0.jpg" alt="Video 2" data-video-src="https://www.youtube.com/embed/-5AdILmhKRQ">
                            </div>
                            <!-- Add more video thumbnails as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold text-center">Berita UNS</h1>
                        <div class="line"></div>
                    </div>
                    <?php
                    // Mengambil data dari file .json
                    $json_data = file_get_contents('news.json');
                    $news = json_decode($json_data, true);

                    // Melakukan looping untuk setiap berita
                    foreach ($news as $item) {
                        $image = $item['image'];
                        $title = $item['title'];
                        $description = $item['description'];
                        $link = $item['link'];
                    ?>
                        <div class="parent-horizontal">
                            <div class="child-horizontal">
                                <img src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="text-content">
                                <h5 class="mt-4"><?php echo $title; ?></h5>
                                <p><?php echo $description; ?></p>
                                <a href="<?php echo $link; ?>">Read More</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold text-center">Agenda</h1>
                        <div class="line"></div>
                    </div>
                    <?php
                    // Mengambil data dari file .json
                    $json_data = file_get_contents('agenda.json');
                    $agenda = json_decode($json_data, true);

                    // Melakukan looping untuk setiap agenda
                    foreach ($agenda as $item) {
                        $date = $item['date'];
                        $month = $item['month'];
                        $title = $item['title'];
                        $description = $item['description'];
                        $link = $item['link'];
                    ?>
                        <div class="parent-horizontal">
                            <div class="child-horizontal text-center">
                                <h1 class="display-4 fw-semibold"><?php echo $date; ?></h1>
                                <h5><?php echo $month; ?></h5>
                            </div>
                            <div class="text-content">
                                <h5 class="mt-4"><?php echo $title; ?></h5>
                                <p><?php echo $description; ?></p>
                                <a href="<?php echo $link; ?>">Read More</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4 col-sm-6">
                        <a href="#"><img src="./assets/images/logo-uns-white.png" alt="" style="width: 75px;"></a>
                        <div>&nbsp;</div>
                        <p>Jalan Ir. Sutami 36 Kentingan, Jebres, Surakarta, Jawa Tengah. Indonesia 57126.</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/UNSOfficial"><i class="ri-facebook-fill"></i></a>
                            <a href="https://twitter.com/11MaretUniv"><i class="ri-twitter-fill"></i></a>
                            <a href="https://www.youtube.com/c/UniversitasSebelasMaretSurakarta"><i class="ri-youtube-fill"></i></a>
                            <a href="https://www.linkedin.com/school/universitas-sebelas-maret"><i class="ri-linkedin-fill"></i></a>
                            <a href="https://www.tiktok.com/@11maretuniv"><i class="ri-tiktok-fill"></i></a>
                            <a href="https://www.instagram.com/uns.official/"><i class="ri-instagram-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h5 class="mb-0 text-white">Tentang Kami</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Struktur Organisasi</a></li>
                            <li><a href="#">Kedudukan Tugas dan Fungsi</a></li>
                            <li><a href="#">Staf DIRKOA</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h5 class="mb-0 text-white">CONTACT</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Telepon 0271-646994</li>
                            <li>Faksimile : 0271-646655</li>
                            <li>WA (+62) 851 5672 3341</li>
                            <li><a href="mailto:humas@mail.uns.ac.id">humas@mail.uns.ac.id</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-auto">
                        <p class="text-center mb-0">Copyright © 2023 Universitas Sebelas Maret</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // JavaScript to handle video thumbnail clicks
        $(document).ready(function() {
            $(".video-thumbnail").click(function() {
                // Remove the active class from all thumbnails
                $(".video-thumbnail").removeClass("active");

                // Add the active class to the clicked thumbnail
                $(this).addClass("active");

                // Get the data-video-src attribute of the clicked thumbnail
                var videoSrc = $(this).data("video-src");

                // Set the src attribute of the video player iframe to play the selected video
                $("#video-player").attr("src", videoSrc);
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript to handle video thumbnail clicks
        $(document).ready(function() {
            $(".video-thumbnail").click(function() {
                // Remove the active class from all thumbnails
                $(".video-thumbnail").removeClass("active");

                // Add the active class to the clicked thumbnail
                $(this).addClass("active");

                // Get the data-video-src attribute of the clicked thumbnail
                var videoSrc = $(this).data("video-src");

                // Set the src attribute of the video player iframe to play the selected video
                $("#video-player").attr("src", videoSrc);
            });
        });
    </script>

</body>

</html>