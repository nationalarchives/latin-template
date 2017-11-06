<aside id="sidebar" class="col-xs-12 col-sm-3 col-md-3" role="complementary">
    <article>
        <div class="sidebar-nav">
            <div class="sidebar-nav-content">
                <!-- new side navigation -->
                <div class="clearfix">
                    <h2>
                        <a href="./LandingPage.php">Back to Latin 1086 - 1733</a>
                    </h2>
                </div>
                <h3>
                    Advanced Tutorials
                </h3>
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
            </div>
        </div>
    </article>
</aside>