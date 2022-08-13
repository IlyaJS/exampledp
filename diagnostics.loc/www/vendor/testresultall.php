<?php
require_once 'connect.php';
session_start();
$number_test = $_GET['test'];
if ($number_test = "1") {
    $_SESSION['result_test'];
    $answer1 = $_POST['test1answer1'];
    $answer2 = $_POST['test1answer2'];
    $answer3 = $_POST['test1answer3'];
    $answer4 = $_POST['test1answer4'];
    $answer5 = $_POST['test1answer5'];
    $answer6 = $_POST['test1answer6'];
    $answer7 = $_POST['test1answer7'];
    $answer8 = $_POST['test1answer8'];
    $answer9 = $_POST['test1answer9'];
    $answer10 = $_POST['test1answer10'];
    $answer11 = $_POST['test1answer11'];
    $answer12 = $_POST['test1answer12'];
    $answer13 = $_POST['test1answer13'];
    $answer14 = $_POST['test1answer14'];
    $answer15 = $_POST['test1answer15'];
    $answer16 = $_POST['test1answer16'];
    $result_answer = ($answer1 + $answer2 + $answer3 + $answer4 + $answer5 + $answer6 + $answer7 + $answer8 + $answer9 + $answer10 + $answer11 + $answer12 + $answer13 + $answer14 + $answer15 + $answer16);

    if ($result_answer >= 36) {
        $result_diagnostics = "Вас не отнесешь к числу терпеливых и спокойных людей. Вас раздражает почти все, даже самое незначительное. Вы вспыльчивы и легко выходите из себя. Это расшатывает вашу нервную систему, усиливая трения с окружающими.";

        $_SESSION['result_test'] = $result_diagnostics;
        header('Location: resultall.php');
    } else if ($result_answer >= 13 && $result_answer < 36) {
        $result_diagnostics = "Вы принадлежите к наиболее распространенной группе людей. Вас раздражают только очень неприятные вещи. Не драматизируя повседневные невзгоды, вы способны легко забывать о них.";

        $_SESSION['result_test'] = $result_diagnostics;
        header('Location: resultall.php');
    } else if ($result_answer < 13) {
        $result_diagnostics = "Вы достаточно спокойный человек, реально смотрящий на жизнь. Вас не так-то просто вывести из равновесия. А это гарантия против стрессов";

        $_SESSION['result_test'] = $result_diagnostics;
        header('Location: resultall.php');
    }
} else {
    $_SESSION['message'] = 'Ошибка запроса обратитесь к администратору';
        header('Location: testall.php');
}
