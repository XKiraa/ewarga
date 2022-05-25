<?php

include("koneksi/config.php");

// ambil data dari formulir

$nik          = $_POST['nik'];
$nama_berkas  = $_POST['nama_berkas'];
$keterangan   = $_POST['keterangan'];
$status       = $_POST['status'];


$query = "INSERT INTO berkas ( nik, nama_berkas, keterangan, status) VALUES ( '$nik', '$nama_berkas', '$keterangan', '$status')";
$result = mysqli_query($db, $query);
// periska query apakah ada error
if (!$result) {
  die("Query gagal dijalankan: " . mysqli_errno($db) .
    " - " . mysqli_error($db));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Data berhasil ditambah.');window.location='warga.php';</script>";
}
