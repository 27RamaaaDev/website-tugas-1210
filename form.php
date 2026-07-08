<?php
session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$flash = $_SESSION['form_flash'] ?? null;
unset($_SESSION['form_flash']);

function e($value)
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
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
                            <?php if ($flash): ?>
                                <div class="alert alert-<?= e($flash['type']) ?> mb-4" role="alert">
                                    <?= e($flash['message']) ?>
                                </div>
                            <?php endif; ?>

                            <form action="proses.php" method="POST">
                                <input type="hidden" name="csrf_token" value="<?= e($_SESSION['csrf_token']) ?>">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <h5 class="text-primary border-bottom pb-2">Informasi Pribadi</h5>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" maxlength="50" required>
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" inputmode="numeric" pattern="[0-9]{10}" maxlength="10" required>
                                            <label for="nisn">NISN</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" maxlength="50" required>
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
                                            <select class="form-select" id="jk" name="jk" required>
                                                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                            <label for="jk">Jenis Kelamin</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="no_hp" name="no_hp" placeholder="No. HP" inputmode="tel" maxlength="20">
                                            <label for="no_hp">No. HP / WhatsApp</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <h5 class="text-primary border-bottom pb-2">Alamat & Asal Sekolah</h5>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" maxlength="50">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah" maxlength="50" required>
                                            <label for="asal_sekolah">Asal Sekolah</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="kota" name="kota" required>
                                                <option value="" selected disabled>Pilih Kota</option>
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
                                            <textarea class="form-control" placeholder="Alamat Lengkap" id="alamat" name="alamat" maxlength="50" style="height: 100px" required></textarea>
                                            <label for="alamat">Alamat Lengkap</label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <h5 class="text-primary border-bottom pb-2">Data Nilai Rapor</h5>
                                        <p class="text-muted small">Masukkan nilai rata-rata per semester.</p>
                                    </div>

                                    <div class="col-md-2 col-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="nilai_s1" name="nilai_s1" placeholder="Smt 1" min="0" max="100" step="1" required>
                                            <label for="nilai_s1">Smt 1</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="nilai_s2" name="nilai_s2" placeholder="Smt 2" min="0" max="100" step="1" required>
                                            <label for="nilai_s2">Smt 2</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="nilai_s3" name="nilai_s3" placeholder="Smt 3" min="0" max="100" step="1" required>
                                            <label for="nilai_s3">Smt 3</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="nilai_s4" name="nilai_s4" placeholder="Smt 4" min="0" max="100" step="1" required>
                                            <label for="nilai_s4">Smt 4</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="nilai_s5" name="nilai_s5" placeholder="Smt 5" min="0" max="100" step="1" required>
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
    <?php require __DIR__ . '/includes/footer.php'; ?>
