<?php
  $name = $_Post['name'];
  $visitor_email = $Post['email'];
  $message = $_POST['message'];

  $email_form = 'portfoliocontact@wesleypretsch.com';

  $email_subject = "Porfolio Contact";

  $email_body = "Name: $name.\n".
                "Email: $visitor_email.\n".
                "Message: $message.\n";
  $to = "wesleypretsch@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to, $email_subject, $email_body, $headers);
  header("Location: index.html");

?>
