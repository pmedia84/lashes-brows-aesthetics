<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/src/SMTP.php';
//Load Composer's autoloader
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
// check request type is post
//prevent anyone browsing to this script page via a GET request.
if ($_SERVER['REQUEST_METHOD'] != "POST") {
  http_response_code(403);
  echo "<h1>" . http_response_code() . " Access Forbidden</h1>";
  exit;
}
//Error Codes
//!200 = Success
//!400 = Error
//!403 = Security check failed
$response_code = 200;
//response message
$msg = "";
//Recaptcha score
$score = "";
//check the email settings file exists
if (!file_exists("../email_settings.php")) {
  $response_code = 400;
  $msg = "Cannot send message!";
} else {
  require("../email_settings.php");
  //Recaptcha security test
  $site_key = '6LdHtLwlAAAAAEuX7k_J0hlgq3MsyC2On2Ouc9JG'; //site key from recaptcha admin
  $secret_key = '6LdHtLwlAAAAADgcTHR3XTT6CpU2jGdXEwmFtyWT'; //secret key from recaptcha admin file
  
  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['token']); //verify the response with the token generated from the user inout
  
  $verify_data = json_decode($verifyResponse, true); //decode the JSON file received from google
  $score = $verify_data['score']; //identify the score
  //continue the script if the recaptcha score is greater than .7
  if ($score >= 0.7) {
    //set up variables
    $name = htmlspecialchars($_POST['name'],);
    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
      $email = $_POST['email'];
    } else {
      $msg .= 'Error: invalid email address provided';
      $response_code = 400;
    }
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS);

    //check form values and ensure that no blanks are present
    if (trim($name) == "") {
      $response_code = 400;
      $msg = "Name cannot be left blank, please try again.";
    } else if (trim($phone) == "") {
      $response_code = 400;
      $msg = "Phone number cannot be left blank, please try again.";
    }
  } else {
    $msg = "Security check failed with a score of " . $score;
    $response_code = 403;
  }
  //if the response code if 200 then proceed to send the email.
  if ($response_code == 200) {
    $subject = $name . " Has contacted you via your website.";
    $body = '
    <div style="background-color:#fdeae8; padding:16px;font-family:sans-serif;">
        <h1 style="text-align:center; color:#7e514e;">' . $name . ' has sent you a message from your contact page</h1>
        <div style="background-color: white; padding:16px; border: 10px solid #fdeae8; border-radius: 10px;">
            <h2>Message Details:</h2>
            <p style="border-bottom:1px solid;"><strong>Name</strong>: ' . $name . '</p>
            <p style="border-bottom:1px solid;"><strong>Email</strong>: ' . $email . ' </p>
            <p style="border-bottom:1px solid;"><strong>Phone No</strong>.: ' . $phone . ' </p>
            <p style="border-bottom:1px solid; line-height: 1.7; "><strong>Message:</strong>: ' . $message . ' </p>
        </div>
    </div>';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = $host;
    $mail->Port = 25;
    $mail->CharSet = PHPMailer::CHARSET_UTF8;
    //It's important not to use the submitter's address as the from address as it's forgery,
    //which will cause your messages to fail SPF checks.
    //Use an address in your own domain as the from address, put the submitter's address in a reply-to
    $mail->From = $from;
    $mail->addAddress($email_to);
    $mail->addReplyTo($email, $name);
    $mail->Subject =  $subject;
    $mail->Username = $username; // Enter your email here
    $mail->Password = $pass; //Enter your password here
    $mail->IsHTML(true);
    $mail->Body = $body;
    if (!$mail->send()) {
      $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
      $response_code = 400;
    } else {
      $msg .= 'Thank you, '.$name.' for your message, I will be in touch with you very soon.';
      $response_code = 200;
    }
  }
}

//Response Array
$response = array("response_code" => $response_code, "message" => $msg, "score" => $score);
echo json_encode($response);
