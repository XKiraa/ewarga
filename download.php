<?php 
    if (isset($_GET['datas'])) {
    $datas    = $_GET['datas'];

    //header("Cache-Control: public");
  //header("Content-Description: File Transfer");
 header("Content-Disposition: attachment; filename=".basename($datas));
 header("Content-Type: application/octet-stream;");
  //header("Content-Transfer-Encoding: binary");
 readfile("admin/pak_rt/gambar".$datas);
    }
?>