<?php

session_start();

include 'connection.php';

$email = $_POST["email"];
$pass = sha1($_POST["password"]);

/* SQL statement to query the database */
$query = "SELECT * FROM users WHERE email = '$email'
         AND password = '$pass'";

/* query the database */
$result = mysqli_query($con,$query);

/* Allow access if a matching record was found, else deny access. */
if ($row = mysqli_fetch_assoc($result)){
	
	$_SESSION["access"] = "granted";
	$_SESSION["username"] = $row['username'];
	$_SESSION["email"] = $row['email'];
	$_SESSION["name"] = $row['name'];
	$_SESSION["id"] = $row['id'];
	header("Location: ../dashboard.php");

}
else{
	header("Location: ../login.php?status=invalid");
}

mysqli_close($con);  
?>
