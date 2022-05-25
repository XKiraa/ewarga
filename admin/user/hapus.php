<?php

include("../koneksi/config.php");

if( isset($_GET['id_user']) ){

    // ambil id dari query string
    $id_user = $_GET['id_user'];

    // buat query hapus
    $sql = "DELETE FROM user WHERE id_user='$id_user'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data_user.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>