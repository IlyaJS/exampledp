<!-- Меня контекста header -->
<?php
if ($_SESSION['status']) {
    $status = $_SESSION['status'];
    $statusbutton = "Профиль";
    $statussrc = "../profile.php";
    $statuscolor = "vendor_header_listatus";
} else {
    $status = "не в сети";
    $statusbutton = "Вход";
    $statussrc = "../indexaut.php";
    $statuscolor = "vendor_header_listatus1";
}

?>
<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h4 class="text-white vendorfontfamily">Главное меню</h4>

            <!-- <a href="indexaut.php"><button type="button" class="btn btn-primary">Вход</button></a> -->
            <ul class="nav flex-column vendorfontfamily">
                <li class="nav-item">
                    <a class="nav-link active vendor_header_li" href="../index.php">Главная страница</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active vendor_header_li" href="../specialist_cart.php">Специалисты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active vendor_header_li" href="../download_test.php">Скачать тест</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active vendor_header_li" href="../catalog_test.php">Тесты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link vendor_header_li" href="<?= $statussrc ?>"><?= $statusbutton ?></a>
                </li>
                <li class="nav-item">
                            <a class="nav-link <?= $statuscolor ?>" href="#">Статус: <?= $status ?></a>
                </li>
                <?php
                if ($_SESSION['status']) {


                    echo '<li class="nav-item">
                        <a class="nav-link vendor_header_li" href="vendor/logout.php">Выход</a>
                     </li>';
                }

                ?>
            </ul>

        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark vendorheaderlogo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <p class="text-white vendorlogo vendorfontfamily"><a class="vendorcolorlogo" href="index.php">Psychodiagnostics</a></p>
    </nav>
</div>

<!--конец  блока header-->