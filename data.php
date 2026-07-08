<?php
include 'koneksi.php'; // Menyertakan file koneksi [3]

function e($value)
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Data Pendaftar</title>
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
    <!-- Table styles moved to css/style.css -->
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
                <a href="data.php" class="nav-item nav-link active">Data Pendaftar</a>
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
                <h1 class="mb-5">DATA PENDAFTAR</h1>
            </div>

            <!-- Tabel didesain ulang mulai di sini -->
            <div class="table-container wow fadeInUp" data-wow-delay="0.2s">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered table-custom mb-0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>NISN</th>
                                <th>Asal Sekolah</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>JK</th>
                                <th>Alamat</th> <!-- Saya tambahkan kolom ini sesuai data PHP Anda -->
                                <th>Kota</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>S1</th>
                                <th>S2</th>
                                <th>S3</th>
                                <th>S4</th>
                                <th>S5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT no, nama_lengkap, nisn, asal_sekolah, tempat_lahir, tanggal_lahir, jk, alamat, kota, email, no_hp, nilai_s1, nilai_s2, nilai_s3, nilai_s4, nilai_s5 FROM tb_mahasiswa ORDER BY no ASC";
                            $result = $koneksi ? $koneksi->query($sql) : false;

                            if ($result && $result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td class='text-center fw-bold'>" . e($row["no"]) . "</td>";
                                    echo "<td>" . e($row["nama_lengkap"]) . "</td>";
                                    echo "<td>" . e($row["nisn"]) . "</td>";
                                    echo "<td>" . e($row["asal_sekolah"]) . "</td>";
                                    echo "<td>" . e($row["tempat_lahir"]) . "</td>";
                                    echo "<td>" . e($row["tanggal_lahir"]) . "</td>";
                                    echo "<td>" . e($row["jk"]) . "</td>";
                                    echo "<td>" . e($row["alamat"]) . "</td>";
                                    echo "<td>" . e($row["kota"]) . "</td>";
                                    echo "<td>" . e($row["email"]) . "</td>";
                                    echo "<td>" . e($row["no_hp"]) . "</td>";
                                    echo "<td class='text-center'>" . e($row["nilai_s1"]) . "</td>";
                                    echo "<td class='text-center'>" . e($row["nilai_s2"]) . "</td>";
                                    echo "<td class='text-center'>" . e($row["nilai_s3"]) . "</td>";
                                    echo "<td class='text-center'>" . e($row["nilai_s4"]) . "</td>";
                                    echo "<td class='text-center'>" . e($row["nilai_s5"]) . "</td>";
                                    echo "</tr>";
                                }
                            } elseif ($result) {
                                echo "<tr><td colspan='16' class='text-center py-4'>Belum ada data pendaftar.</td></tr>";
                            } else {
                                $error = $koneksi ? $koneksi->error : 'Koneksi database belum tersedia.';
                                error_log('Gagal mengambil data pendaftar: ' . $error);
                                echo "<tr><td colspan='16' class='text-center py-4 text-danger'>Data belum bisa dimuat. Periksa koneksi database.</td></tr>";
                            }

                            if ($koneksi) {
                                $koneksi->close();
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Tabel Selesai -->

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
