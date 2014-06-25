<?php
	require_once("class/DbModel.php");

	$colorId = (int)$_GET['colorId'];
	$db = new DbModel();
	$username = 'root';
	$password = '%NN6prxt5';
	$hostName = 'localhost';
	$database = 'programming_test';
	$dbh = $db->connect($hostName, $database, $username, $password); 
	$results = $db->getAllVotes($dbh, $colorId);
	
	echo json_encode($results);
