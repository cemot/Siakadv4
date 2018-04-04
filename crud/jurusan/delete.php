<?php
    include '../../dbo.php';
    $id=$_GET["id"];
    $query = "delete from tbjurusan where kd_jur='$id'";
    $result = mysql_query($query) or die("Query failed with error: ".mysql_error());
    if ($result) {
        header("location:../../index.php?page=jurusan&delete=success");	
    }
?>

