<?php 
    include("../../dbo.php"); 

    $kd_jur = $_POST['kd_jur'];
    $jurusan = $_POST['jurusan'];
    $sql = mysql_query("insert INTO tbjurusan VALUES ('$kd_jur', '$jurusan')" ) 
            or die("Query failed with error: ".mysql_error());
    if ($sql) {
            header("location:../../index.php?page=jurusan&insert=success");	
    }
?>

