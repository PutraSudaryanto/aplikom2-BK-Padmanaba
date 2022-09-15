<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
$id_tahun_ajaran=$_GET['id_tahun_ajaran'];
$query=mysql_query("SELECT
  `id_tahun_ajaran`,
  `nama_tahun_ajaran`,
  `semester`,
  `status_tahun_ajaran`
FROM `sma3_bk`.`tahun_ajaran` where id_tahun_ajaran='$id_tahun_ajaran'");
$data=mysql_fetch_array($query);
?>

<body>
<form action="index.php?page=tahun_ajaran_edit_save&id_tahun_ajaran=<?php echo $id_tahun_ajaran ?>" method="post">
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <tr>
    <th scope="row">Nama Tahun Ajaran</th>
    <td><input name="nama_tahun_ajaran" type="text" id="nama_tahun_ajaran" value="<?php echo $data['nama_tahun_ajaran'] ?>" /></td>
  </tr>
  <tr>
    <th scope="row">Semester</th>
    <td><label for="semester"></label>
      <select name="semester" id="semester">
        <option value="ganjil" <?php
	  if($data['semester']=='ganjil')echo'selected="selected"';
      ?>>Ganjil</option>
        <option value="genap" <?php
	  if($data['semester']=='genap')echo'selected="selected"';
      ?> >Genap</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row">Status</th>
    <td><label for="status_tahun_ajaran"></label>
      <select name="status_tahun_ajaran" id="status_tahun_ajaran">
        <option value="aktif" <?php
	  if($data['status_tahun_ajaran']=='aktif')echo'selected="selected"';
      ?>>Aktif</option>
        <option value="tidak aktif" <?php
	  if($data['status_tahun_ajaran']=='tidak aktif')echo'selected="selected"';
      ?> >Tidak aktif</option>
    </select></td>
  </tr>
  <tr>
    <th colspan="2" scope="row">Simpan
    <input type="submit" name="button" id="button" value="Simpan" /></th>
  </tr>
</table>
</body>
</html>