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

        if (!isset($_GET["AnsPg"])) {
            if (numberOfQuestions($Difficulty, $ActivityNo) == 6) {
                //FORM STARTS - INPUTS
                if ($CurrentQuestionNo <= numberOfQuestions($Difficulty, $ActivityNo)) {
                    ?>
                        <form action=""?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>&amp;QuestionNumber=<?= $CurrentQuestionNo ?>&amp;AnsPg" method="post">
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
                                    <td><input type="text" name="singular-<?= $Categories[$i] ?>-<?= $CurrentQuestionNo ?>"></td>
                                    <td><input type="text" name="plural-<?= $Categories[$i] ?>-<?= $CurrentQuestionNo ?>"></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <input type="submit" value="Submit">
                        </form>

                    <?php
                    //FORM ENDS - INPUTS

                } elseif ($CurrentQuestionNo > numberOfQuestions($Difficulty, $ActivityNo)) {
                    ?>
                    <p>Your score was <?= $_SESSION["Score"] ?></p>
                    <a class="button" href="?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>">Take the
                        Test
                        Again</a>
                    <a class="button" href="">Go to the Next Lesson</a>
                    <?php
                }

            } elseif (numberOfQuestions($Difficulty, $ActivityNo) == 8) {
                if ($CurrentQuestionNo <= numberOfQuestions($Difficulty, $ActivityNo)) {
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
                } elseif ($CurrentQuestionNo > numberOfQuestions($Difficulty, $ActivityNo)) {
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

                $Answers = array(
                    "Singular" => array(
                        "Nominative" => $_GET["singular-$CurrentQuestionNo-Nominative"],
                        "Vocative" => $_GET["singular-$CurrentQuestionNo-Vocative"],
                        "Accusative" => $_GET["singular-$CurrentQuestionNo-Accusative"],
                        "Genitive" => $_GET["singular-$CurrentQuestionNo-Genitive"],
                        "Dative" => $_GET["singular-$CurrentQuestionNo-Dative"],
                        "Ablative" => $_GET["singular-$CurrentQuestionNo-Ablative"]
                    ),
                    "Plural" => array(
                        "Nominative" => $_GET["plural-$CurrentQuestionNo-Nominative"],
                        "Vocative" => $_GET["plural-$CurrentQuestionNo-Vocative"],
                        "Accusative" => $_GET["plural-$CurrentQuestionNo-Accusative"],
                        "Genitive" => $_GET["plural-$CurrentQuestionNo-Genitive"],
                        "Dative" => $_GET["plural-$CurrentQuestionNo-Dative"],
                        "Ablative" => $_GET["plural-$CurrentQuestionNo-Ablative"]
                    )
                );


                for ($x = 0; $x < 2; $x++) {
                    for ($i = 0; $i < 6; $i++) {
                        if ($QnA["Question $CurrentQuestionNo"]["Answers"][$x][$i] == $Answers[$x][$i]) {
                            $_SESSION["Score"]++;
                            ?>
                            <h2>Correct!</h2>
                            <p>The <?= $Categories[$i] ?> <?php if ($x = 1) {
                                    echo "singular";
                                } else {
                                    echo "plural";
                                } ?>>form of <?= $QnA["Question $CurrentQuestionNo"]["Word"] ?>
                                is <?= $Answers[$x][$i] ?> ✔️ </p>
                        <?php } else { ?>
                            <h2>Incorrect!</h2>
                            <p>The correct <?= $Categories[$i] ?> <?php if ($x = 1) {
                                    echo "singular";
                                } else {
                                    echo "plural";
                                } ?>>form of <?= $QnA["Question $CurrentQuestionNo"]["Word"] ?>
                                is <?= $QnA["Question $CurrentQuestionNo|"]["Answers"][$x][$i] ?> ✔️ </p>
                        <?php }
                    }
                }

                echo "Your current score is " . $_SESSION["Score"];

            } elseif (numberOfQuestions($Difficulty, $ActivityNo) == 8) {

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
            }
            ?>

            <p><?= $Answer ?></p>
            <a class="button" href="?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>&amp;QuestionNumber=<?= $NextQ ?>"> Go To Next Question </a>
            <?php

        }

        ?>
    </div>
</article>