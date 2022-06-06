<?php
	include('dbconnect.php');
	session_start();


	$checkmail='';
	//$_SESSION['email'] = '';

	if(isset($_POST['submit'])){
		
		$name = $_POST['fullName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $confCode = rand(100000, 999999);



		$check = "SELECT email FROM users WHERE email = '$email'";
		$result = mysqli_query($conn, $check);
		
		while($row = mysqli_fetch_array($result)){
			$checkmail = $row['email'];	

		}
		
		mysqli_free_result($result);
		
		if($checkmail == $email){
			echo "<script>alert('Please use another email.')</script>";
		}
		else{
			$sql = "INSERT INTO users(fullName, email, pass, contact, addR, code ) VALUES('$name', '$email', '$password', '$contact', '$address', '$confCode')";
            $confCode = 0;
			if(mysqli_query($conn, $sql)){
                header("location: otp.php?a=$email");
                

			
			}
			else{
				echo "An error occured.";
			}
		}
		
        
	}
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Sign Up</title>
    <link rel="icon" href="images/alien.png">
    <link rel="stylesheet" href="usersSignUp.css" />
</head>
<body>
    <div class="container">
        <div class="formTitle">USERS: Sign Up</div>
            <form action="usersSignUp.php" method="POST">
                <div class="userDetails">
                    <div class="inputBox">
                        <span class="details">Name</span>
                        <input type="text" id="name" name="fullName" placeholder=" Enter Name" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Email</span>
                        <input type="text" id="email" name="email" placeholder="Enter Email" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Password</span>
                        <input type="password" id="pass" name="password" placeholder="Enter Password" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Contact</span>
                        <input type="text" id="contact" name="contact" placeholder="Enter Contact Number" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Address</span>
                        <input type="text" id="address" name="address" placeholder="Enter Address" required>
                    </div>

                <br>
            
                

                </div>
                <div class="button">
                    <input type="submit" value="Sign Up" name="submit">
                </div>

                <a href="login.php"><h4>Login</h4></a>
            </form>
            
        </div>
    </div>
    
</body>
</html>
