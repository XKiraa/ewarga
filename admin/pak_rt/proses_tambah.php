<?php

include("../koneksi/config.php");

    // ambil data dari formulir
    $id_pakrt       = $_POST['id_pakrt'];
    $nama           = $_POST['nama'];
    $username       = $_POST['username'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $no_telp        = $_POST['no_telp'];
    $kode_alamat    = $_POST['kode_alamat'];
    $pwd            = $_POST['pwd'];;;
    
    

    $query = "INSERT INTO d_pakrt (id_pakrt, username, nama, jenis_kelamin, no_telp, kode_alamat, pwd) 
    VALUES ('$id_pakrt', '$username', '$nama', '$jenis_kelamin', '$no_telp', '$kode_alamat', '$pwd')";
    $result = mysqli_query($db, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($db) .
        " - " . mysqli_error($db));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil ditambah.');window.location='data_rt.php';</script>";
    }
    
    
    