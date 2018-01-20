<!DOCTYPE>
<html lang="en">
	<head>
		<meta name="author" content="Arty">

		<!-- <link rel="stylesheet" href="../universal_files/css/bootstrap.min.css"> -->
		<!-- <script type="text/javascript" src="../universal_files/js/jquery-3.2.1.min.js"></script> -->
		<script type="text/javascript" src="../universal_files/js/my_library.js"></script>

		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<script type="text/javascript" src="js/main.js"></script>s
		<title>H_ng M_n</title>
	</head>

	<body>
		<div class="wrapper">
		   <h1>HangMan</h1>
		    <p>Use the alphabet below to guess the word, or click hint to get a clue. </p>
		</div>

		<div class="wrapper">
		    <div id="buttons">
		    </div>
		    <div id="categoryContent">
		    	<p id="catagoryName"></p>
		    </div>  
		    <div id="hold">
		    </div>
		    <p id="mylives"></p>
		     <canvas id="stickman">This Text will show if the Browser does NOT support HTML5 Canvas tag</canvas>

		    <div class="container">
		      <button id="hint">Hint</button>
		      <button id="reset">Play again</button>
		    </div>
		</div>




	</body>
</html>