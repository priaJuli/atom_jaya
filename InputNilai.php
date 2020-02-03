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
                    <h1 class="page-header">Input Data Klaster</h1>
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
                            <?php 
                            include "bulan.php";

                            $bulan=date("m");
                            $KodBar="";
                            $NamaBarang="";
                            $StokBarang="";
                            $JumTrans="";
                            $kJumTerj = "";
                            $JumTerj = "";
                            $ketemu="";
                            $warna="";
                            if (isset($_POST['Kode_Barang'])) {
                                $kSearch = $_POST['Kode_Barang'];
                                if (!empty($kSearch)) {
                                    $que = mysql_query("SELECT * FROM tbl_produk WHERE kar_KodBar='".mysql_real_escape_string($kSearch)."'");
                                    $run_que = mysql_fetch_array($que);
                                    if ($run_que) {
                                        $KodBar = $run_que['kar_KodBar'];
                                        $NamaBarang = $run_que['kar_NamaBarang'];
                                        $StokBarang = $run_que['kar_StokBarang'];
                                        $JumTrans = $run_que['kar_JumTrans'];
                                        $kJumTerj = $run_que['kar_RataPenj'];
                                        $JumTerj = $run_que ['kar_JumTerj'];
                
                                        $ketemu = "Data ditemukan";
                                        $warna = "color:green;";
                                        
                                    } else {
                                        $ketemu = "Data tidak ditemukan";
                                        $warna = "color:red;";
                                    }
                                } else {
                                   
                                }
                            }

                            ?>
                            <form class="form-horizontal" role="form" action="" method="post">
                                <div class="form-group"> <!-- 1. Form Kode Barang  -->
                                    <label class="control-label col-sm-2" >Kode Barang :</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="Kode_Barang" placeholder="Kode Barang" value="<?php echo $KodBar;?>">
                                    </div>
                                    <div class="col-sm-2">
                                        <button class="btn btn-warning" name="k_cari">Cari</button>
                                    </div>
                                </div>
                            </form>
                            

                            <form class="form-horizontal" role="form" action="" method="post">
                                <div class="form-group"> <!-- 2. Form Nama Barang-->
                                    <label class="control-label col-sm-2" >Nama Barang :</label>
                                    <div class="col-sm-4">
                                        <input type="hidden" name="Search" value="<?php echo $KodBar;?>">
                                        <input type="text" class="form-control" name="Nama_Barang" placeholder="Nama (Auto)" value="<?php echo $NamaBarang;?>">
                                    </div>
                                    <label class="col-sm-4" style="<?php echo $warna;?>"><?php echo $ketemu;?></label>
                                </div>

                                <div class="form-group"> <!-- 3. form Bulan  --> 
                                    <label class="control-label col-sm-2" for="sel">Bulan :</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="bulan" placeholder="Bulan Sekarang" value="<?php echo bulan($bulan); ?>">
                                    </div>
                                </div>

                                <div class="form-group"> <!-- 4. Form Stok -->
                                    <label class="control-label col-sm-2" >Stok :</label> 
                                    <div class="col-sm-4">
                                       <input type="hidden" name="Search" value="<?php echo $KodBar;?>">
                                        <input type="text" class="form-control" name="K_Stok" placeholder="input stok" value="<?php echo $StokBarang; ?>">
                                    </div>
                                </div>

                                <div class="form-group"> <!-- 5. Form Jumlah Transaksi -->
                                    <label class="control-label col-sm-2" >Jumlah Transaksi :</label> 
                                    <div class="col-sm-4">
                                        <input type="hidden" name="Search" value="<?php echo $KodBar;?>">
                                        <input type="text" class="form-control" name="Jumlah_Transaksi" placeholder="Input Jumlah Transaksi" value="<?php echo $JumTrans; ?>">

                                      <!--  <select class="form-control" name="k_statusnuptk" value="<?php echo $KodBar;?>">
                                            <option value="<?php echo $JumTrans;?>"><?php echo $JumTrans; ?> </option>
                                            <option value="<?php echo "0";?>">non-PNS</option>
                                            <option value="<?php echo "1";?>">PNS</option>
                                        </select>  -->                                      
                                    </div>
                                </div>

                                <div class="form-group"> <!-- 6. Form Jumalh Terjual -->
                                    <label class="control-label col-sm-2" >Jumlah Terjual :</label> 
                                    <div class="col-sm-4">
                                        <input type="hidden" name="Search" value="<?php echo $KodBar;?>">
                                        <input type="text" class="form-control" name="Jumlah_Terjual" placeholder="input Jumlah Terjual" value="<?php echo $JumTerj;?>">   

                                    
                                      <!--   <select class="form-control" name="k_kedisiplinan" value="<?php echo $KodBar;?>">    
                                            <option value="<?php echo $kJumTerj;?>"><?php echo $kJumTerj; ?> </option>
                                            <option value="<?php echo "0";?>">kurang</option>
                                            <option value="<?php echo "1";?>">baik</option>
                                            <option value="<?php echo "2";?>">sangat baik</option>
                                        </select> -->
                                    </div>
                                </div>
                                <div class="form-group"> <!-- 7. Form Rata2 Penjualan -->
                                    <label class="control-label col-sm-2" >Rata-rata Penjualan  :</label> 
                                    <div class="col-sm-4">
                                        <input type="hidden" name="Search" value="<?php echo $KodBar;?>">
                                        <input type="text" class="form-control" name="Rata_Penjualan" placeholder="input Rata-rata penjualan" value="<?php echo $kJumTerj; ?>">

                                       <!-- <select class="form-control" name="k_TMT" value="<?php echo $KodBar;?>">    
                                            <option value="<?php echo $JumTerj;?>"><?php echo $JumTerj; ?> </option>
                                            <option value="<?php echo "1";?>">kurang dari 15 tahun</option>
                                            <option value="<?php echo "2";?>">16 - 25 tahun</option>
                                            <option value="<?php echo "3";?>">lebih dari 26 tahun</option>
                                        </select> -->
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
        $kbulan = $_POST['bulan'];
        $kSearch = $_POST['Search'];
        $kNamaBarang = $_POST['Nama_Barang'];
        $kStok = $_POST['K_Stok'];
        $kJumTrans = $_POST['Jumlah_Transaksi'];
        $kJumTerj = $_POST['Jumlah_Terjual'];
        $kRataPenj = $_POST['Rata_Penjualan'];
        
        $hasil_point = $kStok+$kJumTrans+$kJumTerj+$kRataPenj;

        $koneksi1 = mysql_query(" insert into tbl_nilai set nilai_bulan='$kbulan', nilai_KodeBarang='$kSearch', nilai_NamaBarang='$kNamaBarang', nilai_Stok='$kStok', nilai_JumTrans='$kJumTrans',
                                nilai_JumTerj='$kJumTerj', nilai_RataPenj='$kRataPenj',
                                nilai_hasil_point='$hasil_point' ");
       ?>
       <div class="alert alert-success">
                    <strong>Sukses!</strong> Data telah tersimpan.
        </div>
        <?php
       
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