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
            $namadepan = get_users_field('user_namadepan');
            $namabelakang = get_users_field('user_namabelakang');
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
                    <div class="page-header">
                    </a><h1 >Atom Jaya Group<br><small>Distributor Terpal tenda, Plastik Beras, Karung Beras dan Segala Jenis Karung Plastik Pertanian  </small></h1>
                </div>
                </div>
                <div class="col-lg-12">
                    <p><center><img src="images/produk.jpg" width="30%"></center></p>

                    <p align="justify"><STRONG> Toko Atom Jaya </STRONG>adalah salah satu perusahaan dalam bidang perdagangan barang yang berdomisili di pasar Bintoro yang merupakan pasar induk di Kabupaten Demak. Barang-barang yang dijual di toko atom jaya bersasaran dalam bidang pertanian, antara lain adalah terpal tenda, Karung beras, plastik beras, Karung plastic,  waring ikan, waring sayur, selang diesel, plastic selang,  dan lain lain. Atom Jaya merupakan salah satu distributor barang dalam bidang pertanian yang menjual untuk grosir maupun eceran. Banyaknya ragam produk yang dijual dan banyaknya permintaan membuat toko atom jaya kesulitan dalam memenuhi permintaan karena stok barang yang tidak mumpuni dalam memenuhi permintaan. </p>  <br>      

                   
                     <p align="justify">Metode <strong>Klastering</strong> adalah Suatu metode pengelompokkan menjadi beberapa kriteria yang ditentukan. Dengan menerapkan metode <strong>Klastering</strong> pada sistem ini menjadi 3 kriteria yaitu barang yang <strong> sangat laku, laku dan kurang laku </strong>diharapkan dapat memudahkan <strong>Atom Jaya Group</strong> dalam menentukan strategi stok barang sehingga barang tidak sampai ksong serta meminimalisir kelebihan stok barang. Dengan demikian diaharapkan <strong>Atom Jaya Group</strong> bisa mendapatkan laba secara optimal sehingga dapat mengembangkan, memajukan dan mempertahankan kelangsungan hidup usahanya ketingkat yang lebih tinggi.</p>
                     
                </div>
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