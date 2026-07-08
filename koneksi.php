<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_12_10";

mysqli_report(MYSQLI_REPORT_OFF);
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    error_log("Koneksi database gagal: " . mysqli_connect_error());
    $koneksi = null;
} else {
    mysqli_set_charset($koneksi, "utf8mb4");
}
?>
