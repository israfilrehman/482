<?php
    $con= mysqli_connect("localhost", "root","");
    mysqli_select_db($con, "travel_and_tour");
    $query = "SELECT * from add_package";
    $result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>

<head>
	<title>View Packages</title>
    <link rel="stylesheet" type="text/css" href="css/addpackage.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/admin_home_page.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:white; ">
        <nav>
                <ul>
                    <li><a href="adminpanel.php">Dash Board</a></li>
                    <li><a href="addpackage.php">Add Pakage</a></li>
                    <li><a href="viewpackage_details.php">View Pakage Details</a></li>
                    <li><a href="#">View Booking Details</a></li>
                    <li><a href="viewuser_details.php">View User Details</a></li>
                    <li><a href="homepage.php">Log Out</a></li>
                </ul>
            </nav>

	<center>
		<h1>View Packages</h1>
			<table id="table2" style="text-align:center;">
            <thead>
                
                    <th id="th1">Pakage Id</th> 
                    <th id="th1">Place Name</th><th id="th1">Stay Cost</th> 
                    <th id="th1">Bus Cost</th> 
                    <th id="th1">Train Cost</th>
                    <th id="th1">Plane Cost</th>
                    <th id="th1">Number Of Days</th>
                    <th id="th1">Total Cost</th>
                    <th id="th1">Image</th>
                    <th id="th1">Edit/Delete</th>
                
            </thead>
            <tbody>
                <?php while ($list = mysqli_fetch_assoc($result)) {
                    
                ?>
                <tr>
                    <td><?=$list['package_id']?></td>
                    <td><?=$list['package_name']?></td>
                    <td><?=$list['stay_amount']?></td>
                    <td><?=$list['bus_amount']?></td>
                    <td><?=$list['train_amount']?></td>
                    <td><?=$list['plane_amount']?></td>
                    <td><?=(($list['num_of_days']>=$list['num_of_night'])?$list['num_of_days']:$list['num_of_night'])?></td>
                    <td><?=$list['Total']?></td>
                    <td><img src="imagesstore/<?=$list['img']?>" width="50dp" height="50dp"/></td>
                    <td><a href="edit_delete_package.php?edit=<?php echo $list['package_id']?>"
                    class="btn btn-success btn-xs">
                    <span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="edit_delete_package.php?delete=<?php echo $list['package_id']?>"
                         class="btn btn-danger btn-xs">
                         <span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
				
				
			</table>
			
</body>

</html>
