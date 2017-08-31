<div class="row">
    <div class="col-md-12 banner">
        <article>
            <div class="entry-header">
                <h1>
                    <!--BANNER TITLE-->
                    <?php if ($isLesson) {
                        echo ucfirst($Difficulty). " Latin Lesson " . $LessonNo;
                    } elseif ($isActivity) {
                        echo ucfirst($Difficulty). " Latin Activity " . $ActivityNo;
                    } elseif ($isResource) {
                        echo getresourcename($Resource);
                    } ?>
                </h1>
            </div>
            <div class="entry-content clearfix breather-top">
                <!--BLURBS-->
                <?php if ($isLesson) { ?>

                    <p><?= loadLessonBlurb($LessonNo) ?></p>

                    <?php
                    $PrevLesson = $LessonNo-1;
                    $NextLesson = $LessonNo+1;
                    ?>
                    <!--NEXT LESSON BUTTONS -->

                    <div class="alignright">
                        <?php if($LessonNo == 1) { ?>
                            <a class="button" href="./default-page.php?Difficulty=<?= $Difficulty ?>&amp;Lesson=<?= $NextLesson ?>">Next
                                Lesson</a>
                        <?php } elseif($LessonNo == 12) { ?>
                            <a class="button" href="./default-page.php?Difficulty=<?= $Difficulty ?>&amp;Lesson=<?= $PrevLesson ?>">Previous
                                Lesson</a>
                        <?php } else { ;?>
                            <a class="button" href="./default-page.php?Difficulty=<?= $Difficulty ?>&amp;Activity=<?= $LessonNo ?>">Go To Activity</a>
                            <a class="button" href="./default-page.php?Difficulty=<?= $Difficulty ?>&amp;Lesson=<?= $PrevLesson ?>">Previous Lesson</a>
                            <a class="button" href="./default-page.php?Difficulty=<?= $Difficulty ?>&amp;Lesson=<?= $NextLesson ?>">Next Lesson</a>
                        <?php } ?>
                    </div>

                <?php } elseif ($isActivity) { ?>

                    <p><?= loadActivityBlurb($ActivityNo) ?></p>

                    <div class="alignright">
                        <a class="button" href="./default-page.php?Difficulty=<?= $Difficulty ?>&amp;Lesson=<?= $ActivityNo ?>">Return To Lesson</a>
                    </div>

                <?php } elseif ($isResource) { ?>

                    <p><?= loadResourceBlurb($Resource)?></p>

                <?php } ?>
            </div>
        </article>
    </div>
</div>