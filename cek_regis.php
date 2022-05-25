<?php

include("koneksi/config.php");

    // ambil data dari formulir
    $id_penduduk    = $_POST['id_penduduk'];
    $nama           = $_POST['nama'];
    $kode_alamat    = $_POST['kode_alamat'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $no_telp        = $_POST['no_telp'];
    $umur           = $_POST['umur'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $nik            = $_POST['nik'];
    $email          = $_POST['email'];
    $pwd            = $_POST['pwd'];

    // buat query
    $query = "INSERT INTO d_penduduk (id_penduduk, nama, kode_alamat, tanggal_lahir, no_telp, umur, jenis_kelamin, nik, email, pwd) 
    VALUE ('$id_penduduk', '$nama', '$kode_alamat', '$tanggal_lahir', '$no_telp', '$umur','$jenis_kelamin', '$nik', '$email', '$pwd')";
    $result = mysqli_query($db, $query);

    // apakah query simpan berhasil?
    if( !$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($db).
                           " - ".mysqli_error($db));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='login.php';</script>";
    }