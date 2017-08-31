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
                        <a href="#" class="filter-toggler"><?= $AdvancedLessonNo ?>. <?= getAdvLessonName($AdvancedLessonNo) ?></a>
                        <div class="filter-togglee">
                            <ul>
                                <li><a href="./default-page.php?Difficulty=<?= "advanced" ?>&amp;Lesson=<?= $AdvancedLessonNo ?>">Learn</a></li>
                                <li><a href="./default-page.php?Difficulty=<?= "advanced" ?>&amp;Activity=<?= $AdvancedLessonNo ?>">Test Your Knowledge</a></li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </article>
</div>