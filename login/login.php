<?php
	include('dbconnect.php');
	session_start();
	
	$checkmail='';
	$checkpass='';
	
	
	if(isset($_POST['submit'])){
		
		$email = $_POST['mail'];
		$password = $_POST['psw'];
		
		$check = "SELECT email, password FROM users WHERE email = '$email'";
		$result = mysqli_query($conn, $check);
		
		while($row = mysqli_fetch_array($result)){
			$checkmail = $row['email'];	
			$checkpass = $row['password'];	
		}
		
		mysqli_free_result($result);
		
		if($checkmail != $email && $checkpass != $password){
			echo "<script>alert('Wrong email or password.')</script>";
		}
		else{
			
			header('location:main.php');
			
		}
		

	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="loginstyle.css">
	 <script src="https://kit.fontawesome.com/269238eb9d.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <a href="signup.php"><h2 class="inactive underlineHover">Sign Up </h2></a>

    <!-- Icon -->
    <div class="fadeIn first">
      <i class="fa-solid fa-user"></i>
    </div>

    <!-- Login Form -->
    <form action="login.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="mail" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="psw" placeholder="Password">
      <input type="submit" class="fadeIn fourth" name="submit" value="Log In">
    </form>


    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>


</body>


</html>