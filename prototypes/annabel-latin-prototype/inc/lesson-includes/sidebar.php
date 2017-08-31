<aside id="sidebar" class="col-xs-12 col-sm-3 col-md-3" role="complementary">
    <article>
        <div class="sidebar-nav">
            <div class="sidebar-nav-content">
                <!-- new side navigation -->
                <div class="clearfix">
                    <h2>
                        <a href="./landing-page.php">Back to Latin 1086 - 1733</a>
                    </h2>
                </div>
                <h3>
                    Beginners' Tutorials
                </h3>
                <div class="entry-content clearfix">
                    <ul class="available-filters">
                        <?php for ($BeginnersLessonNo=1; $BeginnersLessonNo <= 12; $BeginnersLessonNo++) { ?>
                            <li class="filter-full">
                                <a href="#" class="filter-toggler">Lesson <?= $BeginnersLessonNo ?></a>
                                <div class="filter-togglee">
                                    <ul>
                                        <li><a href="./default-page.php?Difficulty=<?= "beginners" ?>&amp;Lesson=<?= $BeginnersLessonNo ?>">Learn</a></li>
                                        <li><a href="./default-page.php?Difficulty=<?= "beginners" ?>&amp;Activity=<?= $BeginnersLessonNo ?>">Test Your Knowledge</a></li>
                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <h3>
                    Advanced Tutorials
                </h3>
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
            </div>
        </div>
    </article>
</aside>