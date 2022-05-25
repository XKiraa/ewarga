<?php

include("../koneksi/config.php");

// cek apakah tombol daftar sudah diklik atau blum?


    // ambil data dari formulir
    $id_user    = $_POST['id_user'];
    $username   = $_POST['username'];
    $password   = md5($_POST['password']);
    
    $foto_user = $_FILES['foto_user']['name'];
    
    
   if($foto_user != "") {
    $ekstensi_diperbolehkan = array('png','jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto_user); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto_user']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$foto_user; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                    $query  = "UPDATE user SET id_user = '$id_user', username = '$username', password = '$password',  foto_user = '$nama_gambar_baru'";
                    $query .= "WHERE id_user = '$id_user'";
                    $result = mysqli_query($db, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($db).
                             " - ".mysqli_error($db));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='data_user.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='data_user.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE user SET id_user = '$id_user', username = '$username', password = '$password'";
      $query .= "WHERE id_user = '$id_user'";
      $result = mysqli_query($db, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($db).
                             " - ".mysqli_error($db));
      } else {
        //tampil alert dan akan redirect ke halaman testi.php
        //silahkan ganti testi.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='data_user.php';</script>";
      }
    }