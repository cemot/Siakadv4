<?php 
    include("../../dbo.php"); 

    $kd_jur = $_POST['kd_jur'];
    $jurusan = $_POST['jurusan'];
    $sql = mysql_query("update tbjurusan set jurusan='$jurusan' "
            . " where kd_jur='$kd_jur' " ) 
            or die("Query failed with error: ".mysql_error());
    if ($sql) {
            header("location:../../index.php?page=jurusan&insert=success");	
    }
?>

