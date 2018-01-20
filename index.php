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

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>

    <script src="js/my_scripts.js"></script>

    <script src="js/bootstrap.min.js"></script>

  </head>

  <body>

    <!-- Navigation -->
    	<?php
            include "scripts/navbar.php";
            navbar("home");
    	?>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 text-center text-lg-left">Games</h1>

      <div class="row text-center text-lg-left">

        <?php
          include 'scripts/connection.php';
           $query = "select * from games";
           $sql = mysqli_query($con,$query);
           while($row = mysqli_fetch_array($sql))
           {
               ?>

        <div class="col-lg-4 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" id="<?php echo $row["id"]; ?>" src="<?php echo $row["cover_url"]; ?>" alt="">
          </a>
        </div>

        <?php } ?>
    </div>
    <!-- /.container -->

     <!-- Footer -->
      <?php
            include "scripts/footer.php";
            footer("footer");
      ?>
    <!-- </footer> -->

  </body>

</html>
