<?php

include("../koneksi/config.php");

// cek apakah tombol daftar sudah diklik atau blum?


    // ambil data dari formulir
    
    $nik          = $_POST['nik'];
    $id_berkas    = $_POST['id_berkas'];
    $nama_berkas  = $_POST['nama_berkas'];
    $keterangan   = $_POST['keterangan'];
    $status       = $_POST['status'];
    $datas        = $_FILES['datas']['name'];
    
    
   if($datas != "") {
    $ekstensi_diperbolehkan = array('pdf'); //ekstensi datas gambar yang bisa diupload 
    $x = explode('.', $datas); //memisahkan nama datas dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['datas']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$datas; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                    $query  = "UPDATE berkas SET id_berkas = '$id_berkas', nik = '$nik', nama_berkas = '$nama_berkas' , keterangan = '$keterangan', status = '$status' , datas = '$nama_gambar_baru'";
                    $query .= "WHERE id_berkas = '$id_berkas'";
                    $result = mysqli_query($db, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($db).
                             " - ".mysqli_error($db));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='../halaman_rt.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya pdf.');window.location='../halaman_rt.php';</script>";
              }
    } 
    else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE berkas SET  id_berkas = '$id_berkas', nik = '$nik', nama_berkas = '$nama_berkas' , keterangan = '$keterangan', status = '$status'WHERE id_berkas = '$id_berkas'";
      
      $result = mysqli_query($db, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($db).
                             " - ".mysqli_error($db));
      } 
    else {
        //tampil alert dan akan redirect ke halaman berkas.php
        //silahkan ganti berkas.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='../halaman_rt.php';</script>";
      }
    }