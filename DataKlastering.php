<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Atom Jaya Group</title>

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
                    <h1 class="page-header">Data Transaksi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Transaksi Yang Akan diklaster
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Bulan</th>
                                            <th>Nama Barang</th>
                                            <th>Stok</th>
                                            <th>Jumlah Transaksi</th>
                                            <th>Jumlah Terjual</th>
                                            <th>Rata-rata Penjualan</th>
                                            <th>OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $out_nilai = mysql_query("SELECT * FROM `tbl_nilai` ORDER by `nilai_id` DESC ");
                                    while ($run_out = mysql_fetch_array($out_nilai)) {
                                        $oid = $run_out['nilai_id'];
                                        $operiode = $run_out['nilai_bulan'];
                                        $oNamaBarang = $run_out['nilai_NamaBarang'];
                                        $oStok = $run_out['nilai_Stok'];
                                        $oJumTrans = $run_out['nilai_JumTrans'];
                                        $oJumTerj = $run_out['nilai_JumTerj'];
                                        $oRataPenj = $run_out['nilai_RataPenj'];
                                       
                                        //$ohasil_point = $run_out['nilai_hasil_point'];
                                       


                                        ?>
                                        <tr>
                                            <td><?php echo $operiode;?></td>
                                            <td><?php echo $oNamaBarang;?></td>
                                            <td class="center"><?php echo $oStok;?></td>
                                            <td class="center"><?php echo $oJumTrans;?></td>
                                            <td class="center"><?php echo $oJumTerj;?></td>
                                            <td class="center"><?php echo $oRataPenj;?></td>
                                            
                                            <td>
                                            <form action="" method="post">
                                                    <input type="hidden" name="idkar" value="<?php echo $oid;?>">
                                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                                
                                            </td>
                                            <?php 
                                                if (isset($_POST['idkar'])) {
                                                    $idkar = $_POST['idkar'];
                                                    if (!empty($idkar)) {
                                                        $s = mysql_query("DELETE FROM tbl_nilai WHERE nilai_id='$idkar'");
                                                        if ($s) {
                                                            echo "<script>window.location.href='DataKlastering.php'</script>";
                                                        
                                                        }
                                                    }
                                                }
                                                ?>

                                        </tr>

                                        <?php

                                    } 
                                    ?>

                                    <?php
                                        $sql  = "SELECT * FROM tbl_nilai";
                                        $result = mysql_query($sql) or die (mysql_error());
                                        while ($row = mysql_fetch_array($result)  ) {
                                        //echo " = ". $row['nilai_absensi'];echo "<br/>";
                                        //$X = $row['nilai_absensi'];
        
                                        }

                                    ?>
                                        
                                    </tbody>
                                </table>

                            </div>
                            
                        </div>
                        
            
            <div style="float:left;width:60px;margin-top:10px;text-align:center;">
            <a style="margin-bottom: 35px" href="InputCentroidAwal.php"><button type="submit">Proses</button></a>
            </div>
              
            <form action="hapus_nilai.php">
                    <div style="float:left;width:150px;margin-top:10px;text-align:center;">
                    <button type="submit">Bersihkan data</button></div>
            </form>
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
    });
    </script>

</body>

</html>