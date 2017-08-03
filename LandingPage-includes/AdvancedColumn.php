<div class="col-md-6 col-xs-12">
    <article>
        <div class="entry-header">
            <h2>
                <a href="">Advanced Tutorials</a>
            </h2>
        </div>
        <div class="entry-content clearfix">
            <ul>
                <?php for ($LessonNo=1; $LessonNo <= 12; $LessonNo++) { ?>
                    <li class="filter-full">
                        <a href="#" class="filter-toggler"><?php echo $LessonNo ?>. <?php include "AdvancedCategories.php" ; echo $LessonName ?></a>
                        <div class="filter-togglee">
                            <ul>
                                <li><a href="./LessonTemplate.php?Difficulty=<?php echo "advanced" ?>&amp;Lesson=<?php echo $LessonNo ?>">Learn</a></li>
                                <li><a href="">Test Your Knowledge</a></li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </article>
</div>