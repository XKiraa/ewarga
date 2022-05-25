<?php
include("koneksi/config.php")
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

  <title>EWARGA - UPLOAD</title>
</head>
<div class="header_section">
  <div class="container">
    <div class="row">
      <div class="col-sm-2">
        <div class="logo"><a href="index.php"><img src="form/images/111.png"></a></div>
      </div>
    </div>

    <body style="background-image: url(form/images/banner-bg.png);">

      <h3 class="mb-4 text-center head">FORM UPLOAD </h3>
      <div class="content">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">


              <div class="row justify-content-center">
                <div class="col-md-6">

                  <p style="margin-top: 0px !important;"><img src="form/images/check.png" alt="Image" class="img-fluid"></p>


                </div>
                <div class="col-md-6">

                  <form class="mb-5" action="proses_tambah.php" method="POST" enctype="multipart/form-data">


                    <?php
                    // fungsi untuk membuat id transaksi
                    $query = mysqli_query($db, "SELECT * FROM d_penduduk");

                    ?>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="nama_berkas" id="nama_berkas" placeholder="Nama Berkas">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="status" id="status" value="Baru" hidden>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <input type="submit" value="Upload" name="upload" class="btn btn-primary rounded-0 py-2 px-4" style="width: 48%; margin-right: 10px;">

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