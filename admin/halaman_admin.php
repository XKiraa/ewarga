<?php
include("koneksi/config.php");
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['status'] == "") {
    header("location:index.php?pesan=gagal");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
        <a href="../halaman_admin.php" class="brand-logo">
                <img class="logo-abbr" src="images/logo.png" alt="">
                <img class="logo-compact" src="images/ewarga.png" alt="">
                <img class="brand-title" src="images/ewarga.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->

        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Selamat Datang Admin!
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="user/gambar/38-11zon_cropped.jpeg" width="20" alt="" />
                                    <div class="header-info">
                                        <span class="text-black"><strong>Admin</strong></span>
                                        <p class="fs-12 mb-0">Admin</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">

                <ul class="metismenu" id="menu">
                    <li><a href="halaman_admin.php" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>


                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Data Desa</span>
						</a>
                        <ul aria-expanded="false">
                            
                            <li><a href="pak_rt/data_rt.php">Data Kepala Dusun</a></li>
                            <li><a href="warga/data_warga.php">Data Warga</a></li>
                            <li><a href="berkas/data_berkas.php">Data Berkas</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Konten</span>
						</a>
                        <ul aria-expanded="false">
                            
                            <li><a href="konten/konten.php">Artikel</a></li>
                            <li><a href="about/about.php">About</a></li>
                            <li><a href="kontak/kontak.php">Kontak</a></li>
                        </ul>
                    </li>
					<li><a href="user/data_user.php" class="ai-icon" aria-expanded="false">
						<i class="flaticon-381-settings-2"></i>
						<span class="nav-text">Data User</span>
					</a>
					</li>

                </ul>
                <div class="copyright">
                    <p><strong>Dashboard</strong> © 2021 All Rights Reserved</p>
                    <p>Made with <span class="heart"></span> by Biru Software</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <!-- Add Order -->
                <div class="row">
                <div class="col-xl-4 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Data Dusun</p>
										<h3 class="text-white">6</h3>
										<div class="progress mb-2 bg-secondary">
                                            <div class="progress-bar progress-animated bg-light" style="width: 100%"></div>
                                        </div>
										<small></small>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-success">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
                                    <?php

              $query = mysqli_query($db, "SELECT COUNT(id_penduduk) as jumlah FROM d_penduduk") 
              or die('Ada Kesalahan pada query tampil data testimoni: '.mysqli_error($db));
              $data = mysqli_fetch_assoc($query);

              ?>
									<div class="media-body text-white">
										<p class="mb-1">Data Warga</p>
										<h3 class="text-white"><?php echo $data['jumlah']; ?></h3>
										<div class="progress mb-2 bg-secondary">
                                            <div class="progress-bar progress-animated bg-light" style="width: 100%"></div>
                                        </div>
										<small></small>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
                                    <?php

              $query = mysqli_query($db, "SELECT COUNT(id_berkas) as jumlah FROM berkas") 
              or die('Ada Kesalahan pada query tampil data testimoni: '.mysqli_error($db));
              $data = mysqli_fetch_assoc($query);

              ?>
									<div class="media-body text-white">
										<p class="mb-1">Data Berkas</p>
										<h3 class="text-white"><?php echo $data['jumlah']; ?></h3>
										<div class="progress mb-2 bg-secondary">
                                            <div class="progress-bar progress-animated bg-light" style="width: 100%"></div>
                                        </div>
										<!-- <small>80% Increase in 20 Days</small> -->
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://birusoftware.com/" target="_blank">BiruSoftware</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>
    <script src="./vendor/owl-carousel/owl.carousel.js"></script>

    <!-- Chart piety plugin files -->
    <script src="./vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="./vendor/apexchart/apexchart.js"></script>

    <!-- Dashboard 1 -->
    <script src="./js/dashboard/analytics.js"></script>

</body>

</html>