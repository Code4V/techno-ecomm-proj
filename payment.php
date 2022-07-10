<?php

include('dbconnect.php');
session_start();



if(isset($_POST['submit'])){
    
    $name = $_POST['fullName'];
    $gNum = $_POST['gNum'];
    $amount = $_POST['amount'];


 
    $sql = "INSERT INTO transact(fullName, gNum, amount) VALUES('$name', '$gNum', '$amount')";
    
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Transcation done. Always happy doing business with you!')</script>";
        
    }
    else{
        echo "An error occured.";
    }
 


}

   



  

    







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Payment</title>
    <link rel="icon" href="images/alien.png">
    <link rel="stylesheet" href="payment.css?v=<?php echo time(); ?>" />
</head>
<body>
    <div class="container">
        <div class="formTitle">Payment</div>
            <form action="" method="POST">
                <div class="userDetails">
                    <div class="inputBox">
                        <span class="details">Name</span>
                        <input type="text" id="name" name="fullName" placeholder=" Enter Name" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Gcash Number</span>
                        <input type="text" id="email" name="gNum" placeholder="Enter Gcash Number" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Amount</span>
                        <input type="text" id="contact" name="amount" placeholder="Enter Amount" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Message</span>
                        <br>
                        <textarea rows="4" cols="60" name="descrip"></textarea>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="submit">
                </div>
                <a href="main.php"><h4>Home</h4></a>

            </form>
        </div>
    </div>
    
</body>
</html>