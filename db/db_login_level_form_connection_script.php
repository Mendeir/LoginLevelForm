<?php  

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database_name = "LoginLevelForm";

	// Create connection
	$connection = new mysqli($servername, $username, $password,$database_name);
	// Check connection
	if ($connection->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
?>