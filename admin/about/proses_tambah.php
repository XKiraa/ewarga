<?php

include("../koneksi/config.php");

// ambil data dari formulir
$id_about    = $_POST['id_about'];
$judul   = $_POST['judul'];
$deskripsi   = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];

if ($gambar != "") {
  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar); //memisahkan judul file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];
  $angka_acak     = rand(1, 999);
  $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan judul file sebenarnya
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
    $query = "INSERT INTO about (id_about, judul, deskripsi,  gambar) VALUES ('$id_about', '$judul', '$deskripsi',  '$nama_gambar_baru')";
    $result = mysqli_query($db, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($db) .
        " - " . mysqli_error($db));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil ditambah.');window.location='about.php';</script>";
    }
  } else {
    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='about.php';</script>";
  }
} else {
  $query = "INSERT INTO about (id_about, judul, deskripsi,  gambar) VALUES ('$id_about', '$judul', '$deskripsi',  null)";
  $result = mysqli_query($db, $query);
  // periska query apakah ada error
  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($db) .
      " - " . mysqli_error($db));
  } else {
    //tampil alert dan akan redirect ke halaman about.php
    //silahkan ganti about.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil ditambah.');window.location='about.php';</script>";
  }
}
