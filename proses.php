<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $data1 = $_POST['nama_lengkap'];
    $data2 = $_POST['nisn'];
	$data3 = $_POST['asal_sekolah'];
	$data4 = $_POST['tempat_lahir'];
	$data5 = $_POST['tanggal_lahir'];
	$data6 = $_POST['jk'];
	$data7 = $_POST['alamat'];
	$data8 = $_POST['kota'];
	$data9 = $_POST['email'];
	$data10 = $_POST['no_hp'];
	$data11 = $_POST['nilai_s1'];
	$data12 = $_POST['nilai_s2'];
	$data13 = $_POST['nilai_s3'];
	$data14 = $_POST['nilai_s4'];
	$data15 = $_POST['nilai_s5'];

	
    // Hash password untuk keamanan
   

    $sql = "INSERT INTO tb_mahasiswa 
	(nama_lengkap,nisn,asal_sekolah,tempat_lahir,tanggal_lahir,jk,alamat,kota,email,no_hp,nilai_s1,nilai_s2,nilai_s3,nilai_s4,nilai_s5) 
	VALUES ('$data1', '$data2','$data3','$data4','$data5','$data6','$data7',
	'$data8',
	'$data9',
	'$data10',
	'$data11',
	'$data12',
	'$data13',
	'$data14',
	'$data15')";

if (mysqli_query($koneksi, $sql)) {
    // 4. Alert Berhasil dan Kembali ke Halaman Pendaftaran
    echo "<script>
            alert('Pendaftaran berhasil!');
            window.location.href = 'form.php';
          </script>";
} else {
    // Alert jika Gagal
    echo "<script>
            alert('Pendaftaran gagal: " . mysqli_error($koneksi) . "');
            window.history.back();
          </script>";
}

// 5. Tutup koneksi
mysqli_close($koneksi);

}
?>