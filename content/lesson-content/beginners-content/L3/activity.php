<article>
    <div class="entry-content clearfix">
        <?php
        include "./question-loader.php"
        ?>
        <form action="./LessonTemplate.php?Difficulty=<?php echo $Difficulty ?>&amp;Lesson=<?php echo $LessonNo ?>&amp;isActivity=<?php echo "true" ?>" method="post" id="Quiz">
            <?php for ($i=1; $i <= 3; $i++) { ?>
                <fieldset>
                    <legend>Question <?= $i; ?></legend>
                    <p id="question-<?= $i; ?>; ?>"><?php echo $QArray[$i-1]; ?></p>
                    <input  type="text" name="answer-<?= $i; ?>; ?>">
                </fieldset>
            <?php } ?>
            <input type="submit" value="Submit" name="submit-all" id="submit-button">
        </form>
    </div>
</article>
