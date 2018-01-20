<?php 
session_start();
include "connection.php";

if(isset($_POST['game_id'])){
	$game_id = $_POST['game_id'];
	$score = $_POST['score'];
	$user_id = $_SESSION['id'];

	$sql = "INSERT INTO user_score VALUES (NULL, $user_id, $game_id, $score, NOW()) ";

	$result = mysqli_query($con, $sql);

	echo json_encode($result);
}

