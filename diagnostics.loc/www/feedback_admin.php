<?php
session_start();
require_once 'vendor/connect.php';
if ($_SESSION['user']) {
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

    <title>Авторизация и регистрация</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<style>
    .button_back {
        margin-top: 1%;
        text-decoration: none !important;
    }
</style>

<body>
    <?php
    require_once 'vendor/header.php';
    ?>

    <!--конец  блока header-->

    <!-- Форма авторизации -->

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="d-flex flex-column">
                                <div class="container-fluid vendorfontfamily">
                                    <div class="row d-flex justify-content-center">
                                        <h1>
                                            <p class="">Обратная связь с администрацией</p>
                                        </h1>
                                    </div>

                                </div>
                                <form action="vendor/feedback_admin_handler.php" method="post" class="vendorfontfamily">
                                    <?php
                                    if ($_SESSION['user']) {
                                        echo '
                                        <div class="form-group">
                                        <label>Проверьте ваш Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="' . $_SESSION['user']['email'] . '">
                                        </div>
                                        
                                        
                                        ';
                                    } else {

                                        echo '
                                        <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Введите email">
                                        </div>

                                        ';
                                    }
                                    ?>
                                    <?php
                                    if ($_SESSION['user']) {
                                        echo '
                                        <div class="form-group">
                                        <label>Проверьте ваше ФИО</label>
                                        <input type="text" name="fullname" class="form-control" id="exampleInputPassword1" value="' . $_SESSION['user']['full_name'] . '">
                                        </div>
                                        
                                        
                                        ';
                                    } else {

                                        echo '
                                        <div class="form-group">
                                        <label>ФИО</label>
                                        <input type="text" name="fullname" class="form-control" id="exampleInputPassword1" placeholder="Введите ФИО">
                                        </div>

                                        ';
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label>Тема</label>
                                        <input type="text" name="topic" class="form-control" id="exampleInputPassword1" placeholder="Введите тему">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Вопрос</label>
                                        <textarea class="form-control" name="message_feedback" id="exampleFormControlTextarea1" rows="5" placeholder="Ваш вопрос"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block vendorfontfamily">Отправить сообщение</button>
                                </form>
                                <a class="button_back" href="/"><button class="btn btn-primary btn-lg btn-block button_back_btn">Главная страница</button></a>
                                <div class="form-group">
                                    <?php
                                    if ($_SESSION['message']) {
                                        echo '<br><p class="msg"> ' . $_SESSION['message'] . ' </p>';
                                    }
                                    unset($_SESSION['message']);
                                    ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







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