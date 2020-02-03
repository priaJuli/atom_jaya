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
            
        ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php 
            include ('templates/menu.php');

        ?>
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Alur Jalannya program</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Alur Sistem (Bagaiman step by step dari sistem)
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><center>Alur</center></th>
                                            <th colspan="3x "><center>Dekskripsi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>User menginput data produk terlebih dahulu pada menu input data produk
                                            . 
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>User dapat menambahkan produk baru atau juga mengedit data produk pada halaman data produk dan user juga dapat menghapus data produk jika data produk sudah tidak dijual lagi yaitu dengan  cara menekan tombol hapus pada halaman data produk.
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Setelah produk sudah mempunyai value maka produk dapat di kelompokkan ke dalam 3 kriteria Sangat laku, Laku, dan Kurang Laku dengan menggunakan algoritma K-Means.</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Untuk dapat memproses mengelompokkan data produk menjadi 3 kriteria Sangat laku, Laku dan Kurang laku dengan cara user harus menginputkan data produk yang akan di kelompokkan pada halaman input data klastering</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Pada halaman input data klastering terdapat menu cari. Menu cari ini memilki fungsi searcing sehingga user hanya memasukkan kode barang maka data barang akan otomatis muncul dan user tinggal insert data.  </td>
                                           
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Setelah user menginputkan data klastering. Untuk memproses dalam mengelompokkan produk. User buka halaman data klastering lalu pilih menu proses. Data akan secara otomatis akan dikelompokkan menjadi 3 kriteria Sangat Laku, Laku, dan Kurang Laku.</td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
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