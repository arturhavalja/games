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

		<title>Reaction Game</title>
	</head>

	<body>
		<?php
            include "Games/../../../scripts/navbar.php";
            navbar("home");
    	?>
		
		<div class="info">
		  <div class="time"></div>
		  <div class="points"></div>
		</div>
		<div class="wall">
		</div>

		<?php
            include "Games/../../../scripts/footer.php";
            footer("footer");
    	?>
    	
	</body>

</html>