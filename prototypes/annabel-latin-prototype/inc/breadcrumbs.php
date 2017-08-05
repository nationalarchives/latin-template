<div id="breadcrumb-holder" class="tna-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs"><a href="http://www.nationalarchives.gov.uk/">Home</a>
                    <span class="sep">&gt;</span> <span><a href="http://www.nationalarchives.gov.uk/help-with-your-research/">Help with your research</a></span>
                    <span class="sep">&gt;</span> <span><a href="http://www.nationalarchives.gov.uk/help-with-your-research/reading-old-documents/">Reading old documents</a></span>
                    <?php if (isset($isLesson) && $isLesson) { ?>
                        <span class="sep">&gt;</span> <span><a href="./landing-page.php">Learn Latin 1086 - 1733</a></span>
                        <span class="sep">&gt;</span> <span> <?php echo ucfirst($Difficulty) ?> Lesson <?php echo $LessonNo ?></span>
                    <?php } elseif (isset($isActivity) && $isActivity) { ?>
                        <span class="sep">&gt;</span> <span><a href="./landing-page.php">Learn Latin 1086 - 1733</a></span>
                        <span class="sep">&gt;</span> <span> <?php echo ucfirst($Difficulty) ?> Activity <?php echo $ActivityNo ?></span>
                    <?php } elseif (isset($isResource) && $isResource) { ?>
                        <span class="sep">&gt;</span> <span><a href="./landing-page.php">Learn Latin 1086 - 1733</a></span>
                        <span class="sep">&gt;</span> <span> <?php echo getresourcename($Resource) ?></span>
                    <?php } else { ?>
                        <span class="sep">&gt;</span> <span>Learn Latin 1086 - 1733</span>
                    <?php } ?>
                </div>
                <!-- .breadcrumbs -->
            </div>
        </div>
    </div>
</div>