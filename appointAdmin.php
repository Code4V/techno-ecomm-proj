<?php






?>











<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin: Appointment</title>
    <link rel="icon" href="images/alien.png">
    <link rel="stylesheet"  href="appointAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Radley&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <p>Appointment</p>
    </div>
    <div class="container">
        <table class="primaryTable">
            <thead>
                <tr>
                    <th>Appt No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require('dbconnect.php');

                    $query1 = mysqli_query($conn, "select * from appoint");
                    while($row = mysqli_fetch_array($query1))
                    {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['descrip']; ?></td>
                    <td><a href="del.php?a=<?php echo $row['name']; ?>"><i class='fa-solid fa-trash-can'></i></a></td>
                </tr>


                <?php } ?>

            </tbody>
        </table>

    </div>
</body>
</html>