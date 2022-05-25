<?php
include("koneksi/config.php");
session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<title>EWARGA - REGISTRATION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="login/css/style.css">

</head>
<div class="header_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
			</div>
		</div>

		<body class="img" style="background-image: url(images/banner-bg.png);">
			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 col-lg-4">
							<div class="login-wrap p-0">
								<h3 class="mb-4 text-center">REGISTER WARGA</h3>
								<form action="cek_regis.php" method="POST" class="signin-form">

									<?php
									// fungsi untuk membuat id transaksi
									$query = mysqli_query($db, "SELECT RIGHT(id_penduduk,6) as code FROM d_penduduk
                                                ORDER BY id_penduduk DESC LIMIT 1")
										or die('Ada kesalahan pada query tampil id_penduduk : ' . mysqli_error($db));

									$count = mysqli_num_rows($query);

									if ($count <> 0) {
										// mengambil data code_karyawan
										$data_id = mysqli_fetch_assoc($query);
										$code    = $data_id['code'] + 1;
									} else {
										$code = 1;
									}

									// buat kode_karyawan
									$buat_note   = str_pad($code, 6, "0", STR_PAD_LEFT);
									$id_penduduk = "PND-$buat_note";
									?>
									<div class="form-group">
										<input type="text" class="form-control" name="id_penduduk" value="<?php echo $id_penduduk; ?>" readonly>
									</div>
									
									<div class="form-group">
										<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
									</div>
									<div class="form-group">
										<input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="16" class="form-control" id="nik" name="nik" placeholder="NIK" required>
									</div>

									<div class="form-group">
										<select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
											<option value="laki-laki" style="color:black;" selected disabled hidden>Jenis Kelamin</option>
											<option value="laki-laki" style="color:black;">Laki-Laki</option>
											<option value="perempuan" style="color:black;">Perempuan</option>
										</select>
									</div>
									<div class="form-group">
										<select id="kode_alamat" class="form-control" name="kode_alamat" required>
											<option value="Alamat Dusun" style="color:black;" selected disabled hidden>Alamat Dusun</option>
											<option value="Wringin Anom" style="color:black;">Wringin Anom</option>
											<option value="Kepuh Utara" style="color:black;">Kepuh Utara</option>
											<option value="Kepuh Selatan" style="color:black;">Kepuh Selatan</option>
											<option value="Karangploso Wetan" style="color:black;">Karangploso Wetan</option>
											<option value="Turi" style="color:black;">Turi</option>
											<option value="Tlasih" style="color:black;">Tlasih</option>
										</select>
									</div>
									<div class="form-group">
										<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
									</div>
									<div class="form-group">
										<input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="15" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="umur" name="umur" placeholder="Umur" required>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
									</div>

									<div class="form-group">
										<input id="password-field" type="password" name="pwd" id="pwd" class="form-control" required>
										<span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password" style="color: white;"></span>
									</div>
									<div class="form-group">
										<button type="submit" name="regis" class="form-control btn btn-primary submit px-3">REGISTER</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

			<script src="login/js/jquery.min.js"></script>
			<script src="login/js/popper.js"></script>
			<script src="login/js/bootstrap.min.js"></script>
			<script src="login/js/main.js"></script>
			<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		</body>

</html>