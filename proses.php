<?php
session_start();
include 'koneksi.php';

function set_flash($type, $message)
{
    $_SESSION['form_flash'] = [
        'type' => $type,
        'message' => $message,
    ];
}

function redirect_form()
{
    header('Location: form.php');
    exit;
}

function post_value($key, $maxLength = 100)
{
    $value = trim((string)($_POST[$key] ?? ''));
    return substr($value, 0, $maxLength);
}

function valid_score($key)
{
    $value = $_POST[$key] ?? '';

    if ($value === '' || !is_numeric($value)) {
        return null;
    }

    $number = (int)$value;
    return ($number >= 0 && $number <= 100) ? $number : null;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['submit'])) {
    redirect_form();
}

$csrfToken = $_POST['csrf_token'] ?? '';
if (empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrfToken)) {
    set_flash('danger', 'Sesi formulir tidak valid. Silakan kirim ulang.');
    redirect_form();
}

if (!$koneksi) {
    set_flash('danger', 'Database belum tersedia. Silakan coba lagi nanti.');
    redirect_form();
}

$namaLengkap = post_value('nama_lengkap', 50);
$nisn = post_value('nisn', 10);
$asalSekolah = post_value('asal_sekolah', 50);
$tempatLahir = post_value('tempat_lahir', 50);
$tanggalLahir = post_value('tanggal_lahir', 10);
$jk = post_value('jk', 1);
$alamat = post_value('alamat', 50);
$kota = post_value('kota', 50);
$email = post_value('email', 50);
$noHp = post_value('no_hp', 20);
$nilaiS1 = valid_score('nilai_s1');
$nilaiS2 = valid_score('nilai_s2');
$nilaiS3 = valid_score('nilai_s3');
$nilaiS4 = valid_score('nilai_s4');
$nilaiS5 = valid_score('nilai_s5');

if ($namaLengkap === '' || $nisn === '' || $asalSekolah === '' || $tempatLahir === '' || $alamat === '' || $kota === '') {
    set_flash('danger', 'Lengkapi semua data wajib.');
    redirect_form();
}

if (!preg_match('/^\d{10}$/', $nisn)) {
    set_flash('danger', 'NISN harus berisi 10 angka.');
    redirect_form();
}

if ($tanggalLahir !== '' && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $tanggalLahir)) {
    set_flash('danger', 'Format tanggal lahir tidak valid.');
    redirect_form();
}

if (!in_array($jk, ['L', 'P'], true)) {
    set_flash('danger', 'Pilih jenis kelamin yang valid.');
    redirect_form();
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    set_flash('danger', 'Format email tidak valid.');
    redirect_form();
}

if ($noHp !== '' && !preg_match('/^[0-9+\-\s]{8,20}$/', $noHp)) {
    set_flash('danger', 'Format nomor HP tidak valid.');
    redirect_form();
}

if (in_array(null, [$nilaiS1, $nilaiS2, $nilaiS3, $nilaiS4, $nilaiS5], true)) {
    set_flash('danger', 'Nilai rapor harus angka 0 sampai 100.');
    redirect_form();
}

$tanggalLahir = $tanggalLahir !== '' ? $tanggalLahir : null;

$sql = "INSERT INTO tb_mahasiswa
    (nama_lengkap, nisn, asal_sekolah, tempat_lahir, tanggal_lahir, jk, alamat, kota, email, no_hp, nilai_s1, nilai_s2, nilai_s3, nilai_s4, nilai_s5)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($koneksi, $sql);

if (!$stmt) {
    error_log('Gagal menyiapkan query pendaftaran: ' . mysqli_error($koneksi));
    set_flash('danger', 'Data belum bisa disimpan. Silakan coba lagi.');
    redirect_form();
}

mysqli_stmt_bind_param(
    $stmt,
    'ssssssssssiiiii',
    $namaLengkap,
    $nisn,
    $asalSekolah,
    $tempatLahir,
    $tanggalLahir,
    $jk,
    $alamat,
    $kota,
    $email,
    $noHp,
    $nilaiS1,
    $nilaiS2,
    $nilaiS3,
    $nilaiS4,
    $nilaiS5
);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    set_flash('success', 'Pendaftaran berhasil disimpan.');
} else {
    error_log('Gagal menyimpan pendaftaran: ' . mysqli_stmt_error($stmt));
    set_flash('danger', 'NISN sudah terdaftar atau data tidak bisa disimpan.');
}

mysqli_stmt_close($stmt);
if ($koneksi) {
    mysqli_close($koneksi);
}
redirect_form();
?>
