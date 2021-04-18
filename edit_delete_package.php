<?php 
	$con= mysqli_connect("localhost", "root","");
  	mysqli_select_db($con, "travel_and_tour");
  	$lastidfinal = "Auto Generated";
	if(isset($_GET['edit'])) {
		$packageId = $_GET['edit'];
		$query= "SELECT * from add_package where package_id = '$packageId'";
		$query_run= mysqli_query($con, $query);
		$result = mysqli_fetch_assoc($query_run);
	}

	if(isset($_GET['delete'])){
		$delete_id = $_GET['delete'];
		$sql = "DELETE FROM add_package WHERE package_id = '$delete_id'";
		mysqli_query($con, $sql);
		header('Location: viewpackage_details.php');
	}

	if (isset($_POST["submit"])) {
		$packageId = $_POST["pid"];
		$packageName = $_POST["pName"];
		$Description = $_POST["desc"];
		$stayAmount = $_POST["stayAmount"];
		$busAmount = $_POST["busAmount"];
		$trainAmount = $_POST["trainAmount"];
		$planeAmount = $_POST["planeAmount"];
		$noDay = $_POST["noDay"];
		$noNight = $_POST["noNight"];
		
		$countday = 0;
		if($noDay>=$noNight){
			$countday = $noDay;
		}else {
			$countday = $noNight;
		}

		$total = (($stayAmount*$countday)+$busAmount+$trainAmount+$planeAmount);

		$query ="UPDATE add_package SET package_name='$packageName',description = '$Description', stay_amount = '$stayAmount', bus_amount ='$busAmount', train_amount= '$trainAmount', plane_amount = '$planeAmount', num_of_days = '$noDay', num_of_night = '$noNight', Total ='$total' WHERE package_id='$packageId'";
		
		mysqli_query($con, $query);
		
		header('location:viewpackage_details.php');
	}

 ?>

<!DOCTYPE html>
<html>

<head>
	<title>Edit Package</title>
	<link rel="stylesheet" type="text/css" href="css/addpackage.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/admin_home_page.css">

</head>

<body style="background-color:white;">
		<nav>
				<ul>
					<li><a href="addpackage.php">Add Pakage</a></li>
					<li><a href="viewpackage_details.php">View Pakage Details</a></li>
					<li><a href="#">View Booking Details</a></li>
					<li><a href="viewuser_details.php">View User Details</a></li>
					<li><a href="homepage.html">Log Out</a></li>
				</ul>
			</nav>

	<center>
		<h1>Edit Package</h1>
		<form enctype="multipart/form-data" method="POST" action="edit_delete_package.php">
			<table>
				<tr>
					<td>
						<label class="label">Pakage Id:</label>
					</td>
					<td>
						<input class="input" type="text" name="pid" placeholder="<?php echo $lastidfinal?>" value="<?php echo $result['package_id']?>" readonly required/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label">Place Name:</label>
					</td>
					<td>
						<input class="input" type="text" name="pName" value="<?php echo $result['package_name']?>" required/>
					</td>
				</tr>

				<tr>
					<td>
						<label class="label">Description:</label>
					</td>
					<td>
						<textarea id="textarea" rows="4" cols="50" maxlength="250" name="desc"><?php echo $result['description']?></textarea>
					</td>
				</tr>

				<tr>
					<td>
						<label class="label">Stay Amount:</label>
					</td>
					<td>
						<input class="input" type="number" min="0" required name="stayAmount" value="<?php echo $result['stay_amount']?>"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label">Bus Amount:</label>
					</td>
					<td>
						<input class="input" type="number" name="busAmount" value="<?php echo $result['bus_amount']?>" min="0" />
					</td>
				</tr>
				<tr>
					<td>
						<label class="label">Train Amount:</label>
					</td>
					<td>
						<input class="input" type="number" value="<?php echo $result['train_amount']?>" name="trainAmount" min="0"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label">Plane Amount:</label>
					</td>
					<td>
						<input class="input" type="number" value="<?php echo $result['plane_amount']?>" name="planeAmount"min="0"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label">Number Of Days:</label>
					</td>

					<td><div style="word-spacing: 5px;">
							<input class="input" style="width:60px" type="number" min="0" name="noDay" value="<?php echo $result['num_of_days']?>" required/>
							<label class="label">Number Of Nights:</label>
							<input class="input" style="width:50px" type="number" min="0" name="noNight" value="<?php echo $result['num_of_night']?>" required/></td>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label">Add Image:</label>
					</td>
					<td>
						<input class="input" type="file" id="image" name="image" accept=".jpg,.jpeg,.png" 
						onchange="PreviewImage()" placeholder="select image"/>	
					</td>
				</tr>
				<tr>
					<td></td>
					<td><img src="#" id="uploadPreview" alt="" class="avatar" ></td>
				</tr>
			</table>
			<center>
				<button type="submit" name="submit" style="width:150px; font-size: 20px; border: 1px solid black;" >Submit</button>
               
			</center>
		</form>
        <a href="viewpackage_details.php" style="text-decoration:none;"> <button  style="width:150px; font-size: 20px; margin:20px; border: 1px solid black;" >Cancel</button></a>
	</center>
<h1 id="h">HI</h1>
<h1 id="h">HI</h1>
<h1 id="h">HI</h1>

</body>

</html>
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>