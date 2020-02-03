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
                    <h1 class="page-header">Data Produk</h1>
                    <a class="btn btn-warning btn-sm" style="margin-bottom: 25px" id="Insert" href="InputDataProduk.php">Tambah produk</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Produk Atom Jaya Group
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang </th>
                                            <th>Stok Barang</th>
                                            <th>Jumlah Transaksi </th>
                                            <th>Jumlah Terjual</th>
                                            <th>Rata Penjualan</th>
                                            <th>OPSI</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    include("includes/connection.php");
                                    $data_produk = mysql_query("SELECT * FROM `tbl_produk` ");
                                    while($row = mysql_fetch_array($data_produk)){
                                        $kid = $row['kar_id'];
                                        $kKodBar = $row['kar_KodBar'];
                                        $kNamaBarang = $row['kar_NamaBarang'];
                                        $kStokBarang = $row['kar_StokBarang'];
                                        $kJumTrans = $row['kar_JumTrans'];
                                        $kJumTerj = $row['kar_JumTerj'];
                                        $kRataPenju = $row['kar_RataPenj'];

                                                          
                                    ?>
                                        <tr class="odd gradeA">
                                            <td><?php echo $kKodBar;?></td>
                                            <td><?php echo $kNamaBarang;?></td>
                                            <td><?php echo $kStokBarang;?></td>
                                            <td><?php echo $kJumTrans;?></td>
                                            <td><?php echo $kJumTerj;?></td>
                                            <td><?php echo $kRataPenju;?></td>
                                            <td><a href="UpdateData.php?id=<?php echo $kid;?>"><button class="btn btn-warning btn-sm" id="detail">Edit</button></a>
                                            <a href="DeleteData.php?id=<?php echo $kid;?>"><button class="btn btn-warning btn-sm" id="hapus">Hapus</button></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
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