<div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 blockquote">
                <div class="d-flex flex-column">
                    <div class="container-fluid vendorfontfamily">
                        <div class="row d-flex justify-content-center">
                            <h1>
                                <p class=""><?= $row1['test_name'] ?></p>
                            </h1>
                        </div>

                    </div>
                    <div class="p-2 profiletext profilesize2">
                    <div class="container-fluid vendorfontfamily">
                        <div class="row d-flex justify-content-center">
                            <h1>
                                <p class="">Для ответа на предложенные вопросы выберите один из трех вариантов: «да, безусловно», «да, но не очень» или «нет, ни в коем случае».</p>
                                <p class="">Итак, чтобы выяснить, как вы реагируете на стрессы, ответьте, раздражают ли вас следующие предметы и явления.</p>
                            </h1>
                        </div>

                    </div>
                    </div>
                    <?php
                    $query2 = "SELECT * FROM `test`.`testall` WHERE `testall`.`id` = $id";
                    $result2 = mysqli_query($connect, $query2);
                    $row = mysqli_fetch_assoc($result2)


                    ?>
                    <form action="testresultall.php?test=<?=$id?>" method="post" class="text-center">

                        <div class="p-2 profiletext profilesize2">

                        </div>
                        <!-- Вопрос 1 -->
                        <div class="p-2 profiletext profilesize2">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?= $row['question1'] ?></label>
                                <div class="row d-flex justify-content-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="test1answer1" id="inlineRadioanswer1_1" value="3" checked>
                                        <label class="form-check-label" for="inlineRadioanswer1_1">да, безусловно</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="test1answer1" id="inlineRadioanswer1_2" value="1">
                                        <label class="form-check-label" for="inlineRadioanswer1_2">да, но не очень</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="test1answer1" id="inlineRadioanswer1_3" value="0">
                                        <label class="form-check-label" for="inlineRadioanswer1_3">нет, ни в коем случае</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 2 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question2'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer2" id="inlineRadioanswer2_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer2_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer2" id="inlineRadioanswer2_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer2_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer2" id="inlineRadioanswer2_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer2_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 3 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question3'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer3" id="inlineRadioanswer3_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer3_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer3" id="inlineRadioanswer3_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer3_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer3" id="inlineRadioanswer3_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer3_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 4 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question4'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer4" id="inlineRadioanswer4_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer4_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer4" id="inlineRadioanswer4_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer4_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer4" id="inlineRadioanswer4_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer4_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 5 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question5'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer5" id="inlineRadioanswer5_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer5_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer5" id="inlineRadioanswer5_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer5_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer5" id="inlineRadioanswer5_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer5_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 6 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question6'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer6" id="inlineRadioanswer6_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer6_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer6" id="inlineRadioanswer6_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer6_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer6" id="inlineRadioanswer6_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer6_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 7 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question7'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer7" id="inlineRadioanswer7_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer7_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer7" id="inlineRadioanswer7_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer7_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer7" id="inlineRadioanswer7_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer7_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 8 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question8'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer8" id="inlineRadioanswer8_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer8_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer8" id="inlineRadioanswer8_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer8_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer8" id="inlineRadioanswer8_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer8_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 9 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question9'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer9" id="inlineRadioanswer9_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer9_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer9" id="inlineRadioanswer9_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer9_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer9" id="inlineRadioanswer9_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer9_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 10 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question10'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer10" id="inlineRadioanswer10_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer10_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer10" id="inlineRadioanswer10_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer10_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer10" id="inlineRadioanswer10_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer10_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 11 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question11'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer11" id="inlineRadioanswer11_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer11_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer11" id="inlineRadioanswer11_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer11_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer11" id="inlineRadioanswer11_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer11_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 12 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question12'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer12" id="inlineRadioanswer12_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer12_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer12" id="inlineRadioanswer12_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer12_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer12" id="inlineRadioanswer12_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer12_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 13 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question13'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer13" id="inlineRadioanswer13_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer13_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer13" id="inlineRadioanswer13_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer13_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer13" id="inlineRadioanswer13_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer13_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 14 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question14'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer14" id="inlineRadioanswer14_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer14_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer14" id="inlineRadioanswer14_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer14_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer14" id="inlineRadioanswer14_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer14_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 15 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question15'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer15" id="inlineRadioanswer15_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer15_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer15" id="inlineRadioanswer15_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer15_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer15" id="inlineRadioanswer15_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer15_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <!-- Вопрос 16 -->
                        <div class="form-group">
                            <label for="exampleInputEmail1"><?= $row['question16'] ?></label>
                            <div class="row d-flex justify-content-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer16" id="inlineRadioanswer16_1" value="3" checked>
                                    <label class="form-check-label" for="inlineRadioanswer16_1">да, безусловно</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer16" id="inlineRadioanswer16_2" value="1">
                                    <label class="form-check-label" for="inlineRadioanswer16_2">да, но не очень</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="test1answer16" id="inlineRadioanswer16_3" value="0">
                                    <label class="form-check-label" for="inlineRadioanswer16_3">нет, ни в коем случае</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Ответить</button>
                </div>


                </form>

            </div>
        </div>
    </div>