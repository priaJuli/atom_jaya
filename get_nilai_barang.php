	<?
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'atom_jaya';

	$mysqli = new mysqli($server, $username, $password, $database);
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST['kd_barang'];		
	$res = array();

	if (isset($id)) {

		$result = $mysqli->query("SELECT * FROM tbl_nilai WHERE nilai_KodeBarang='$id'");

		while($items=$result->fetch_object()){
			$res = $items;
		}
		
		echo json_encode($res);

		
		// include 'tampil_edit.php';
	} else{
		echo "salah";
	} ?>