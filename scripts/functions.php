<?php
//prevent anyone browsing to this script page via a GET request.
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    http_response_code(403);
    echo "<h1>" . http_response_code() . " Forbidden</h1>";
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function subscriber()
{

    require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/src/Exception.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/src/PHPMailer.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/src/SMTP.php';
    //Load Composer's autoloader
    require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
    //Error Codes
    //!200 = Success
    //!201 = Response Code: 201 Created - Code from Mailerlite
    //!400 = Error - Script error
    //!403 = Security check failed
    //!422 = Response Code: 422 Unprocessable Entity  - Code from Mailerlite
    //? Fields required: set to 1 for no error and then change to 0 if teh field is blank
    $email_err = 1;
    $name_err = 1;
    //set as 200 as default, only changes when there is an error
    $response_code = 200;
    //response message
    $msg = "";
    //Recaptcha security test
    $secret_key = '6LdHtLwlAAAAADgcTHR3XTT6CpU2jGdXEwmFtyWT'; //secret key from recaptcha admin file

    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['token']); //verify the response with the token generated from the user inout

    $verify_data = json_decode($verifyResponse, true); //decode the JSON file recieved from google
    //spam recaptcha score, set to null and alter when the core comes back
    $score = $verify_data['score']; //identify the score
    //if the score does not meet teh criteria, throw an error
    if($score<0.7){
        $response_code=403;
        $msg = "Security check failed";
    }    
    //response array to pass back to front end
    $response = array();
    //make sure api token is present
    if (!file_exists("../api_token.txt")) {
        $response_code = 400;
        $msg = "API Token Error";
    }
    //?make sure name and email fields are not blank
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    if (trim($name) == "") {
        $name_err = 0;
        $response_code = 400;
        $msg = "Name cannot be left blank, please try again.";
    }
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (trim($email) == "") {
        $email_err = 0;
        $response_code = 400;
        $msg = "Email cannot be left blank, please try again.";
    }

    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email_err = 0;
        $msg = 'Error: invalid email address provided';
        $response_code = 400;
    }    //check form values and enure that no blanks are present
    if ($response_code == 200) {
        //?Post Data
        //set date of subscription
        date_default_timezone_set("Europe/London");
        $now = date_create("now", timezone_open("Europe/London"));
        $date = date('Y-m-d H:i:s', date_timestamp_get($now));


        $data = array(
            'email' => $email,
            'subscribed_at' => $date,
            'updated_at' => $date,
            'fields' => array(
                'name' => $name
            ),
        );

        $token = file_get_contents("../api_token.txt");
        $POST = json_encode($data);
        $header[] = "Content-Type: application/json";
        $header[] = "Accept: application/json";
        $header[] = "Authorization: Bearer " . $token;
        $url = "https://connect.mailerlite.com/api/subscribers";
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $POST,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept: application/json',
                'Authorization: Bearer ' . $token
            ),
        ));


        curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        $response_code = $info['http_code'];
        if ($response_code == 200 || $response_code == 201) {
            $msg = "Thank you for subscribing " . $name;
        } else {
            $msg = "An unknown error has occurred, please try again. If this persists, please <a href='contact'>contact me</a>";
        }
    }



    //Response Array
    $response = array("response_code" => $response_code, "message" => $msg, "email_req" => $email_err, "name_req" => $name_err, "recaptacha_score"=>$score);
    echo json_encode($response);
}
//subscriber
if ($_POST['action'] == "subscribe") {
    subscriber();
}
