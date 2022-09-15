<?php
$id_tahun_ajaran=$_GET['id_tahun_ajaran'];
$nama_tahun_ajaran=$_POST['nama_tahun_ajaran'];
$semester=$_POST['semester'];
$status_tahun_ajaran=$_POST['status_tahun_ajaran'];
$query=mysql_query("UPDATE `sma3_bk`.`tahun_ajaran`
SET `id_tahun_ajaran` = '$id_tahun_ajaran',
  `nama_tahun_ajaran` = '$nama_tahun_ajaran',
  `semester` = '$semester',
  `status_tahun_ajaran` = '$status_tahun_ajaran'
WHERE `id_tahun_ajaran` = '$id_tahun_ajaran';") or die(mysql_error());
?>
<meta http-equiv="refresh" content="0;index.php?page=tahun_ajaran"/>