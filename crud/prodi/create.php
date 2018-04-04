<?php 
    include("../../dbo.php"); 

    $kd_prodi = $_POST['kd_prodi'];
    $prodi = $_POST['prodi'];
    $kd_jur = $_POST['kd_jur'];
    $sql = mysql_query("insert INTO tbprodi VALUES ('$kd_prodi', '$prodi', '$kd_jur')" ) 
            or die("Query failed with error: ".mysql_error());
    if ($sql) {
            header("location:../../index.php?page=prodi&insert=success");	
    }
?>

