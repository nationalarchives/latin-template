<div class="row">
    <div class="col-md-9 col-sm-9 col-xs-12">
        <?php if ($isLesson) { ?>
            <div id="lesson-content-buttons" class="btn-group" data-lesson="<?php echo numberOfSections($Difficulty, $LessonNo); ?>">
                <?php for ($i = 0; $i < numberOfSections($Difficulty, $LessonNo); $i++) { ?>
                    <button class="btn-lg" data-target="content-<?php echo $i+1 ?>">
                        <?php echo buttonTitles($Difficulty, $LessonNo)[$i] ?>
                    </button>
                <?php } ?>
            </div>
            <div class="lesson-content">
                <?php for ($i=1; $i<=numberOfSections($Difficulty, $LessonNo);$i++) { ?>
                    <div id="content-<?php echo $i ?>">
                        <?php
                            beginnersContent($LessonNo, $i);
                        ?>
                    </div>
                <?php } ?>
            </div>
        <?php }
        elseif ($isActivity) { ?>
            <div class="activity-content">
                <?php
                include  './content/lesson-content/L' . $ActivityNo . '/activity.php';
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
