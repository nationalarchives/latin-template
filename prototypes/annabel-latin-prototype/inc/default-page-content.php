<div class="row">
    <div class="col-md-9 col-sm-9 col-xs-12">
        <a title="Go back to top" href="" id="goTop" style="right: 0.5em;"></a>
        <?php if ($isLesson) { ?>
            <div id="lesson-content-buttons" class="btn-group" data-lesson="<?= numberOfSections($Difficulty, $LessonNo); ?>">
                <?php for ($i = 0; $i < numberOfSections($Difficulty, $LessonNo); $i++) { ?>
                    <a href="#tab-<?= $i+1 ?>" class="btn-lg" data-target="<?= $i+1 ?>" id="<?= $i+1 ?>">
                        <?= buttonTitles($Difficulty, $LessonNo)[$i] ?>
                    </a>
                <?php } ?>
            </div>
            <div class="lesson-content entry-content">
                <?php for ($i=1; $i<=numberOfSections($Difficulty, $LessonNo);$i++) { ?>
                    <div id="tab-<?= $i ?>">
                        <?php
                            beginnersContent($LessonNo, $i);
                        ?>

                    </div>
                <?php } ?>
<!--                <div class="next-lesson-buttons alignright">-->
<!--                    --><?php
//                    $PrevLesson = $LessonNo-1;
//                    $NextLesson = $LessonNo+1;
//                    if($LessonNo == 1) { ?>
<!--                        <a class="button" href="./default-page.php?Difficulty=--><?//= $Difficulty ?><!--&amp;Lesson=--><?//= $NextLesson ?><!--">Next-->
<!--                            Lesson</a>-->
<!--                    --><?php //} elseif($LessonNo == 12) { ?>
<!--                        <a class="button" href="./default-page.php?Difficulty=--><?//= $Difficulty ?><!--&amp;Lesson=--><?//= $PrevLesson ?><!--">Previous-->
<!--                            Lesson</a>-->
<!--                    --><?php //} else { ;?>
<!--                        <a class="button" href="./default-page.php?Difficulty=--><?//= $Difficulty ?><!--&amp;Activity=--><?//= $LessonNo ?><!--">Go To Activity</a>-->
<!--                        <a class="button" href="./default-page.php?Difficulty=--><?//= $Difficulty ?><!--&amp;Lesson=--><?//= $PrevLesson ?><!--">Previous Lesson</a>-->
<!--                        <a class="button" href="./default-page.php?Difficulty=--><?//= $Difficulty ?><!--&amp;Lesson=--><?//= $NextLesson ?><!--">Next Lesson</a>-->
<!--                    --><?php //} ?>
<!--                </div>-->
            </div>
        <?php }
        elseif ($isActivity) { ?>
            <div class="activity-content">
                <?php
                include "./content/activity-content.php";
                ?>
            </div>
        <?php }
        elseif ($isResource) {
            include './content/other-resources-content/'. $Resource . '.php';
        } else {
            echo "ERROR IN DEFAULT-PAGE-CONTENT.php";
        } ?>
    </div>
    <?php
    include './inc/lesson-includes/sidebar.php';
    ?>
</div>
