<?php

if(isset($_POST['to'])){

$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = "From: example@gmail.com";

if(mail($to, $subject, $message, $headers)){
    echo "Email sent successfully.";
}else{
    echo "Email sending failed.";
}

}

?>