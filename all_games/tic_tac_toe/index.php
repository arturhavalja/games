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

		<title>Tic Tac Toe</title>
	</head>

	<body>
		<div id="tic-tac-toe">
			<div class="span3 new_span">
				<div class="row">
					<h1 class="span3">Tic Tac Toe</h1>
					<div class="span3">
						<div class="input-prepend input-append">
						    <span class="add-on win_text">O won</span><strong id="o_win" class="win_times add-on"> 0 </strong><span class="add-on">time(s)</span>
					    </div>
					    <div class="input-prepend input-append">
						    <span class="add-on win_text">X won</span><strong id="x_win" class="win_times add-on"> 0 </strong><span class="add-on">time(s)</span>
					    </div>
					</div>
				</div>
				<ul class="row" id="game">
					<li id="one" class="btn span1" >+</li>
					<li id="two" class="btn span1">+</li>
					<li id="three" class="btn span1">+</li>
					<br>
					<li id="four" class="btn span1">+</li>
					<li id="five" class="btn span1">+</li>
					<li id="six" class="btn span1">+</li>
					<br>
					<li id="seven" class="btn span1">+</li>
					<li id="eight" class="btn span1">+</li>
					<li id="nine" class="btn span1">+</li>
					<br>
				</ul>
				<div class="clr">&nbsp;</div>
				<div class="row">
					<a href="#" id="reset" class="btn-success btn span3" >Restart</a>
				</div>
			</div>
		</div>
	</body>
</html>