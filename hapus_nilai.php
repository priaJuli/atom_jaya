<?php
	include("includes/connection.php");
	
	//$bulan=$_GET['nilai_bulan'];
	$query= "DELETE from tbl_nilai ";
	$hasil=mysql_query($query);

	if($hasil){
		include "DataKlastering.php";
		//echo "<h4>delete data sukses</h4>";
	}else{
		echo "delete data gagal";
	}


?>