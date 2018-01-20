<?php

include 'connection.php';

$email = $_POST["email"];
$pass = sha1($_POST["password"]);

/* SQL statement to query the database */
$query = "SELECT * FROM users WHERE email = '$email'
         AND password = '$pass'";

/* query the database */
$result = mysqli_query($con,$query);

/* Allow access if a matching record was found, else deny access. */
if (mysqli_fetch_row($result))
	{
	session_start();
	header("Cache-control: private");
	$_SESSION["access"] = "granted";
	header("Location: ../dashboard.php");
	}
else
	{
	header("Location: ../login.php?status=invalid");
	}

mysqli_close($con);  
?>
