<?php 
require_once 'connect.php';
session_start();

function clear_data($val){

    $val = trim($val);
    $val = stripslashes($val);
    $val = htmlspecialchars($val);

    return $val;
}
/*  */
$email = $_POST['email'];
$topic = "Результат теста";
$msg_feedback = $_SESSION['result_test'];
$emailadministrator = "localadmin@gmail.com";


$name = clear_data($userfullname);       

$to = clear_data($email);
$from = clear_data($emailadministrator);
$subject = clear_data($topic);
$text = clear_data($msg_feedback);

$headers = "From : $from\r\n";
$headers .= "Reply-to $from\r\n";
$headers .= "X-Mailer:". phpversion()."\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 

$message = 'Тема: '.$topic."\n".'Email: '.$from."\n".'Сообщение: '."\n".$text."\n"; 

if(mail($to, $subject, $message, $headers)){
    $_SESSION['message'] = 'Сообщение отправлено';
    header('Location: ../catalog_test.php');
} else {
    $_SESSION['message'] = 'Ошибка сообщение отправлено';
    header('Location: ../catalog_test.php');
}

?>