<?php
    include 'dbo.php';
    error_reporting(0);
    if($_GET["form-ta"]=="add"){
?>

<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form Tahun Angkatan</div>
        <div class="card-body">
    <form class="form form-horizontal" name="frta" method="POST" action="crud/ta/create.php">
  <div class="section">
    <div class="section-title">Form Tahun Angkatan</div>
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-2 control-label">ID. TA</label>
        <div class="col-md-1">
            <input type="text" class="form-control" value="[AUTO]" readonly>
        </div>
      </div>
        <div class="form-group">
        <label class="col-md-2 control-label">Tahun Angkatan</label>
        <div class="col-md-9">
          <input type="text" class="form-control">
        </div>
      </div>   
    </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-2">
        <input type="submit" class="btn btn-primary" value="Save">
        <input type="reset" class="btn btn-default" value="Cancel">
      </div>
    </div>
  </form>
  </div>
        </div>
    </div>
    </div>
    
</div>

<?php } ?>

<?php
if($_GET["form-ta"]=="edit"){
    $id=$_GET["id"];
    $sql = mysql_query("select * from tbthangkatan where id_ta='$id' ")
            or die("Error Query : ".mysql_error());
    if($row = mysql_fetch_array($sql)){
?>
<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form TA. : Tahun Angkatan</div>
        <div class="card-body">
    <form class="form form-horizontal" name="frta" method="POST" action="crud/ta/update.php">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-2 control-label">ID. TA</label>
        <div class="col-md-1">
            <input type="text" name="id_ta" class="form-control" value="<?php echo $row['id_ta']?>">
        </div>
      </div>
        <div class="form-group">
        <label class="col-md-2 control-label">Tahun Angkatan</label>
        <div class="col-md-9">
          <input type="text" name="tahun_angkatan" class="form-control" value="<?php echo $row['tahun_angkatan']?>">
        </div>
      </div>   
    </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-2">
        <input type="submit" class="btn btn-primary" value="Save">
        <input type="reset" class="btn btn-default" value="Cancel">
      </div>
    </div>
  </form>
  </div>
        </div>
    </div>
    </div>
</div>
    <?php } } ?>

<?php
if($_GET["form-jurusan"]=="add"){
?>
<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form Jurusan</div>
        <div class="card-body">
    <form class="form form-horizontal" name="frjurusan" method="POST" action="crud/jurusan/create.php">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-2 control-label">Kode Jurusan</label>
        <div class="col-md-1">
            <input type="text" name="kd_jur" class="form-control">
        </div>
      </div>
        <div class="form-group">
        <label class="col-md-2 control-label">Jurusan</label>
        <div class="col-md-9">
          <input type="text" name="jurusan" class="form-control" placeholder="">
        </div>
      </div>   
    </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-2">
        <input type="submit" class="btn btn-primary" value="Save">
        <input type="reset" class="btn btn-default" value="Cancel">
      </div>
    </div>
 </form>
  </div>
        </div>
    </div>
    </div>
    
</div>

<?php } ?>
    

<?php
if($_GET["form-jurusan"]=="edit"){
    $id=$_GET["id"];
    $sql = mysql_query("select * from tbjurusan where kd_jur='$id' ")
            or die("Error Query : ".mysql_error());
    if($row = mysql_fetch_array($sql)){
?>
<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form Jurusan</div>
        <div class="card-body">
    <form class="form form-horizontal" name="frjurusan" method="POST" action="crud/jurusan/update.php">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-2 control-label">Kode Jurusan</label>
        <div class="col-md-1">
            <input type="text" name="kd_jur" class="form-control" value="<?php echo $row['kd_jur']?>">
        </div>
      </div>
        <div class="form-group">
        <label class="col-md-2 control-label">Jurusan</label>
        <div class="col-md-9">
          <input type="text" name="jurusan" class="form-control" value="<?php echo $row['jurusan']?>">
        </div>
      </div>   
    </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-2">
        <input type="submit" class="btn btn-primary" value="Save">
        <input type="reset" class="btn btn-default" value="Cancel">
      </div>
    </div>
</form>
  </div>
        </div>
    </div>
    </div>
</div>
</div>
    <?php } } ?>

    
