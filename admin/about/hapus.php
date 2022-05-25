<?php

include("../koneksi/config.php");

if( isset($_GET['id_about']) ){

    // ambil id dari query string
    $id_about = $_GET['id_about'];

    // buat query hapus
    $sql = "DELETE FROM about WHERE id_about='$id_about'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: about.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>