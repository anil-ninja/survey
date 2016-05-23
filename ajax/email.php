<?php
	function sendMail($to, $subject, $message)6{

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
		$emailMessage = "Dear Customer,<br/><br/>
		For any clarifications contact us at 95990 75355.<br/><br/>

		This service is a part of our constant endeavor to deliver Superior Customer Service Experience to our valued customers. At BlueTeam, we value your feedback. Please write to us at feeds@blueteam.in, contact your Client Engagement Manager (CEM).
		If you would like to view any other details regarding your account, please login to our mobile app. This is a system generated message. Please do not reply to this e-mail.";

		sendMail($email, "BlueTeam: Payment received successfully of Rs.", $emailMessage);
	}
?>