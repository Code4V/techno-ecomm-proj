<?php   

$nm = $_GET['a'];

include('dbconnect.php');


mysqli_query($conn,"delete from users where fullName='$nm'");

header("location:usersAdmin.php");






?>