<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>CV - Muthia Al-Jatsiyah Hidayati</title>
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
    <!-- CV styles moved to css/style.css -->
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Jl. Ganesha No.10, Bandung</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>022-2500935</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-clock text-primary me-2"></small>
                    <small id="tanggalwaktu"></small></div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="images/logoitb.png" alt="Logo ITB" style="height: 60px; margin-right: 15px;">
            <div class="brand-copy"><span>Institut Teknologi Bandung</span><small>Bismillah PTN</small></div>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0 pe-lg-5">
                <a href="index.php" class="nav-item nav-link">Beranda</a>
                <a href="form.php" class="nav-item nav-link">Form Pendaftaran</a>
                <a href="data.php" class="nav-item nav-link">Data Pendaftar</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">CV</a>
                    <div class="dropdown-menu m-0">
                        <a href="dina.php" class="dropdown-item">Dina</a>
                        <a href="male.php" class="dropdown-item">Male</a>
                        <a href="muti.php" class="dropdown-item active">Muti</a>
                        <a href="faadhil.php" class="dropdown-item">Faadhil</a>
                        <a href="denis.php" class="dropdown-item">Denis</a>
                        <a href="rama.php" class="dropdown-item">Rama</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- CV Content Start -->
    <div class="container py-5 mt-3">
        <div class="row">

            <!-- Left Sidebar -->
            <div class="col-lg-4 mb-4">

                <!-- CONTAINER SIDEBAR (Baru: dengan Background) -->
                <div class="sidebar-container wow fadeInLeft" data-wow-delay="0.1s">

                    <!-- PROFIL UTAMA -->
                    <div class="cv-card card profile-card">
                        <div class="card-body text-center">
                            <div class="profile-img-container mb-3 wow zoomIn" data-wow-delay="0.2s">
                                <!-- Pastikan gambar rama.jpeg ada -->
                                <img src="images/muti.jpeg" alt="Foto profil Muthia Al-Jatsiyah Hidayati" decoding="async">
                            </div>
                            <h3 class="fw-bold mb-1">Muthia Al-Jatsiyah Hidayati</h3>
                            <p class="text-primary fw-bold mb-3">Legal Officer</p>

                            <div class="d-flex justify-content-center gap-2 mb-2">
                                <span class="badge bg-light text-dark border"><i class="fa fa-id-card me-1"></i> NIS: 232410022</span>
                            </div>
                            <div class="d-flex justify-content-center">
                                <span class="badge bg-light text-dark border"><i class="fa fa-university me-1"></i>Hukum UB</span>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-divider"></div>

                    <!-- Kontak -->
                    <div class="cv-card card">
                        <div class="card-body">
                            <h4 class="cv-section-title">Kontak</h4>
                            <ul class="list-unstyled contact-list">
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <span class="text-break">muthiaaljatsiyah19@gmail.com</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>+62 895-6170-34105</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span>Bekasi, 19 November 2008</span>
                                </li>
                                <li>
                                    <i class="fab fa-instagram"></i>
                                    <span>@muthieealh</span>
                                </li>
                                <li>
                                    <i class="fab fa-tiktok"></i>
                                    <span>@lluffy.d</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-divider"></div>

                    <!-- Keahlian -->
                    <div class="cv-card card">
                        <div class="card-body">
                            <h4 class="cv-section-title">Keahlian</h4>
                            <div class="d-flex flex-wrap">
                                <span class="skill-badge">Bernyanyi</span>
                                <span class="skill-badge">Memasak</span>
                                <span class="skill-badge">Memasak</span>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-divider"></div>

                    <!-- Bahasa -->
                    <div class="cv-card card">
                        <div class="card-body">
                            <h4 class="cv-section-title">Bahasa</h4>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Indonesia</span>
                                    <span class="fw-bold text-primary">Native</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Inggris</span>
                                    <span class="fw-bold text-primary">Advanced</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- END SIDEBAR CONTAINER -->

            </div>

            <!-- Right Content -->
            <div class="col-lg-8">
                <!-- Profil Saya -->
                <div class="cv-card card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card-body p-4">
                        <h3 class="cv-section-title">Tentang Saya</h3>
                        <p class="text-secondary" style="text-align: justify;">
                            Saya adalah seseorang yang suka mencoba hal baru, saya sering mengikuti kegiatan yang berbeda seperti volly, batminton, bela diri, dan pramuka. selain itu saya yangat suka bernyanyi dan menari, baik tari tradisionl maupun modern.
                        </p>
                    </div>
                </div>

                <!-- Pendidikan -->
                <div class="cv-card card wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card-body p-4">
                        <h3 class="cv-section-title">Riwayat Pendidikan</h3>

                        <!-- Item 1: SD -->
                        <div class="timeline-item">
                            <span class="timeline-date">2014 - 2020</span>
                            <h5 class="fw-bold">MI AT-TAUBAH</h5>
                            <p class="text-primary mb-1">6 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai rata-rata 89,6.</p>
                        </div>

                        <!-- Item 2: SMP -->
                        <div class="timeline-item">
                            <span class="timeline-date">2020 - 2023</span>
                            <h5 class="fw-bold">MTSN 1 Kota Bekasi</h5>
                            <p class="text-primary mb-1">3 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai rata-rata 95,2. Aktif di ekstrakurikuler Pramuka.</p>
                        </div>

                        <!-- Item 3: SMA -->
                        <div class="timeline-item">
                            <span class="timeline-date">2023 - 2026</span>
                            <h5 class="fw-bold">SMAN 4 Bekasi</h5>
                            <p class="text-primary mb-1">3 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai rata-rata 89,4. Aktif di ekstrakurikuler SINCAN.</p>
                        </div>

                        <!-- Item 4: Kuliah -->
                        <div class="timeline-item">
                            <span class="timeline-date">2026 - 2030</span>
                            <h5 class="fw-bold">Universitas Brawijaya</h5>
                            <p class="text-primary mb-1">3,5 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai rata-rata IPK 3,9.</p>
                        </div>

                    </div>
                </div>

                <!-- Pengalaman -->
                <div class="cv-card card wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card-body p-4">
                        <h3 class="cv-section-title">Pengalaman Organisasi & Proyek</h3>

                        <div class="timeline-item">
                            <span class="timeline-date">2024 - 2025</span>
                            <h5 class="fw-bold">Ketua Umum Pramuka siliwangi-candra kirana</h5>
                            <p class="text-primary mb-1">Pradana Putri SINCAN Angkatan 32</p>
                            <p class="text-muted small">Aktif dalam seluruh kegiatan pramuka sincan dan bertanggung jawab menjadi ketua umum</p>
                        </div>

                        <div class="timeline-item">
                            <span class="timeline-date">2026 - 2050</span>
                            <h5 class="fw-bold">Legal Officer</h5>
                            <p class="text-primary mb-1">BUMN</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CV Content End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Institut Teknologi Bandung</h4>
                    <p>Menciptakan, berbagi, dan menerapkan ilmu pengetahuan, teknologi, seni dan humaniora serta menghasilkan sumber daya manusia yang unggul.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@restuputraramadhan"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/backend.ramaa"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@27.1nonlyramaaaaa"><i class="fab fa-tiktok"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/restu-putra-ramadhan-6446b9358/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://github.com/27RamaaaDev"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Menu Cepat</h4>
                    <a class="footer-link" href="index.php">Beranda</a>
                    <a class="footer-link" href="rama.php">CV</a>
                    <a class="footer-link" href="form.php">Form Pendaftaran</a>
                    <a class="footer-link" href="https://wa.me/qr/4JIAIX4FXTSDC1">Kontak</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Kontak Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Ganesha No.10, Bandung, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>022-2500935</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@itb.ac.id</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        Copyright &copy; 2026 <a class="border-bottom" href="index.php">Restu Putra Ramadhan</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.php">Beranda</a>
                            <a href="form.php">Pendaftaran</a>
                            <a href="data.php">Data</a>
                            <a href="rama.php">CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>