<?php

include("../koneksi/config.php");

if( isset($_GET['id_konten']) ){

    // ambil id dari query string
    $id_konten = $_GET['id_konten'];

    // buat query hapus
    $sql = "DELETE FROM konten WHERE id_konten='$id_konten'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: konten.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>