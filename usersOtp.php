<?php

	include('dbconnect.php');
	session_start();

  
	$checkcode='';
    $name = $_GET['a'];



	if(isset($_POST['submit'])){
		
		$confCode = $_POST['code'];

		$check = "SELECT fullName, code FROM users WHERE fullName = '$name'";
		$result = mysqli_query($conn, $check);
		
		while($row = mysqli_fetch_array($result)){
			$checkcode = $row['code'];	
            
		}
		
        
		mysqli_free_result($result);
		
		if($checkcode == $confCode){
			header('location: usersLogin.php');
		}
		else{
			echo "<script>alert('Wrong Code')</script>";
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
            <form action="otp.php?a=<?php echo $name?>" method="POST">
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
