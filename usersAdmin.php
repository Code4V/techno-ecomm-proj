<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Admin: Users</title>
    <link rel="icon" href="images/alien.png">
    <link rel="stylesheet"  href="usersAdmin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Radley&display=swap" rel="stylesheet">
</head>
<body>
    <div class="btnClass">
        <button class="btn">Admin: Users <i class="fa-solid fa-arrow-down"></i></button>  
        <div class="btnContent">
            <a href="appointAdmin.php"> Admin: Appointment </a>   
        </div>
    </div>


        
    
    
    <div class="container">
        <table class="primaryTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require('dbconnect.php');

                    $query1 = mysqli_query($conn, "select * from users");
                    while($row = mysqli_fetch_array($query1))
                    {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fullName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['pass']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['addR']; ?></td>
                    <td><a href="del.php?a=<?php echo $row['fullName']; ?>"><i class='fa-solid fa-trash-can'></i></a></td>
                </tr>


                <?php } ?>

            </tbody>
        </table>
       
        
    </div>
    
    
</body>
</html>