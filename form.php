<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>bismillah ptn</title>
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
            <center>
<form action="proses.php" method="POST">
<table>
<tr>
<td>Nama Lengkap</td>
<td>:</td>
<td><input type="text" name="nama_lengkap"></td>
</tr>
<tr>
<td>NISN</td>
<td>:</td>
<td><input type="text" name="nisn"></td>
</tr>
<tr>
<td>Asal Sekolah</td>
<td>:</td>
<td><input type="text" name="asal_sekolah"></td>
</tr>
<tr>
<td>Tempat Lahir</td>
<td>:</td>
<td><input type="text" name="tempat_lahir"></td>
</tr>
<tr>
<td>Tanggal lahir</td>
<td>:</td>
<td><input type="date" name="tanggal_lahir"></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><input cols="22" rows="3" name="alamat"></td>
</tr>
<tr>
<td>Kota</td>
<td>:</td>
<td><select name="kota">
<option value="Bekasi">Bekasi</option>
<option value="Jakarta">Jakarta</option>
<option value="Bogor">Bogor</option>
<option value="Depok">Depok</option>
</select></td>
</tr>
<tr>
<td>Jenis Kelamin</td>  
<td>:</td>
<td><select name="jk">
<option value="Bekasi">L</option>
<option value="Jakarta">P</option>
</select></td>
</tr> 
<tr>
<td>Email</td>
<td>:</td>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td>No.HP</td>
<td>:</td>
<td><input type="text" name="no_hp"></td>
</tr>
<tr>
<td>Nilai S1</td>
<td>:</td>
<td><input type="text" name="nilai_s1"></td>
</tr>
<tr>
<td>Nilai S2</td>
<td>:</td>
<td><input type="text" name="nilai_s2"></td>
</tr>
<tr>
<td>Nilai S3</td>
<td>:</td>
<td><input type="text" name="nilai_s3"></td>
</tr>
<tr>
<td>Nilai S4</td>
<td>:</td>
<td><input type="text" name="nilai_s4"></td>
</tr>
<tr>
<td>Nilai S5</td>
<td>:</td>
<td><input type="text" name="nilai_s5"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Daftar"/>
<input type="reset" name="reset" value="Reset"/>
</td>
</tr>
</table>
</form>
</center>

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
                        <a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@27.1nonlykiddo"><i class="fab fa-tiktok"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/restu-putra-ramadhan-6446b9358/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://github.com/27RamaaaDev"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Menu Cepat</h4>
                    <a class="footer-link" href="index.php">Beranda</a>
                    <a class="footer-link" href="cv.php">CV Portofolio</a>
                    <a class="footer-link" href="tentang.php">Tentang Kami</a>
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
                        &copy; 2026 <a class="border-bottom" href="#">Restu Putra Ramadhan</a>, All Right Reserved.
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