<?php 
include ("koneksi/config.php");
if (isset($_GET['id_berkas'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_berkas = ($_GET["id_berkas"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM berkas WHERE id_berkas='$id_berkas'";
    $result = mysqli_query($db, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($db).
         " - ".mysqli_error($db));
    }
    // mengambil data dari database
    $pnd = mysqli_fetch_assoc($result); 
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($pnd)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='warga.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='warga.php';</script>";
  }         
  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="form/fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="form/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="form/css/style.css">
    <link rel="stylesheet" href="form/css/styles.css">

    <title>EWARGA - EDIT</title>
  </head>
      <div class="header_section">
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <div class="logo"><a href="index.php"><img src="images/logo22.png" width="200" height="130"></a></div>
        </div>
      </div>
  <body style="background-image: url(form/images/banner-bg.png);">

  <h3 class="mb-4 text-center head">FORM EDIT </h3>
  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <p style="margin-top: 0px !important;"><img src="form/images/check.png" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
              <form class="mb-5" action="proses_edit.php" method="POST"  enctype="multipart/form-data">
              
              <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="hidden" class="form-control" name="id_berkas" value="<?php echo $pnd['id_berkas']; ?>" >
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="nik"  value="<?php echo $pnd['nik']; ?>" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="nama_berkas"  value="<?php echo $pnd['nama_berkas']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="keterangan"  value="<?php echo $pnd['keterangan']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                  <?php $pnd ['status']; ?>
                    <select name="status" class="form-control">
                      <?php  echo"<option value=\"$pnd[status]\"> $pnd[status] </option>";?>
                      
                     <option value="Selesai">Selesai</option>
                     <option value="Baru">Baru</option>

 
                    </select>
                  </div>
                </div>
                <div class="row" hidden>
                  <div class="col-md-12 form-group">
                  <img src="gambar/<?php echo $pnd['datas']; ?>" style="width: 100px;float: right;margin-bottom: 5px;">
                    <label class="file">
                      <input type="file" name="datas" aria-label="Masukkan file baru">
                      <span class="file-custom"></span>
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <input type="submit" id="simpan" name="simpan" value="Submit" class="btn btn-primary rounded-0 py-2 px-4" style="width: 48%; margin-right: 10px;">
                    
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--footer section start -->
	
		
		    <div class="copyright_section">
		    	<p class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design"> Biru Software</p>
		    </div>
		
	<!--footer section end -->

    <script src="form/js/jquery-3.3.1.min.js"></script>
    <script src="form/js/popper.min.js"></script>
    <script src="form/js/bootstrap.min.js"></script>
    <script src="form/js/jquery.validate.min.js"></script>
    <script src="form/js/main.js"></script>

  </body>
</html>