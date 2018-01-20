<?php 
session_start();
include "connection.php";

$sender = $_SESSION['id'];
$receiver = $_POST['user_id'];
$game_id = $_POST['game_id'];


$sql = " INSERT INTO user_requests(sender_id,receiver_id,game_id,seen,created_at) VALUES ($sender, $receiver, $game_id, 0, NOW() ) ";


$result = mysqli_query($con, $sql);

var_dump($result);