<?php 
include("koneksi/config.php"); 
session_start();  
$nik=$_SESSION['nik'];

  //cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['nik']==""){
    header("location:login.php?pesan=gagal");
    exit;
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="detail/fonts/icomoon/style.css">

    <link rel="stylesheet" href="detail/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="detail/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="detail/css/style.css">

    <title>EWARGA - DETAIL PEMBERKASAN</title>
  </head>
  <div class="header_section">
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <div class="logo" style="margin-top: 10px;"><a href="index.php"><img src="form/images/111.png"></a></div>
        </div>
        <div class="col-sm-10" style="margin-top: 15px;">
					<ul class="top_button_section">
             <li class="fa fa-user-o" style="margin-top: 2px; font-size: 36px; color: rgba(255, 255, 255);"></li>
					   <li><a class="login-bt active" href="logout.php">Logout</a></li>
					</ul>
          
				</div>
      </div>
      
  <body style="background-image: url(detail/images/banner-bg.png);">
  
  <?php 
$dataadmin=mysqli_query($db, "SELECT * FROM d_penduduk where nik ='$nik'");
$dtadmin=mysqli_fetch_assoc($dataadmin);


     ?>
  <div class="content">
    
    <div class="container">
     
      <h2 class="mb-5" ><b>Selamat Datang Bapak/Ibu <?php echo $dtadmin['nama']; ?></b></h2>

      <div class="row">
        <div class="col-sm-2">
          <a class="login-bt active" href="form_tambah.php" style="height: auto; padding: 5px 0 5px 0; width: 100px;">Tambah</a>
        </div>
      </div>

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  

              
              
              <th scope="col">No</th>
              <th scope="col">Nama Berkas</th>
              <th scope="col">NIK</th>
              <th scope="col">Keperluan</th>
              <th scope="col">Status</th>
              <th scope="col">File</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr scope="row">
              
              <?php
                  $sql = "SELECT * FROM berkas where nik='$nik'" ;
                  $query = mysqli_query($db, $sql);

                  $no =1;

                  while ($warga = mysqli_fetch_array($query)){
                
                  ?>
                  <tr>
                    <td class="center"><?php echo $no; ?></td>
                    <td class="center"><?php echo $warga['nama_berkas']; ?></td>
                    <td class="center"><?php echo $warga['nik']; ?></td>
                    <td class="center"><?php echo $warga['keterangan']; ?></td>
                    
                    <?php 
                        $ceksta= $warga['status']; 

                        if($ceksta=='Baru'){
                          echo  " <td class='center'><span class='badge badge-secondary'>Baru</span></td>";
                        }else if($ceksta=='Selesai'){
                          echo  " <td class='center'><span class='badge badge-success'>Selesai</span>
                        </td>";

                        }
                     ?>
                    <td class="center"><?php echo $warga['datas']; ?></td>
                    <td>
                      <a class="btn btn-primary" href="edit_warga.php?id_berkas=<?php echo $warga['id_berkas']; ?>">Edit</a>
                      <a class="btn btn-success" href="download.php?datas=<?php echo $warga['datas']?>">Unduh</a>
                      <a class="btn btn-danger" href="hapus_halamanwarga.php?id_berkas=<?php echo $warga['id_berkas']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini? <?php echo $armada['nama_perusahaan']; ?> ?');">Hapus</a>
                    </td>
            
                    
                   
                </tr>
                <?php
                  $no++;
                }
                ?>
            </tr>
            
            
           
              
      
            
          </tbody>
        </table>
      </div>


    </div>

  </div>
  <!--footer section start -->
  <div class="copyright_section">
    <p class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design"> Biru Software</p>
  </div>
	<!--footer section end -->
    
    

    <script src="detail/js/jquery-3.3.1.min.js"></script>
    <script src="detail/js/popper.min.js"></script>
    <script src="detail/js/bootstrap.min.js"></script>
    <script src="detail/js/main.js"></script>
  </body>
</html>