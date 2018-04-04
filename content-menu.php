<?php
    include 'dbo.php';
    function jmlmahasiswa(){
        $sql = mysql_query("select * from tbmahasiswa")
                or die ("Error Query : ".mysql_error());
        $jml = mysql_num_rows($sql);
        echo $jml;
    }

?>


<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <a class="card card-banner card-blue-light">
            <div class="card-body">
                  <i class="icon fa fa-user-plus fa-4x"></i>
                <div class="content">
                  <div class="title">Data Mahasiswa</div>
                  <div class="value"><span class="sign"></span><?php jmlmahasiswa(); ?></div>
                </div>
            </div>
        </a>
    </div>
</div>

<?php include ("loguser.php"); ?>