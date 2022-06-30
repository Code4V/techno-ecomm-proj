<?php   

$nm = $_GET['a'];

include('dbconnect.php');


mysqli_query($conn,"delete from workers where fullName='$nm'");

header("location:creatorsAdmin.php");






?>