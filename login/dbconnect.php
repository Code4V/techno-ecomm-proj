<?php
	$conn = mysqli_connect('localhost', 'root', 'ervinbautista', 'formsdb');
	
	if(!$conn){
		echo "Connection Error: " . mysqli_connect_error();
	}

?>