<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEM PENDUKUNG KEPUTUSAN</title>

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
                    <h1 class="page-header">Penghitungan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Inputkan nilai Kriteria untuk menilai kinerja guru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php 
                            $nip="";
                            $namakaryawan="";
                            $absensi="";
                            $NUPTK="";
                            $kedisiplinan = "";
                            $TMT = "";
                            $usia = "";
                            $ijazah = "";
                            $ketemu="";
                            $warna="";
                            if (isset($_POST['k_nip'])) {
                                $knip = $_POST['k_nip'];
                                if (!empty($knip)) {
                                    $que = mysql_query("SELECT * FROM tbl_karyawan WHERE kar_nip='".mysql_real_escape_string($knip)."'");
                                    $run_que = mysql_fetch_array($que);
                                    if ($run_que) {
                                        $nip = $run_que['kar_nip'];
                                        $namakaryawan = $run_que['kar_nama'];
                                        $absensi = $run_que['kar_absensi'];
                                        $NUPTK = $run_que['kar_NUPTK'];
                                        $kedisiplinan = $run_que['kar_kedisiplinan'];
                                        $TMT = $run_que ['kar_TMT'];
                                        $usia = $run_que ['kar_usia'];
                                        $ijazah = $run_que ['kar_ijazah'];
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
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" >NIP :</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="k_nip" placeholder="NIP" value="<?php echo $nip;?>">
                                    </div>
                                    <div class="col-sm-2">
                                        <button class="btn btn-warning" name="k_cari">Cari</button>
                                    </div>
                                </div>
                            </form>
                            

                            <form class="form-horizontal" role="form" action="" method="post">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" >Nama Karyawan :</label>
                                    <div class="col-sm-4">
                                        <input type="hidden" name="k2_nip" value="<?php echo $nip;?>">
                                        <input type="text" class="form-control" name="k_nama" placeholder="Nama (Auto)" value="<?php echo $namakaryawan;?>">
                                    </div>
                                    <label class="col-sm-4" style="<?php echo $warna;?>"><?php echo $ketemu;?></label>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="sel">Bulan :</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="bulan" placeholder="Bulan Sekarang">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" >Absensi :</label> * bernilai 0 jika absen lebih dari 3x tidak hadir 
                                    <div class="col-sm-4">
                                       <select class="form-control" name="k_absensi" value="<?php echo $nip;?>">
                                            <option value="<?php echo $absensi;?>"><?php echo $absensi; ?> </option>
                                            <option value="<?php echo "0";?>">bernilai 0</option>
                                            <option value="<?php echo "1";?>">bernilai 1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" >Status NUPTK :</label> * bernilai 0 jika non-PNS
                                    <div class="col-sm-4">
                                        <select class="form-control" name="k_statusnuptk" value="<?php echo $nip;?>">
                                            <option value="<?php echo $NUPTK;?>"><?php echo $NUPTK; ?> </option>
                                            <option value="<?php echo "0";?>">Bernilai 0</option>
                                            <option value="<?php echo "1";?>">Bernilai 1</option>
                                        </select>                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" >Kedisiplinan :</label> * buruk bernilai 0 // baik bernilai 1 // sangat baik bernilai 2
                                    <div class="col-sm-4">
                                         <select class="form-control" name="k_kedisiplinan" value="<?php echo $nip;?>">    
                                            <option value="<?php echo $kedisiplinan;?>"><?php echo $kedisiplinan; ?> </option>
                                            <option value="<?php echo "0";?>">Bernilai 0</option>
                                            <option value="<?php echo "1";?>">Bernilai 1</option>
                                            <option value="<?php echo "2";?>">Bernilai 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" >TMT Masa Kerja :</label> * kurang dari 15th bernilai 1 // 16-25th bernilai 2 // lebih dari 26th bernilai 3
                                    <div class="col-sm-4">
                                        <select class="form-control" name="k_TMT" value="<?php echo $nip;?>">    
                                            <option value="<?php echo $TMT;?>"><?php echo $TMT; ?> </option>
                                            <option value="<?php echo "1";?>">Bernilai 1</option>
                                            <option value="<?php echo "2";?>">Bernilai 2</option>
                                            <option value="<?php echo "3";?>">Bernilai 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" >Usia :</label> * kurang 30th nilai 1 // 31-41 nilai 2 // lebih dari 42 nilai 3 
                                    <div class="col-sm-4">
                                        <select class="form-control" name="k_usia" value="<?php echo $nip;?>">    
                                            <option value="<?php echo $usia;?>"><?php echo $usia; ?> </option>
                                            <option value="<?php echo "1";?>">Bernilai 1</option>
                                            <option value="<?php echo "2";?>">Bernilai 2</option>
                                            <option value="<?php echo "3";?>">Bernilai 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" >Status Ijazah :</label> * bernilai 1 jika S1 dan bernilai 2 jika S2 
                                    <div class="col-sm-4">
                                       <select class="form-control" name="k_ijazah" value="<?php echo $nip;?>" >
                                            <option value="<?php echo $ijazah;?>"><?php echo $ijazah; ?> </option>
                                            <option value="<?php echo "1";?>">Bernilai 1</option>
                                            <option value="<?php echo "2";?>">Bernilai 2</option>
                                        </select>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-4">
                                        <button class="btn btn-primary" name="k_input"> Insert </button>
                                    </div>
                                </div>
                            </form>
                           
                            <br><br>
                            <?php
                                if(isset($_POST['k_input']))
    {
        $kbulan = $_POST['bulan'];
        $knip = $_POST['k2_nip'];
        $knama = $_POST['k_nama'];
        $kabsensi = $_POST['k_absensi'];
        $knuptk = $_POST['k_statusnuptk'];
        $kedisiplinan = $_POST['k_kedisiplinan'];
        $kTMT = $_POST['k_TMT'];
        $kusia = $_POST['k_usia'];  
        $kijazah = $_POST['k_ijazah'];
        $hasil_point = $kabsensi+$knuptk+$kedisiplinan+$kTMT+$kusia+$kijazah;

        $koneksi1 = mysql_query(" insert into tbl_nilai set nilai_bulan='$kbulan', nip='$knip', nama='$knama', nilai_absensi='$kabsensi', nilai_NUPTK='$knuptk',
                                nilai_kedisiplinan='$kedisiplinan', nilai_TMT='$kTMT', nilai_usia='$kusia', nilai_ijazah='$kijazah', 
                                nilai_hasil_point='$hasil_point' ");
       ?>
       <div class="alert alert-success">
                    <strong>Sukses!</strong> Data telah tersimpan.
        </div>
        <?php
       
    } 

                            ?>
                            <div class="row">
                				<div class="col-lg-12">
                    				<h3 class="page-header">Nilai Guru</h3>
                				</div>
                				
            				</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>Bulan</th>
                                            <th>Nama</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th>C5</th>
                                            <th>C6</th>
                                            <th>C7</th>
                                            <th>C8</th>
                                            <th>OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                           			$out_nilai = mysql_query("SELECT * FROM `tbl_nilai`");
									while ($run_out = mysql_fetch_array($out_nilai)) {
                                        $oid = $run_out['nilai_id'];
										$operiode = $run_out['nilai_bulan'];
										$onama = $run_out['nama'];
										$oabsensi = $run_out['nilai_absensi'];
										$onuptk = $run_out['nilai_NUPTK'];
										$okedisplinan = $run_out['nilai_kedisiplinan'];
										$oTMT = $run_out['nilai_TMT'];
										$ousia = $run_out['nilai_usia'];
                                        $oijazah = $run_out['nilai_ijazah'];
                                        $ohasil_point = $run_out['nilai_hasil_point'];
                                        $prediksi = $run_out['prediksi']


                                    	?>
                                    	<tr>
                                            <td><?php echo $operiode;?></td>
                                            <td><?php echo $onama;?></td>
                                            <td class="center"><?php echo $oabsensi;?></td>
                                            <td class="center"><?php echo $onuptk;?></td>
                                            <td class="center"><?php echo $okedisplinan;?></td>
                                            <td class="center"><?php echo $oTMT;?></td>
                                            <td class="center"><?php echo $ousia;?></td>
                                            <td class="center"><?php echo $oijazah;?></td>
                                            <td class="center"><?php echo $ohasil_point;?></td>
                                            <td class="center"><?php echo $prediksi;?></td>
                                            <td>
                                                <?php 
                                                if (isset($_POST['idkar'])) {
                                                    $idkar = $_POST['idkar'];
                                                    if (!empty($idkar)) {
                                                        $s = mysql_query("DELETE FROM tbl_nilai WHERE nilai_id='$idkar'");
                                                        if ($s) {
                                                        
                                                        }
                                                    }
                                                }
                                                ?>

                                                <form action="" method="post">
                                                    <input type="hidden" name="idkar" value="<?php echo $oid;?>">
                                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                                </form>

                                                
                                            </td>
                                        </tr>

                                    	<?php

                            		} 
                            		?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                                                       
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