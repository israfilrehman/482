<?php
  $con= mysqli_connect("localhost","root","");
  $conn= mysqli_select_db($con,"travel_and_tour");
 /*if($conn)
   echo("connected");
  else
   echo("not connected");
*/
?>


<!DOCTYPE html>
<html>

<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>

<body style="background-color:#7f8c8d">

	<div id="main-wrapper">
		<center>
			<h2>Registration Form</h2>
			<img src="imagesstore/member-portal.jpg" class="image" />
		</center>

		<form  onsubmit="return validate()" class="myform" action="registration.php"  method= "POST">
			
			<label>Full Name:</label><br />
			<input type="text" name="username" class="inputvalues" placeholder="Full Name" required /><br/><br/>

			<label>Gender:</label><br />
			<input type="radio" name="gender"  value="male" checked required />Male
			<input type="radio" name="gender" value="female" required />Female<br/><br/>

			<label>Age:</label><br />
			<input type="number" name="age" class="inputvalues" placeholder="Age" required /><br/><br/>

			<label>Email:</label><br />
			<input type="text" id="email" name="email" class="inputvalues" placeholder="Email account" required />
			<label id="label1" style="color: red; visibility: hidden;">Invalid</label><br />

			<label>Phone No:</label><br />
			<input type="text" id="phone" name="phone" class="inputvalues" placeholder="Phone number" required />
			<label id="label2" style="color: red; visibility: hidden;">Invalid</label><br />

			<label>Password:</label><br />
			<input type="password" id="password" name="password" class="inputvalues" placeholder="At least 5 char/digit" required />
			<label id="label3" style="color: red; visibility: hidden;">Invalid</label><br />

			<label>Confirm Password:</label><br />
			<input type="password" name="cpassword" class="inputvalues" placeholder="Confirm password" required /><br />

			<input type="submit" name="submit_btn" id="signup_btn" value="Sign Up" /><br />

			<a href="homepage.php"> <input type="button" id="back_btn" value="Back" /><br /></a>
		</form>
	</div>

</body>
</html>

<?php
	if(isset($_POST['submit_btn']))
	{
		$username=$_POST['username'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];

		if($password==$cpassword)
		{
			$query= "select *from register where email = '$email' ";
			$query_run= mysqli_query($con, $query);
			if(mysqli_num_rows ($query_run)> 0)
			{
				echo('<script tpye="text/javascript">alert("Same email user exist") </script>');
			}
			
			else
			{
				$query2= "insert into register values ('','$username','$gender','$age','$email','$phone','$password')";
				$query_run2= mysqli_query($con, $query2);
				if($query_run2)
				{
					echo('<script tpye="text/javascript">alert("Signed up successful!"); </script>');	
				}
				else
				{
					echo('<script tpye="text/javascript">alert("Error!"); </script>');
				}
			}
		}
		else
		{
			echo('<script tpye="text/javascript">alert("Password does not match with Confirm Password!"); </script>');
		}
	}	
?>

<script>
	function validate() {
		var text1 = document.getElementById("email").value;
		var text2 = document.getElementById("phone").value;
		var text3 = document.getElementById("password").value;

		var regx1 = /^([a-z 0-9\.-]+)@([a-z 0-9]+)[.]([a-z]{2,8})(.[a-z]{2,8})?$/;
		var regx2 = /^[0][1][3 5 6 7 8 9][0-9]{8}$/;

		if (regx1.test(text1) && regx2.test(text2) && text3.length >= 5) {
			return true;
		}

		else if (regx1.test(text1) == 0 && regx2.test(text2) == 0 && text3.length < 5) {

			document.getElementById("label1").style.visibility = "visible";
			document.getElementById("label2").style.visibility = "visible";
			document.getElementById("label3").style.visibility = "visible";
			return false;
		}
		else if (regx1.test(text1) == 0 && regx2.test(text2) == 0) {
			document.getElementById("label1").style.visibility = "visible";
			document.getElementById("label2").style.visibility = "visible";
			return false;
		}
		else if (regx2.test(text2) == 0 && text3.length < 5) {
			document.getElementById("label2").style.visibility = "visible";
			document.getElementById("label3").style.visibility = "visible";
			return false;
		}
		else if (regx1.test(text1) == 0 && text3.length < 5) {
			document.getElementById("label1").style.visibility = "visible";
			document.getElementById("label3").style.visibility = "visible";
			return false;
		}
		else if (regx1.test(text1) == 0) {
			document.getElementById("label1").style.visibility = "visible";
			return false;
		}
		else if (regx2.test(text2) == 0) {
			document.getElementById("label2").style.visibility = "visible";
			return false;
		}

		else (text3.length < 5)
		{
			document.getElementById("label3").style.visibility = "visible";
			return false;
		}
	}
	</script>

	