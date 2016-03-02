<?php

	$host="localhost";
	$user="tombuckl_d8admin";
	$userpass='13012481';
	$schema="tombuckl_projectkyaneos";
	$conn = new mysqli($host,$user,$userpass,$schema);
	if(mysqli_connect_errno()) {
		echo "Could not connect to database: ".mysqli_connect_errno();
		exit;
	}

?>
