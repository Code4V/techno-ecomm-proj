<?php


include('dbconnect.php');
session_start();

$checkmail='';
$checkpass='';


if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $check = "SELECT username, password FROM admintbl WHERE username = '$username'";
    $result = mysqli_query($conn, $check);
    
    while($row = mysqli_fetch_array($result)){
        $checkmail = $row['username'];	
        $checkpass = $row['password'];	
    }

    mysqli_free_result($result);
    
    

    if(empty($checkmail)){
        echo "<script>alert('User doesn't exist.')</script>";
        
    }

    else if($checkmail != $username || $checkpass != $password) {
        echo "<script>alert('Wrong email or password.')</script>";

    }
    
    else{
        
        header('location:mainAdmin.php');
        
    }

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/alien.png">
    <link rel="stylesheet" href="adminLogin.css?v=<?php echo time(); ?>">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="formTitle">Admin: Login</div>
            <form action="adminLogin.php" method="POST">
                <div class="userDetails">

                    <div class="inputBox">
                        <span class="details">Email</span>
                        <input type="text" id="username" name="username" placeholder="Enter Email" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Password</span>
                        <input type="password" id="pass" name="password" placeholder="Enter Password" required>
                    </div>
                    <br>
                    <div class="button">
                        <input type="submit" value="Log In" name="submit">
                    </div>

                </div>
            </form>
        </div>
    </div>

</body>
</html>