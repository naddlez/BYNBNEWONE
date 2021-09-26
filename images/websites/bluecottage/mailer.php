<?php

/* ---------------------------
php and flash contact form. 
by www.MacromediaHelp.com
--------------------------- 
Note: most servers require that one of the emails (sender or receiver) to be an email hosted by same server, 
so make sure your email (on last line of this file) is one hosted on same server.
--------------------------- */


// read the variables form the string, (this is not needed with some servers).
$firstname = $_REQUEST["firstname"];
$lastname = $_REQUEST["lastname"];
$date = $_REQUEST["date"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$yourmessage = $_REQUEST["yourmessage"];

// include sender IP in the message.
$full_message = "first name: $firstname,
last name: $lastname,
date: $date,
email: $email,
phone: $phone,
user message: $yourmessage". $message;
$message= $full_message;

// remove the backslashes that normally appears when entering " or '
$firstname = stripslashes($firstname); 
$subject = stripslashes($subject); 
$email = stripslashes($email); 

// add a prefix in the subject line so that you know the email was sent by online form
$subject = "Blue Cottage Holidays: Booking Enquiry". $subject;

// send the email, make sure you replace email@yourserver.com with your email address
echo $firstname;
if(isset($firstname) and isset($lastname) and isset($date) and isset($email) and isset($phone) and isset($yourmessage)){
	mail("bluecottageholidays@gmail.com", $subject, $message, "From: $firstname");
		echo "\n\n" . ",<br>
		Thank you for contacting Blue Cottage Holidays, we will get back to you shortly about your enquiry!";
}
?>
<style type="text/css" media="all">
body	{
	background-color:#33CCFF;
	color:#FFFFFF;
	font-weight:bold;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:22px;
		}
</style>