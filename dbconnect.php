<?php
	$conn = mysqli_connect('localhost', 'rootCanal', 'ervinbautista', 'technoproj');
	
	if(!$conn){
		echo "Connection Error: " . mysqli_connect_error();
	}

?>