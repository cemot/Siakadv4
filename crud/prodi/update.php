<?php 
    include("../../dbo.php"); 

    $kd_prodi = $_POST['kd_prodi'];
    $prodi = $_POST['prodi'];
    $kd_jur = $_POST['kd_jur'];
    $sql = mysql_query("update tbprodi set prodi='$prodi', kd_jur='$kd_jur' "
            . " where kd_prodi='$kd_prodi' " ) 
            or die("Query failed with error: ".mysql_error());
    if ($sql) {
            header("location:../../index.php?page=prodi&insert=success");	
    }
?>

