<div class="row">
    <div class="col-md-12 banner">
        <article>
            <div class="entry-header">
                <h1>
                    <?php if ($Difficulty == "beginners") {
                        echo "Beginners'";
                    } else {
                        echo "Advanced ";
                    } ?> Latin Lesson <?php echo $LessonNo ?>
                </h1>
            </div>
            <div class="entry-content clearfix breather-top">
                <?php
                    include './Lesson-includes/lesson-blurbs.php';
                    $PrevLesson = $LessonNo-1;
                    $NextLesson = $LessonNo+1;
                ?>
                <div class="alignright">
                    <?php if($LessonNo == 1) { ?>
                        <a class="button" href="./LessonTemplate.php?Difficulty=<?php echo $Difficulty ?>&amp;Lesson=<?php echo $NextLesson ?>">Next
                            Lesson</a>
                    <?php } elseif($LessonNo == 12) { ?>
                        <a class="button" href="./LessonTemplate.php?Difficulty=<?php echo $Difficulty ?>&amp;Lesson=<?php echo $PrevLesson ?>">Previous
                            Lesson</a>
                    <?php } else { ;?>
                        <a class="button" href="./LessonTemplate.php?Difficulty=<?php echo$Difficulty ?>&amp;Lesson=<?php echo $PrevLesson ?>">Previous
                            Lesson</a>
                        <a class="button" href="./LessonTemplate.php?Difficulty=<?php echo $Difficulty ?>&amp;Lesson=<?php echo $NextLesson ?>">Next Lesson</a>
                    <?php } ?>
                </div>
            </div>
        </article>
    </div>
</div>