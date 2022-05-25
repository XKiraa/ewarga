<?php 
// mengaktifkan session php
session_start(); 
 
// menghubungkan dengan koneksi
include 'koneksi/config.php';
 
// menangkap data yang dikirim dari form
$nik = $_POST['nik'];
$pwd = $_POST['pwd'];
 
// menyeleksi data user dengan nik dan pwd yang sesuai
$result = mysqli_query($db,"SELECT * FROM d_penduduk where nik='$nik' and pwd='$pwd'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['nik'] = $nik;
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['id_penduduk'] = $data['id_penduduk'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['id_login'] = $data['id'];
	header("location:warga.php");
} else {
	header("location:login.php?pesan=gagal login login data tidak ditemukan.");
}
?>

