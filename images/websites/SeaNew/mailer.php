<?php

/* ---------------------------
php and flash contact form. 
by www.MacromediaHelp.com
--------------------------- 
Note: most servers require that one of the emails (sender or receiver) to be an email hosted by same server, 
so make sure your email (on last line of this file) is one hosted on same server.
--------------------------- */


// read the variables form the string, (this is not needed with some servers).
$subject = $_REQUEST["subject"];
$firstname = $_REQUEST["firstname"];
$lastname = $_REQUEST["lastname"];
$email = $_REQUEST["email"];
$address = $_REQUEST["address"];
$phone = $_REQUEST["phone"];
$booking = $_REQUEST["booking"];
$guests = $_REQUEST["guests"];
$yourmessage = $_REQUEST["yourmessage"];

// include sender IP in the message.
$full_message = "first name: $firstname,
last name: $lastname,
email: $email,
address: $address,
phone: $phone,
booking: $booking,
guests: $guests,
user message: $yourmessage". $message;
$message= $full_message;

// remove the backslashes that normally appears when entering " or '
$firstname = stripslashes($firstname); 
$subject = stripslashes($subject); 
$email = stripslashes($email); 

// add a prefix in the subject line so that you know the email was sent by online form
$subject = "Seaview Hotel Functions Enquiry". $subject;

// send the email, make sure you replace email@yourserver.com with your email address
echo $firstname;
if(isset($firstname) and isset($lastname) and isset($email) and isset($address) and isset($phone) and isset($booking) and isset($guests) and isset($yourmessage)){
	mail("nbothe@gmail.com", $subject, $message, "From: $firstname");
		echo "\n\n" . ",<br>
		Thank you for your enquiry!";
}
?>