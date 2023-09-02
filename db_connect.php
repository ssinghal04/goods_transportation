<?php 
	// connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'pss');
	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
?>	