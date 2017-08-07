<article>
    <div class="entry-content clearfix">
        <h1>Activity</h1>
        <p>Can you match the English verb with its Latin translation?</p>
        <?php
        if (isset($_GET['QuestionNumber'])){
            $QuestionNo = $_GET['QuestionNumber'];
        } else {
            $QuestionNo = 1;
        }

        loadPageType();

        switch ($QuestionNo) {
            case 1:
                ?>
                <form action="?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $ActivityNo ?>&amp;QuestionNumber<?= $QuestionNo++ ?>" method="post">
                    <h2>Question 1:</h2>
                    <p>English: 'I confirm'</p>
                    <fieldset>
                        <input type="radio" name="answer-1" value="confirmo"> confirmo <br>
                        <input type="radio" name="answer-1" value="confirmat"> confirmat <br>
                        <input type="radio" name="answer-1" value="confirmamus"> confirmamus <br>
                        <input type="radio" name="answer-1" value="confirmant"> confirmant <br>
                    </fieldset>
                    <input type="submit" value="Submit">
                </form>
                <?php
                break;
            case 2:
                break;
            case 3:
                break;
            case 4:
                break;
            case 5:
                break;
            case 6:
                break;
            case 7:
                break;
            case 8:
                break;
            case 9:
                break;
            default:
        }

        ?>

    </div>
</article>