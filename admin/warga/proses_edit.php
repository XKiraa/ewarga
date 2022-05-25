<?php

include("../koneksi/config.php");

// cek apakah tombol daftar sudah diklik atau blum?


// ambil data dari formulir
$id_penduduk        = $_POST['id_penduduk'];
$nama  = $_POST['nama'];
$no_telp    = $_POST['no_telp'];
$kode_alamat           = $_POST['kode_alamat'];
$umur        = $_POST['umur'];
$tanggal_lahir       = $_POST['tanggal_lahir'];
$jenis_kelamin     = $_POST['jenis_kelamin'];
$nik    = $_POST['nik'];
$email    = $_POST['email'];
$pwd    = $_POST['pwd'];


// buat query
$query = "UPDATE d_penduduk SET id_penduduk = '$id_penduduk', nama = '$nama', no_telp = '$no_telp', kode_alamat = '$kode_alamat', tanggal_lahir = '$tanggal_lahir', umur = '$umur',jenis_kelamin = '$jenis_kelamin',nik = '$nik',email = '$email',pwd = '$pwd'WHERE id_penduduk = '$id_penduduk'";
$result = mysqli_query($db, $query);

// apakah query simpan berhasil?
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($db) .
        " - " . mysqli_error($db));
} else {
    echo "<script>alert('Data berhasil diubah.');window.location='data_warga.php';</script>";
}
