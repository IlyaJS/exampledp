<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Раздел социальные сети -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

        <div class="me-5 d-none d-lg-block">
            <span>Присоединяйтесь к нам в социальных сетях:</span>
        </div>

        <div>
            <a href="" class="me-4 text-reset" style="text-decoration: none !important;">
                <i class="fab fa-facebook-f fa-2x"></i>
            </a>
            <a href="" class="me-4 text-reset" style="text-decoration: none !important;">
                <i class="fab fa-twitter fa-2x"></i>
            </a>
            <a href="" class="me-4 text-reset" style="text-decoration: none !important;">
                <i class="fab fa-google fa-2x"></i>
            </a>
            <a href="" class="me-4 text-reset" style="text-decoration: none !important;">
                <i class="fab fa-instagram fa-2x"></i>
            </a>

        </div>

    </section>
    <!-- конец раздела социальные сети -->

    <!-- Раздел ссылок  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">

            <div class="row mt-3">

                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"> Psychodiagnostics</i>
                    </h6>
                    <p>
                        Информация о компании.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        Разделы
                    </h6>
                    <p>
                        <a href="../catalog_test.php" class="text-reset">Тесты</a>
                    </p>
                    <p>
                        <a href="../specialist_cart.php" class="text-reset">Специалисты</a>
                    </p>
                    <p>
                        <a href="../download_test.php" class="text-reset">Скачать тест</a>
                    </p>
                    <!-- ... -->
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Ссылки -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Полезные ссылки
                    </h6>
                    <p>
                        <a href="../index.php" class="text-reset">Главная страница</a>
                    </p>
                    <p>
                        <a href="../feedback_admin.php" class="text-reset">Обратная связь</a>
                    </p>
                    <?php
                    if ($_SESSION['user']) {
                        echo '
                            <p>
                            <a href="../profile.php" class="text-reset">Профиль</a>
                            </p>
                            ';
                    } else {
                        echo '<p>
                            <a href="../indexaut.php" class="text-reset">Вход</a>
                            </p>';
                    }
                    ?>

                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        Контакты
                    </h6>
                    <p><i class="fas fa-home me-3"></i> MINSK, St 12, BLR</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>

            </div>

        </div>
    </section>


    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="#!">Все права защищены</a>
    </div>
    <!-- Copyright -->
</footer>