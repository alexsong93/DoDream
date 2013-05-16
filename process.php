<?php
	if(isset($_POST['submit'])) {
		$to = 'alexsong93@gmail.com';

		$subject = $_POST['subject'];

   		$message = "<table><tr><td>Name:</td><td>".$_POST['name']."</td></tr>
               		<tr><td>E-Mail:</td><td>".$_POST['email']."</td></tr>
               		<tr><td>Message:</td><td>".$_POST['message']."</td>
               		</tr></table>" ;

  		$headers = 'MIME-Version: 1.0' . "\r\n";	
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

   		mail($to, $subject, $message, $headers);
   		header('Location: contact.php');
}
?>
