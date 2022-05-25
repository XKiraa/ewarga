<?php

include("koneksi/config.php");

// cek apakah tombol daftar sudah diklik atau blum?


    // ambil data dari formulir
    $id_berkas    = $_POST['id_berkas'];
    $nik          = $_POST['nik'];
    $nama_berkas  = $_POST['nama_berkas'];
    $keterangan   = $_POST['keterangan'];
    $status       = $_POST['status'];

    $query  = "UPDATE berkas SET id_berkas = '$id_berkas', nik = '$nik', nama_berkas = '$nama_berkas' , keterangan = '$keterangan', status = '$status'
    WHERE id_berkas = '$id_berkas'";
    $result = mysqli_query($db, $query);

    if( !$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($db).
                                         " - ".mysqli_error($db));            
    } else {
          echo "<script>alert('Data berhasil diubah.');window.location='warga.php';</script>";
    }