<?php

	include('dbconnect.php');
	session_start();


	$checkcode='';
    $email = $_GET['a'];

	if(isset($_POST['submit'])){
		
		$confCode = $_POST['code'];

		$check = "SELECT email FROM users WHERE email = '$email'";
		$result = mysqli_query($conn, $check);
		
		while($row = mysqli_fetch_array($result)){
			$checkcode = $row['code'];	
		}
		
		mysqli_free_result($result);
		
		if($checkcode == $confCode){
			header('location: login.php');
		}
		else{
			echo "<script>alert('$checkcode')</script>";
		}
		

	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Sign Up</title>
    <link rel="icon" href="images/alien.png">
    <link rel="stylesheet" href="otp.css" />
</head>
<body>
    <div class="container">
        <div class="formTitle">Confirmation</div>
            <form action="otp.php" method="POST">
                <div class="userDetails">
                    <div class="inputBox">
                        
                        <input type="text" id="name" name="code" placeholder=" Verfication Code" required>
                    </div>

                

                </div>
                <div class="button">
                    <input type="submit" value="Confirm" name="submit">
                </div>

                <a href="login.php"><h4>Login</h4></a>
            </form>
            
        </div>
    </div>
    
</body>
</html>
