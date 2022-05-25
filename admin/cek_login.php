<?php 
session_start();

include 'koneksi/config.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($db,"SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($login);


if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['status'] = "login";
	header("location:halaman_admin.php");
}else{
	header("location:index.php?pesan=username atau sandi salah");
}
?>