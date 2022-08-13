<?php
session_start();
require_once 'vendor/connect.php';
if ($_SESSION['user']) {
    if($_SESSION['user']['login'] != "admin")
    {   $_SESSION['message1'] = "Вы не являетесь администратором";
        header('Location: profile.php');
    } else {
        $statusadmin = "Режим администратора";
    }
    
}


/*  pagination*/

if (isset($_GET['page'])) {

    $page = $_GET['page'];
} else {
    $page = 1;
}

$num_per_page = 05;
$start_from = ($page - 1) * 05;

$query = "SELECT * FROM `specialist1` LIMIT $start_from,$num_per_page";
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

    <title>Режим администрирования</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css">
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
.vendorfontfamily1{
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
        margin-top: 0.5%;
    }
    /* style pagination */
    .container_row_button{
        margin-top: 1%;
        margin-bottom: 1%;
    }
    .row_button_size{
        margin-left: 5px;
    }
</style>

<body>
    <?php
    require_once 'vendor/header.php';
    ?>
    <!--конец  блока header-->
    <div class="container-fluid vendorfontfamily size_data1">
        <div class="row d-flex justify-content-center">
            <h1>
                <p class=""><?= $statusadmin ?></p>
                <?php
                        if ($_SESSION['message']) {
                            echo '<br><p class="msg"> ' . $_SESSION['message'] . ' </p>';
                        }
                        unset($_SESSION['message']);
                        ?>
            </h1>
        </div>
        <a class="button_back" href="vendor/createspecialist.php"><button class="btn btn-primary btn-lg btn-block">Добавить специалиста</button></a>
        <a class="button_back" href="vendor/create_testfor_download.php"><button class="btn btn-primary btn-lg btn-block button_back_btn">Добавить тест (с возможностью скачать)</button></a>
        <!-- <a class="button_back" href="admin_mod_test.php"><button class="btn btn-info btn-lg btn-block button_back_btn">Открыть таблицу тестов</button></a> -->
        <a class="button_back" href="profile.php"><button class="btn btn-info btn-lg btn-block button_back_btn">Выйти из режима администратора</button></a>

        <br>
    </div>
    
    <table class="table-responsive table-bordered table-sm vendorfontfamily1">
    <div class="container-fluid vendorfontfamily size_data1">
        <div class="row d-flex justify-content-center">
                <p class="">Специалисты</p>
        </div>
    </div>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ФИО</th>
                <th scope="col">Категория</th>
                <th scope="col">Стаж</th>
                <th scope="col">О специалисте</th>
                <th scope="col">Изображения</th>
                <th scope="col">Специальность</th>
                <th scope="col">Email</th>
                <th scope="col">Степень</th>
                <th scope="col">Звание</th>
                <th scope="col">Действие</th>
                <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {


            ?>

                <tr class="align-middle">
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['full_name'] ?></td>
                    <td><?= $row['category'] ?></td>
                    <td><?= $row['experience'] ?></td>
                    <td><?= $row['mini_discription'] ?></td>
                    <td><?= $row['avatar'] ?></td>
                    <td><?= $row['speciality'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['deagre'] ?></td>
                    <td><?= $row['ranks'] ?></td>
                    <td><a href="updatespecialist.php?id=<?= $row['id'] ?>">Изменить</a></td>
                    <td><a style="color: red;" href="vendor/deletespecialist.php?id=<?= $row['id'] ?>">удалить</a></td>

                </tr>
            <?php
            }

            ?>

        </tbody>
    </table>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center container_row_button">
        <div class="p-2 profiletext profilesize2">
                    
                
            <?php
            $pr_query = "SELECT * FROM `specialist1`";
            $pr_result = mysqli_query($connect, $pr_query);
            $total_record = mysqli_num_rows($pr_result);

            $total_page = ceil($total_record / $num_per_page);

            
            if ($page > 1) {
                echo "<a href='administrator_mode.php?page=" . ($page - 1) . "' class='btn btn-primary row_button_size'>Назад</a>";
            }

            for ($i = 1; $i < $total_page; $i++) {
                echo "<a href='administrator_mode.php?page=" . $i . "' class='btn btn-primary row_button_size'>$i</a>";
            }

            if ($i > $page) {
                echo "<a href='administrator_mode.php?page=" . ($page + 1) . "' class='btn btn-primary row_button_size'>Вперед</a>";
            }


            ?>
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