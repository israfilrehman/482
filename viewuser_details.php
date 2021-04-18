<?php
$con= mysqli_connect('localhost','root','');
 $conn=mysqli_select_db($con,'travel_and_tour');
 

 $query= "select *from register";
 $query_run= mysqli_query($con, $query);
 $num= mysqli_num_rows($query_run);
 /*if($num)
 {
     echo'<script type="text/javascript">alert("query run")</script>';
 }
 else {
    echo'<script type="text/javascript">alert("does not run")</script>';
 }*/
?>

<!DOCTYPE html>
<html>

<head>
	<title>View Users</title>
    <link rel="stylesheet" type="text/css" href="css/addpackage.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/admin_home_page.css">
</head>

<body style="background-color:white;">
        <nav>
                <ul>
                    <li><a href="adminpanel.php">Dash Board</a></li>
                    <li><a href="addpackage.php">Add Pakage</a></li>
                    <li><a href="viewpackage_details.php">View Pakage Details</a></li>
                    <li><a href="#">View Booking Details</a></li>
                    <li><a href="#">View User Details</a></li>
                    <li><a href="homepage.php">Log Out</a></li>
                </ul>
            </nav>

	<center>
		<h1>Users Information</h1>
			<table id="table2">
				<tr>
				    <th id="th1">User Id</th> 
                    <th id="th1">Full Name</th> 
                    <th id="th1">Gender</th> 
                    <th id="th1">Age</th> 
                    <th id="th1">Email</th>
                    <th id="th1">Phone Number</th>
                    
                    
				</tr>
                <?php                    
                    for($i=1; $i<=$num; $i++)
                    {
                        $row= mysqli_fetch_array($query_run);

                ?>
                <tr>
                    <td id="th1"><?php echo $row['Id'];  ?></td>
                    <td id="th1"><?php echo $row['username'];  ?></td>
                    <td id="th1"><?php echo $row['gender'];  ?></td>
                    <td id="th1"><?php echo $row['age'];  ?></td>
                    <td id="th1"><?php echo $row['email'];  ?></td>
                    <td id="th1"><?php echo $row['phone number'];  ?></td>
                    

                </tr>
                <?php

                    }
                ?>
			</table>
			
</body>

</html>
