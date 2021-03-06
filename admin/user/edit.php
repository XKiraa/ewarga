<?php 
include("../koneksi/config.php");
session_start();
if (isset($_GET['id_user'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_user = ($_GET["id_user"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM user WHERE id_user='$id_user'";
    $result = mysqli_query($db, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($db).
         " - ".mysqli_error($db));
    }
    // mengambil data dari database
    $user = mysqli_fetch_assoc($result); 
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($user)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='user.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='user.php';</script>";
  }         
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Acara - Ticketing Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <!-- Datatable -->
    <link href="../vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="../vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
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
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="../images/logo.png" alt="">
                <img class="logo-compact" src="../images/logo-text.png" alt="">
                
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
								
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							
							
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="gambar/38-11zon_cropped.jpeg" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black"><strong>Brian Lee</strong></span>
										<p class="fs-12 mb-0">Admin</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    
                                    <a href="../page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
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
            <!-- <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >Tambah</a> -->
				<ul class="metismenu" id="menu">
                    <li><a href="../halaman_admin.php" class="ai-icon" aria-expanded="false">
						<i class="flaticon-381-networking"></i>
						<span class="nav-text">Dashboard</span>
					</a>
					</li>
                    
                    
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Data Desa</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="../pak_rt/data_rt.php">Data Kepala Dusun</a></li>
                            <li><a href="../warga/data_warga.php">Data Warga</a></li>
                            <li><a href="../berkas/data_berkas.php">Data Permintaan</a></li>
                        </ul>
                    </li>
					<li><a href="data_user.php" class="ai-icon" aria-expanded="false">
						<i class="flaticon-381-settings-2"></i>
						<span class="nav-text">Data User</span>
					</a>
					</li>
                    
                </ul>
				<div class="copyright">
					<p><strong>Dashboard</strong> ?? 2021 All Rights Reserved</p>
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
            <div class="container-fluid">
				<!-- Add Order -->

                
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Data User</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="proses_edit.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">ID
                                                        
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="id_user" value="<?php echo $user['id_user']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-email">Username 
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control"  name="username" value="<?php echo $user['username']; ?>" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-password">Password
                                                        
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control"  name="password" value="<?php echo $user['password']; ?>" >
                                                    </div>
                                                </div>
                                                
												
                                            </div>
                                            <div class="col-xl-6">
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Gambar</label>
                                                    
                                                        
                                                    <div class="col-lg-6">
                                                    <img src="gambar/<?php echo $user['foto_user']; ?>" style="width: 100px;float: right;margin-bottom: 5px;">
														<div class="custom-file">
															<input type="file" class="custom-file-input" name="foto_user">
															<label class="custom-file-label">Choose file</label>
														</div><br><br>
														
                                                    </div>
                                                </div>
												
                                                <div class="form-group row">
                                                    <div class="col-lg-3 ml-auto">
                                                        <button type="submit" id="simpan" name="simpan" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                <p>Copyright ?? Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
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
    <script src="../vendor/global/global.min.js"></script>
	<script src="../vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="../js/custom.min.js"></script>
	<script src="../js/deznav-init.js"></script>
	
    <!-- Datatable -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../js/plugins-init/datatables.init.js"></script>

</body>
</html>