<?php 
	include('functions.php');
	include_once("config.php");

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	
$id=$_REQUEST['id'];
$query = "DELETE FROM users WHERE id=$id"; 
$result = mysqli_query($mysqli, $query) or die ( mysqli_error());
header("Location: view_users.php"); 
?>