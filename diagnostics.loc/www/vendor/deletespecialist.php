<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require_once 'connect.php';

$id = $_GET['id'];


mysqli_query($connect, "DELETE FROM `test`.`specialist1` WHERE `specialist1`.`id` = $id");

header('Location: ../administrator_mode.php');