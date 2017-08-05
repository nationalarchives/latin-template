<!DOCTYPE html>
    <head>
    <title>Learn Latin</title>
        <?php

            include "./inc/document-head.php";
            include "./inc/header.php";
        ?>
    </head>

    <body>

    <?php
    $isActivity = false;
    $isLesson = false;
    $isResource = false;

    if (isset($_GET['Difficulty']) && isset($_GET['Lesson'])) {
        $Difficulty = $_GET['Difficulty'];
        $LessonNo = $_GET['Lesson'];
        $isLesson = true;
    } elseif (isset($_GET['Difficulty']) && isset($_GET['Activity'])) {
        $Difficulty = $_GET['Difficulty'];
        $ActivityNo = $_GET['Activity'];
        $isActivity = true;
    } elseif (isset($_GET['Resource'])) {
        $Resource = $_GET['Resource'];
        $isResource = true;
    }
    include './inc/breadcrumbs.php'
    ?>

        <!-- main content start -->

    <main id="primary" role="main" class="content-area">
        <div class="container">
            <?php
            if ($isLesson) {
                include './inc/default-page-banner.php';
                include './inc/lesson-includes/main-lesson-content.php';
            } elseif ($isActivity) {
                echo "WOULD BE ACTIVITY IDK";
            } elseif ($isResource) {
                include './content/other-resources-content/'. $Resource . '.php';
            } else {
                echo "ERROR ERROR ERROR";
            }
            include './inc/other-resources-banner.php';
            ?>
        </div>
    </main>
    <!-- main content end -->
    <?php
    include "./inc/newsletter-signup.php";
    ?>
        <!-- main content end -->
        <?php
                include "./inc/newsletter-signup.php";
        ?>

    </body>

    <footer id="footer" class="breather-top-bottom" role="contentinfo">
        <?php
        include "./inc/footer.php";
        ?>
        <script src="js/content-switch.js"></script>
    </footer>
