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
            if ($QType == "input") { //IF ACTIVITY IS AN INPUT BASED ACTIVITY (HAS 6 QUESTIONS)
                include "input-activity.php";
            } elseif ($QType == "radio") { //IF THE ACTIVITY IS A RADIO-BUTTON BASED ACTIVITY AND HAS 8 QUESTIONS
                include "radio-button-activity.php";
            }
        } else { //IF IT IS AN ANSWER PAGE
            if ($QType == "input") { //IF ITS AN INPUT TYPE
                include "input-answers.php";
            } elseif ($QType == "radio") { //IF IT IS A RADIO BUTTON TYPE
                include "radio-button-answers.php";
            }
        }
        ?>
    </div>
</article>