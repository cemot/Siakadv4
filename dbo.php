<?php
    $server_db="localhost"; //ip address
    $user_db="root";
    $pass_db="";
    $nama_db="dbsiakadv2_161530036";

    $koneksi=mysql_connect($server_db, $user_db, $pass_db) 
            or die(mysql_error());
    $pilih_db=  mysql_select_db($nama_db);
?>

