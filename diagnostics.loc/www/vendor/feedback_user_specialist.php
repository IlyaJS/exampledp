<?php
require_once 'connect.php';
session_start();
function clear_data($val){

    $val = trim($val);
    $val = stripslashes($val);
    $val = htmlspecialchars($val);

    return $val;
}

$selectspecialistid = $_POST['select_specialist'];
$email = $_POST['email'];
$fullnameuser = $_POST['fullname'];
$topic = $_POST['topic'];
$message_user = $_POST['message_feedback'];

$query = "SELECT *FROM `specialist1` WHERE id = '$selectspecialistid'";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {

    $specialistinfo = mysqli_fetch_assoc($result);
    $emailspecialist = $specialistinfo['email'];

    $query = "INSERT INTO `test`.`feedback_forspecialist` (
        `id` ,
        `from` ,
        `to` ,
        `user_full_name` ,
        `topic` ,
        `message_question`
        )
        VALUES (
        NULL , '$email', '$emailspecialist', '$fullnameuser', '$topic', '$message_user'
        )
        ";
    $result = mysqli_query($connect, $query);

    $name = clear_data($fullnameuser);       

    $to = $emailspecialist;
    $from = clear_data($email);
    $subject = clear_data($topic);
    $text = clear_data($message_user);

    $headers = "From : $from\r\n";
    $headers .= "Reply-to $from\r\n";
    $headers .= "X-Mailer:". phpversion()."\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; 

    $message = 'ФИО: '.$name."\n".'Email: '.$from."\n".'Сообщение: '.$text."\n"; 



    mail($to, $subject, $message, $headers);
    
    $_SESSION['message1'] = 'Сообщение отправлено';
    header('Location: ../profile.php');
    
} else {
    $_SESSION['message1'] = 'Ошибка запроса к бд';
    header('Location: ../profile.php');
}
?>