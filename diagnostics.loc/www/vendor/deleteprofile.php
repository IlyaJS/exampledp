<?php
require_once 'connect.php';
session_start();
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$id = $_GET['id'];

if ($password === $password_confirm && md5($password) === $_SESSION['user_password']) {
    mysqli_query($connect, "DELETE FROM `test`.`users` WHERE `users`.`id` = $id");
    unset($_SESSION['user_id']);
    unset($_SESSION['user']);
    unset($_SESSION['status']);
    unset($_SESSION['user_password']);
    header('Location: ../index.php');
} else {
    $_SESSION['message'] = 'Пароли не совпадают!';
    header('Location: ../profile.php');
}

