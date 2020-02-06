<style type="text/css">
    .namauser{
        color: #286090;
    }
</style>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-brand">
                <table border="0">
                    <tr>
                        <td><img src="images/AtomJaya.png" width="50"></td>
                        <th>ATOM JAYA GROUP</th>
                    </tr>

                </table>
            </div>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <h4 class="namauser"><?php echo $username;?></h4>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>

                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>

                        <li>
                            <a href="DataProduk.php"><i class="fa fa-files-o fa-fw"></i>Data Produk </a>
                        </li>

                        <li>
                            <a href="DataKlastering.php"><i class="fa fa-files-o fa-fw"></i>Data Klastering </a>
                        </li>


                         <li>
                             <a href=""><i class="fa fa-tasks fa-fw"></i>Input Data <span class="fa arrow"></span></a>

                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="InputDataProduk.php">Input Data Produk</a>
                                </li>

                                 <li>
                                        <a href="InputNilai.php"></i>Input Data Klaster</a>
                                </li>
                              </ul>

                         </li>

                        <li>
                            <a href="alur_sistem.php"><i class="fa fa-files-o fa-fw"></i>Alur Sistem</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
