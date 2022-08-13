<?php
require_once 'connect.php';
session_start();
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm && md5($password) === $_SESSION['user_password']) {
    
    header('Location: ../administrator_mode.php');
} else {
    $_SESSION['message'] = 'Неправильный пароль!';
    header('Location: ../profile.php');
}

