<?php
session_start();
include('koneksi.php');
if(!empty($_POST['username'])){
	
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from user where username='$username' and password='$password'")or die(mysql_error());
$data = mysql_fetch_array($query);

if (mysql_fetch_row($query)<=0){
	
	$nip=$data[0];
	$_SESSION['bk_admin']=$username;
	$_SESSION['bk_nip']=$nip;
	//echo'<meta http-equiv="refresh" content="0;index.php">';
}
else{
	echo'<meta http-equiv="refresh" content="0;index.php?msg=login_failed';
}
}
else if (empty($_SESSION['bk_admin'])){
	echo'<meta http-equiv="refresh" content="0;login.php">';
}
?>
<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Poin Bimbingan Konseling SMA N 3 Yogyakarta</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">BK Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
           <!-- tampilan home tahun ajaran kanan atas-->
            TAHUN AJARAN : 
            <?php 
			$query=mysql_query("SELECT
  `id_tahun_ajaran`,
  `nama_tahun_ajaran`,
  `semester`,
  `status_tahun_ajaran`
FROM `sma3_bk`.`tahun_ajaran` WHERE status_tahun_ajaran = 'aktif' LIMIT 1");
$data=mysql_fetch_array($query);
$_SESSION['id_tahun_ajaran']=$data['id_tahun_ajaran'];
echo $data['nama_tahun_ajaran']."<br> Semester: ".$data['semester']."<br> NIP: ".$_SESSION['bk_nip'];
			?>
                </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Halaman Utama</a>
                        </li>
                        <li>
                            <a href="index.php?page=siswa"><i class="fa fa-bar-chart-o fa-fw"></i> Siswa<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?page=kelas">Kelas</a>
                                </li>
                                <li>
                                    <a href="index.php?page=kelas_siswa_add">Kelas - Siswa</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="index.php?page=tahun_ajaran"><i class="fa fa-table fa-fw"></i> Tahun Ajaran</a>
                        </li>
                        <li>
                        <a href="index.php?page=siswa_pelanggaran"><i class="fa fa-table fa-fw"></i> Siswa Pelanggaran</a>
                        </li>
                        
                        <li>
                            <a href="index.php?page=pelanggaran"><i class="fa fa-table fa-fw"></i> Pelanggaran</a>
                        </li>
                        
                        <li>
                            <a href="index.php?page=laporan_periodik"><i class="fa fa-wrench fa-fw"></i> Laporan Periodik<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Laporan - Harian</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Laporan - Bulan</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Laporan - Semester</a>
                                </li>
                                <li>
                                    <a href="typography.html">Laporan - Tahun</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Laporan - Periode</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Laporan Pelanggaran<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Laporan - Harian</a>
                                </li>
                                <li>
                                    <a href="#">Laporan - Bulan</a>
                                </li>
                                <li>
                                    <a href="#">Laporan - Semester</a>
                                </li>
                                <li>
                                    <a href="#">Laporan - Tahun</a>
                                </li>
                                <li>
                                    <a href="#">Laporan - Periode</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Akun<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Users</a>
                                </li>
                                <li>
                                    <a href="loguot.php">Logout</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" align="center">SISTEM INFORMASI BIMBINGAN KONSELING SMA N 3 YOGYAKARTA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php
			if(empty($_GET['page']))
			include 'statistik.php';
			?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- /.panel -->
                    <?php 
					if(!empty($_GET['page']))
					$page = $_GET['page'];
					else
					$page='home';
					if(file_exists($page.'.php'))
					include($page.'.php');
					else
					include('404.php');
					?>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 --><!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
