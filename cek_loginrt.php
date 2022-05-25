<?php 
// mengaktifkan session php
session_start(); 
 
// menghubungkan dengan koneksi
include 'koneksi/config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$pwd = $_POST['pwd'];
 
// menyeleksi data user dengan id_pakrt dan pwd yang sesuai
$result = mysqli_query($db,"SELECT * FROM d_pakrt where username='$username' and pwd='$pwd'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['id_pakrt'] = $id_pakrt;
	$_SESSION['username'] = $data['username'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['id_login'] = $data['id'];
	header("location:admin/halaman_rt.php");
} else {
	header("location:login_rt.php?pesan=username atau kata sandi salah login data tidak ditemukan.");
}
?>

