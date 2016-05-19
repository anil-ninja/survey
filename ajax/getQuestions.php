<?php
	include_once 'dbconnect.php';
	if(isset($_POST['question'])) {
		$question = mysqli_real_escape_string($db_handle, $_POST['question']); 
		if($question == 'thank'){
			echo "true" ;
		}
		else {
			$response = mysqli_query($db_handle,"select * from questions where id = '$question';") ;
			$responseRow = mysqli_fetch_array($response);
			echo $responseRow['question'] ;
		}
	}  
	mysqli_close($db_handle);
?>
