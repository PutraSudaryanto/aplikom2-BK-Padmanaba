<?php
$kelas=$_POST['kelas'];
$nis=$_POST['nis'];
$id_tahun_ajaran=$_SESSION['id_tahun_ajaran'];
$query=mysql_query("INSERT INTO `sma3_bk`.`kelas_siswa`
            (`nis`,
             `id_kelas`,
             `id_tahun_ajaran`)
VALUES ('$nis',
        '$kelas',
        '$id_tahun_ajaran');");
?>
<meta http-equiv="refresh" content="0;index.php?page=siswa"/>