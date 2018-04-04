<?php
    include 'dbo.php';
    error_reporting(0);
    if($_GET["page"]=="ta"){

?>
<div class="row">
    <div class="col-xs-12">
      <div class="card">
        <div class="card-header">
          Data TA . : Tahun Angkatan &nbsp;&nbsp;&nbsp; | &nbsp;
          <a href="index.php?form-ta=add"><i class="fa fa-user-plus"></i> Add</a>
        </div>
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th width="5%">No.</th>
            <th width="8%">ID. TA</th>
            <th width="15%">Tahun Angkatan</th>
            <th width="70%"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            $sql = mysql_query("select * from tbthangkatan order by id_ta asc") 
                    or die("Error query ".mysql_error());
            while($data = mysql_fetch_array($sql)){        
        ?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo $data['id_ta']?></td>
            <td><?php echo $data['tahun_angkatan']?></td>
            <td>
                <i class="fa fa-edit"></i><a href="index.php?form-ta=edit&id=<?php echo $data['id_ta']?>">Edit</a>&nbsp;
                <i class="fa fa-trash-o"></i><a href="crud/ta/delete.php?id=<?php echo $data['id_ta']?>">Hapus</a>
            </td>
        </tr>
        <?php $i++; }?>
    </tbody>
</table>
        </div>
      </div>
    </div>
    
</div>
    
<?php } ?>


<?php
if($_GET["page"]=="jurusan"){

?>
<div class="row">
    <div class="col-xs-12">
      <div class="card">
        <div class="card-header">
          Data Jurusan &nbsp;&nbsp;&nbsp; | &nbsp;
          <a href="index.php?form-jurusan=add"><i class="fa fa-user-plus"></i> Add</a>
        </div>
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode</th>
            <th>Jurusan</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            $sql = mysql_query("select * from tbjurusan") 
                    or die("Error query ".mysql_error());
            while($data = mysql_fetch_array($sql)){        
        ?>
        <tr>
            <td width="5%"><?php echo $i?></td>
            <td width="10%"><?php echo $data['kd_jur']?></td>
            <td width="35%"><?php echo $data['jurusan']?></td>
            <td width="50%">
                <i class="fa fa-edit"></i><a href="index.php?form-jurusan=edit&id=<?php echo $data['kd_jur']?>">Edit</a>&nbsp;
                <i class="fa fa-trash-o"></i><a href="crud/jurusan/delete.php?id=<?php echo $data['kd_jur']?>">Delete</a>
            </td>
        </tr>
        <?php $i++; }?>
    </tbody>
</table>
        </div>
      </div>
    </div>
</div>
    
<?php } ?>


<?php
if($_GET["page"]=="prodi"){

?>
<div class="row">
    <div class="col-xs-12">
      <div class="card">
        <div class="card-header">
          Data Prodi &nbsp;&nbsp;&nbsp; | &nbsp;
          <a href="index.php?form-prodi=add"><i class="fa fa-user-plus"></i> Add</a>
        </div>
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th width="20%">Nama Jurusan</th>
                    <th width="10%">KD. Prodi</th>
                    <th width="25%">Program Studi</th>
                    <th width="40%"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    $sql = mysql_query("select * from tbprodi a, tbjurusan b "
                            . "where a.kd_jur=b.kd_jur") 
                            or die("Error query ".mysql_error());
                    while($data = mysql_fetch_array($sql)){        
                ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $data['jurusan']?></td>
                    <td><?php echo $data['kd_prodi']?></td>
                    <td><?php echo $data['prodi']?></td>
                    <td>
                        <i class="fa fa-edit"></i><a href="index.php?form-prodi=edit&id=<?php echo $data['kd_prodi']?>">Edit</a>&nbsp;
                        <i class="fa fa-trash-o"></i><a href="crud/prodi/delete.php?id=<?php echo $data['kd_prodi']?>">Delete</a>
                    </td>
                    </tr>
                <?php $i++; }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

<?php } ?>

<?php
    if($_GET["page"] == "mahasiswa"){
?>

<div class="row">
    <div class="col-xs-12">
      <div class="card">
        <div class="card-header">
          Data Mahasiswa &nbsp;&nbsp;&nbsp; | &nbsp;
          <a href="index.php?form-mhs=add"><i class="fa fa-user-plus"></i> Add</a>
          &nbsp;&nbsp;&nbsp; | &nbsp;
          <a href="index.php?laporan=mahasiswa"> <i class="fa fa-newspaper-o"></i> Report</a>
        </div>
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th width="15%">Program Studi</th>
                    <th width="10%">NIM</th>
                    <th width="20%">Nama Mahasiswa</th>
                    <th width="3%">L/P</th>
                    <th width="15%">Tempat, Tgl Lahir</th>
                    <th width="20%">Alamat</th>
                    <th width="15%"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    $sql = mysql_query("select * from tbmahasiswa a, tbprodi b "
                            . " where a.kd_prodi=b.kd_prodi order by a.id_ta, a.kd_prodi desc") 
                            or die("Error query ".mysql_error());
                    while($data = mysql_fetch_array($sql)){        
                ?>
                <tr>
                    <td><?php echo ++$no_urut?></td>
                    <td><?php echo $data['prodi']?></td>
                    <td><?php echo $data['nim']?></td>
                    <td><?php echo $data['nama_mhs']?></td>
                    <td><?php echo $data['jk']?></td>
                    <td><?php echo $data['tmp_lahir'].', '.date('d-M-Y', strtotime($data['tgl_lahir']))?></td>
                    <td><?php echo $data['alamat']?></td>
                    <td>
                        <i class="fa fa-edit"></i><a href="index.php?form-mhs=edit&id=<?php echo $data['nim']?>">Edit</a>&nbsp;
                        <i class="fa fa-trash-o"></i><a href="crud/mahasiswa/delete.php?id=<?php echo $data['nim']?>">Delete</a>
                    </td>
                </tr>
            <?php $i++; }?>
        </tbody>
      </table>
    </div>
   </div>
 </div>
</div>
    
<?php }?>


