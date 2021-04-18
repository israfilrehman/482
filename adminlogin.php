<!DOCTYPE html>
<html>
<head>
</head>
 <title>Login Page</title>
 <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</head>
<body style= "background-color:#7f8c8d">
    <h2 id="id"></h2>
	 <div id="main-wrapper">
	    <center>
		   <h2>Admin Login Form</h2>
		    <img src="imagesstore/member-portal.jpg" class="image"/>
		</center>
        
        <div class="myform" >
            <label>Email:</label><br/>
            <input type="text" id="email" name="email" class="inputvalues" placeholder="Enter Your Email" required/></br></br>
			
			<label>Password:</label><br/>
			<input type="password" id="password" name="password" class="inputvalues" placeholder="Password" required/><br/><br/>
			
            <center><input type="submit" name="login" id="login_btn" value="Login" /><br/></center>
			<center><a href="homepage.php"> <input type="button" id="back_btn" value="Back" /></a><br/></center>
			
		</div>	
		
 	</div>
     <script type="text/javascript" src="js/adminlogin.js"></script>
</body>	
</html>

