<!doctype html>
<html lang="en">
  <head>
  	<title>EWARGA - LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login/css/style.css">

	<link href="admin/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

	</head>
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
				</div>
			</div>
	<body class="img js-fullheight" style="background-image: url(images/banner-bg.png);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Selamat Datang Warga Desa Kepuharjo</h3>
		      	<form action="cek_login.php" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="NIK" name="nik" id="nik" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" id="pwd" name="pwd" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button class="form-control btn-primary btn btn-success btn sweet-success" type="submit" name="login" >Masuk</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Ingat Saya
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Lupa Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Belum memiliki akun? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="registrations.php" class="px-2 py-2 mr-md-1 rounded"></span>Daftar</a>
	          </div>
			  <br>
			  <div class="social d-flex text-center">
	          	<a href="login_rt.php" class="px-2 py-2 mr-md-1 rounded">Halaman Kepala Dusun</a>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
	

	<script src="login/js/jquery.min.js"></script>
 	<script src="login/js/popper.js"></script>
 	<script src="login/js/bootstrap.min.js"></script>
 	<script src="login/js/main.js"></script>

 	<script src="admin/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
 	<script src="admin/js/plugins-init/sweetalert.init.js"></script>
	</body>
</html>

