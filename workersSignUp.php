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

        
        $data = $_POST['data'];
        $allData = implode(",", $data );
    /*
        echo gettype($name);
        echo gettype($email);
        echo gettype($password);
        echo gettype($contact);
        echo gettype($address);
        echo gettype($allData);
        
        */



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

			$sql = "INSERT INTO workers (fullName, email, pass, contact, addR ) VALUES ('$name', '$email', '$password', '$contact', '$address')";
            
			if(mysqli_query($conn, $sql)){
                $sql2 = "UPDATE workers SET jobDescrip = '$allData' WHERE email = $email";
                if(mysqli_query($conn, $sql2))
                {
                    header("location:main.php");
                }
                else{
                    echo "update error";
                }

                
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
    <link rel="stylesheet" href="workersSignUp.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="formTitle">WORKERS: Sign Up</div>
            <form action="workersSignUp.php" method="POST">
                <div class="userDetails">
                    <div class="inputBox">
                        <span class="details">Name</span>
                        <input class="box" type="text" id="name" name="fullName" placeholder=" Enter Name" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Email</span>
                        <input class="box"  type="text" id="email" name="email" placeholder="Enter Email" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Password</span>
                        <input class="box" type="password" id="pass" name="password" placeholder="Enter Password" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Contact</span>
                        <input class="box"  type="text" id="contact" name="contact" placeholder="Enter Contact Number" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Address</span>
                        <input class="box" type="text" id="address" name="address" placeholder="Enter Address" required>
                    </div>

                    <ul class="checkbox">
                        
                            <li><input type="checkbox" name="data[]" value="Carpenter">  Carpenter</li>
                            <li><input type="checkbox" name="data[]" value="Painter">  Painter</li>
                            <li><input type="checkbox" name="data[]" value="Electrician">  Electrician</li>
                            <li><input type="checkbox" name="data[]" value="Welder">  Welder</li>
                            <li><input type="checkbox" name="data[]" value="Plumber">  Plumber</li>
                            <li><input type="checkbox" name="data[]" value="Mason">  Mason</li>
                            <li><input type="checkbox" name="data[]" value="Technician">  Technician</li>
                            <li><input type="checkbox" name="data[]" value="Mechanic">  Mechanic</li>
                            <li><input type="checkbox" name="data[]" value="Driver">  Driver</li>
                            <li><input type="checkbox" name="data[]" value="Helper">  Helper</li>
                        
                    </ul>
                <br>
            
                

                </div>
                <div class="button">
                    <input class="box" type="submit" value="Sign Up" name="submit">
                </div>

                <a href="workersLogin.php"><h4>Login</h4></a>
            </form>
            
        </div>
    </div>
    
</body>
</html>
