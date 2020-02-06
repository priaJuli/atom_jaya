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
                    <h1 class="page-header">Input data produk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Inputkan Data Transaksi
                        </div>
                        <!-- /.panel-heading -->
<div class="panel-body">

                             <form class="form-horizontal" role="form" action="" method="post">
                                <div class="form-group"> <!-- 1. Form Kode Barang  -->
                                    <label class="control-label col-sm-2" >Kode Barang :</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control" name="Kode_Barang" placeholder="Kode Barang">
                                    </div>

                                </div>




                                <div class="form-group"> <!-- 2. Form Nama Barang-->
                                    <label class="control-label col-sm-2" >Nama Barang :</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control" name="Nama_Barang" placeholder="Nama Barang">
                                    </div>

                                </div>

                                <div class="form-group"> <!-- 4. Form Stok -->
                                    <label class="control-label col-sm-2" >Stok :</label>
                                    <div class="col-sm-4">

                                        <input type="text" class="form-control" name="K_Stok" placeholder="input stok" >
                                    </div>
                                </div>

                                <div class="form-group"> <!-- 5. Form Jumlah Transaksi -->
                                    <label class="control-label col-sm-2" >Jumlah Transaksi :</label>
                                    <div class="col-sm-4">

                                        <input type="text" class="form-control" name="Jumlah_Transaksi" placeholder="Input Jumlah Transaksi">
                                    </div>
                                </div>

                                <div class="form-group"> <!-- 6. Form Jumalh Terjual -->
                                    <label class="control-label col-sm-2" >Jumlah Terjual :</label>
                                    <div class="col-sm-4">

                                        <input type="text" class="form-control" name="Jumlah_Terjual" placeholder="input Jumlah Terjual" >
                                    </div>
                                </div>
                                <div class="form-group"> <!-- 7. Form Rata2 Penjualan -->
                                    <label class="control-label col-sm-2" >Rata-rata Penjualan  :</label>
                                    <div class="col-sm-4">

                                        <input type="text" class="form-control" name="Rata_Penjualan" placeholder="input Rata-rata penjualan">
                                    </div>
                                </div>

</div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-4">
                                        <button class="btn btn-primary" name="k_input"> Insert </button>
                                    </div>
                                </div>
                            </form>



                            <br><br>
                            <div style="float:left;width:500px;">

                            <?php
                                if(isset($_POST['k_input']))
    {

        $kKodBar = $_POST['Kode_Barang'];

        $kNamaBarang = $_POST['Nama_Barang'];
        $kStok = $_POST['K_Stok'];
        $kJumTrans = $_POST['Jumlah_Transaksi'];
        $kJumTerj = $_POST['Jumlah_Terjual'];
        $kRataPenj = $_POST['Rata_Penjualan'];

        // $hasil_point = $kStok+$kJumTrans+$kJumTerj+$kRataPenj;

        // $koneksi1 = mysql_query("INSERT INTO tbl_produk SET kar_KodBar='".$kKodBar."', kar_NamaBarang='".$kNamaBarang."', kar_Stok='".$kStok."', kar_JumTrans='".$kJumTrans."',
        //                         kar_JumTerj='".$kJumTerj."', kar_RataPenj='".$kRataPenj."'");
        $koneksi1 = mysql_query("INSERT INTO tbl_produk(kar_id,kar_KodBar,kar_NamaBarang,kar_StokBarang,kar_JumTrans,kar_JumTerj,kar_RataPenj) VALUES (0,'$kKodBar','$kNamaBarang','$kStok','$kJumTrans','$kJumTerj','$kRataPenj')");
        if($koneksi1){
            ?>

               <div class="alert alert-success">
                            <strong>Sukses!</strong> Data telah tersimpan.
                </div>
        <?php
      }else{
        echo "<div class='alert alert-success'>".var_dump(mysql_error($koneksidb))."</div>";
      }
    }else{
        
    }
                       ?>
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
