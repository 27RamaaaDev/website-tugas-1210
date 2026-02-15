<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Form Pendaftaran</title>
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
            <div style="overflow: hidden; white-space: nowrap; width: 350px;">
                 <marquee scrollamount="5"><h2 class="m-0 text-primary">INSTITUT TEKNOLOGI BANDUNG</h2></marquee>
            </div>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Menambahkan pe-lg-5 untuk menggeser menu sedikit ke kiri -->
            <div class="navbar-nav ms-auto p-4 p-lg-0 pe-lg-5">
                <a href="index.php" class="nav-item nav-link">Beranda</a>
                <a href="form.php" class="nav-item nav-link active">Form Pendaftaran</a>
                <a href="data.php" class="nav-item nav-link">Data Pendaftar</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">CV</a>
                    <div class="dropdown-menu m-0">
                        <a href="dina.php" class="dropdown-item">Dina</a>
                        <a href="male.php" class="dropdown-item">Male</a>
                        <a href="muti.php" class="dropdown-item">Muti</a>
                        <a href="faadhil.php" class="dropdown-item">Faadhil</a>
                        <a href="denis.php" class="dropdown-item">Denis</a>
                        <a href="rama.php" class="dropdown-item">Rama</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Team Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">FORMULIR PENDAFTARAN</h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0 rounded-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card-body p-5">
                            <form action="proses.php" method="POST">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <h5 class="text-primary border-bottom pb-2">Informasi Pribadi</h5>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required>
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" required>
                                            <label for="nisn">NISN</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="jk" name="jk">
                                                <option selected disabled>Pilih Jenis Kelamin</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                            <label for="jk">Jenis Kelamin</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. HP">
                                            <label for="no_hp">No. HP / WhatsApp</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <h5 class="text-primary border-bottom pb-2">Alamat & Asal Sekolah</h5>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah">
                                            <label for="asal_sekolah">Asal Sekolah</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="kota" name="kota">
                                                <option selected disabled>Pilih Kota</option>
                                                <option value="Bekasi">Bekasi</option>
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="Bogor">Bogor</option>
                                                <option value="Depok">Depok</option>
                                                <option value="Bandung">Bandung</option>
                                            </select>
                                            <label for="kota">Kota Domisili</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Alamat Lengkap" id="alamat" name="alamat" style="height: 100px"></textarea>
                                            <label for="alamat">Alamat Lengkap</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <h5 class="text-primary border-bottom pb-2">Data Nilai Rapor</h5>
                                        <p class="text-muted small">Masukkan nilai rata-rata per semester.</p>
                                    </div>

                                    <div class="col-md-2 col-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="nilai_s1" name="nilai_s1" placeholder="Smt 1">
                                            <label for="nilai_s1">Smt 1</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="nilai_s2" name="nilai_s2" placeholder="Smt 2">
                                            <label for="nilai_s2">Smt 2</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="nilai_s3" name="nilai_s3" placeholder="Smt 3">
                                            <label for="nilai_s3">Smt 3</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="nilai_s4" name="nilai_s4" placeholder="Smt 4">
                                            <label for="nilai_s4">Smt 4</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="nilai_s5" name="nilai_s5" placeholder="Smt 5">
                                            <label for="nilai_s5">Smt 5</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4 text-center">
                                        <button class="btn btn-primary py-3 px-5 w-100 mb-3" type="submit" name="submit">Daftar Sekarang</button>
                                        <button class="btn btn-secondary py-2 px-4" type="reset" name="reset">Reset Formulir</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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