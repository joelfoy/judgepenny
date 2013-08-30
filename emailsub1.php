<?php
if($_POST['email']!=''){
// multiple recipients
$to  = 'marmourjr@gmail.com' . ', '; // note the comma
$to .= 'judgepennyemailsubmissions@gmail.com';

// subject
$subject = 'Email Subscription Submission';

// message
$message = '
<html>
<head>
  <title>Email Subscription Submission</title>
</head>
<body>
  <p>Email: '.$_POST['email'].'</p>
  
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
mail($to, $subject, $message, $headers);
}
header("Location: judge-penny-story.html");

?>