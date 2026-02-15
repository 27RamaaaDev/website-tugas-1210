<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>CV - Restu Putra Ramadhan</title>
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

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom CSS for CV -->
    <style>
        /* Mencegah Slider Samping (Scrollbar Horizontal) */
        body, html {
            overflow-x: hidden;
            background-color: #f5f7fa; /* Sedikit abu-abu untuk background body agar putihnya kontras */
        }

        /* --- STYLING SIDEBAR --- */
        .sidebar-container {
            background-color: #0F4C81; /* Warna Biru ITB */
            color: white;
            border-radius: 15px;
            padding: 30px 25px; /* Sedikit diperlebar paddingnya */
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Reset style kartu di dalam sidebar agar menyatu */
        .sidebar-container .cv-card {
            background: transparent;
            box-shadow: none;
            border: none;
            margin-bottom: 25px;
            padding: 0;
        }

        .sidebar-container .card-body {
            padding: 0;
        }

        /* Warna teks khusus sidebar */
        .sidebar-container h3, 
        .sidebar-container h4, 
        .sidebar-container h5,
        .sidebar-container .fw-bold {
            color: white !important;
        }

        .sidebar-container .text-primary {
            color: #F8C300 !important; /* Ubah biru menjadi Emas */
        }

        .sidebar-container .text-muted,
        .sidebar-container .text-dark,
        .sidebar-container .text-secondary {
            color: #e0e0e0 !important;
        }

        /* Judul Section di Sidebar */
        .sidebar-container .cv-section-title {
            color: #F8C300; /* Emas */
            border-left-color: #F8C300;
            margin-bottom: 20px;
            font-size: 1.25rem;
            letter-spacing: 0.5px;
        }

        /* Kontak Icons */
        .sidebar-container .contact-list i {
            background: rgba(255,255,255,0.1);
            color: #F8C300;
        }

        /* Skill Badges - DIRAPIKAN */
        .sidebar-container .skill-badge {
            background-color: rgba(255,255,255,0.15);
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            margin: 0 8px 10px 0; /* Jarak antar badge lebih rapi */
            display: inline-block;
            font-size: 0.9rem;
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.3s ease;
        }

        .sidebar-container .skill-badge:hover {
            background-color: #F8C300;
            color: #0F4C81;
            transform: translateY(-2px);
            font-weight: 600;
        }

        /* Badge NIS/Univ */
        .sidebar-container .badge.bg-light {
            background-color: rgba(255,255,255,0.1) !important;
            color: white !important;
            border: 1px solid rgba(255,255,255,0.2) !important;
        }
        
        /* Progress bar background - DIRAPIKAN */
        .sidebar-container .progress {
            background-color: rgba(255,255,255,0.2);
            height: 8px !important; /* Sedikit lebih tebal */
            border-radius: 4px;
            overflow: hidden;
        }
        
        .sidebar-container .progress-bar {
            background-color: #F8C300 !important;
        }

        .sidebar-divider {
            border-top: 1px solid rgba(255,255,255,0.15);
            margin: 20px 0;
        }

        /* --- END SIDEBAR STYLING --- */


        /* Profile Image Style */
        .profile-img-container {
            position: relative;
            width: 180px;
            height: 180px;
            margin: 0 auto 20px auto;
            border: 5px solid #F8C300; /* Warna Emas */
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        .profile-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cv-section-title {
            border-left: 5px solid #0F4C81; /* Biru ITB */
            padding-left: 15px;
            margin-bottom: 20px;
            color: #0F4C81;
            font-weight: 700;
            text-transform: uppercase;
        }

        .cv-card {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 25px;
            border-radius: 10px;
            overflow: hidden;
            background: white;
        }

        .timeline-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 25px;
            border-left: 2px solid #e0e0e0;
        }

        .timeline-item:last-child {
            margin-bottom: 0; /* Hapus margin bawah item terakhir agar rapi */
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -6px;
            top: 5px;
            width: 10px;
            height: 10px;
            background: #F8C300;
            border-radius: 50%;
        }

        .timeline-date {
            font-size: 0.85rem;
            color: #666;
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
        }

        .contact-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .contact-list i {
            width: 35px;
            height: 35px;
            background: #f0f4f8;
            color: #0F4C81;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
    </style>
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
                    <small id="tanggalwaktu"></small>
                    <script>
					var dt = new Date();
					document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleString();
					</script>		
                </div>  
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="images/logoitb.png" alt="Logo" style="height: 60px; margin-right: 15px;">
            <div style="overflow: hidden; white-space: nowrap; width: 100%; max-width: 350px;">
                 <marquee scrollamount="5"><h2 class="m-0 text-primary">INSTITUT TEKNOLOGI BANDUNG</h2></marquee>
            </div>
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
                        <a href="muti.php" class="dropdown-item">Muti</a>
                        <a href="faadhil.php" class="dropdown-item">Faadhil</a>
                        <a href="denis.php" class="dropdown-item">Denis</a>
                        <a href="rama.php" class="dropdown-item active">Rama</a>
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
                                <img src="images/rama.jpg" alt="Foto Profil Rama">
                            </div>
                            <h3 class="fw-bold mb-1">Restu Putra Ramadhan</h3>
                            <p class="text-primary fw-bold mb-3">Fullstack Developer & Software Engineer</p>
                            
                            <div class="d-flex justify-content-center gap-2 mb-2">
                                <span class="badge bg-light text-dark border"><i class="fa fa-id-card me-1"></i> NIS: 232410134</span>
                            </div>
                            <div class="d-flex justify-content-center">
                                <span class="badge bg-light text-dark border"><i class="fa fa-university me-1"></i> STEI - K ITB</span>
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
                                    <span class="text-break">restuputraramadhannn@gmail.com</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>+62 851-1722-7098</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span>Bandung, 27 September 2008</span>
                                </li>
                                <li>
                                    <i class="fab fa-linkedin"></i>
                                    <span>linkedin.com/in/restu-putra-ramadhan-6446b9358</span>
                                </li>
                                <li>
                                    <i class="fab fa-github"></i>
                                    <span>github.com/27RamaaaDev</span>
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
                                <span class="skill-badge">HTML5</span>
                                <span class="skill-badge">CSS3</span>
                                <span class="skill-badge">JavaScript</span>
                                <span class="skill-badge">PHP</span>
                                <span class="skill-badge">Python</span>
                                <span class="skill-badge">C++</span>
                                <span class="skill-badge">MySQL</span>
                                <span class="skill-badge">Git</span>
                                <span class="skill-badge">Laravel</span>
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
                            Saya adalah seorang pengembang web yang berdedikasi dengan fokus kuat pada pengembangan Backend. Memiliki semangat tinggi dalam mempelajari teknologi baru dan memecahkan masalah kompleks melalui kode. Saat ini sedang menempuh pendidikan di Institut Teknologi Bandung dan aktif dalam berbagai proyek pengembangan perangkat lunak kampus. Saya berkomitmen untuk menciptakan solusi digital yang efisien dan skalabel.
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
                            <h5 class="fw-bold">SDN Kotabaru IX</h5>
                            <p class="text-primary mb-1">6 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai rata-rata 88,2.</p>
                        </div>

                        <!-- Item 2: SMP -->
                        <div class="timeline-item">
                            <span class="timeline-date">2020 - 2023</span>
                            <h5 class="fw-bold">SMPN 13 Bekasi</h5>
                            <p class="text-primary mb-1">3 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai rata-rata 97,2. Aktif di ekstrakurikuler PMR.</p>
                        </div>
                
                        <!-- Item 3: SMA -->
                        <div class="timeline-item">
                            <span class="timeline-date">2023 - 2026</span>
                            <h5 class="fw-bold">SMAN 4 Bekasi</h5>
                            <p class="text-primary mb-1">3 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai rata-rata 89,8. Aktif di ekstrakurikuler SCI-TOS.</p>
                        </div>

                        <!-- Item 4: Kuliah -->
                        <div class="timeline-item">
                            <span class="timeline-date">2026 - 2030</span>
                            <h5 class="fw-bold">Institut Teknologi Bandung</h5>
                            <p class="text-primary mb-1">3,5 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai rata-rata IPK 3,8.</p>
                        </div>

                    </div>
                </div>

                <!-- Pengalaman -->
                <div class="cv-card card wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card-body p-4">
                        <h3 class="cv-section-title">Pengalaman Organisasi & Proyek</h3>
                        
                        <div class="timeline-item">
                            <span class="timeline-date">2024 - 2025</span>
                            <h5 class="fw-bold">Koordinator Divisi Programming & Jaringan SCI-TOS</h5>
                            <p class="text-primary mb-1">Science Technology of 4 Senior Highschool (SCI-TOS)</p>
                            <p class="text-muted small">Bertanggung jawab memberi ilmu, memberi arahan, dan memberi tugas kepada anggota divisi Programming Jaringan.</p>
                        </div>

                        <div class="timeline-item">
                            <span class="timeline-date">2026 - 2029</span>
                            <h5 class="fw-bold">Web Developer</h5>
                            <p class="text-primary mb-1">PT. Nirwana Sukses Sejahtera</p>
                            <p class="text-muted small">Mengelola website bisnis dan memastikan sistem registrasi berjalan lancar tanpa kendala teknis.</p>
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
                        Copyright &copy; 2026 <a class="border-bottom" href="#">Restu Putra Ramadhan</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>