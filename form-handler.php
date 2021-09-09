<?php
$name = POST['name'];
$visitor_email = POST['email'];
$subject = POST['subject'];
$message = POST['message'];

$email_from = 'arshadkhatri852@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visiror_email.\n".
               "Subject: $subject.\n".
               "User Message: $message .\n";

 $to = 'arshadkhatri852@gmail.com';
 
 $headers = "Form: $email_form \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("location: contact.html");

?>