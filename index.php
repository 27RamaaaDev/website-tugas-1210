<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Beranda - bismillah ptn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="images/logoitb.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <?php require __DIR__ . '/includes/navbar.php'; ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- Background Image -->
                    <img class="w-100" src="images/itb1.jpeg" alt="Gedung Institut Teknologi Bandung" decoding="async" fetchpriority="high" style="height: 700px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <!-- Kolom Teks -->
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">SELAMAT DATANG DI</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">INSTITUT TEKNOLOGI BANDUNG</h1>
                                </div>
                                <!-- Kolom Gambar Kampus (Overlay) -->
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="images/itb2.jpeg" alt="Suasana kampus ITB" decoding="async" style="border: 5px solid white; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.5);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">Tim Kami</h6>
                <h1 class="mb-5">ANGGOTA KELOMPOK</h1>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Anggota 1 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light p-4 text-center">
                        <div class="team-img-box mb-3">
                            <img src="images/dina.jpeg" alt="Foto Alvrida Dien Amalia" loading="lazy" decoding="async">
                        </div>
                        <h5 class="fw-bold mb-0">Alvrida Dien Amalia</h5>
                        <small class="text-primary d-block mb-2">NIS : 232410256</small>
                        <a class="btn btn-sm-square btn-primary mx-auto rounded-circle" href="https://instagram.com/alvridamalia" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Anggota 2 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light p-4 text-center">
                        <div class="team-img-box mb-3">
                            <img src="images/male.jpeg" alt="Foto Andi Maleeka E. Z." loading="lazy" decoding="async">
                        </div>
                        <h5 class="fw-bold mb-0">Andi Maleeka E. Z.</h5>
                        <small class="text-primary d-block mb-2">NIS : 232410004</small>
                        <a class="btn btn-sm-square btn-primary mx-auto rounded-circle" href="https://instagram.com/zavmezh" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Anggota 3 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light p-4 text-center">
                        <div class="team-img-box mb-3">
                            <img src="images/muti.jpeg" alt="Foto Muthia Al-Jatsiyah H." loading="lazy" decoding="async">
                        </div>
                        <h5 class="fw-bold mb-0">Muthia Al-Jatsiyah H.</h5>
                        <small class="text-primary d-block mb-2">NIS : 232410022</small>
                        <a class="btn btn-sm-square btn-primary mx-auto rounded-circle" href="https://instagram.com/muthieealh" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Anggota 4 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light p-4 text-center">
                        <div class="team-img-box mb-3">
                            <img src="images/faadhil.jpeg" alt="Foto Faadhil Hermin W." loading="lazy" decoding="async">
                        </div>
                        <h5 class="fw-bold mb-0">Faadhil Hermin W.</h5>
                        <small class="text-primary d-block mb-2">NIS : 232410013</small>
                        <a class="btn btn-sm-square btn-primary mx-auto rounded-circle" href="https://instagram.com/faadhwill" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Anggota 5 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light p-4 text-center">
                        <div class="team-img-box mb-3">
                            <img src="images/denis.jpeg" alt="Foto M. Denis Saputra" loading="lazy" decoding="async">
                        </div>
                        <h5 class="fw-bold mb-0">M. Denis Saputra</h5>
                        <small class="text-primary d-block mb-2">NIS : 232410125</small>
                        <a class="btn btn-sm-square btn-primary mx-auto rounded-circle" href="https://instagram.com/dnssptraaa_" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Anggota 6 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light p-4 text-center">
                        <div class="team-img-box mb-3">
                            <img src="images/rama.JPG" alt="Foto Restu Putra R." loading="lazy" decoding="async">
                        </div>
                        <h5 class="fw-bold mb-0">Restu Putra R.</h5>
                        <small class="text-primary d-block mb-2">NIS : 232410134</small>
                        <a class="btn btn-sm-square btn-primary mx-auto rounded-circle" href="https://www.instagram.com/backend.ramaa" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <?php $showMusicPlayer = true; require __DIR__ . '/includes/footer.php'; ?>
