<div class="col-md-6 col-xs-12">
    <article>
        <div class="entry-header">
            <h2>
                Beginners' Tutorials
            </h2>
        </div>
        <div class="entry-content clearfix">
            <ul>
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
    </article>

</div>