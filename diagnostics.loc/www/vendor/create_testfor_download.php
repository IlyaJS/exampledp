<?php
session_start();
require_once 'connect.php';
if ($_SESSION['user']) {
    $statusupdate = "Добавить тест на скачивания";
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

    <title>Добавления нового специалиста</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php
    require_once 'header.php';
    ?>
    <br>
    <!--конец  блока header-->
    <!-- Контент-->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <div class="d-flex flex-column">
                    <div class="container-fluid vendorfontfamily">
                        <div class="row d-flex justify-content-center">
                            <h1>
                                <p class=""><?= $statusupdate ?></p>
                            </h1>
                        </div>

                    </div>
                    <div class="p-2 profiletext profilesize2">
                        <div class="vendorfontfamily">
                            <form action="create_test_download.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Названия теста</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите название">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Категория</label>
                                    <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите категорию">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Тип</label>
                                    <input type="text" name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите тип">
                                </div>
                                <div class="form-group">
                                    <label>Выбирите файл</label>
                                    <input type="file" name="avatar" class="form-control">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Добавить</button>
                            </form>
                            <div class="pt-2 profiletext profilesize2"><a class="button_back" href="../administrator_mode.php"><button class="btn btn-primary btn-lg btn-block button_back_btn">Назад</button></a></div>
                        </div>
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