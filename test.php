
<?php
	
				
				$emailSubject = 'test';
				$webMaster = 'joeybeau2009@hotmail.com';
				
				$emailField = $_POST['email'];
				$messageField = $_POST['message'];
				
				$body = <<<EOD
<br><hr><br>
Email: $email <br>
Message: $message <br>
EOD;

	$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body, $headers);
	
	$theResults = <<<EOD
	<a href="http://forcrepesake.com/contactTest.html">Thank you for your request! Click Here to return to the Homepage</a>
EOD;
echo "$theResults";

?>
