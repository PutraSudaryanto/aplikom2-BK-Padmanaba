<?php
$nis=$_POST['nis'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tlp_siswa=$_POST['tlp_siswa'];
$tlp_orangtua=$_POST['tlp_orangtua'];
$status_siswa=$_POST['status_siswa'];
$query=mysql_query("UPDATE `sma3_bk`.`siswa`
SET `nis` = '$nis',
  `nisn` = '$nisn',
  `nama` = '$nama',
  `jenis_kelamin` = '$jenis_kelamin',
  `tlp_siswa` = '$tlp_siswa',
  `tlp_orangtua` = '$tlp_orangtua',
  `status_siswa` = '$status_siswa'
WHERE `nis` = '$nis';");
?>
<meta http-equiv="refresh" content="0;index.php?page=siswa"/>