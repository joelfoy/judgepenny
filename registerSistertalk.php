<?php
function validateEmail($email) {
	return ereg("\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b)", $email);
}
if($_POST['submit']!=''){

// Collected Data
$errors = array();

// Values
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$homePhone = $_POST['homePhone'];
$workPhone = $_POST['workPhone'];
$cellPhone = $_POST['cellPhone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$age = $_POST['age'];
$preferences = implode(', ', $_POST['preferences']);

// Input Verification
if (!$firstName)
	$errors[] = "First name is required";
if (!$lastName)
	$errors[] = "Last name is required";
if (!$email || !validateEmail($email))
	$errors[] = "A valid email is required";
if (!$homePhone)
	$errors[] = "A home phone is required";
if (!$address)
	$errors[] = "An address is required";
if (!$city)
	$errors[] = "A city is required";
if (!$state)
	$errors[] = "A state is required";
if (!$age)
	$errors[] = "Please select your age";
	
	
// Verify Errors
if (count($errors) > 0) {
	echo $errors;
	print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.judgepenny.com/sistertalk.php?errors=true\">";
}
// multiple recipients
//$to  = 'marmourjr@gmail.com' . ', '; // note the comma
//$to .= 'judgepennyemailsubmissions@gmail.com';
$to = 'joelfoy@gmail.com';

// subject
$subject = 'Sister Talk Registration Submission';

// message
$message = '
<html>
<head>
  <title>Sister Talk Registration Submission</title>
</head>
<body>
  <p>Name: '.$firstName.' '.$lastName.'</p>
  <p>Email: '.$email.'</p>
  <p>Home Phone: '.$homePhone.'</p>
  'if ($workPhone) { '<p>CellPhone: '.$workPhone.'</p>' }'
  'if ($cellPhone) { '<p>CellPhone: '.$cellPhone.'</p>' }'
  <p>Address: '.$address.'</p>
  <p>City: '.$city.'</p>
  <p>State: '.$state.'</p>
  <p>Age: '.$age.'</p>
  <p>Preferences: '.$preferences.'</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
//$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
$mailSent = mail($to, $subject, $message, $headers);
}

if($mailSent && $age === '12-17')
{ header("Location: registration-complete.php"); }
else
{ header("Location: http://www.PayPal.com"); }

?>