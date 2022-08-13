<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();
require_once 'connect.php';
if ($_SESSION['user']) {
}
$id = $_GET['id'];

$query1 = "SELECT * FROM `test`.`testall` WHERE `testall`.`id` = $id";
$result1 = mysqli_query($connect, $query1);
$row1 = mysqli_fetch_assoc($result1)

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Авторизация и регистрация</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php
    require_once 'header.php';
    ?>

    <!--конец  блока header-->
    <?php
                            if ($_SESSION['message']) {
                                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                            }
                            unset($_SESSION['message']);
                            ?>
    <?php
    if ($id == "1"){
        require_once 'test1.php';
    } elseif($id == "2") {
        echo "Пока что нету : " . phpversion();
        
    } elseif($id == "3") {
        echo "Пока что нету : " . phpversion();
    } elseif($id == "4") {
        echo "Пока что нету : " . phpversion();
    } elseif($id == "5") {
        echo "Пока что нету : " . phpversion();
    } elseif($id == "6") {
        echo "Пока что нету : " . phpversion();
    } elseif($id == "7") {
        echo "Пока что нету : " . phpversion();
    } elseif($id == "8") {
        echo "Пока что нету : " . phpversion();
    } elseif($id == "9") {
        echo "Пока что нету : " . phpversion();
    } elseif($id == "10") {
        echo "Пока что нету : " . phpversion();
    }

       

    ?>










    <!--  -->








    <!-- Начала контент блока footer -->
    <?php
require_once 'footer.php';
    ?>

    <!-- конец контента блока footer -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>