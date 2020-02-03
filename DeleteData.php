<?php
	include("includes/connection.php");
	if(isset($_REQUEST['id'])){
		$kar_id = $_REQUEST['id'];

		$deleteq = mysql_query("DELETE FROM tbl_produk WHERE kar_id='$kar_id'");
		if($deleteq){
			echo "<script>alert('Data terhapus!');</script><script>window.location.href='DataProduk.php'</script>";
		}
	}else{
			echo "<script>alert('Gagal!')</script>";
	}
?>