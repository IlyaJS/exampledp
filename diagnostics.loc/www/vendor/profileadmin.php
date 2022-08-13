<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 vendorfontfamily">
            <div class="d-flex flex-column">
                <div class="p-2 vendorfontfamily">
                    <p class="profiletext profilesize1">Профиль администратора</p>
                </div>
                <div class="p-2"><img class="profileimg" src="<?= $_SESSION['user']['avatar'] ?>" alt=""></div>
                <div class="p-2 profiletext profilesize2">
                    <p>ФИО : <?= $_SESSION['user']['full_name'] ?></p>
                </div>
                <div class="p-2 profiletext profilesize2">
                    <p>Login : <?= $_SESSION['user']['login'] ?></p>
                </div>
                <div class="p-2 profiletext profilesize2">
                    <p>Email : <a href="#"><?= $_SESSION['user']['email'] ?></a></p>
                </div>
                <div class="p-2 profiletext profilesize2"><a class="button_back" href="vendor/logout.php"><button class="btn btn-primary btn-lg btn-block button_back_btn">Выход</button></a></div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
            <div class="container-fluid vendorfontfamily">
                <div class="row col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 d-flex justify-content-center">
                    <h1>
                        <p class="">Режим администратора</p>
                    </h1>
                </div>

            </div>
            <div class="p-2 profiletext profilesize2">
                <form action="vendor/validationadmin.php" method="post" class="vendorfontfamily">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Пароль</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите пароль">
                    </div>
                    <div class="form-group">
                        <label>Подтверждение пароля</label>
                        <input type="password" name="password_confirm" class="form-control" id="exampleInputPassword1" placeholder="Подтвердите пароль">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block vendorfontfamily">Войти в режим администрирования</button>
                    <div class="form-group">
                        <?php
                        if ($_SESSION['message']) {
                            echo '<br><p class="msg"> ' . $_SESSION['message'] . ' </p>';
                        }
                        unset($_SESSION['message']);
                        ?>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>