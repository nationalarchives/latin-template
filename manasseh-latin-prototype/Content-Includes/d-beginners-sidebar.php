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
                    Beginners' Tutorials
                </h3>
                <div class="entry-content clearfix">
                    <ul class="available-filters">
                        <?php for ($i=1; $i <= 12; $i++) { ?>
                            <li class="filter-full">
                                <a href="#" class="filter-toggler">Lesson <?php echo $i ?></a>
                                <div class="filter-togglee">
                                    <ul>
                                        <li><a href="./LessonTemplate.php?Difficulty=<?php echo "beginners" ?>&amp;Lesson=<?php echo $i ?>">Learn</a></li>
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