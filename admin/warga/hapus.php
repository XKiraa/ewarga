<?php

include("../koneksi/config.php");

if( isset($_GET['id_penduduk']) ){

    // ambil id dari query string
    $id_penduduk = $_GET['id_penduduk'];

    // buat query hapus
    $sql = "DELETE FROM d_penduduk WHERE id_penduduk='$id_penduduk'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data_warga.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>