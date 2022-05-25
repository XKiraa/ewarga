<?php

include("../koneksi/config.php");

    // ambil data dari formulir
    $id_kontak    = $_POST['id_kontak'];
    $judul   = $_POST['judul'];
    $deskripsi   = $_POST['deskripsi'];
    $no_telp   = $_POST['no_telp'];
    $email   = $_POST['email'];
    
    $query = "INSERT INTO kontak (id_kontak, judul, deskripsi, email, no_telp) 
    VALUES ('$id_kontak', '$judul', '$deskripsi', '$email', '$no_telp')";
    $result = mysqli_query($db, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($db) .
        " - " . mysqli_error($db));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil ditambah.');window.location='kontak.php';</script>";
    }
    