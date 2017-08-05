<div class="col-md-6 col-xs-12">
    <article>
        <div class="entry-header">
            <h2>
                Advanced Tutorials
            </h2>
        </div>
        <div class="entry-content clearfix">
            <ul class="available-filters">
                <?php for ($AdvancedLessonNo=1; $AdvancedLessonNo <= 12; $AdvancedLessonNo++) { ?>
                    <li class="filter-full">
                        <a href="#" class="filter-toggler"><?php echo $AdvancedLessonNo ?>. <?php include "./inc/advanced-lesson-categories.php"; echo $LessonName ?></a>
                        <div class="filter-togglee">
                            <ul>
                                <li><a href="./default-page.php?Difficulty=<?php echo "advanced" ?>&amp;Lesson=<?php echo $AdvancedLessonNo ?>">Learn</a></li>
                                <li><a href="./default-page.php?Difficulty=<?php echo "advanced" ?>&amp;Activity=<?php echo $AdvancedLessonNo ?>">Test Your Knowledge</a></li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </article>
</div>