<?php

	include('dbconnect.php');
	session_start();

  
	$checkcode='';
    $name = $_GET['a'];
    $name2 = "";
    $confCode;
    $isUser = 0;

    if(strpos($name, 'CT'))
    {
        $isUser = 0;
    }
    else{
        $isUser = 1;
    }

	if(isset($_POST['submit'])){
		
		$confCode = $_POST['code'];
        

        //Creators OTP // 
        if($isUser == 0)
        {
            $name2 = substr($name, 6);
            echo $name2;
		    $check = "SELECT fullName, code FROM workers WHERE fullName = '$name2'";
		    $result = mysqli_query($conn, $check);
		
		    while($row = mysqli_fetch_array($result)){
			    $checkcode = $row['code'];	
                
            
		    }
            echo $row['fullName'];
            echo $row['code'];
		
        
		    mysqli_free_result($result);
		
		    if($checkcode == $confCode){
			    header('location: creatorsLogin.php');
		    }
		    else{
			    echo "<script>alert('Wrong Code')</script>";
		    }
            $isUser = 0;
        }
        // Users OTP //
        else{
            $name2 = substr($name, 6);
            echo $name2;
            $check = "SELECT fullName, code FROM users WHERE fullName = '$name2'";
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
            $isUser = 0;
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
