<?php
session_start();
require_once 'connect.php';
if ($_SESSION['user']) {
    $statusupdate = "Добавить специалиста";
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
<style>
.button_back {
        text-decoration: none !important;
    }
</style>
<body>
    <?php
    require_once 'header.php';
    ?>
<br>
    <!--конец  блока header-->
    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">
                <div class="container-fluid vendorfontfamily">
                    <div class="row d-flex justify-content-center">
                        <h1>
                            <p class=""><?= $statusupdate ?></p>
                        </h1>
                    </div>

                </div>
                <div class="vendorfontfamily">
                    <form action="createspecialistquery.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>ФИО</label>
                            <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ФИО">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Категория</label>
                            <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите категорию">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Стаж</label>
                            <input type="text" name="experience" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите стаж">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">О специалисте</label>
                            <textarea class="form-control" name="minidiscription" id="exampleFormControlTextarea1" rows="5" placeholder="Введите описания о специалистев"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Изображение профиля</label>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Специальность</label>
                            <input type="text" name="speciality" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Введите пециальность" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Степень	</label>
                            <input type="text" name="deagre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите Степень">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Звание</label>
                            <input type="text" name="ranks" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите Звания">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Добавить</button>
                    </form>
                    <div class="pt-2 profiletext profilesize2"><a class="button_back" href="../administrator_mode.php"><button class="btn btn-primary btn-lg btn-block button_back_btn">Назад</button></a></div>
                </div>
                
            </div>
            <div class="col-3">

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