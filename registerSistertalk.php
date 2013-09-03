<form action="registerSistertalk.php" method="post" id="SisterTalk-registration">
			<div class="input-container">
				<label for="firstName" class="form-input-label">First Name<span class="required">*</span></label>
				<label for="firstName" class="form-input-error"></label>
				<input type="text" class="form-input" id="firstName" name="firstName"/>
			</div>
			
			<div class="input-container">
				<label for="lastName" class="form-input-label">Last Name<span class="required">*</span></label>
				<label for="lastName" class="form-input-error"></label>
				<input type="text" class="form-input" id="lastName" name="lastName"/>
			</div>
			
			<div class="input-container">
				<label for="email" class="form-input-label">Email<span class="required">*</span></label>
				<label for="email" class="form-input-error"></label>
				<input type="email" class="form-input" id="email" name="email"/>
			</div>
			
			<div class="input-container">
				<label for="dayPhone" class="form-input-label">Daytime Phone<span class="required">*</span></label>
				<label for="dayPhone" class="form-input-error"></label>
				<input type="tel" class="form-input" id="dayPhone" name="dayPhone"/>
			</div>
			
			<div class="input-container">
				<label for="workPhone" class="form-input-label">Work Phone</label>
				<input type="tel" class="form-input" id="workPhone" name="workPhone"/>
			</div>
			
			<div class="input-container">
				<label for="cellPhone" class="form-input-label">Cell Phone</label>
				<input type="tel" class="form-input" id="cellPhone" name="cellPhone"/>
			</div>
			
			<div class="input-container">
				<label for="address" class="form-input-label">Address<span class="required">*</span></label>
				<label for="address" class="form-input-error"></label>
				<input type="text" class="form-input" id="address" name="address"/>
			</div>
			
			<div class="input-container">
				<label for="city" class="form-input-label">City<span class="required">*</span></label>
				<label for="city" class="form-input-error"></label>
				<input type="text" class="form-input" id="city" name="city"/>
			</div>
			
			<div class="input-container">
				<label for="state" class="form-input-label">State<span class="required">*</span></label>
				<label for="state" class="form-input-error"></label>
				<input type="text" class="form-input" id="state" name="state"/>
			</div>
			
			<div class="input-container">
				<label for="" class="form-input-label">Age <em>(Select a group)</em><span class="required">*</span></label>
				<label for="" class="form-input-error"></label>
				<input class="radio" type="radio" name="age" value="12-17" /> <span>12-17</span>
				<input class="radio" type="radio" name="age" value="18-25" /> <span>18-25</span>
				<input class="radio" type="radio" name="age" value="26-30" /> <span>26-30</span>
				<input class="radio" type="radio" name="age" value="31-45" /> <span>31-45</span>
				<input class="radio" type="radio" name="age" value="46-59" /> <span>46-59</span>
				<input class="radio" type="radio" name="age" value="60+" /> <span>60+</span>
			</div>
			
			<div class="input-container">
				<label for="preferences" class="form-input-label">Workshop Preferences <em>(Select your two(2) preferences)</em></label>
				
				<div class="checkbox-container">
					<input type="checkbox" class="form-checkbox" value="Workshop I" name="preferences[]" class="checkbox">
						<span class="pref-description">
						<strong>Spiritual Growth: Strengthening Your Prayer Life</strong>
						Presenters: Pastor Trina Evans & Rev. Roberta Heater
						</span>
					</input>
				</div>
				
				<div class="checkbox-container">
					<input type="checkbox" class="form-checkbox" value="Workshop II" name="preferences[]" class="checkbox">
						<span class="pref-description">
						<strong>Get Your Money & Mind Right</strong>
						Presenter: Evangelist Eliza Eugene
						</span>
					</input>
				</div>
				
				<div class="checkbox-container">
					<input type="checkbox" class="form-checkbox" value="Workshop III" name="preferences[]" class="checkbox">
						<span class="pref-description">
						<strong>Crossing the Other Side: Overcoming Grief & Fear
	</strong>
						Presenter: Monica Mealey
						</span>
					</input>
				</div>
				
				<div class="checkbox-container">
					<input type="checkbox" class="form-checkbox" value="Workshop IV" name="preferences[]" class="checkbox">
						<span class="pref-description">
						<strong>Reinvent Your Life: Unleash the Power Within</strong>
						Presenter: Rev. Natosha Reid Rice
						</span>
					</input>
				</div>
			</div>
			
			<h4>$25.00 Adult Luncheon Ticket Required with Free Registration</h4>
			<p>All registrants 18 and over will be required to purchase an adult luncheon ticket.</p>
			
			<input type="submit" class="form-submit" name="submit" value="Continue"/>
			
		</form>	


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
$dayPhone = $_POST['dayPhone'];
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
if (!$dayPhone)
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
	print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.judgepenny.com/sister-talk.php?errors=true\">";
}
// multiple recipients
//$to  = 'marmourjr@gmail.com' . ', '; // note the comma
//$to .= 'sistertalkconference@gmail.com';
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
  <p>Home Phone: '.$dayPhone.'</p>
  <p>CellPhone: '.$workPhone.'</p>
  <p>CellPhone: '.$cellPhone.'</p>
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