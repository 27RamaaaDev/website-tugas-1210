<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>CV - Faadhil Hermin Wicaksono</title>
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
                                <img src="images/faadhil.jpeg" alt="Foto profil Faadhil Hermin Wicaksono" decoding="async">
                            </div>
                            <h3 class="fw-bold mb-1">Faadhil Hermin Wicaksono</h3>
                            <p class="text-primary fw-bold mb-3">Gubernur Jawa Barat</p>

                            <div class="d-flex justify-content-center gap-2 mb-2">
                                <span class="badge bg-light text-dark border"><i class="fa fa-id-card me-1"></i> NIS: 232410013</span>
                            </div>
                            <div class="d-flex justify-content-center">
                                <span class="badge bg-light text-dark border"><i class="fa fa-university me-1"></i> Ekonomi pembangunan - UGM</span>
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
                                    <span class="text-break">fadilherminwicaksono@gmail.com</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>+62 857-1349-6955</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker-alt"></i>
                                    <span>Bekasi, 10 November 2007</span>
                                </li>
                                <li>
                                    <i class="fab fa-instagram"></i>
                                    <span>@faadhwill</span>
                                </li>
                                <li>
                                    <i class="fab fa-tiktok"></i>
                                    <span>@kemalpppp</span>
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
                                <span class="skill-badge">Alat musik</span>
                                <span class="skill-badge">office</span>
                                <span class="skill-badge">Canva</span>
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
                            Saya adalah seorang pelajar yang memiliki semangat belajar dan rasa ingin tahu yang tinggi. Saya tertarik pada berbagai bidang pengetahuan dan selalu berusaha mengembangkan kemampuan diri, baik di bidang akademik maupun nonakademik. Saya percaya bahwa disiplin, kerja keras, dan konsistensi adalah kunci untuk meraih masa depan yang lebih baik.
Selain belajar, saya juga senang mengisi waktu luang dengan kegiatan yang bermanfaat, seperti mengerjakan tugas, berdiskusi, dan mengembangkan minat pribadi. Saya bercita-cita menjadi pribadi yang berguna bagi diri sendiri, keluarga, dan masyarakat
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
                            <h5 class="fw-bold">SDN Kaliabang Tengah 8</h5>
                            <p class="text-primary mb-1">6 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai rata-rata 90,6.</p>
                        </div>

                        <!-- Item 2: SMP -->
                        <div class="timeline-item">
                            <span class="timeline-date">2020 - 2023</span>
                            <h5 class="fw-bold">SMPN 37 KOTA BEKASI </h5>
                            <p class="text-primary mb-1">3 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai rata-rata 91. Aktif di ekstrakurikuler PASKIB.</p>
                        </div>

                        <!-- Item 3: SMA -->
                        <div class="timeline-item">
                            <span class="timeline-date">2023 - 2026</span>
                            <h5 class="fw-bold">SMAN 4 Bekasi</h5>
                            <p class="text-primary mb-1">3 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai BAIK. Aktif di ekstrakurikuler SANGGAR KETUPAT.</p>
                        </div>

                        <!-- Item 4: Kuliah -->
                        <div class="timeline-item">
                            <span class="timeline-date">2026 - 2030</span>
                            <h5 class="fw-bold">Universitas NEGERI SEMARANG</h5>
                            <p class="text-primary mb-1">3,5 Tahun</p>
                            <p class="text-muted small">Lulus dengan nilai rata-rata IPK 4,00.CUMLAUDE</p>
                        </div>

                    </div>
                </div>

                <!-- Pengalaman -->
                <div class="cv-card card wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card-body p-4">
                        <h3 class="cv-section-title">Pengalaman Organisasi & Proyek</h3>

                        <div class="timeline-item">
                            <span class="timeline-date">2024 - 2025</span>
                            <h5 class="fw-bold">Ketua pelaksana birthday party Sanggar ketupat</h5>
                            <p class="text-primary mb-1"></p>
                            <p class="text-muted small">Meng kordinator agar acara yang dijalankan berjalan dengan lancar.</p>
                        </div>

                        <div class="timeline-item">
                            <span class="timeline-date">2026 - 2029</span>
                            <h5 class="fw-bold">VOKALIS ASTAMEVA</h5>
                            <p class="text-primary mb-1"></p>
                            <p class="text-muted small">MeMERIAHKAN ACARA SUPAYA MERIAH.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CV Content End -->
    <?php require __DIR__ . '/includes/footer.php'; ?>
