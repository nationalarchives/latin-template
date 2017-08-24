<?php
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
    <p><em><?= $QnA["Question $CurrentQuestionNo"]["Answer"] ?></em>, not <em>'<?= $Answer ?>'</em> translates to
        '<?= $QnA["Question $CurrentQuestionNo"]["Question"] ?>' </p>
    <?php
}
?>
<p><?= $Answer ?></p>
<a class="button" href="?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>&amp;QuestionNumber=<?= $NextQ ?>"> Go To Next Question </a>