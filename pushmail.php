<?php
  session_start();

	if(isset($_REQUEST['email']) && isset($_REQUEST['subject']) && isset($_REQUEST['message'])){

		$email   = "BuySurety User <".$_REQUEST['email'].">";
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];
		$headers = "From: BuySurety.com <noreply@buysurety.com>\r\nContent-Type: text/html\r\n";

		@mail($email,$subject,$message,$headers);
		
		print 'mail sent';
	}
?>
