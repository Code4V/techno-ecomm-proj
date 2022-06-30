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

        
        $data = $_POST['data'];
        $allData = implode(",", $data );
        
 



		$check = "SELECT email FROM workers WHERE email = '$email'";
		$result = mysqli_query($conn, $check);
		
		while($row = mysqli_fetch_array($result)){
			$checkmail = $row['email'];	

		}
		
		mysqli_free_result($result);
		
		if($checkmail == $email){
			echo "<script>alert('Please use another email.')</script>";
		}
		else{
            $to_email = $email;
            $subject = "BuzzWork Creator: Verification Code";
            $body = "Good day $name, this is the verification code for your account on BuzzWork: $confCode";
            $headers = "From: BuzzWork Team";
             
            if (mail($to_email, $subject, $body, $headers)) {
                echo "<script>alert('Email sent.')</script>";
            } else {
                echo "<script>alert('Email not sent.')</script>";
            }
			$sql = "INSERT INTO workers (fullName, email, pass, contact, addR, jobDescrip, code) VALUES ('$name', '$email', '$password', '$contact', '$address', '$allData', '$confCode')";
            if(mysqli_query($conn, $sql))
            {
                header("location: otp.php?a= CT + $name");
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
    <link rel="stylesheet" href="creatorsSignUp.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="formTitle">CREATORS: Sign Up</div>
            <form action="creatorsSignUp.php" method="POST">
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

                    <span class="details">Status: Student?</span>
                    <ul class="checkbox">
                        
                            <li><input type="radio" name="status" value=1>  Yes</li>
                            <li><input type="radio" name="status" value=0>  No</li>
                    <ul>
                        <br>
                    
                    <span class="details">Can do:</span>
                    <ul class="checkbox">
                        
                            <li><input type="checkbox" name="data[]" value="Infographic">  Infographic</li>
                            <li><input type="checkbox" name="data[]" value="Programmer">  Programming</li>
                            <li><input type="checkbox" name="data[]" value="Photographer">  Photography</li>
                            <li><input type="checkbox" name="data[]" value="Tutor">  Tutoring</li>
                            <li><input type="checkbox" name="data[]" value="Game Pilot">  Game Pilot</li>
                            <li><input type="checkbox" name="data[]" value="Editor">  Editor</li>
                            <li><input type="checkbox" name="data[]" value="Digital Artist">  Digital Art</li>
                          
                        
                    </ul>
                <br>
                    <p>*Note that you must present your school id and registration card of the present semester via email.</p>
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
