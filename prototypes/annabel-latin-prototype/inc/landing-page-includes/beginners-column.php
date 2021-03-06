<div class="col-md-6 col-xs-12">
    <article>
        <div class="entry-header">
            <h2>
                Beginners' Tutorials
            </h2>
        </div>
        <div class="entry-content clearfix">
            <ul class="available-filters">
                <?php for ($BeginnersLessonNo=1; $BeginnersLessonNo <= 12; $BeginnersLessonNo++) { ?>
                    <li class="filter-full">
                        <a href="#" class="filter-toggler">Lesson <?php echo $BeginnersLessonNo ?></a>
                        <div class="filter-togglee">
                            <ul>
                                <li><a href="./default-page.php?Difficulty=<?php echo "beginners" ?>&amp;Lesson=<?php echo $BeginnersLessonNo ?>">Learn</a></li>
                                <li><a href="./default-page.php?Difficulty=<?php echo "beginners" ?>&amp;Activity=<?php echo $BeginnersLessonNo ?>">Test Your Knowledge</a></li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </article>

</div>