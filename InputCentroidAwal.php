<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ATOM JAYA GROUP</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>
    <?php 
        include("includes/session.php");
        include("includes/connection.php");


        if(masuk()){
            $id = get_users_field('user_id');
            $username = get_users_field('user_username');
            $namadepan = get_users_field('user_namadepan');
            $namabelakang = get_users_field('user_namabelakang');
        ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php 
            include ('templates/menu.php');

        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Inputkan Centroid Awal
                        </div>
                        <!-- /.panel-heading -->
<div class="panel-body">
                            <?php
                                $result = mysql_query("SELECT * FROM `tbl_nilai` ORDER by `nilai_id` DESC ");
                                $result1 = mysql_query("SELECT * FROM `tbl_nilai` ORDER by `nilai_id` DESC ");
                                $result2 = mysql_query("SELECT * FROM `tbl_nilai` ORDER by `nilai_id` DESC ");
                            ?>
                            
                                <div class="col-md-12 form-group"> <!-- 1. Form Kode Barang  -->
                                    <label class="control-label col-sm-2" >Kd Centroid1 :</label>
                                    <select name="kd_barang" id="kd_barang" class="form-control">
                                    <option>-- pilih --</option>
                                    <?
                                    $i = 1;
                                    while($items = mysql_fetch_array($result)){
                                        $kd_barang = $items["nilai_KodeBarang"];
                                        $id_barang = $items["nilai_id"];
                                        ?>
                                        <option value="<?php echo $kd_barang;?>"><?=$kd_barang?></option>
                                        <?}?>
                                    </select>
                                    <div class="col-sm-4">
                                        <input type="text" id="value11" class="form-control" placeholder="Value 1">
                                        <input type="text" id="value12" class="form-control" placeholder="Value 2">
                                        <input type="text" id="value13" class="form-control" placeholder="Value 3">
                                    </div>
                                </div>
                            
                                <div class="col-md-12 form-group"> <!-- 1. Form Kode Barang  -->
                                    <label class="control-label col-sm-2" >Kd Centroid2 :</label>
                                    <select name="kd_barang1" id="kd_barang1" class="form-control">
                                    <option>-- pilih --</option>
                                    <?
                                    
                                    while($items1 = mysql_fetch_array($result1)){
                                        $kd_barang1   = $items1["nilai_KodeBarang"];
                                        $id_barang1   = $items1["nilai_id"];
                                        ?>
                                        <option value="<?=$kd_barang1?>"><?=$kd_barang1?></option>
                                        <?}?>
                                    </select>
                                    <div class="col-sm-4">
                                        <input type="text" id="value21" class="form-control" placeholder="Value 1">
                                        <input type="text" id="value22" class="form-control" placeholder="Value 2">
                                        <input type="text" id="value23" class="form-control" placeholder="Value 3">
                                    </div>
                                </div>

                                <div class="col-md-12 form-group"> <!-- 1. Form Kode Barang  -->
                                    <label class="control-label col-sm-2" >Kd Centroid3 :</label>
                                    <select name="kd_barang2" id="kd_barang2" class="form-control">
                                    <option>-- pilih --</option>
                                    <?
                                    
                                    while($items2 = mysql_fetch_array($result2)){
                                        $kd_barang2   = $items2["nilai_KodeBarang"];
                                        $id_barang2   = $items2["nilai_id"];
                                        ?>
                                        <option value="<?=$kd_barang2?>"><?=$kd_barang2?></option>
                                        <?}?>
                                    </select>
                                    <div class="col-sm-4">
                                        <input type="text" id="value31" class="form-control" placeholder="Value 1">
                                        <input type="text" id="value32" class="form-control" placeholder="Value 2">
                                        <input type="text" id="value33" class="form-control" placeholder="Value 3">
                                    </div>
                                </div>

                                

                            <form action="hasil.php" target="_BLANK" method="POST">
                                <input type="hidden" name="id1" id="id1" required>
                                <input type="hidden" name="id2" id="id2" required>
                                <input type="hidden" name="id3" id="id3" required>
                                <div ><button type="submit">Proses</button></div>
                            </form>

                           <!-- asassa -->
                            
                            
    
                            
                            
                            
                            
                                                       
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
         
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php 
    } else {
    include("includes/functions.php");
    header("location:index.php");
    }
    ?>
    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <script src="dist/js/jquery.js"></script>
    <script src="dist/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
        $("#kd_barang").change(function() {
                    var kd_barang = $("#kd_barang").val();

                    $.ajax({
                        url : "get_nilai_barang.php",
                        type : "POST",
                        data : "kd_barang=" + kd_barang,
                        success : function(data) {
                            var res = JSON.parse(data);
                            $('#value11').val(res.nilai_JumTrans);
                            $('#value12').val(res.nilai_JumTerj);
                            $('#value13').val(res.nilai_RataPenj);
                            $('#id1').val(res.nilai_id);
                        }
                    });
                });
        $("#kd_barang1").change(function() {
                    var kd_barang1 = $("#kd_barang1").val();

                    $.ajax({
                        url : "get_nilai_barang.php",
                        type : "POST",
                        data : "kd_barang=" + kd_barang1,
                        success : function(data) {
                            var res = JSON.parse(data);
                            $('#value21').val(res.nilai_JumTrans);
                            $('#value22').val(res.nilai_JumTerj);
                            $('#value23').val(res.nilai_RataPenj);
                            $('#id2').val(res.nilai_id);

                        }
                    });
                });
        $("#kd_barang2").change(function() {
                    var kd_barang2 = $("#kd_barang2").val();

                    $.ajax({
                        url : "get_nilai_barang.php",
                        type : "POST",
                        data : "kd_barang=" + kd_barang2,
                        success : function(data) {
                            var res = JSON.parse(data);
                            $('#value31').val(res.nilai_JumTrans);
                            $('#value32').val(res.nilai_JumTerj);
                            $('#value33').val(res.nilai_RataPenj);
                            $('#id3').val(res.nilai_id);

                        }
                    });
                });
    });
    
    </script>

</body>

</html>