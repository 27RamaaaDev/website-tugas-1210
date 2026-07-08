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
    <?php require __DIR__ . '/includes/navbar.php'; ?>

    <!-- CV Content Start -->
    <div class="container py-5 mt-3">
        <div class="row">

            <!-- Left Sidebar -->
            <div class="col-lg-4 mb-4">

                <!-- CONTAINER SIDEBAR (Baru: dengan Background) -->
                <div class="sidebar-container <?= site_cv_theme_class() ?> wow fadeInLeft" data-wow-delay="0.1s">

                    <!-- PROFIL UTAMA -->
                    <div class="cv-card card profile-card">
                        <div class="card-body text-center">
                            <div class="profile-img-container mb-3 wow zoomIn" data-wow-delay="0.2s">
                                <!-- Pastikan gambar rama.jpeg ada -->
                                <img src="images/rama.JPG" alt="Foto profil Restu Putra Ramadhan" decoding="async">
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
    <?php require __DIR__ . '/includes/footer.php'; ?>
