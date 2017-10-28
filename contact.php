<?php

error_reporting(E_ALL);

if (isset($_POST['submit'])) {
  if (!empty($_POST['name'] && $_POST['company'] && $_POST['email'] && $_POST['subject'] && $_POST['message'])) {
    $to       = 'lionel@cooldev.xyz';
    $name     = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
    $company     = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
    $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
    $subject    = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
    $message  = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
    $headers  =  "From:" . $email . "\r\n" .
                "Reply-To:" . $email . "\r\n" .
                "Content-Type: text/html; charset=ISO-8859-1\r\n" .
                "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
    $feedback = "Thank's for reachin'out " . $name . "! We'll get in touch shortly.";
  } else {
    $feedback = "Ooops ! Something's missing... ";
  }
} else {
  $feedback = '';
};


?>
