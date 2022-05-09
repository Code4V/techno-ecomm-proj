<?php
	$conn = mysqli_connect('localhost', 'root', 'ervinbautista', 'technoproj');
	
	if(!$conn){
		echo "Connection Error: " . mysqli_connect_error();
	}

?>