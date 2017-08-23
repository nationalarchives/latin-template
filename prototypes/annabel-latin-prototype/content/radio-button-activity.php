<?php
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