<?php   
include('dbconnect.php');

$nm = $_GET['a'];
mysqli_query($conn,"delete from appoint where name='$nm'");

header("location:admin.php");




?>