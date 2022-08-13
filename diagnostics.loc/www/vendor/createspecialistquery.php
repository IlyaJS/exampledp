<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require_once 'connect.php';


$fullname = $_POST['fullname'];
$category = $_POST['category'];
$experience = $_POST['experience'];
$minidiscription = $_POST['minidiscription'];
$path  = 'imgspecialist/' . time() . $_FILES['avatar']['name'];
if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
    $_SESSION['message'] = 'Ошибка при загрузке сообщения';
    header('Location: ../administrator_mode.php');
}
$speciality = $_POST['speciality'];
$email = $_POST['email'];
$deagre = $_POST['deagre'];
$ranks = $_POST['ranks'];


mysqli_query($connect, "INSERT INTO `test`.`specialist1` (
    `id` ,
    `full_name` ,
    `category` ,
    `experience` ,
    `mini_discription` ,
    `avatar` ,
    `speciality` ,
    `email` ,
    `deagre` ,
    `ranks`
    )
    VALUES (
    NULL , '$fullname ', '$category', '$experience', '$minidiscription', '$path', '$speciality', '$email', '$deagre', '$ranks')"
    );


header('Location: ../administrator_mode.php');

?>