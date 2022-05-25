<?php

include("../koneksi/config.php");

    // ambil data dari formulir
    $id_konten    = $_POST['id_konten'];
    $judul   = $_POST['judul'];
    $deskripsi   = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    
    
   if($gambar != "") {
    $ekstensi_diperbolehkan = array('png','jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                    $query  = "UPDATE konten SET id_konten = '$id_konten', judul = '$judul', deskripsi = '$deskripsi',  gambar = '$nama_gambar_baru'";
                    $query .= "WHERE id_konten = '$id_konten'";
                    $result = mysqli_query($db, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($db).
                             " - ".mysqli_error($db));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='konten.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='konten.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE konten SET id_konten = '$id_konten', judul = '$judul', deskripsi = '$deskripsi'";
      $query .= "WHERE id_konten = '$id_konten'";
      $result = mysqli_query($db, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($db).
                             " - ".mysqli_error($db));
      } else {
        //tampil alert dan akan redirect ke halaman testi.php
        //silahkan ganti testi.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='konten.php';</script>";
      }
    }