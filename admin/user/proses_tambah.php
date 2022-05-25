<?php

include("../koneksi/config.php");

    // ambil data dari formulir
    $id_user    = $_POST['id_user'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    
    $foto_user = $_FILES['foto_user']['name'];
    
    if($foto_user != "") {
      $ekstensi_diperbolehkan = array('png','jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
      $x = explode('.', $foto_user); //memisahkan username file dengan ekstensi yang diupload
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['foto_user']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $nama_gambar_baru = $angka_acak.'-'.$foto_user; //menggabungkan angka acak dengan username file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO user (id_user, username, password,  foto_user) VALUES ('$id_user', '$username', '$password',  '$nama_gambar_baru')";
                  $result = mysqli_query($db, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($db).
                           " - ".mysqli_error($db));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='data_user.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_user.php';</script>";
            }
} else {
   $query = "INSERT INTO user (id_user, username, password,  foto_user) VALUES ('$id_user', '$username', '$password',  null)";
                  $result = mysqli_query($db, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($db).
                           " - ".mysqli_error($db));
                  } else {
                    //tampil alert dan akan redirect ke halaman user.php
                    //silahkan ganti user.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='data_user.php';</script>";
                  }
}