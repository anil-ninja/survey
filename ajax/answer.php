<?php
	include_once 'dbconnect.php';
	if(isset($_POST['user'])) {
		$user_id = $_POST['user']; 
		$qst = $_POST['qst'];
		if($qst == 'thank'){
			$qst_id = 10 ;
		} 
		else $qst_id = (intval($qst)-1);
		$response = $_POST['response']; 
		switch ($qst_id) {
			case 9:
				mysqli_query($db_handle,"UPDATE users SET mobile = '$response' where id = '$user_id'; ") ;
				echo "true";
				break;
			
			case 10:
				mysqli_query($db_handle,"UPDATE users SET email = '$response' where id = '$user_id'; ") ;
				echo "true";
				break;

			default:
				mysqli_query($db_handle, "INSERT INTO responces (user_id, qst_id, responce) 
														VALUES ('$user_id', '$qst_id', '$response'); ") ;
				echo "true";
				break;
		}
	}  
	mysqli_close($db_handle);
?>