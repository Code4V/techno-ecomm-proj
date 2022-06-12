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
    <link rel="icon" href="images/alien.png">
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
                            <button class="cardButton1">Learn More</button>
                    </div>
                
                   
               


                <?php } ?>

          
       
        
    </div>
        
    </div>


</body>
</html>