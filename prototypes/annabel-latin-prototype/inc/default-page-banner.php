<div class="row">
    <div class="col-md-12 banner">
        <article>
            <div class="entry-header">
                <h1>
                    <!--BANNER TITLE-->
                    <?php if ($isLesson) {
                        if ($Difficulty == "beginners") {
                            echo "Beginners'";
                        } else {
                            echo "Advanced ";
                        } echo "Latin Lesson" . $LessonNo;
                    } elseif ($isActivity) {
                        if ($Difficulty == "beginners") {
                        echo "Beginners'";
                        } else {
                        echo "Advanced ";
                        } echo "Latin Activity" . $LessonNo;
                    } elseif ($isResource) {
                        echo $Resource;
                    } ?>
                </h1>
            </div>
            <div class="entry-content clearfix breather-top">
                <!--BLURBS-->
                <?php include './inc/blurbs.php'; ?>
            </div>
        </article>
    </div>
</div>