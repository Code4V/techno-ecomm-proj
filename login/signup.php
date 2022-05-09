<?php
	include('dbconnect.php');
	session_start();
	
	$checkmail='';
	
	if(isset($_POST['submit'])){
		
		$username = $_POST['uname'];
		$email = $_POST['mail'];
		$password = $_POST['psw'];
		
		$check = "SELECT email, password FROM users WHERE email = '$email'";
		$result = mysqli_query($conn, $check);
		
		while($row = mysqli_fetch_array($result)){
			$checkmail = $row['email'];	
			$checkpass = $row['password'];	
		}
		
		mysqli_free_result($result);
		
		if($checkmail == $email){
			echo "<script>alert('Please use another email.')</script>";
		}
		else{
			$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
		
			if(mysqli_query($conn, $sql)){
			
				header('location:login.php');
			
			}
			else{
				echo "An error occured.";
			}
		}
		

	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign up Page</title>
	<link rel="stylesheet" href="loginstyle.css">
	 <script src="https://kit.fontawesome.com/269238eb9d.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <a href="login.php"><h2 class="inactive underlineHover"> Sign In </h2></a>
    <h2 class="active">Sign Up </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <i class="fa-solid fa-user"></i>
    </div>

	<!-- Sign up Form -->
	<form action="signup.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="uname" placeholder="Username">
	  <input type="text" id="password" class="fadeIn third" name="mail" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="psw" placeholder="Password">
      <input type="submit" class="fadeIn fourth" name="submit" value="Sign Up">
    </form>


    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>


</body>


</html>