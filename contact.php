<?php
	
	if(strlen($_POST["firstname"]) == 0){
		$errors[] = "First name required";
	}
	if(strlen($_POST["lastname"]) == 0){
		$errors[] = "Last name required";
	}
	if(strlen($_POST["email"]) == 0){
		$errors[] = "Email required";
	}
	if(strlen($_POST["message"]) == 0){
		$errors[] = "Message required";
	}

	if(empty($errors)){
		if(strlen($_POST["_check_"]) == 0){
			$to = "sturm.isabella3@gmail.com";
			$subject = "Message from " . $_POST["firstname"] . " " . $_POST["lastname"];
			$message = "You have a message from ". $_POST["firstname"] . " " . $_POST["lastname"] . "\n" .
						"Email: " . $_POST["email"] . "\n" .
						"Message: " . $POST["message"];

			mail($to, $subject, $message);
		}
	}
	
	$active = "contact";
	include "inc/header.inc.php";
?>
	<h1 class='title'>Contact Me</h1>
	<form method="POST" action='submitted.php' onsubmit='return submitForm()'>
			
		<span class='form-col1'>First Name</span>
		<input type='text' name='firstname'required='required' class='form-col2'/><br/>
		<span class='form-col1'>Last Name</span>
		<input type='text' name='lastname' required='required' class='form-col2'/><br/>
		<span class='form-col1'>Email Address</span>
		<input type='text' name='email' required='required' class='form-col2'/><br/>
		<span class='form-col1'>Re-enter Email</span>
		<input type='text' name='email' required='required' class='form-col2'/><br/>
		<span class='form-col1'>Message</span>
		<textarea name='message' required='required' class='form-col2'></textarea><br/>

		<input type='text' name='_check_' id='_check_' hidden/>
		<div id='btn-contain'><input type='submit' name='submit' value='Submit' onsubmit='return submitForm();'/></div>
	</form>
<?php
	include "inc/footer.inc.php";
?>