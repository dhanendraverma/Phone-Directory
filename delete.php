<?php

	include('connection.php');

	$id = $_GET['q'];


	$query = "DELETE FROM `contacts` WHERE id = '$id'";

	if (mysqli_query($conn, $query)) {
		header("location: sa.php");
	} else {
		echo 'Connot Delete';	
	}