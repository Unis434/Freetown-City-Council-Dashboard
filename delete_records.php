<?php 
	include('functions.php');
	include_once("config.php");

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	
$pin=$_REQUEST['pin'];
$query = "DELETE FROM taxpayer WHERE pin=$pin"; 
$result = mysqli_query($mysqli, $query) or die ( mysqli_error());
header("Location: view_records.php"); 
?>