<?php

include('dbconnect.php');
session_start();

$checkmail='';
$checkpass='';


if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $check = "SELECT email, pass FROM workers WHERE email = '$email'";
    $result = mysqli_query($conn, $check);
    
    while($row = mysqli_fetch_array($result)){
        $checkmail = $row['email'];	
        $checkpass = $row['pass'];	
    }

    mysqli_free_result($result);
    
    

    if(empty($checkmail)){
        echo "<script>alert('User doesn't exist.')</script>";
        
    }

    else if($checkmail != $email || $checkpass != $password) {
        echo "<script>alert('Wrong email or password.')</script>";

    }
    
    else{
        
        header('location:catalog.php');
        
    }
    

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/alien.png">
    <link rel="stylesheet" href="creatorsLogin.css?v=<?php echo time(); ?>">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="formTitle">WORKERS: Login</div>
            <form action="creatorsLogin.php" method="POST">
                <div class="userDetails">

                    <div class="inputBox">
                        <span class="details">Email</span>
                        <input type="text" id="email" name="email" placeholder="Enter Email" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Password</span>
                        <input type="password" id="pass" name="password" placeholder="Enter Password" required>
                    </div>
                    <br>
                    <div class="button">
                            <input type="submit" value="Log In" name="submit" class="button1">
                    </div>

                </div>
            </form>
        </div>
    </div>

</body>
</html>