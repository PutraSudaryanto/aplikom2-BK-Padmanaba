<?php
$nis=$_POST['nis'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tlp_siswa=$_POST['tlp_siswa'];
$tlp_orangtua=$_POST['tlp_orangtua'];
$query=mysql_query("INSERT INTO `sma3_bk`.`siswa`
            (`nis`,
			 `nisn`,
             `nama`,
             `jenis_kelamin`,
             `tlp_siswa`,
             `tlp_orangtua`)
VALUES ('$nis',
		'$nisn',
        '$nama',
        '$jenis_kelamin',
        '$tlp_siswa',
        '$tlp_orangtua')");
?>
<meta http-equiv="refresh" content="0;index.php?page=siswa"/>