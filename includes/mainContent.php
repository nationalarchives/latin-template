
    <!-- Tutorials -->
    <div class="row">

        <div class="col-md-9">
            <?php include 'buttonFinder.php' ?>
            <div id="lesson-content-buttons" class="btn-group" data-lesson="<?php echo $lessonNumberOfSections; ?>">
                <?php for ($i = 0; $i < $lessonNumberOfSections; $i++) { ?>
                    <button class="btn-lg" data-target="content-<?php echo $i+1 ?>"><?php echo $ButtonContent[$i] ?></button>
                <?php } ?>
            </div>
            <div class="lesson-content">
            <?php for ($i=0; $i<$lessonNumberOfSections;$i++) { ?>
                <div id="content-<?php echo $i+1 ?>">
                    <?php
                        $LC = $LessonContent[$i];
                        include  './lesson-content' .$LC  . '.php';
                    ?>
                </div>
            <?php } ?>
            </div>
        </div>
        <?php
        include './includes/sidebar.php';
        ?>
    </div>