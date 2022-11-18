<?php
$name = $_POST['name'];
$visitor_email=$_POST['email'];
$message = ['message'];


$email_form = 'akashinternationalplacements@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name. \n".
              "User Email: $visitor_email.\n".
              "User Messagr: $message.\n";

              $to = "akashinternationalplacements@gmail.com";

              $headers = "Form: $email_form \r\n";
              $headers = "Reply-To: $visitor_email \r\n";

              mail($to,$email_subject,$email_body,$headers) ;

              header("Location: index.html");
?>