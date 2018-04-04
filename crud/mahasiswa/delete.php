<?php
    include '../../dbo.php';
    $id=$_GET["id"];
    $query = "delete from tbmahasiswa where nim='$id'";
    $result = mysql_query($query) or die("Query failed with error: ".mysql_error());
    if ($result) {
        header("location:../../index.php?page=mahasiswa&delete=success");	
    }
?>
