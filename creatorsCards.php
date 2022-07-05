<?php 
include('dbconnect.php');
session_start();

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $message = $_POST['message'];


    $to_email = $email;
    $subject = "BuzzWork: New Message!";
    $body = "$message";
    $headers = "From: BuzzWork User";
     
    if (mail($to_email, $subject, $body, $headers)) {
        echo "<script>alert('Email sent.')</script>";

        $sql = "INSERT INTO messages (email, message) VALUES ('$email', '$message')";
        
        if(mysqli_query($conn, $sql)){
            header("location: main.php");
        }
        else{
            echo "An error occured.";
        }
    

    } else {
        echo "<script>alert('Email not sent.')</script>";
    }

   





}




?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>BuzzWork: Creators</title>
    <link rel="icon" href="images/bee.png">
    <link rel="stylesheet"  href="creatorsCards.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Radley&display=swap" rel="stylesheet">
</head>
<body>
    <div class="menuTab">
        <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="creatorsCards.php">Creators</a></li>
        </ul>
    </div>
    <div class="classWrapper">
        <div class="btnClass">
            <button class="btn">Creators </button>  
        </div>

        <div class="container">
        
                <?php
                    require('dbconnect.php');

                    $query1 = mysqli_query($conn, "select * from workers");
                    while($row = mysqli_fetch_array($query1))
                    {
                ?>
               
                    <div class="cards">
                        <img src="images/programming.jpg" class="image" />
                        <div class="title">
                            <h1><?php echo $row['fullName']; ?></td></h1>
                            <p><?php echo $row['email']; ?></td></p>
                            <p><?php echo $row['jobDescrip']; ?></td></p>
                        </div>
                            <button class="cardButton1" onclick="openForm()">Message Me!</button>
                    </div>
                
                   
               


                <?php } ?>
        <div class="form-popup" id="myForm">
            <form action="creatorsCards.php" method="POST" class="form-container">
                <h1>Message</h1>
                <p>*copy the email of the creator first</p>

                <div class="inputBox">
                        <span class="details">Email</span>
                        <input type="text" id="email" name="email" placeholder="Enter Email" required>
                    </div>

                    <div class="inputBox">
                        <span class="details">Message</span>
                        <textarea id="message" name="message" rows="4" cols="38"> </textarea>
                    </div>
                    <br>
                    <div class="button">
                        <input type="submit" value="Send" name="submit" class="sendButton">
                    </div>
                    <br>
                
                    <button class="closeButton" onclick="closeForm()">Close</button>

            </form>
        </div>
        

       
        

<script>
    function openForm() {
    document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
    document.getElementById("myForm").style.display = "none";
    }
</script>                
          
       
        
    </div>
        
    </div>


</body>
</html>