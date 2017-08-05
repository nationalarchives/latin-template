<?php

    if ($isLesson) {

        switch ($LessonNo) {
            case 1 : ?>
                <p>BLURB LESSON 1</p>
            <?php break; case 2 : ?>
                <p>BLURB LESSON 2</p>
            <?php break; case 3 : ?>
                <p>BLURB LESSON 3</p>
            <?php break; case 4 : ?>
                <p>BLURB LESSON 4</p>
            <?php break; case 5 : ?>
                <p>BLURB LESSON 5</p>
            <?php break; case 6 : ?>
                <p>BLURB LESSON 6</p>
            <?php break; case 7 : ?>
                <p>BLURB LESSON 7</p>
            <?php break; case 8 : ?>
                <p>BLURB LESSON 8</p>
            <?php break; case 9 : ?>
                <p>BLURB LESSON 9</p>
            <?php break; case 10 : ?>
                <p>BLURB LESSON 10</p>
            <?php break; case 11 : ?>
                <p>BLURB LESSON 11</p>
            <?php break; case 12 : ?>
                <p>BLURB LESSON 12</p>
            <?php break; default : ?>
                <p>Sorry Dave, Im afraid I can't let you do that</p>
        <?php }

        $PrevLesson = $LessonNo-1;
        $NextLesson = $LessonNo+1;

        ?>
        <!--NEXT LESSON BUTTONS -->
        <div class="alignright">
            <?php if($LessonNo == 1) { ?>
                <a class="button" href="./default-page.php?Difficulty=<?php echo $Difficulty ?>&amp;Lesson=<?php echo $NextLesson ?>">Next
                    Lesson</a>
            <?php } elseif($LessonNo == 12) { ?>
                <a class="button" href="./default-page.php?Difficulty=<?php echo $Difficulty ?>&amp;Lesson=<?php echo $PrevLesson ?>">Previous
                    Lesson</a>
            <?php } else { ;?>
                <a class="button" href="./default-page.php?Difficulty=<?php echo $Difficulty ?>&amp;Lesson=<?php echo $PrevLesson ?>">Previous
                    Lesson</a>
                <a class="button" href="./default-page.php?Difficulty=<?php echo $Difficulty ?>&amp;Lesson=<?php echo $NextLesson ?>">Next Lesson</a>
            <?php } ?>
        </div>
    <?php } elseif ($isActivity) {
        switch ($ActivityNo) {
            case 1 : ?>
                <p>BLURB ACTIVITY 1</p>
            <?php break; case 2 : ?>
                <p>BLURB ACTIVITY 2</p>
            <?php break; case 3 : ?>
                <p>BLURB ACTIVITY 3</p>
            <?php break; case 4 : ?>
                <p>BLURB ACTIVITY 4</p>
            <?php break; case 5 : ?>
                <p>BLURB ACTIVITY 5</p>
            <?php break; case 6 : ?>
                <p>BLURB ACTIVITY 6</p>
            <?php break; case 7 : ?>
                <p>BLURB ACTIVITY 7</p>
            <?php break; case 8 : ?>
                <p>BLURB ACTIVITY 8</p>
            <?php break; case 9 : ?>
                <p>BLURB ACTIVITY 9</p>
            <?php break; case 10 : ?>
                <p>BLURB ACTIVITY 10</p>
            <?php break; case 11 : ?>
                <p>BLURB ACTIVITY 11</p>
            <?php break; case 12 : ?>
                <p>BLURB ACTIVITY 12</p>
            <?php break; default : ?>
                <p>Sorry Dave, Im afraid I can't let you do that</p>
        <?php }
    } elseif ($isResource) {

        switch ($Resource) {
            case "dating-latin-documents" : ?>
                <p>BLURB DATING LATIN DOCUMENTS</p>
            <?php break; case "declining-personal-names" : ?>
                <p>BLURB DECLINING PERSONAL NAMES</p>
            <?php break; case "glossary" : ?>
                <p>BLURB GLOSSARY</p>
            <?php break; case "grammar-table" : ?>
                <p>BLURB GRAMMAR TABLE</p>
            <?php break; case "problems-with-latin" : ?>
                <p>BLURB PROBLEMS WITH LATIN</p>
            <?php break; case "useful-latin-phrases" : ?>
                <p>BLURB USEFUL LATIN PHRASES</p>
            <?php break; case "word-list": ?>
                <p>BLURB WORD LIST</p>
            <?php break; default : ?>
                <p>Sorry Dave, Im afraid I can't let you do that</p>
        <?php }

    } else {
        echo "default-page-banner ERROR";
    } ?>