<?php
if($_GET["form-prodi"]=="add"){
?>
<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form Prodi</div>
        <div class="card-body">
    <form class="form form-horizontal" name="frprodi" method="POST" action="crud/prodi/create.php">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-2 control-label">Jurusan</label>
        <div class="col-md-4">
            <div class="input-group">
                <select class="select2" name="kd_jur">
                    <option value="">-- Pilih Jurusan --</option>
                    <?php
                        $sql = mysql_query("select * from tbjurusan")
                                or die ("Error Query : ".mysql_error);
                        while($data = mysql_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['kd_jur']?>" />
                        <?php echo $data['kd_jur'].'-'.$data['jurusan']?>
                        <?php } ?>
                </select>
                <span class="input-group-addon">Jurusan</span>
            </div>
        </div>
      </div>    
        <div class="form-group">
        <label class="col-md-2 control-label">Kode Prodi</label>
        <div class="col-md-1">
          <input type="text" name="kd_prodi" class="form-control" placeholder="">
        </div>
      </div>   
        <div class="form-group">
        <label class="col-md-2 control-label">Program Studi</label>
        <div class="col-md-1">
          <input type="text" name="prodi" class="form-control" placeholder="">
        </div>
      </div>
    </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-2">
        <input type="submit" class="btn btn-primary" value="Save">
        <input type="reset" class="btn btn-default" value="Cancel">
      </div>
    </div>
      </form>
</div>
  </div>
  </div>
        </div>
    </div>
    </div>
<?php } ?>

<?php
if($_GET["form-prodi"]=="edit"){
    $id=$_GET["id"];
    $sql = mysql_query("select * from tbprodi a, tbjurusan b " 
            . " where a.kd_jur=b.kd_jur and a.kd_prodi='$id' ")
            or die("Error Query : ".mysql_error());
    if($row = mysql_fetch_array($sql)){
?>
<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form Prodi</div>
        <div class="card-body">
    <form class="form form-horizontal" name="frprodi" method="POST" action="crud/prodi/update.php">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-2 control-label">Jurusan</label>
        <div class="col-md-4">
            <div class="input-group">
                <select class="select2" name="kd_jur">
                    <option value="<?php echo $row['kd_jur']?>" />
                        <?php echo $row['kd_jur'].'-'.$row['jurusan']?>
                    <?php
                        $sql = mysql_query("select * from tbjurusan")
                                or die ("Error Query : ".mysql_error);
                        while($data = mysql_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['kd_jur']?>" />
                        <?php echo $data['kd_jur'].'-'.$data['jurusan']?>
                        <?php } ?>
                </select>
                <span class="input-group-addon">Jurusan</span>
            </div>
        </div>
      </div>   
        <div class="form-group">
            <label class="col-md-2 control-label">Kode Prodi</label>
            <div class="col-md-1">
                <input type="text" name="kd_prodi" class="form-control" value="<?php echo $row['kd_prodi']?>">
            </div>
        </div> 
        <div class="form-group">
            <label class="col-md-2 control-label">Program Studi</label>
            <div class="col-md-1">
                <input type="text" name="prodi" class="form-control" value="<?php echo $row['prodi']?>">
            </div>
        </div> 
    </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-2">
        <input type="submit" class="btn btn-primary" value="Save">
        <input type="reset" class="btn btn-default" value="Cancel">
      </div>
    </div>
</form>
  </div>
        </div>
    </div>
    </div>
</div>
</div>
<?php } } ?>

