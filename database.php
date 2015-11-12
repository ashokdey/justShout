<?php
	//connect to mySQL

	$con = mysqli_connect("localhost", "root", "password", "dbname");

	//testing connection

	if (mysqli_connect_errno()) {
		echo "Failed to connect to the database ". mysqli_connect_error();
	}
?>