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

        $id_Produk = $_REQUEST['id'];
        if(masuk()){
            $id = get_users_field('user_id');
            $namadepan = get_users_field('user_namadepan');
            $namabelakang = get_users_field('user_namabelakang');
            $username = get_users_field('user_username');
        ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php 
        include ('templates/menu.php');

        $query = mysql_query("SELECT * FROM tbl_produk WHERE kar_id='$id_Produk'");
        if ($run_query=mysql_fetch_array($query)) {
            $kid = $run_query['kar_id'];
            $kKodBar = $run_query['kar_KodBar'];
            $kNamaBarang = $run_query['kar_NamaBarang'];
            $kStokBarang = $run_query['kar_StokBarang'];
            $kJumTrans = $run_query['kar_JumTrans'];
            $kJumTerj = $run_query['kar_JumTerj'];
            $kRataPenj = $run_query['kar_RataPenj'];
        }
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Produk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detail <?php echo $kNamaBarang;?>
                        </div>
                       
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" action="" method="post">
                                <div class="form-group">
                                   <label class="control-label col-sm-2" >Kode Barang :</label>
                                    <div class="col-sm-4">
                                        <input type="hidden" name="k_id" value="<?php echo $kid;?>">
                                        <input type="text" class="form-control" name="Kode_Barang" placeholder="Input Kode Barang" value="<?php echo $kKodBar;?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" >Nama Barang :</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="Nama_Barang" placeholder="Input Nama Barang" value="<?php echo $kNamaBarang;?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" >Stok :</label> 
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="K_Stok" placeholder="input stok" value="<?php echo $kStokBarang; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                     <label class="control-label col-sm-2" >Jumlah Transaksi :</label> 
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="Jumlah_Transaksi" placeholder="Input Jumlah Transaksi" value="<?php echo $kJumTrans; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" >Jumlah Terjual :</label> 
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="Jumlah_Terjual" placeholder="input Jumlah Terjual" value="<?php echo $kJumTerj;?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" >Rata-rata Penjualan  :</label> 
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="Rata_Penjualan" placeholder="input Rata-rata penjualan" value="<?php echo $kRataPenj; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-4">
                                        <button class="btn btn-warning" type="submit" name="k_update"> Update </button>
                                        <a href="DataProduk.php" class="btn btn-warning">Kembali</a>
                                    </div>
                                </div>
                            </form>
                            
                            <?php
                            if (isset($_POST["k_update"])) {

                                 $uid = $_POST['k_id'];
                                 $unip = $_POST['Kode_Barang'];
                                 $unama = $_POST['Nama_Barang'];
                                 $uabsensi = $_POST['K_Stok'];
                                 $uNUPTK = $_POST['Jumlah_Transaksi'];
                                 $ukedisiplinan = $_POST['Jumlah_Terjual'];
                                 $uTMT = $_POST['Rata_Penjualan'];
                                 
                                 $upd = mysql_query("UPDATE tbl_produk SET kar_KodBar='".$unip."', kar_NamaBarang='".$unama."', kar_StokBarang='".$uabsensi."', kar_JumTrans='".$uNUPTK."', kar_JumTerj='".$ukedisiplinan."', kar_RataPenj='".$uTMT."' WHERE kar_id='".$uid."'");    
                            
                                if ($upd) {
                                    //include "guru.php";
                                    ?>
                                    <div class="alert alert-success">
                                        <strong>Sukses!</strong> Data telah diupdate.
                                    </div> <?php
                                    // echo "<script>window.location.href='DataKlastering.php'</script>";
                                }
                                else{
                                    // echo "GAGAL";
                                }
                            }else{
                                // echo "gagal";
                            } 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
           
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