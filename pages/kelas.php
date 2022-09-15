<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$query = mysql_query("SELECT
  `id_kelas`,
  `nama_kelas`,
  `tingkat_kelas`,
  `status_kelas`
FROM `sma3_bk`.`kelas` order by nama_kelas");
?>
<a href="index.php?page=kelas_add">Tambah Kelas</a>
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Nama Kelas</th>
    <th scope="col">Tingkat Kelas</th>
    <th scope="col">Status Kelas</th>
    <th scope="col">Admin</th>
  </tr>
  <?php 
  $no = 1;
  while($data = mysql_fetch_array($query))
  {
  ?>
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $data['nama_kelas'] ?></td>
    <td><?php echo $data ['tingkat_kelas'] ?></td>
    <td><?php echo $data ['status_kelas'] ?></td>
    <td><a href="index.php?page=kelas_edit&amp;id_kelas=<?php echo $data['id_kelas'] ?>"><em>edit</em></a></td>
  </tr>
  <?php
  $no++;}
  ?>
</table>
</body>
</html>