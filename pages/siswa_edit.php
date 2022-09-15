<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
$nis=$_GET['nis'];
$query=mysql_query("SELECT
  `nis`,
  `nama`,
  `jenis_kelamin`,
  `tlp_siswa`,
  `tlp_orangtua`,
  `status_siswa`
FROM `sma3_bk`.`siswa` where nis='$nis'");
$data=mysql_fetch_array($query);
?>
<body>
<form action="index.php?page=siswa_edit_save" method="post">
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <tr>
    <th align="right" scope="row">NIS</th>
    <td><label for="nis"></label>
    <input type="text" name="nis" id="nis" value="<?php echo $data['nis'] ?>" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">NISN</th>
    <td><input type="text" name="nisn" id="nisn" value="<?php echo $data['nisn'] ?>" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Nama</th>
    <td><label for="nama"></label>
    <input type="text" name="nama" id="nama" value="<?php echo $data['nama'] ?>" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Jenis Kelamin</th>
    <td><select name="jenis_kelamin" id="jenis_kelamin">
      <option value="L" <?php
	  if($data['jenis_kelamin']=='L')echo'selected="selected"';
      ?>>Laki - laki</option>
      <option value="P" <?php
	  if($data['jenis_kelamin']=='P')echo'selected="selected"';
      ?> >Perempuan</option>
    </select></td>
  </tr>
  <tr>
    <th align="right" scope="row">Tlp Siswa</th>
    <td><label for="tlp_siswa"></label>
    <input type="text" name="tlp_siswa" id="tlp_siswa" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Tlp Orang Tua</th>
    <td><label for="tlp_orangtua"></label>
    <input type="text" name="tlp_orangtua" id="tlp_orangtua" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">&nbsp;</th>
    <td><label for="status_siswa"></label>
      <select name="status_siswa" id="status_siswa">
        <option value="aktif" <?php if ($data['status_siswa']=="aktif")echo 'selected="selected"'; ?>>aktif</option>
        <option value="tidak aktif" <?php if ($data['status_siswa']=="tidak aktif")echo 'selected="selected"'; ?>>tidak aktif</option>
        <option value="alumni" <?php if ($data['status_siswa']=="alumni")echo 'selected="selected"'; ?>>alumni</option>
      </select></td>
  </tr>
  <tr>
    <th colspan="2" scope="row">Simpan
    <input type="submit" name="button" id="button" value="Simpan" /></th>
  </tr>
</table></form>
</body>
</html>