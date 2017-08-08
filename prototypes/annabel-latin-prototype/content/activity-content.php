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
            if ($ActivityNo == 6) {
                //FORM STARTS - INPUTS
                if ($CurrentQuestionNo <= numberOfQuestions($Difficulty, $ActivityNo)) {
                    ?>
                    <form action="" method="post">
                        <!--Question Number-->
                        <h2>Question <?= $CurrentQuestionNo ?> of <?= numberOfQuestions($Difficulty, $ActivityNo)?>:</h2>
                        <!--Word to Decline-->
                        <p><em><?= ?></em> - <?= ?></p>

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

            } elseif ($ActivityNo == 8) {
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

        } else {

            $Answer = $_POST["answer-" . $CurrentQuestionNo];

            if ($QnA["Question $CurrentQuestionNo"]["Answer"] == $Answer) {
                $_SESSION["Score"]++;
                ?>
                <h2>That is Correct!</h2>
                <p><em><?= $Answer ?></em> translates to '<?= $QnA["Question $CurrentQuestionNo"]["Question"] ?>' </p>
                <?php
            } else {
                ?>
                <h2>That is Incorrect!</h2>
                <p><em><?= $QnA["Question $CurrentQuestionNo"]["Answer"] ?></em> translates to '<?= $QnA["Question $CurrentQuestionNo"]["Question"] ?>' </p>
                <?php
            }
            ?>

            <p><?= $Answer ?></p>
            <a class="button" href="?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>&amp;QuestionNumber=<?= $NextQ ?>"> Go To Next Question </a>
            <?php

        }

        ?>
    </div>
</article>