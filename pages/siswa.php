<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Data Siswa
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
<table width="100%" border="0">
  <tr>
    <td align="left">&nbsp;<a href="index.php?page=siswa_add">Tambah Siswa </a></td>
    <td align="right">&nbsp;<a href="index.php?page=siswa_upload">Upload Siswa </a></td>
  </tr>
</table>

<?php 
$query = mysql_query("SELECT
    siswa.nis
    , siswa.nama
    , siswa.nisn
    , siswa.jenis_kelamin
    , siswa.status_siswa
    , kelas.nama_kelas
FROM
    sma3_bk.kelas_siswa
    right JOIN sma3_bk.siswa 
        ON (kelas_siswa.nis = siswa.nis and kelas_siswa.id_tahun_ajaran='".$_SESSION['id_tahun_ajaran']."')
    left JOIN sma3_bk.kelas 
        ON (kelas_siswa.id_kelas = kelas.id_kelas) 
		
		order by siswa.nis asc;");
?>
<table width="100%" class="table table-striped table-bordered table-hover" id="tblsiswa" >
  <thead>
  <tr>
    <th scope="col">No</th>
    <th scope="col">NIS</th>
    <th scope="col">NISN</th>
    <th scope="col">Nama</th>
    <th scope="col">Jenis Kelamin</th>
    <th scope="col">Kelas</th>
    <th scope="col">Status</th>
    <th scope="col">Admin</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $no = 1;
  while($data = mysql_fetch_array($query))
  {
  ?>
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $data['nis'] ?></td>
    <td><?php echo $data['nisn'] ?></td>
    <td><?php echo $data['nama'] ?></td>
    <td><?php echo $data['jenis_kelamin'] ?></td>
    <td><?php echo $data['nama_kelas'] ?></td>
    <td><?php echo $data['status_siswa'] ?></td>
    <td><a href="index.php?page=siswa_edit&nis=<?php echo $data['nis'] ?>">edit</a></td>
    </tr>
  <?php 
  $no++;
  }
  ?>
  </tbody>
</table>
</div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>