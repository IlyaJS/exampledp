<?php
session_start();
require_once 'vendor/connect.php';

$query = "SELECT * FROM `specialist1` LIMIT 4";
$result = mysqli_query($connect, $query);
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Главная страница</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<style>
    .card-img-top {
        width: 100% !important;
        height: 300px !important;


    }

    .card-text {
        height: 50px !important;
    }

    .container_size_menu {
        margin-top: 5%;
    }

    .list-group-item-action:hover {
        color: white !important;
        background-color: #007bff !important;
    }
    .container_poz_fluid{
        margin-bottom: 5%;
    }
    .mtext_conainer {
    padding-top: 15%;
    padding-left: 10%;
    padding-right: 10%;

}
</style>

<body>
    <?php
    require_once 'vendor/header.php';
    ?>

    <!-- Контент формы-->
    <!-- Начало контента блока BODY -->
    <div class="container-fluid ">
        <div class="row container_poz_fluid">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="mtext_conainer">
                    <h1>
                        <p class="main_text_1 vendorfontfamily">Психологическая диагностика</p>
                    </h1>

                    <p class="main_text_2 vendorfontfamily">Это четко спланированное обследование, состоящее из консультаций, опросов и тщательно подобранных друг к другу целевых тестовых методик, которые позволяют распознать индивидуальные психологические особенности человека и определить дальнейшие перспективы развития.</p>
                </div>
            </div>
            <div class="row col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="img-fluid img_style_poz"><img class="img-thumbnail" src="./image/jose.png" alt="Глаз"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid vendorfontfamily">
                <div class="row d-flex justify-content-center">
                    <h1>
                        <p class="">Специалисты</p>
                    </h1>
                </div>

            </div>
    <div class="card card-body ">

        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {


                ?> <div class="col-xl-auto col-lg-auto col-md-auto col-auto card_body_size">
                        <div class="card" style="width: 19rem;">
                            <img src="<?= $row['avatar'] ?>" class="card-img-top" alt="Изображения">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['speciality'] ?></h5>
                                <p class="card-text"><?= $row['full_name'] ?></p>
                                <a href="card_profile_specialist.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-lg btn-block">Открыть профиль</a>
                            </div>
                        </div>
                    </div>

                <?php
                }

                ?>
            </div>
        </div>



    </div>



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