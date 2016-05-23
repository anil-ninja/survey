<?php
	function sendMail($to, $subject, $message){

	    // Always set content-type when sending HTML email
	    $headers = "MIME-Version: 1.0" . "\r\n";
	    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	    // More headers
	    $headers .= 'From: <blueteam.requests@blueteam.in>' . "\r\n";
	    //$headers .= 'Cc: myboss@example.com' . "\r\n";

	    mail($to, $subject, $message, $headers);
	}
	if(isset($_POST['email'])) {
		$email = $_POST['email']; 
		$name = $_POST['name'];
		$emailMessage = "Dear ".$name.",<br/><br/>
Thank you for your valuable time to complete the survey.<br/>
To get relief from domestic helper on leave.<br/>
Book Now on BlueTeam: <br/>
<a href='http://goo.gl/545wov' target='_blank' >BlueTeam App</a><br/> or <img src='images/phone.png' data-original=''/> / <img src='images/whatsapp.png' data-original=''/>  +91 95990 75355 <br/><br/>
Thank you,<br/><br/>
BlueTeam.in 
<img src='images/logo.png' data-original='' />";
		sendMail($email, "Survey", $emailMessage);
	}
?>