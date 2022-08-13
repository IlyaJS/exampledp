<?php
$query = "SELECT * FROM `specialist1`";
$result = mysqli_query($connect, $query);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="d-flex flex-column">
                <div class="p-2">
                <div class="container-fluid vendorfontfamily">
                                <div class="row d-flex justify-content-center">
                                    <h1>
                                        <p class="">Профиль пользователя</p>
                                    </h1>
                                </div>

                            </div>
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
                <div class="p-2 profiletext profilesize2">
                    <p>Чтобы удалить аккаунт введите пароль :</p>
                </div>
                <div class="p-2 profiletext profilesize2">
                    <form action="vendor/deleteprofile.php?id=<?= $_SESSION['user_id'] ?>" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Пароль</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите свой пароль">
                        </div>
                        <div class="form-group">
                            <label>Подтверждение пароля</label>
                            <input type="password" name="password_confirm" class="form-control" id="exampleInputPassword1" placeholder="Подтвердите пароль">
                        </div>
                        <button type="submit" class="btn btn-danger btn-lg btn-block">Удалить аккаунт</button>
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
                <div class="p-2 profiletext profilesize2"><a class="button_back" href="vendor/logout.php"><button class="btn btn-primary btn-lg btn-block button_back_btn">Выход</button></a></div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="d-flex flex-column">
                            <div class="container-fluid vendorfontfamily">
                                <div class="row d-flex justify-content-center">
                                    <h1>
                                        <p class="">Обратная связь со специалистом</p>
                                    </h1>
                                </div>

                            </div>
                            <form action="vendor/feedback_user_specialist.php" method="post" class="vendorfontfamily" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Выберите специалиста</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="select_specialist">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {


                                        ?>
                                            <option value="<?= $row['id'] ?>"><?= $row['full_name'] ?></option>
                                        <?php
                                        }

                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Проверьте ваш email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="<?= $_SESSION['user']['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Проверьте ФИО</label>
                                    <input type="text" name="fullname" class="form-control" id="exampleInputPassword1" value="<?= $_SESSION['user']['full_name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Тема вашего сообщения (кратко)</label>
                                    <input type="text" name="topic" class="form-control" id="exampleInputPassword1" placeholder="Введите тему">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Суть вашего вопроса</label>
                                    <textarea class="form-control" name="message_feedback" id="exampleFormControlTextarea1" rows="5" placeholder="Ваш вопрос"><?= $specialist['mini_discription'] ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block vendorfontfamily">Отправить сообщение</button>
                                <div class="form-group">
                                    <?php
                                    if ($_SESSION['message1']) {
                                        echo '<br><p class="msg"> ' . $_SESSION['message1'] . ' </p>';
                                    }
                                    unset($_SESSION['message1']);
                                    ?>

                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>