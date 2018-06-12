<?php
include('php/php_config.php');
$query = "SELECT * FROM `residency`";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result)){
	echo $row["type"];
}

?>