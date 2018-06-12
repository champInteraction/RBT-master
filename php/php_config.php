<?php
// establishing connection
$conn = mysqli_connect("localhost","root","root","rbt");
if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} else{
		echo "Connected successfully";
		
	}

?>