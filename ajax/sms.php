<?php
	include_once 'dbconnect.php';
	function sendSMS($name, $number){
	    $username = "rajnish90";
	    $password = "redhat123";
	    $senderid = "BLUETM";
	    $message = "Dear ".$name.", we have received payment of 1000 Rs for SR: 12 by reej EMP_ID: BT-15-12 at "
	            .date("Y-m-d H:i:s") ;
	    $url = "http://www.smsjust.com/blank/sms/user/urlsms.php?".
	        "username=".$username.
	        "&pass=".$password.
	        "&senderid=".$senderid.
	        "&dest_mobileno=".$number.
	        "&msgtype=TXT".
	        "&message=".urlencode($message).
	        "&response=Y"
	        ;
	    //echo $url;
	    return httpGet($url);
	}
	function httpGet($url){
	    $ch = curl_init();

	    curl_setopt($ch,CURLOPT_URL,$url);
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	

	    $output=curl_exec($ch);

	    curl_close($ch);
	    return $output;
	}
	if(isset($_POST['user'])) {
		$user = $_POST['user']; 
		$number = $_POST['number'];
		sendSMS($user, $number);
	}
	mysqli_close($db_handle);
?>