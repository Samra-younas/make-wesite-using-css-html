<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject= $_post['subject'];
$message = $_post['message'];


$email_from = 'samrayounas334@gmail.com';
  

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n". 
             "User Email: $email: $visitor_email.\n".
               "subject: $subject.\n".
               "User Message: $message: .\n";



               $to = 'samrayounas334@gmail.com';
               $headers = "From: $email_from  \r\n";
               $headers .= "Reply-to:$visitor_email \r\n";


               mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")
?>