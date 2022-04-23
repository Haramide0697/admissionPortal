<?php 
require('core/connection.php');
$fetch = $conn->query("SELECT * FROM registration WHERE id = '$id'");
		$result = $fetch->fetchAll(PDO::FETCH_OBJ);
		$count = $fetch->rowCount();
		if ($count > 0) {
		}
	echo $formnumber;
?>