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
                <?php include './inc/blurbs.php'; ?>
            </div>
        </article>
    </div>
</div>