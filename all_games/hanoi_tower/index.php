<!DOCTYPE>
<html>
	<head>
		<meta name="author" content="Arty">

		<!-- Latest compiled and minified CSS -->
		<script type="text/javascript" src="../universal_files/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="../universal_files/js/my_library.js"></script>

		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<script type="text/javascript" src="js/main.js"></script>
		<link rel="stylesheet" href="../universal_files/css/bootstrap.min.css">

		<title>Brain Game</title>
	</head>

	<body>

		<?php include 'test.php';?>

		<?php echo "It works!"; ?>

		<div id="canves">
		    <div class="restart"><i class="fa fa-repeat"></i></div>
		    <div class="curtain"></div>
		    <ul id="score-panel">
		        <li><i class="fa fa-star"></i></li>
		        <li><i class="fa fa-star"></i></li>
		        <li><i class="fa fa-star"></i></li>
		        <li>
		            <h1> <span id="moves-num"></span><span> Moves</span></h1>
		        </li>
		    </ul>
		    <ul class="tower" id="tower-1"></ul>
		    <ul class="tower" id="tower-2"></ul>
		    <ul class="tower" id="tower-3"></ul>
		</div>
	</body>
</html>