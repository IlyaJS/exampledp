<?php
require_once 'connect.php';
session_start();
function clear_data($val){

    $val = trim($val);
    $val = stripslashes($val);
    $val = htmlspecialchars($val);

    return $val;
}

$email = $_POST['email'];
$userfullname = $_POST['fullname'];
$topic = $_POST['topic'];
$msg_feedback = $_POST['message_feedback'];
$emailadministrator = "localadmin@gmail.com";


$name = clear_data($userfullname);       

$to = $emailadministrator;
$from = clear_data($email);
$subject = clear_data($topic);
$text = clear_data($msg_feedback);

$headers = "From : $from\r\n";
$headers .= "Reply-to $from\r\n";
$headers .= "X-Mailer:". phpversion()."\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 

$message = 'ФИО: '.$name."\n".'Email: '.$from."\n".'Сообщение: '.$text."\n"; 




if(mail($to, $subject, $message, $headers)){
    $_SESSION['message'] = 'Сообщение отправлено';
    header('Location: ../feedback_admin.php');
} else {
    $_SESSION['message'] = 'Ошибка сообщение отправлено';
    header('Location: ../feedback_admin.php');
}