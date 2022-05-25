<?php

include("koneksi/config.php");

if( isset($_GET['id_berkas']) ){

    // ambil id dari query string
    $id_berkas = $_GET['id_berkas'];

    // buat query hapus
    $sql = "DELETE FROM berkas WHERE id_berkas='$id_berkas'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: warga.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>