<?php 
require_once 'connect.php';


$id = $_POST['id'];
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


mysqli_query($connect, "UPDATE `test`.`specialist1` SET `full_name` = '$fullname',
`category` = '$category',
`experience` = '$experience',
`mini_discription` = '$minidiscription',
`avatar` = '$path',
`speciality` = '$speciality',
`email` = '$email',
`deagre` = ' $deagre',
`ranks` = '$ranks' WHERE `specialist1`.`id` =$id;
");


header('Location: ../administrator_mode.php');

?>