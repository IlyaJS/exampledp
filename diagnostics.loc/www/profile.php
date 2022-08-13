<?php
session_start();
require_once 'vendor/connect.php';
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Профиль</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<style>
    /* стили профиля */
    @font-face {
    font-family: "SF Pro Display";
    src: url("SFProDisplay-Thin.ttf") format("truetype");
    font-style: normal;
    font-weight: normal;
}


/* Стили текста */

.vendorfontfamily {
    font-family: "SF Pro Display" !important;
    font-style: normal !important;
    font-weight: bold !important;
    font-size: 20px !important;
}
    .profiletext {
        font-family: "SF Pro Display" !important;
        font-style: normal !important;
        font-weight: bold !important;

    }

    .profilesize1 {
        font-size: 40px !important;
    }

    .profilesize2 {
        font-size: 25px !important;
    }

    .profileimg {
        width: 100%;
        height: 100%;
    }
    .button_back {
        text-decoration: none !important;
    }
</style>

<body>
    <?php
    require_once 'vendor/header.php';
    ?>

    <!-- Профиль -->
    <?php 

        if ($_SESSION['user']['login'] == "admin"){
            require_once 'vendor/profileadmin.php';
        } else {
            require_once 'vendor/profileuser.php';
        }
    
    ?>


    <!-- конец контента блока BODY -->

    <!-- Начала контент блока footer -->
    <?php 
    require_once 'vendor/footer.php';
    ?>

    <!-- конец контента блока footer -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>