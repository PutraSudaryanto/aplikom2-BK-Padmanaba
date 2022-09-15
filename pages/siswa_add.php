<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="index.php?page=siswa_save" method="post">
<table class="table table-striped table-bordered table-hover" width="100%" border="1">
  <tr>
    <th align="right" scope="row">NIS</th>
    <td><label for="nis"></label>
    <input name="nis" type="text" id="nis" maxlength="6" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">NISN</th>
    <td><label for="nisn"></label>
    <input name="nisn" type="text" id="nisn" maxlength="10" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Nama</th>
    <td><label for="nama"></label>
    <input type="text" name="nama" id="nama" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Jenis Kelamin</th>
    <td><select name="jenis_kelamin" id="jenis_kelamin">
      <option value="L">Laki - laki</option>
      <option value="P">Perempuan</option>
    </select></td>
  </tr>
  <tr>
    <th align="right" scope="row">Tlp Siswa</th>
    <td><label for="tlp_siswa"></label>
    <input name="tlp_siswa" type="text" id="tlp_siswa" maxlength="15" /></td>
  </tr>
  <tr>
    <th align="right" scope="row">Tlp Orang Tua</th>
    <td><label for="tlp_orangtua"></label>
    <input name="tlp_orangtua" type="text" id="tlp_orangtua" maxlength="15" /></td>
  </tr>
  <tr>
    <th colspan="2" scope="row">Simpan
    <input type="submit" name="button" id="button" value="Simpan" /></th>
  </tr>
</table></form>
</body>
</html>