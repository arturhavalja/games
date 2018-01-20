<?php
session_start();

include 'connection.php';

function getAllUsers(){
	global $con;
	$user_id = $_SESSION['id'];

	$sql = "SELECT * FROM users WHERE id <> $user_id ";

	$result = mysqli_query($con,$sql);

	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$users[] = $row ;
	}

	return $users;
}

function getAllGames(){
	global $con;
	$user_id = $_SESSION['id'];
	
	$sql = "SELECT * FROM games";

	$result = mysqli_query($con,$sql);

	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$users[] = $row ;
	}

	return $users;
}


function getAllNotifications(){
	global $con;
	$user_id = $_SESSION['id'];
	
	$sql = "SELECT u.username, g.id as game_id, g.url,u.id as user_id, g.name FROM user_requests ur
			INNER JOIN users u on ur.receiver_id = u.id 
			INNER JOIN games g on ur.game_id = g.id 
			 WHERE receiver_id = $user_id AND seen <> 1
			 group by ur.id ";

	$result = mysqli_query($con,$sql);

	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$users[] = $row ;
	}

	return $users;
}


function getAllHistory(){
	global $con;
	$user_id = $_SESSION['id'];
	
	$sql = "SELECT * FROM user_score 
			INNER join games on user_score.game_id = games.id
			where user_score.user_id = $user_id ";

	$result = mysqli_query($con,$sql);

	$games = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$games[$row['name']][] = array(
			'score' => $row['score'],
			'time' => $row['created_at']
		) ;
	}

	return $games;
}