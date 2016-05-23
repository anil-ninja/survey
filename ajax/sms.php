<?php
	include_once 'dbconnect.php';
	function sendSMS($name, $number){
	    $username = "rajnish90";
	    $password = "redhat123";
	    $senderid = "BLUETM";
	    $message = "Dear ".$name.",
	    			Thank you for your valuable time.
	    			To get relief from domestic helper on leave.
	    			Book Now on BlueTeam: 
	    			http://goo.gl/545wov
	    			+919599075355 
	    			Thank you" ;
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