<?php
if($_GET["form-mhs"]=="add"){
?>
<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form Mahasiswa</div>
        <div class="card-body">
    <form class="form form-horizontal" name="frmhs" method="POST" action="crud/mahasiswa/create.php">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-2 control-label">Program Studi</label>
        <div class="col-md-4">
            <div class="input-group">
                <select class="select2" name="kd_prodi">
                    <option value="">-- Pilih Prodi --</option>
                    <?php
                        $sql = mysql_query("select * from tbprodi")
                                or die ("Error Query : ".mysql_error);
                        while($data = mysql_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['kd_prodi']?>" />
                        <?php echo $data['kd_prodi'].'-'.$data['prodi']?>
                    <?php } ?>
                </select>
            </div>
        </div>
      </div>
        <div class="form-group">
        <label class="col-md-2 control-label">Tahun Angkatan</label>
        <div class="col-md-4">
            <div class="input-group">
                <select class="select2" name="id_ta">
                    <option value="">-- Pilih Tahun Angkatan --</option>
                     <?php
                        $sql = mysql_query("select * from tbthangkatan")
                                or die ("Error Query : ".mysql_error);
                        while($data = mysql_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['id_ta']?>" />
                        <?php echo $data['tahun_angkatan']?>
                    <?php } ?>
                </select>
            </div>
        </div>
      </div>
        <div class="form-group">
            <label class="col-md-2 control-label">NIM</label>
            <div class="col-md-9">
              <input type="text" name="nim" class="form-control">
            </div>
        </div>   
        <div class="form-group">
            <label class="col-md-2 control-label">Nama Mahasiswa</label>
            <div class="col-md-9">
              <input type="text" name="nama_mhs" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Jenis Kelamin</label>
            <div class="col-md-9">
                <div class="radio radio-inline">
                  <input type="radio" name="jk" id="L" cvalue="L">
                  <label for="L">Laki-Laki</label>
                </div>
                <div class="radio radio-inline">
                  <input type="radio" name="jk" id="P" cvalue="P">
                  <label for="P">Perempuan</label>
                </div> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Tempat Lahir</label>
            <div class="col-md-2">
              <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir">
            </div>
            
            <label class="col-md-1 control-label"></label>
            <label class="col-md-1 control-label">Tgl. Lahir</label>
            <div class="col-md-1">
              <input type="text" name="tgl" class="form-control" placeholder="Tanggal">
            </div>
            <div class="col-md-1">
              <input type="text" name="bln" class="form-control" placeholder="Bulan">
            </div>
            <div class="col-md-1">
              <input type="text" name="tahun" class="form-control" placeholder="Tahun">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Agama</label>
            <div class="col-md-4">
            <div class="input-group">
                <select class="select2" name="agama">
                    <option value="">.. Pilih Agama ..</option>
                    <option value="Islam">Islam</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghuchu">Konghuchu</option>
                </select>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Nama Ayah</label>
            <div class="col-md-9">
              <input type="text" name="nama_ayah" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Nama Ibu</label>
            <div class="col-md-9">
              <input type="text" name="nama_inu" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Alamat</label>
            <div class="col-md-9">
              <input type="text" name="alamat" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">No. Telepon</label>
            <div class="col-md-9">
              <input type="text" name="no_telepon" class="form-control">
            </div>
        </div>
    </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-2">
        <input type="submit" class="btn btn-primary" value="Save">
        <input type="reset" class="btn btn-default" value="Cancel">
      </div>
    </div>
      </form>
</div>
  </div>
  </div>
        </div>
    </div>
    </div>
<?php } ?>

