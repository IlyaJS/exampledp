<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();
require_once 'connect.php';
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
        text-decoration: none !important;
    }
</style>

<body>
    <?php
    require_once 'header.php';
    ?>

    <!--конец  блока header-->

    <!-- Форма авторизации -->

    <!--  -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="d-flex flex-column">
                    <div class="container-fluid vendorfontfamily">
                        <div class="row d-flex justify-content-center">
                            <h1>
                                <p class="">Результаты теста</p>
                            </h1>
                        </div>
                        <div class="p-2 profiletext profilesize2">
                            <h1>
                                <p class=""><?= $_SESSION['result_test'] ?></p>
                            </h1>
                        </div>
                        <div class="p-2 profiletext profilesize2">
                            <h1>
                                <p class="">Если хотите вывести результат на почту воспользуйтесь формой нижи, если же нет, нажмите кнопку (на главную страницу).</p>
                            </h1>
                        </div>

                        <?php
                        if ($_SESSION['user']) {
                            echo '
                            <div class="p-2 profiletext profilesize2">
                            <form action="emailunsetclear.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Проверьте ваш email</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="'.$_SESSION['user']['email'].'">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Вывести результат на почту</button>
                            </form>
                        </div>
                            
                            ';
                        } else {

                            echo '
                            <div class="p-2 profiletext profilesize2">
                            <form action="emailunsetclear.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email для вывода результата</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите свой email">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Вывести результат на почту</button>
                            </form>
                        </div>
                            
                            
                            ';


                        }

                        ?>
                        <div class="p-2 profiletext profilesize2">
                            <a class="button_back" href="../index.php">
                                <button class="btn btn-primary btn-lg btn-block button_back_btn">На главную страницу</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>






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