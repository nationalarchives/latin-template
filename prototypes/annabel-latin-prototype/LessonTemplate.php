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

    <main id="primary" role="main" class="content-area">
        <div class="container">
            <?php
            include './inc/lesson-includes/lesson-banner.php';
            if ($Difficulty != null && $LessonNo != null ) {
                include './inc/lesson-includes/main-lesson-content.php';
                include './inc/other-resources-banner.php';
            } elseif ($resourcespage != null) {
                include './content/other-resources-content/'. $resourcespage . '.php';
            } else {
                echo 'AN ERROR HAS OCCURED';
                include './inc/other-resources-banner.php';
            }
            ?>
        </div>
    </main>
    <!-- main content end -->
    <?php
    include "./inc/newsletter-signup.php";
    ?>
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
