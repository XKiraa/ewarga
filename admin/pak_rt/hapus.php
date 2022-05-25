<?php

include("../koneksi/config.php");

if( isset($_GET['id_pakrt']) ){

    // ambil id dari query string
    $id_pakrt = $_GET['id_pakrt'];

    // buat query hapus
    $sql = "DELETE FROM d_pakrt WHERE id_pakrt='$id_pakrt'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data_rt.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>