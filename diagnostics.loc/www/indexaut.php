<?php
session_start();
require_once 'vendor/connect.php';
if ($_SESSION['user']) {
    header('Location: profile.php');
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

<body>
    <?php
    require_once 'vendor/header.php';
    ?>

    <!--конец  блока header-->

    <!-- Форма авторизации -->

    <div class="container">
        <div class="row">
            <div class="col-3">
               
            </div>
            <div class="col-6">
                <div class="container-fluid vendorfontfamily">
                    <div class="row d-flex justify-content-center">
                        <h1>
                            <p class="">Авторизация и регистрация</p>
                        </h1>
                    </div>

                </div>
                <div class="vendorfontfamily">
                    <form action="vendor/signin.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Логин</label>
                            <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите свой логин" autofocus>
                        </div>
                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Войти</button>
                        <div class="form-group">
                            <p>
                                У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
                            </p>
                            <?php
                            if ($_SESSION['message']) {
                                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                            }
                            unset($_SESSION['message']);
                            ?>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3">
            
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