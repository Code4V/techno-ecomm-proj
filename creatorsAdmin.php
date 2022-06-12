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
<title>Admin</title>
    <link rel="icon" href="images/alien.png">
    <link rel="stylesheet"  href="sample.css?v=<?php echo time(); ?>">
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
            <li><a href="usersAdmin.php">Users</a></li>
            <li><a href="creatorsAdmin.php">Creators</a></li>
        </ul>
    </div>
    <div class="classWrapper">
        <div class="btnClass">
            <button class="btn">Admin: Creators </button>  
        </div>

        <div class="container">
        <table class="primaryTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Job Description</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require('dbconnect.php');

                    $query1 = mysqli_query($conn, "select * from workers");
                    while($row = mysqli_fetch_array($query1))
                    {
                ?>
                <tr>
                    <td><?php echo $row['workersId']; ?></td>
                    <td><?php echo $row['fullName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['addR']; ?></td>
                    <td><?php echo $row['jobDescrip']; ?></td>
                    <td><a href="delCreators.php?a=<?php echo $row['fullName']; ?>"><i class='fa-solid fa-trash-can'></i></a></td>
                </tr>


                <?php } ?>

            </tbody>
        </table>
       
        
    </div>
        
    </div>


</body>
</html>