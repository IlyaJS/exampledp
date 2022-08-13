<?php
session_start();
require_once 'vendor/connect.php';
if ($_SESSION['user']) {
  $statusadmin = "Специалисты";
}


/*  pagination*/

if (isset($_GET['page'])) {

  $page = $_GET['page'];
} else {
  $page = 1;
}

$num_per_page = 06;
$start_from = ($page - 1) * 06;

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
    .list-group-item-action:hover{
        color: white !important;
        background-color: #007bff !important;
    }
    .card_body_size{
      margin-top: 2%;
      margin-bottom: 1%;

    }
</style>

<body>
  <?php
  require_once 'vendor/header.php';
  ?>

  <!--конец  блока header-->
  <div class="container vendorfontfamily size_data1">
    <div class="row d-flex justify-content-center">
      <h1>
        <p class=""><?= $statusadmin ?></p>
      </h1>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
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

  <div class="container-fluid">
    <div class="row d-flex justify-content-center container_row_button">
      <?php
      $pr_query = "SELECT * FROM `specialist1`";
      $pr_result = mysqli_query($connect, $pr_query);
      $total_record = mysqli_num_rows($pr_result);

      $total_page = ceil($total_record / $num_per_page);


      if ($page > 1) {
        echo "<a href='specialist_cart.php?page=" . ($page - 1) . "' class='btn btn-primary row_button_size'>Назад</a>";
      }

      for ($i = 1; $i < $total_page; $i++) {
        echo "<a href='specialist_cart.php?page=" . $i . "' class='btn btn-primary row_button_size'>$i</a>";
      }

      if ($i > $page) {
        echo "<a href='specialist_cart.php?page=" . ($page + 1) . "' class='btn btn-primary row_button_size'>Вперед</a>";
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