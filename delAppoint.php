<?php   

$nm = $_GET['a'];

include('dbconnect.php');


mysqli_query($conn,"delete from appoint where fullName='$nm'");

header("location:appointAdmin.php");






?>