<?php
include 'koneksi.php';
	$username		= $_POST['username'];
	$nama			= $_POST['nama_lengkap'];
	$tanggal_antri 	= $_POST['tanggal_antri'];
	$hari			= date('l');
$query = "INSERT INTO dokter_umum SET username='$username', nama_lengkap='$nama', tanggal_antri='$tanggal_antri' hari=$hari";
    mysqli_query($koneksi, $query);
if (mysqli_error($koneksi)) {
	echo "<script>alert('Registrasi gagal!');</script>";
} else {
	echo "<script>alert('Registrasi berhasil!');location.replace('umum.php');</script>";
}
?>