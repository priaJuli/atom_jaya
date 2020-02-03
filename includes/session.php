<?php
session_start();

function masuk(){
	if (isset($_SESSION['user_username']) && !empty($_SESSION['user_username'])) {
		return true;
	} else {
		return false;
	}
}

function get_users_field($isi){
	$query = "select `$isi` from `tbl_users` where `user_username`='".$_SESSION['user_username']."'";
	if ($query_run = mysql_query($query)){
		if ($query_result = mysql_result($query_run, 0, $isi)){
			return $query_result;
		}
	}
}

?> 