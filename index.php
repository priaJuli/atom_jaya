<?php
include("includes/session.php");
include("includes/connection.php");

if(masuk()){
	$id = get_users_field('user_id');
    $username = get_users_field('user_username');
	//include ("home.php");
	header("location:home.php");
	
}
else {
	include("includes/functions.php");
	include("login.php");
}
?>
