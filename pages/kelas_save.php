<?php
$nama_kelas=$_POST['nama_kelas'];
$tingkat_kelas=$_POST['tingkat_kelas'];
$status_kelas="aktif";
$query=mysql_query("INSERT INTO `sma3_bk`.`kelas`
            (`id_kelas`,
             `nama_kelas`,
             `tingkat_kelas`,
             `status_kelas`)
VALUES (0,
        '$nama_kelas',
        '$tingkat_kelas',
        '$status_kelas')");
?>
<meta http-equiv="refresh" content="0;index.php?page=kelas"/>