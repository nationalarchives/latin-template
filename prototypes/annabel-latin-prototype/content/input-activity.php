<?php
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