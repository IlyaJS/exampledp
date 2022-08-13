<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['status']);
unset($_SESSION['user_id']);
unset($_SESSION['user_password']);
/* unset($_SESSION['user_email']); */
header('Location: ../index.php');