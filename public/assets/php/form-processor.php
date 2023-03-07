<?php

	$error = '';
		$to 		= 'info@orhan.org.uk'; 	
		$from		= $_POST['mail'];
		$name		= $_POST['name'];
		$subject	= $_POST['subject'];

		$message = "";
		foreach ($_POST as $field => $data){
	   		$message = "<html><head><title>$subject</title></head><body><h3>Orhan Contact form Message</h3><p>You've got a message from one of the client!</p>\n";
	   		foreach($_POST as $field => $data){	            
	   			$message .= "<div style='border-bottom:1px solid #dadada; padding-bottom:15px;margin-bottom:15px;'><strong>".ucwords($field)."</strong><br/>".stripslashes($data)."</div>\n";
	   		}
	   		$message .= "</body></html>";
		}


		// To send HTML mail, the Content-type header must be set
		define('HEADER_TRAIL', "\r\n");
	   	$headers  = 'MIME-Version: 1.0' . HEADER_TRAIL;
	   	$headers .= ( ! EMAIL_HTML) ? 'Content-type: text;' . HEADER_TRAIL : 'Content-type: text/html; charset=iso-8859-1' . HEADER_TRAIL ;

	   	// Additional headers
	   	$headers .= "From: ".$name." <".$from.">" . HEADER_TRAIL;

	   	if(!mail($to, $subject, $message, $headers)){
	   		$error = 
			   '<div class="alert">
			   <span class="closebtn">&times;</span>  
			   <strong><i class="fa fa-info-circle" ></i>&nbsp; Error!</strong> Error sending message. Please try again.
			 </div>';
	   	}

	if(!empty($error) ){
		echo $error;
	}
	else{
		echo 
		'<div class="alert success">
		<span class="closebtn">&times;</span>  
		<strong><i class="fa fa-check-circle" ></i>&nbsp; Success!</strong> Your message has been sent us successfully.
	  </div>';
	}


?>
