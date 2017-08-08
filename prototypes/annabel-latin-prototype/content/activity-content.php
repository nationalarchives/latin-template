<article>
    <div class="entry-content clearfix">
        <h1>Activity</h1>
        <p>Can you match the English verb with its Latin translation?</p>
        <p><a href="?Difficulty=<?= $Difficulty ?>&amp;Lesson=<?= $ActivityNo ?>">Or would you like to return to the Lesson?</a></p>
        <?php
        if (isset($_GET['QuestionNumber'])){
            $CurrentQuestionNo = $_GET['QuestionNumber'];
        } else {
            $CurrentQuestionNo = 1;
            $_SESSION["Score"] = 0;
        }


        $NextQ = $CurrentQuestionNo+1;

        if ($CurrentQuestionNo > 1 && $CurrentQuestionNo <= 8) {
            $PrevQ = $CurrentQuestionNo-1;
        }


        include "./content/question-loader.php";

        if (!isset($_GET["AnsPg"])) { //IF IT IS A QUESTION PAGE (AND NOT AN ANSWER PAGE
            if (numberOfQuestions($Difficulty, $ActivityNo) == 6) { //IF ACTIVITY IS AN INPUT BASED ACTIVITY (HAS 6 QUESTIONS)
                if ($CurrentQuestionNo <= numberOfQuestions($Difficulty, $ActivityNo)) {  //IF THE LAST QUESTION HAS NOT BEEN REACHED ?>
                        <form action="?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>&amp;QuestionNumber=<?= $CurrentQuestionNo ?>&amp;AnsPg" method="post">
                            <!--Question Number-->
                            <h2>Question <?= $CurrentQuestionNo ?> of <?= numberOfQuestions($Difficulty, $ActivityNo)?>:</h2>
                            <!--Word to Decline-->
                            <p><em><?= $QnA["Question $CurrentQuestionNo"]["Word"]?></em> - <?= $QnA["Question $CurrentQuestionNo"]["Meaning"] ?></p>
                            <table class="table col-md-12">
                                <thead>
                                <tr>
                                    <td></td>
                                    <td>Singular</td>
                                    <td>Plural</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i = 0; $i < 6; $i++) { ?>
                                <tr>
                                    <td><strong><?= $Categories[$i]?></strong></td>
                                    <td><input type="text" name="singular-<?= $CurrentQuestionNo ?>-<?= $Categories[$i] ?>"></td>
                                    <td><input type="text" name="plural-<?= $CurrentQuestionNo ?>-<?= $Categories[$i] ?>"></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <input type="submit" value="Submit">
                        </form>
                        <?php
                } elseif ($CurrentQuestionNo > numberOfQuestions($Difficulty, $ActivityNo)) { //IF THE MAXIMUM NUMBER OF QUESTIONS HAS BEEN REACHED
                    ?>
                    <p>Your score was <?= $_SESSION["Score"] ?></p>
                    <a class="button" href="?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>">Take the
                        Test
                        Again</a>
                    <a class="button" href="">Go to the Next Lesson</a>
                    <?php
                }
            } elseif (numberOfQuestions($Difficulty, $ActivityNo) == 8) { //IF THE ACTIVITY IS A RADIO-BUTTON BASED ACTIVITY AND HAS 8 QUESTIONS
                if ($CurrentQuestionNo <= numberOfQuestions($Difficulty, $ActivityNo)) { //IF THE MAXIMUM NUMBER OF QUESITONS HAS NOT YET BEEN REACHED
                    //FORM STARTS - RADIO BUTTONS
                    ?>
                    <form action="?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>&amp;QuestionNumber=<?= $CurrentQuestionNo ?>&amp;AnsPg"
                          method="post">
                        <h2>Question <?= $CurrentQuestionNo ?> of <?= numberOfQuestions($Difficulty, $ActivityNo) ?>
                            :</h2>
                        <p>English: <?= $QnA["Question $CurrentQuestionNo"]["Question"] ?></p>
                        <p>Which is the correct Latin translation:</p>
                        <?php for ($i = 0; $i < 4; $i++) { ?>
                            <input type="radio"
                                   name="answer-<?= $CurrentQuestionNo ?>"
                                   value="<?= $QnA["Question $CurrentQuestionNo"]["AllA"][$i] ?>">
                            <?= $QnA["Question $CurrentQuestionNo"]["AllA"][$i] ?>
                            <br>
                        <?php } ?>
                        <br>
                        <input type="submit" value="Submit Answer">
                    </form>
                    <?php
                    //FORM ENDS - RADIO BUTTONS
                } elseif ($CurrentQuestionNo > numberOfQuestions($Difficulty, $ActivityNo)) { //IF THE MAXIMUM NUMBER OF QUESTIONS HAS BEEN REACHED
                    ?>
                    <p>Your score was <?= $_SESSION["Score"] ?></p>
                    <a class="button" href="?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>">Take the
                        Test Again</a>
                    <a class="button" href="">Go to the Next Lesson</a>
                    <?php
                }
            }

        } else { //IF IT IS AN ANSWER PAGE

            if (numberOfQuestions($Difficulty, $ActivityNo) == 6) { //IF ITS AN INPUT TYPE

                foreach ($Types as $key => $Type):
                    foreach ($Categories as $k =>$Category):
                        $UserAnswers[$Type][$Category] = strtolower($_POST["singular-$CurrentQuestionNo-$Categories[$k]"]);
                    endforeach;
                endforeach;

                ?>


                <div class="row-element clearfix">
                    <table class="table col-md-12">
                        <thead>
                        <tr>
                            <td></td>
                            <td>Singular</td>
                            <td>Plural</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for ($i = 0; $i < 6; $i++) { ?>
                        <tr>
                            <td><strong><?= $Categories[$i]?></strong></td>
                            <td>
                                 <?php //FOR EACH NOMINATIVE/VOCATIVE/ACCUSATIVE/GENITIVE/DATIVE/ABLATIVE CASE WITHIN SINGULAR(0)/PLURAL(1)
                                    $TrueSingularAns = $QnA["Question $CurrentQuestionNo"]["Beginning"] . $CorrectEndings["Singular"]["$Categories[$i]"];
                                    if ($TrueSingularAns == $UserAnswers["Singular"]["$Categories[$i]"]) {
                                        $_SESSION["Score"]++;
                                        echo $UserAnswers["Singular"]["$Categories[$i]"] . " ✔";
                                    } else {
                                        echo $UserAnswers["Singular"]["$Categories[$i]"] . " ❌" ?>
                                        <p>(The correct answer is <em><?= $TrueSingularAns ?></em>)</em>  </p>
                                    <?php } ?>
                            </td>
                            <td>
                                <?php
                                    $TruePluralAns = $QnA["Question $CurrentQuestionNo"]["Beginning"] . $CorrectEndings["Plural"]["$Categories[$i]"];
                                    if ($TruePluralAns == $UserAnswers["Plural"]["$Categories[$i]"]) {
                                        $_SESSION["Score"]++;
                                        echo $UserAnswers["Plural"]["$Categories[$i]"] . " ✔";
                                    } else {
                                        echo $UserAnswers["Plural"]["$Categories[$i]"] . " ❌" ?>
                                        <p>(The correct answer is <em><?= $TruePluralAns ?></em>)</em>  </p>
                                    <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

                <?php

                echo "Your current score is " . $_SESSION["Score"];

                ?>

                <a class="button" href="?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>&amp;QuestionNumber=<?= $NextQ ?>"> Go To Next Question </a>

                <?php

            } elseif (numberOfQuestions($Difficulty, $ActivityNo) == 8) { //IF IT IS A RADIO BUTTON TYPE

                $Answer = $_POST["answer-" . $CurrentQuestionNo];

                if ($QnA["Question $CurrentQuestionNo"]["Answer"] == $Answer) {
                    $_SESSION["Score"]++;
                    ?>
                    <h2>That is Correct!</h2>
                    <p><em><?= $Answer ?></em> translates to '<?= $QnA["Question $CurrentQuestionNo"]["Question"] ?>'
                    </p>
                    <?php
                } else {
                    ?>
                    <h2>That is Incorrect!</h2>
                    <p><em><?= $QnA["Question $CurrentQuestionNo"]["Answer"] ?></em> translates to
                        '<?= $QnA["Question $CurrentQuestionNo"]["Question"] ?>' </p>
                    <?php
                }
                ?>
                <p><?= $Answer ?></p>
                <a class="button" href="?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>&amp;QuestionNumber=<?= $NextQ ?>"> Go To Next Question </a>
                <?php
            }

        }
        ?>
    </div>
</article>