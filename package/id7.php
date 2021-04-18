<?php
 
$con= mysqli_connect("localhost","root","");
$conn= mysqli_select_db($con,"travel_and_tour");

 $query= "select *from add_package where package_id='7' ";
 $result= mysqli_query($con,$query);
 $row= mysqli_fetch_assoc($result);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/id.css">
</head>
<body>
    <nav>
    	<ul>
            <li><a  href="../userpanel.php">Dash Board</a></li> 
			<li><a  href="../packages.php">Packages</a></li>
		</ul>
	</nav>
    <center><h2 style="text-decoration:underline;">Place Details</h2></center>




<table style="width:100%">
  <tr>
    <th rowspan="8"><img src="../imagesstore/<?php echo $row['img'] ?>"> </th>
  </tr>
  <tr>
    <td>Name: <?php echo $row['package_name'] ?></td>
  </tr>
	<tr>
    <td>Description: <?php echo $row['description'] ?> </td>
  </tr>
  <tr>
    <td>Number of Days: <?php echo $row['num_of_days'] ?><br><br>
    Number of Nights:  <?php echo $row['num_of_night'] ?></td>
  </tr>
  
   <tr>
    <td>Stay Rs: <?php echo $row['stay_amount'] ?></td>
  </tr>

   <tr>
    <td>Travelling:<br>
    <input type="radio" name="travelling">Bus: <?php echo $row['bus_amount'] ?><br>
    <input type="radio" name="travelling">Train: <?php echo $row['train_amount'] ?><br>
    <input type="radio" name="travelling">Plane: <?php echo $row['plane_amount'] ?>
    </td>
  
  </tr>
   <tr>
    <td>Date:</td>
  
  </tr>
   <tr>
    <td><strong>Total: <?php echo $row['Total'] ?></strong></td>
  
  </tr>
  <tr>
    <td><center><a href="../confirm.php"><button >Confirm</button></a></center></td>
    
  </tr>
</table>



</body>
</html>