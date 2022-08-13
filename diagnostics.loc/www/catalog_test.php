<?php
session_start();
require_once 'vendor/connect.php';
if ($_SESSION['user']) {
    $statusadmin = "Тесты";
}


/*  pagination*/

if (isset($_GET['page'])) {

    $page = $_GET['page'];
} else {
    $page = 1;
}

$num_per_page = 02;
$start_from = ($page - 1) * 02;

$query = "SELECT * FROM `testall` LIMIT $start_from,$num_per_page";
$result = mysqli_query($connect, $query);

/*  */


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Специалисты</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<style>
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

    .vendorfontfamily1 {
        font-family: "SF Pro Display" !important;
        font-style: normal !important;
        font-weight: bold !important;
    }

    .size_data1 {
        margin-top: 15px;
    }

    .button_back {
        text-decoration: none !important;
    }

    .button_back_btn {
        margin-top: 5px;
    }

    /* style pagination */
    .container_row_button {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .row_button_size {
        margin-left: 5px;
    }

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

    .card_body_size {
        margin-top: 2%;
        margin-bottom: 1%;

    }
</style>

<body>
    <?php
    require_once 'vendor/header.php';
    ?>




    <!-- Пример каталога -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <div class="d-flex flex-column">
                    <br>
                    <div class="container-fluid vendorfontfamily">
                        <div class="row d-flex justify-content-center">
                            <h1>
                                <p class=""><?= $statusadmin ?></p>
                            </h1>
                        </div>

                    </div>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {


                    ?>
                        <div class="p-2 profiletext profilesize2">
                            <a class="button_back" href="vendor/testall.php?id=<?= $row['id'] ?>">
                                <button class="btn btn-primary btn-lg btn-block button_back_btn"><?= $row['test_name'] ?></button>
                            </a>
                        </div>
                    <?php
                    }

                    ?>
                    <div class="p-2 profiletext profilesize2">
                        <div class="container-fluid vendorfontfamily">
                            <div class="row d-flex justify-content-center">
                                <h1>
                                    <?php
                                    if ($_SESSION['message']) {
                                        echo '<br><p class="msg"> ' . $_SESSION['message'] . ' </p>';
                                    }
                                    unset($_SESSION['message']);
                                    ?>
                                </h1>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--конец  блока header-->


    <div class="container-fluid">
        <div class="row d-flex justify-content-center container_row_button">
            <?php
            $pr_query = "SELECT * FROM `testall`";
            $pr_result = mysqli_query($connect, $pr_query);
            $total_record = mysqli_num_rows($pr_result);

            $total_page = ceil($total_record / $num_per_page);


            if ($page > 1) {
                echo "<a href='catalog_test.php?page=" . ($page - 1) . "' class='btn btn-primary row_button_size'>Назад</a>";
            }

            for ($i = 1; $i < $total_page; $i++) {
                echo "<a href='catalog_test.php?page=" . $i . "' class='btn btn-primary row_button_size'>$i</a>";
            }

            if ($i > $page) {
                echo "<a href='catalog_test.php?page=" . ($page + 1) . "' class='btn btn-primary row_button_size'>Вперед</a>";
            }


            ?>
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