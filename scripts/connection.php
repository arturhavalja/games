<?php
	$mysql_server = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "db_games";

	$con = mysqli_connect($mysql_server,$mysql_username,$mysql_password) or die('Can not connect to server');
	mysqli_select_db($con, $mysql_database) or die('Can not connect to database');
	
?>