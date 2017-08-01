<div class="row">
    <div class="col-md-12 banner">
        <article>
            <div class="entry-header">
                <h1>Beginners' Latin Lesson <?php echo $LessonNo ?></h1>
            </div>
            <div class="entry-content clearfix breather-top">
                <p>BLURB.</p>
                <div class="alignright">
                    <?php if ($LessonNo = 1) { ?>
                        <a class="button" href="./LessonTemplate.php?Lesson=<?php $LessonNo++?>">Next Lesson</a>
                    <?php } elseif ($LessonNo = 12) { ?>
                        <a class="button" href="./LessonTemplate.php?Lesson=<?php $LessonNo--?>">Previous Lesson</a>
                    <?php } else { ?>
                        <a class="button" href="./LessonTemplate.php?Lesson=<?php $LessonNo--?>">Previous Lesson</a>
                        <a class="button" href="./LessonTemplate.php?Lesson=<?php $LessonNo++ ?>">Next Lesson</a>
                    <?php } ?>
                </div>
            </div>
        </article>
    </div>
</div>