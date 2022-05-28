<?php

include('dbconnect.php');
session_start();



if(isset($_POST['submit'])){
    
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $descrip = $_POST['descrip'];


    if($email == null){
        echo "<script>alert('Please use another email.')</script>";
    }
    else{
        $sql = "INSERT INTO appoint(fullName, email, contact, date, descrip ) VALUES('$name', '$email', '$contact', '$date', '$descrip')";
    
        if(mysqli_query($conn, $sql)){
            echo "<script>alert('Appointment scheduled. Check your email for further instructions.')</script>";
        
        }
        else{
            echo "An error occured.";
        }
    }

    $to_email = $email;
    $subject = "Confirmation Email";
    $body = "Hi  $name , This is a email to confirm that you scheduled an appointment in $date. If you have any concerns, email us at eimif007@gmail.com";
    $headers = "From: ATOM team";
 
    if (mail($to_email, $subject, $body, $headers)) {
        echo "<script>alert('Email sent successfully!')</script>";
    } else {
        echo "<script>alert('Email sending failed!')</script>";

}
}

  

    







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Appointment</title>
    <link rel="icon" href="images/alien.png">
    <link rel="stylesheet" href="appo.css" />
</head>
<body>
    <div class="container">
        <div class="formTitle">Request Appointment</div>
            <form action="" method="POST">
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
                        <span class="details">Contact</span>
                        <input type="text" id="contact" name="contact" placeholder="Enter Contact Number" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Date</span>
                        <br>
                        <input type="date" id="appDate" name="date">
                    </div>

                    <div class="inputBox">
                        <span class="details">Description</span>
                        <br>
                        <textarea rows="4" cols="60" name="descrip"></textarea>
                    </div>


                
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>