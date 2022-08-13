<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$server = "localhost";
$login = "root";
$pass = "";
$name_db = "test";

$connect = mysqli_connect($server, $login, $pass, $name_db);
$connect->set_charset("utf8");

if (!$connect)
    die('Error connect to DataBase');

header('Content-Type: text/html; charset=UTF-8');

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_regex_encoding('UTF-8');
