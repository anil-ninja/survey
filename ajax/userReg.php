<?php
	include_once 'dbconnect.php';
	if(isset($_POST['name'])) {
		$name = mysqli_real_escape_string($db_handle, $_POST['name']); 
		mysqli_query($db_handle,"INSERT INTO users (name) VALUES ('$name') ; ") ;		
		$user_id = mysqli_insert_id($db_handle);
		echo $user_id ;
	}  
	mysqli_close($db_handle);
?>
