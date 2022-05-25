<?php 
include("../koneksi/config.php");
session_start();
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
                <img class="logo-compact" src="../images/ewarga.png" alt="">
                <img class="brand-title" src="../images/ewarga.png" alt="">
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
								Data User
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							
							
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="gambar/38-11zon_cropped.jpeg" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black"><strong>Admin</strong></span>
										<p class="fs-12 mb-0">Admin</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    
                                    <a href="../index.php" class="dropdown-item ai-icon">
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
            <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >Tambah</a>
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
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Konten</span>
						</a>
                        <ul aria-expanded="false">
                            
                            <li><a href="../konten/konten.php">Artikel</a></li>
                            <li><a href="../about.php">About</a></li>
                            <li><a href="../kontak/kontak.php">Kontak</a></li>
                        </ul>
                    </li>
					<li><a href="data_user.php" class="ai-icon" aria-expanded="false">
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
            <div class="container-fluid">
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModalside">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Tambah Data</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
                            <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">

                                        <?php  
                                        // fungsi untuk membuat id transaksi
                                        
                                                                            
                                        $query = mysqli_query($db, "SELECT RIGHT(id_user,6) as kode FROM user
                                                                            ORDER BY id_user DESC LIMIT 1")
                                                                            or die('Ada kesalahan pada query tampil id_user : '.mysqli_error($db));

                                        $count = mysqli_num_rows($query);


                                        if ($count <> 0) {
                                            // mengambil data kode_karyawan
                                            $data_id = mysqli_fetch_assoc($query);
                                            $kode    = $data_id['kode']+1;
                                        } else {
                                            $kode = 1;
                                        }

                                        // buat kode_karyawan
                                        $buat_id   = str_pad($kode, 6, "0", STR_PAD_LEFT);
                                        $id_user = "USR-$buat_id";
                                        ?>


                                    <div class="form-group">
										<label for="id_user" class="text-black font-w500" >ID User</label>
										<input type="text" name="id_user" class="form-control" value="<?php echo $id_user; ?>" readonly>
									</div>
									<div class="form-group">
										<label for="username" class="text-black font-w500" >Username</label>
										<input type="text" name="username" class="form-control">
									</div>
									<div class="form-group">
										<label for="password" class="text-black font-w500" >Password</label>
										<input type="text" name="password" class="form-control">
									</div>
									<div class="form-group">
										<label for="hak_akses" class="text-black font-w500" >Hak Akses</label>
										<select class="form-control default-select" name="hak_akses">
                                             <option >Please select</option>
                                             
                                             <option >Admin</option>
                                        </select>
									</div>
                                    <div class="form-group">
										<label for="foto_user" class="text-black font-w500" >Foto</label>
										<input  class="form-control-file" name="foto_user" type="file"  aria-describedby="fileHelp" >
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="tambah" value="Tambah">Tambah</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                
                <!-- row -->


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data User</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Password</th>
												<th>Gambar</th>
												<th>Aksi </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM user";
                                            $query = mysqli_query($db, $sql);

                                            $no = 1;

                                            while ($user = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <!-- <td><?php echo $user['id_user']; ?></td> -->
                                                <td><?php echo $user['username']; ?></td>
                                                <td><?php echo $user['password']; ?></td>
                                                <td style="text-align: center;"><img src="gambar/<?php echo $user['foto_user']; ?>" style="width: 50px;"></td>
                                                                         
                                                <td>
                                                    <a href="edit.php?id_user=<?php echo $user['id_user']; ?>" class="btn btn-primary shadow btn-xs sharp"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-warning shadow btn-xs sharp"><i class="fa fa-eye"></i></a>
													<a href="hapus.php?id_user=<?php echo $user['id_user']; ?>" class="btn btn-danger shadow btn-xs sharp" 
                                                    onClick="return confirm('Anda yakin akan menghapus akun <?php echo $user['username']; ?> ?');"><i class="fa fa-trash"></i></a>
                                                    
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
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