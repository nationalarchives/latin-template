<?php
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