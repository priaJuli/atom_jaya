<?php
if(isset($_POST["id1"]) && isset($_POST["id2"]) && isset($_POST["id3"])){
  $id1 = $_POST["id1"];
    $id2 = $_POST["id2"];
    $id3 = $_POST["id3"];
  }else{
    echo "<script>alert('Inputkan terlebih dahulu centroid awal')</script>";
    echo "<script>window.location.href='InputCentroidAwal.php'</script>";
  }

    ERROR_REPORTING(E_ALL^E_WARNING^E_NOTICE^E_DEPRECATED);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		body{
			font-size:14px;
			font-family:tahoma;
			font-weight:bold;
		}
		table{
			border : 1px solid #000;
			text-align : center;
			font-family:tahoma;
			font-size:12px;
		}
		table tr th{
			border : 1px solid #000;
			background : gray;
			color : #FFF;
			padding:3px;
		}
		table tr td{
			border : 1px solid #000;
		}
	</style>
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
      include "objek.php";
	  include "ClusteringKMean.php";
	  include("includes/connection.php");
    
    $centroid1 = array();
    $centroid2 = array();
    $centroid3 = array();
      
      $out_nilai = mysql_query("SELECT * FROM `tbl_nilai` ORDER BY `nilai_id` ASC");
      while ($run_out = mysql_fetch_array($out_nilai)) {
        if($run_out["nilai_id"] == $id1){
          $centroid1[0] = $run_out['nilai_JumTrans'];
          $centroid1[1] = $run_out['nilai_JumTerj'];
          $centroid1[2] = $run_out['nilai_RataPenj'];
        }
        elseif($run_out["nilai_id"] == $id2){
          $centroid2[0] = $run_out['nilai_JumTrans'];
          $centroid2[1] = $run_out['nilai_JumTerj'];
          $centroid2[2] = $run_out['nilai_RataPenj'];
        }
        elseif($run_out["nilai_id"] == $id3){
          $centroid3[0] = $run_out['nilai_JumTrans'];
          $centroid3[1] = $run_out['nilai_JumTerj'];
          $centroid3[2] = $run_out['nilai_RataPenj'];
        }
      	$array = array('0' => $run_out['nilai_Stok'],
      				   '1' => $run_out['nilai_JumTrans'],
      				   '2' => $run_out['nilai_JumTerj'],
      				   '3' => $run_out['nilai_RataPenj'],
                 '4' => $run_out['nilai_NamaBarang']);

      	$objek[] = $array;
  	}
   //    while ($run_out = mysql_fetch_array($out_nilai)) {
   //    	$array = array('0' => $run_out['nilai_Stok'],
   //    				   '1' => $run_out['nilai_JumTrans'],
   //    				   '2' => $run_out['nilai_JumTerj'],
   //    				   '3' => $run_out['nilai_RataPenj']);

   //    	$objek[] = $array;
  	// }
  		

      // $centroid = array(array(19,50,2.63), /* Centroid 1*/
      //                   array(8,9,1.13),	/* Centroid 2 */
      //                   array(2,2,1)); /* Centroid 3 */
      ?>
        <div class="page-header">
          <h2>
            Hasil perhitungan Klastering K-Means
          </h2>
        </div>
        <div class="col-sm-12">
          <h4>
            Centroid Awal
          </h4>
        </div>
      <?php  
      $centroid = array($centroid1, /* Centroid 1*/
                        $centroid2, /* Centroid 2 */
                        $centroid3); /* Centroid 3 */
                    
      foreach ($centroid as $center) {
        echo "centroid1 -> ".$center[0]." -> ".$center[1]." -> ".$center[2]." ||<br>";
      }
      echo "<br><br>";
   //    for ($i=0;$i<count($_POST[$objek]);$i++){
			// $obj = $_POST[$objek];
			// $data = explode(",",$obj[$i]);
			// for ($j=0;$j<count($data);$j++){
			// 	$objek[$i][$j] = $data[$j];
			// }
	  // }



	  // for ($i=0;$i<count($_POST[$centroid]);$i++){
			// $cls = $_POST[$centroid];
			// $data = explode(",",$cls[$i]);
			// for ($j=0;$j<count($data);$j++){
			// 	$centroid[$i][$j] = $data[$j];
			// }
	  // }	  
	  

	  
	
	   //K-MEAN	   
	  echo "<div style='width:900px;float:center;'>";
      $clustering = new ClusteringKMean($objek, $centroid);
      $clustering->setClusterObjek(1);
      $Ratio = null;
      // if(!$Ratio){
      // 	$Ratio = $clustering->getRatio();
      // 	$clustering->setClusterObjek();
      // }
      $iter = 2;
      while ($Ratio != $clustering->getRatio()) {
      	$Ratio = $clustering->getRatio();
        $clustering->printRatio();
        echo "<br><br>";
      	$clustering->setCentroidCluster();
      	$clustering->setClusterObjek($iter);
      	$iter++;	
      }
      $clustering->getCentroidCluster();
	  echo "</div>";

	 // $hasil_serialize = serialize($objek);


	  
	 
?>	

</body>
</html>
