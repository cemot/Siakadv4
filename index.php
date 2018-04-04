<?php
    include 'dbo.php';
    session_start();
    if(isset($_SESSION["adminid"])){
?>

<!DOCTYPE html>
<html>
<head>
  <title>.: Siakad v.4 :.</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/yellow.css">

</head>
<body>
    <div class="app app-default">
    <?php include ("left-menu.php"); ?>
      
        <div class="app-container">
            <?php include ("header.php"); ?>
            
            
            <?php
                error_reporting(0);
                if($_GET["page"]=="ta"){
                    include("tabel.php");
                }
                else if($_GET["form-ta"]=="add"){
                    include("form.php");
                }
                else if($_GET["form-ta"]=="edit"){
                    include("form.php");
                }
                
                else if($_GET["page"]=="jurusan"){
                    include("tabel.php");
                }
                else if($_GET["form-jurusan"]=="add"){
                    include("form.php");
                }
                else if($_GET["form-jurusan"]=="edit"){
                    include("form.php");
                }
                
                else if($_GET["page"]=="prodi"){
                    include("tabel.php");
                }
                else if($_GET["form-prodi"]=="add"){
                    include("form.php");
                }
                else if($_GET["form-prodi"]=="edit"){
                    include("form.php");
                }
                
                else if($_GET["page"]=="mahasiswa"){
                    include("tabel.php");
                }
                else if($_GET["form-mhs"]=="add"){
                    include("form.php");
                }
                else if($_GET["form-mhs"]=="edit"){
                    include("form.php");
                }
                else if($_GET["laporan"]=="mahasiswa"){
                    include("laporan.php");
                }else  if($_GET["page"]=="dashboard"){
                    include("content-menu.php");
                }
             
            ?>
               
            <?php include ("footer.php"); ?>
        </div>
    </div>
  
  <script type="text/javascript" src="./assets/js/vendor.js"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>

</body>
</html>
    <?php
    }else{
        header("location:login.php");
    } 
    
    ?>