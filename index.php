<?php
include("koneksi/config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>ewarga</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<!-- owl stylesheets -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body>
	<!--header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="logo"><a href="index.php"><img src="images/logo22.png" width="200" height="130"></a></div>
				</div>
				<div class="col-sm-6">
					<div class="logo2"><a href="index.php"><img src="images/malang2.png" width="130" height="130" align="right"></a></div>

				</div>

			</div>

			<div class="row">
				<div class="banner_section layout_padding">
					<section>
						<div id="home" class="section banner-main">
							<div class="container">
								<div class="row marginii">
									<div class="col-md-5 col-sm-12">
										<div class="carousel-sporrt_text ">
											<?php
											$sql = "SELECT * FROM konten";
											$query = mysqli_query($db, $sql);

											$no = 1;

											while ($konten = mysqli_fetch_array($query)) {
											?>
												<h1 class="banner_taital"><?php echo $konten['judul']; ?></h1>
												<p class="lorem_text"><?php echo $konten['deskripsi']; ?></p>
											<?php

											}
											?>

											<div class="ads_bt"><a href="login.php">Masuk</a></div>
											<div class="contact_bt"><a href="registrations.php">Daftar</a></div>
										</div>
									</div>
									<div class="col-md-7 col-sm-12">
										<div class="img-box">
											<img src="images/banner-img1.png" style="max-width: 100%;" /></img>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	</div>
	</div>

	</div>
	<!--header section end -->

	</div>
	</div>
	<!--banner section end -->
	<!--about section start -->
	<div class="about_section layout_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="tablet"><img src="images/about.png"></div>
				</div>

				<?php
				$sql = "SELECT * FROM about";
				$query = mysqli_query($db, $sql);

				$no = 1;

				while ($about = mysqli_fetch_array($query)) {
				?>

					<div class="col-md-6">
						<div class="about_taital">
							<div class="about_text"><?php echo $about['judul']; ?><span style="color: #c6610f;"> Us</span></div>
							<p class="dolor_text"><?php echo $about['deskripsi']; ?></p>
						</div>
					</div>
			</div>
		</div>
	</div>
	</div>
<?php

				}
?>
<!--about section end -->
<!--footer section start -->
<div class="footer_section layout_padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="footer_contact">Contact Us</div>
			</div>

		</div>
		<div class="enput_bt">
			<div class="row">
				<div class="col-md-12">
					<div class="input_main">
						<?php
						$sql = "SELECT * FROM kontak";
						$query = mysqli_query($db, $sql);

						$no = 1;

						while ($kontak = mysqli_fetch_array($query)) {
						?>
							<div class="send_bt_main col-md-12">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15807.369441473997!2d112.61070716529468!3d-7.911530908811149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881fd53f16b63%3A0x94c4d5335cf55ea!2sKepuharjo%2C%20Kec.%20Karang%20Ploso%2C%20Kabupaten%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1645820860093!5m2!1sid!2sid" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

								<div class="right col-md-3">
									<div>
										<h4 style="color: white;"><?php echo $kontak['deskripsi']; ?></p>
									</div>
								</div>
								<div class="right col-sm-3">
									<div>
										<ul>
											<li><img src="images/map-icon.png"><span style="padding-left: 10px; color:white; font-size:16px;"> <?php echo $kontak['judul']; ?></span></li><br>
											<li><img src="images/call-icon.png"><span style="padding-left: 10px; color:white; font-size:16px;"><?php echo $kontak['no_telp']; ?></li><br>
											<li><img src="images/mail-icon.png"><span style="padding-left: 10px; color:white; font-size:16px;"><?php echo $kontak['email']; ?></span></li><br>
										</ul>

									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php

						}
?>
<div class="copyright_section">
	<p class="copyright_text">Copyright 2021 All Right Reserved By.<a href="https://html.design"> Biru Software</p>
</div>
</div>
</div>
<!--footer section end -->

<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript -->
<script src="js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>