<?php 
	$con= mysqli_connect("localhost", "root","");
  	mysqli_select_db($con, "travel_and_tour");
  	$lastidfinal = "Auto Generated";
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
		$target = "imagesstore/".basename($_FILES['image']['name']);

		$imagest = $_FILES['image']['name'];

		$countday = 0;
		if($noDay>=$noNight){
			$countday = $noDay;
		}else {
			$countday = $noNight;
		}

		$total = (($stayAmount*$countday)+$busAmount+$trainAmount+$planeAmount);

		$query = "INSERT INTO add_package(package_id, package_name, description, stay_amount, bus_amount, train_amount, plane_amount, num_of_days, num_of_night, img, Total) VALUES ('$packageId','$packageName','$Description','$stayAmount','$busAmount','$trainAmount','$planeAmount','$noDay','$noNight','$imagest','$total')";
			
		mysqli_query($con, $query);
		$lastid = mysqli_insert_id($con);
		$lastidq = $lastid;
		$lastidfinal = $lastidq +1;
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			echo "Image Upload Successfully";
		}else{
			echo "Failed to upload image";
		}

		/*if(isset($_GET['edit'])){

		}*/


	}

 ?>

<!DOCTYPE html>
<html>

<head>
	<title>Add Package</title>
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
					<li><a href="viewuser_details.php">View User Details</a></li>
					<li><a href="homepage.php">Log Out</a></li>
				</ul>
			</nav>

	<center>
		<h1>Add Package</h1>
		<form enctype="multipart/form-data" method="POST" action="addpackage.php">
			<table>
				<tr>
					<td>
						<label class="label">Pakage Id:</label>
					</td>
					<td>
						<input class="input" type="text" name="pid" placeholder="<?=$lastidfinal?>"readonly required/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label">Place Name:</label>
					</td>
					<td>
						<input class="input" type="text" name="pName" required/>
					</td>
				</tr>

				<tr>
					<td>
						<label class="label">Description:</label>
					</td>
					<td>
						<textarea id="textarea" rows="4" cols="50" maxlength="250" name="desc"> </textarea>
					</td>
				</tr>

				<tr>
					<td>
						<label class="label">Stay Amount:</label>
					</td>
					<td>
						<input class="input" type="number" min="0" required name="stayAmount" />
					</td>
				</tr>
				<tr>
					<td>
						<label class="label">Bus Amount:</label>
					</td>
					<td>
						<input class="input" type="number" name="busAmount" min="0" />
					</td>
				</tr>
				<tr>
					<td>
						<label class="label">Train Amount:</label>
					</td>
					<td>
						<input class="input" type="number" name="trainAmount" min="0"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label">Plane Amount:</label>
					</td>
					<td>
						<input class="input" type="number" name="planeAmount"min="0"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="label">Number Of Days:</label>
					</td>

					<td><div style="word-spacing: 5px;">
							<input class="input" style="width:60px" type="number" min="0" name="noDay" required/>
							<label class="label">Number Of Nights:</label>
							<input class="input" style="width:50px" type="number" min="0" name="noNight" required/></td>
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
	</center>
<h1 id="h">HI</h1>
<h1 id="h">HI</h1>
<h1 id="h">HI</h1>
</body>

</html>
<script type="text/javascript" src="js/addpackage.js">   

</script>