<?php
if($_GET["form-mhs"]=="edit"){
    $id=$_GET["id"];
    $sql = mysql_query("select * from tbmahasiswa a, tbprodi b, tbthangkatan c " 
            . " where a.kd_prodi=b.kd_prodi and a.id_ta=c.id_ta and a.nim='$id' ")
            or die("Error Query : ".mysql_error());
    if($row = mysql_fetch_array($sql)){
?>
<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form Mahasiswa</div>
        <div class="card-body">
    <form class="form form-horizontal" name="frmhs" method="POST" action="crud/mahasiswa/update.php">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-2 control-label">Program Studi</label>
        <div class="col-md-4">
            <div class="input-group">
                <select class="select2" name="kd_prodi">
                    <option value="<?php echo $row['kd_prodi']?>" ><?php echo $row['prodi'] ?> </option>
                    <?php
                        $sql = mysql_query("select * from tbprodi")
                                or die ("Error Query : ".mysql_error);
                        while($data = mysql_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['kd_prodi']?>" />
                        <?php echo $data['kd_prodi'].'-'.$data['prodi']?>
                        <?php } ?>
                </select>
            </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Tahun Angkatan</label>
        <div class="col-md-4">
            <div class="input-group">
                <select class="select2" name="id_ta">
                    <option value="<?php echo $row['id_ta']?>" ><?php echo $row['tahun_angkatan'] ?></option>
                     <?php
                        $sql = mysql_query("select * from tbthangkatan")
                                or die ("Error Query : ".mysql_error);
                        while($data = mysql_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['id_ta']?>" />
                        <?php echo $data['tahun_angkatan']?>
                    <?php } ?>
                </select>
            </div>
        </div>
      </div>
        <div class="form-group">
            <label class="col-md-2 control-label">NIM</label>
            <div class="col-md-9">
              <input type="text" name="nim" class="form-control" value="<?php echo $row['nim']?>">
            </div>
        </div>   
        <div class="form-group">
            <label class="col-md-2 control-label">Nama Mahasiswa</label>
            <div class="col-md-9">
              <input type="text" name="nama_mhs" class="form-control" value="<?php echo $row['nama_mhs']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Jenis Kelamin</label>
            <div class="col-md-9">
                <div class="radio radio-inline">
                  <input type="radio" name="jk" id="L" value="L"
                        <?php if($row['jk']=="L"){?> checked <?php } ?>>
                  <label for="L">Laki-Laki</label>
                </div>
                <div class="radio radio-inline">
                  <input type="radio" name="jk" id="P" value="P"
                         <?php if($row['jk']=="P"){?> checked <?php } ?>>
                  <label for="P">Perempuan</label>
                </div> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Tempat Lahir</label>
            <div class="col-md-2">
              <input type="text" name="tmp_lahir" class="form-control" value="<?php echo $row['tmp_lahir']?>">
            </div>
            
            <label class="col-md-1 control-label"></label>
            <label class="col-md-1 control-label">Tgl. Lahir</label>
            <div class="col-md-1">
              <input type="text" name="tgl" class="form-control" placeholder="Tanggal"
                     value="<?php echo date('d', strtotime($row['tgl_lahir']))?>">
            </div>
            <div class="col-md-1">
              <input type="text" name="bln" class="form-control" placeholder="Bulan"
                     value="<?php echo date('m', strtotime($row['tgl_lahir']))?>">
            </div>
            <div class="col-md-1">
              <input type="text" name="tahun" class="form-control" placeholder="Tahun"
                     value="<?php echo date('Y', strtotime($row['tgl_lahir']))?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Agama</label>
            <div class="col-md-4">
            <div class="input-group">
                <select class="select2" name="agama">
                    <option value="<?php echo $row['agama']?>"><?php echo $row['agama']?></option>
                    <option value="Islam">Islam</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghuchu">Konghuchu</option>
                </select>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Nama Ayah</label>
            <div class="col-md-9">
              <input type="text" name="nama_ayah" class="form-control" value="<?php echo $row['nama_ayah']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Nama Ibu</label>
            <div class="col-md-9">
              <input type="text" name="nama_ibu" class="form-control" value="<?php echo $row['nama_ibu']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Alamat</label>
            <div class="col-md-9">
              <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">No. Telepon</label>
            <div class="col-md-9">
              <input type="text" name="no_telepon" class="form-control" value="<?php echo $row['no_telepon']?>">
            </div>
        </div>
    </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-2">
        <input type="submit" class="btn btn-primary" value="Save">
        <input type="reset" class="btn btn-default" value="Cancel">
      </div>
    </div>
      </form>
</div>
  </div>
  </div>
        </div>
    </div>
    </div>
<?php } } ?>