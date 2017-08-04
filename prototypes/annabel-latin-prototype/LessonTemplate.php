<!DOCTYPE html>
    <head>
    <title>Learn Latin</title>
        <?php

            include "./includes/DocumentHead.php";
            include "./includes/header.php";
        ?>
    </head>

    <body>

    <?php
    $Difficulty = $_GET['Difficulty'];
    $LessonNo = $_GET['Lesson'];
    if (isset($_GET['isActivity'])) {
        $isActivityAction = true;
    } else {
        $isActivityAction = false;
    }
    include './includes/breadcrumbs.php'
    ?>

        <!-- main content start -->

        <main id="primary" role="main" class="content-area" data-actact="<?php echo $isActivityAction ?>">
            <div class="container">
                <?php
                include './Lesson-includes/lesson-banner.php';
                include './Lesson-includes/mainContent.php';
                include './includes/otherResourcesBanner.php';
                ?>
            </div>
        </main>
        <!-- main content end -->
        <?php
                include "./includes/NewsletterSignup.php";
        ?>

    </body>

    <footer id="footer" class="breather-top-bottom" role="contentinfo">
        <?php
        include "./includes/footer.php";
        ?>
        <script src="js/content-switch.js"></script>
    </footer>
