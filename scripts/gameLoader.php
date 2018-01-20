<?php

include 'connection.php';

$gameId = $_GET['id'];

/* SQL statement to query the database */
$query = "SELECT * FROM games WHERE id = '$gameId'";

/* query the database */
$result = mysqli_query($con,$query);


/* Allow access if a matching record was found, else deny access. */
if ($row = mysqli_fetch_assoc($result))
	{

	
	?>
		<iframe src="<?php echo $row["url"]; ?>" style="width:100%; height: calc(100vh  - 70px)"> 
        <p>Your browser does not support iframes.</p>
      </iframe>
    <?php
	}
else
	{
	
	}

mysqli_close($con);  
?>
