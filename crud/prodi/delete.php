<?php
    include '../../dbo.php';
    $id=$_GET["id"];
    $query = "delete from tbprodi where kd_prodi='$id'";
    $result = mysql_query($query) or die("Query failed with error: ".mysql_error());
    if ($result) {
        header("location:../../index.php?page=prodi&delete=success");	
    }
?>

