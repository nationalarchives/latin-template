<div class="row">
    <div class="col-md-12 banner">
        <article>
            <div class="entry-header">
                <h1>Beginners' Latin Lesson <?php echo $LessonNo ?></h1>
            </div>
            <div class="entry-content clearfix breather-top">
                <?php switch ($LessonNo) {
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
                <div class="alignright">
                    <?php if($LessonNo == 1) { ?>
                        <a class="button" href="./LessonTemplate.php?Lesson=<?php echo $NextLesson ?>">Next
                            Lesson</a>
                    <?php } elseif($LessonNo == 12) { ?>
                        <a class="button" href="./LessonTemplate.php?Lesson=<?php echo $PrevLesson ?>">Previous
                            Lesson</a>
                    <?php } else { ;?>
                        <a class="button" href="./LessonTemplate.php?Lesson=<?php echo $PrevLesson ?>">Previous
                            Lesson</a>
                        <a class="button" href="./LessonTemplate.php?Lesson=<?php echo $NextLesson ?>">Next Lesson</a>
                    <?php } ?>
                </div>
            </div>
        </article>
    </div>
</div>