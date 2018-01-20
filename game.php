<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Games</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <link href="css/my_styles.css" rel="stylesheet">
    <link href="css/landing.css" rel="stylesheet">


    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>

  <body>

    <!-- Navigation -->
        <?php
            include "scripts/navbar.php";
            navbar("game");
            setcookie("currentGame",$_GET["id"]);
        ?>

    <!-- Page Content -->
    <!-- <div class="container">

      <h1 class="my-4 text-center text-lg-left">About</h1>

      <div cl aass="row text-center text-lg-left"> -->

    <div class="container">

      <?php include "scripts/gameLoader.php"; ?>
      

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>

  </body>

</html>
