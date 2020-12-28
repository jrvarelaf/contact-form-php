<?php

$errors = '';
$send ='';

if (isset($_POST['submit'])){   # Receibe the data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $country = $_POST['country'];
    if ($_POST['country'] != ""){ // Honey Pot
        exit;
       }

    if (!empty($name)){
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
    } else {
        $errors .= 'Please, write your Name. <br />';
    }

    if (!empty($email)){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors .= "Please, insert a correct Email. <br />";
        }
    } else {
        $errors .= "Please, write your Email. <br />";
    }

    if (!empty($message)){
        $message = htmlspecialchars($message);
        $message = trim($message);
        $message = stripcslashes($message);
    } else {
        $errors .= "Please, write your Message. <br />";
    }

    if (!$errors) {
        $send_to = 'your email';
        $subjet = 'Email from my website';
        $from = 'From: $name \n';
        $user_email = 'Email: $email \n';
        $message_text = 'Message: $message';

        # mail($send_to, $subjet, $from, $user_email, $message_text);
        $send = true;
    }
}

require 'index.view.php';
?>
