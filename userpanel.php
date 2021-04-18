<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Panel</title>
    <link rel="stylesheet" href="css/userpanel.css">
	
	<ul>
      <li></li>
	  
	  </ul>
	  <br>
	  <h1><center>Welcome to Our Side <?php echo $_SESSION['username']; ?></center></h1>
  </head>
  <body>
  

<div class="container">
  <a href="packages.php"><button class="btn btn1">Packages</button></a>
  <a href="homepage.php"><button onclick="<?php session_destroy(); ?>" class="btn btn4">Log Out</button></a>
</div>

  </body>
</html>


