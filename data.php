<?php
include 'koneksi.php'; // Menyertakan file koneksi [3]

function e($value)
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

$pendaftarRows = [];
$dataError = null;

if ($koneksi) {
    $sql = "SELECT no, nama_lengkap, nisn, asal_sekolah, tempat_lahir, tanggal_lahir, jk, alamat, kota, email, no_hp, nilai_s1, nilai_s2, nilai_s3, nilai_s4, nilai_s5 FROM tb_mahasiswa ORDER BY no ASC";
    $result = $koneksi->query($sql);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $pendaftarRows[] = $row;
        }
    } else {
        $dataError = 'Data belum bisa dimuat. Periksa tabel pendaftar.';
        error_log('Gagal mengambil data pendaftar: ' . $koneksi->error);
    }

    $koneksi->close();
} else {
    $dataError = 'Data belum bisa dimuat. Periksa koneksi database.';
    error_log('Gagal mengambil data pendaftar: Koneksi database belum tersedia.');
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
    <?php require __DIR__ . '/includes/navbar.php'; ?>

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="data-page-head wow fadeInUp" data-wow-delay="0.1s">
                <div>
                    <span class="section-kicker">Database pendaftaran</span>
                    <h1>Data Pendaftar</h1>
                    <p>Daftar calon mahasiswa yang sudah masuk ke sistem pendaftaran.</p>
                </div>
                <div class="data-summary-card">
                    <span>Total data</span>
                    <strong><?= count($pendaftarRows) ?></strong>
                </div>
            </div>

            <div class="data-table-panel wow fadeInUp" data-wow-delay="0.2s">
                <div class="data-table-toolbar">
                    <div>
                        <h2>Rekap pendaftar</h2>
                        <p>Geser tabel ke samping di layar kecil untuk melihat semua kolom.</p>
                    </div>
                    <a class="btn btn-primary" href="form.php">Tambah Pendaftar</a>
                </div>
                <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-hover table-custom mb-0">
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
                            <?php if ($dataError): ?>
                                <tr><td colspan="16" class="text-center py-4 text-danger"><?= e($dataError) ?></td></tr>
                            <?php elseif (count($pendaftarRows) === 0): ?>
                                <tr><td colspan="16" class="text-center py-4">Belum ada data pendaftar.</td></tr>
                            <?php else: ?>
                                <?php foreach ($pendaftarRows as $row): ?>
                                    <tr>
                                        <td class="text-center fw-bold"><?= e($row["no"]) ?></td>
                                        <td class="fw-bold text-dark"><?= e($row["nama_lengkap"]) ?></td>
                                        <td><span class="table-chip"><?= e($row["nisn"]) ?></span></td>
                                        <td><?= e($row["asal_sekolah"]) ?></td>
                                        <td><?= e($row["tempat_lahir"]) ?></td>
                                        <td><?= e($row["tanggal_lahir"]) ?></td>
                                        <td class="text-center"><?= e($row["jk"]) ?></td>
                                        <td><?= e($row["alamat"]) ?></td>
                                        <td><?= e($row["kota"]) ?></td>
                                        <td><?= e($row["email"]) ?></td>
                                        <td><?= e($row["no_hp"]) ?></td>
                                        <td class="text-center"><?= e($row["nilai_s1"]) ?></td>
                                        <td class="text-center"><?= e($row["nilai_s2"]) ?></td>
                                        <td class="text-center"><?= e($row["nilai_s3"]) ?></td>
                                        <td class="text-center"><?= e($row["nilai_s4"]) ?></td>
                                        <td class="text-center"><?= e($row["nilai_s5"]) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Team End -->
    <?php require __DIR__ . '/includes/footer.php'; ?>
