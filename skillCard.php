<?php 
include('dbconnect.php');
session_start();


    if(isset($_POST['submit']))
    {
        $data = $_POST['data'];
        $allData = implode(",", $data );
        echo $allData;
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>BuzzWork: Creators</title>
    <link rel="icon" href="images/bee.png">
    <link rel="stylesheet"  href="skillCard.css?v=<?php echo time(); ?>">
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
            <h1 class="btn"><?php
                    require('dbconnect.php');
                    $nm = $_GET['a'];
                    echo $nm;?> </h1>  
        </div>

        <div class="container">
        
                <?php
                    require('dbconnect.php');
                    $nm = $_GET['a'];
                    $query1 = mysqli_query($conn, "select * from workers where jobDescrip like '%$nm%'");
                    while($row = mysqli_fetch_array($query1))
                    {
                ?>
               
                    <div class="cards">
                        <img src="images/icon.jpg" class="image" />
                        <div class="title">
                            <h1><?php echo $row['fullName']; ?></td></h1>
                            <p><?php echo $row['email']; ?></td></p>
                            <p><?php echo $row['jobDescrip']; ?></td></p>
                        </div>
                            <button class="cardButton1" onclick="openForm()">Message Me!</button>
                    </div>
                
                   
               


                <?php } ?>
            
        <div class="form-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
                <h1>Login</h1>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit" class="btn">Login</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
          
       
        
    </div>
        
    </div>
<script>
    function openForm() {
    document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
    document.getElementById("myForm").style.display = "none";
    }
</script>

</body>
</html>