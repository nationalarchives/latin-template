<!DOCTYPE html>
    <head>
    <title>Learn Latin</title>
        <?php

            include "./includes/DocumentHead.php";
            include "./includes/header.php";
        ?>
    </head>

    <body>
    <?php $Difficulty = $_GET['Difficulty']; $LessonNo = $_GET['Lesson']; ?>
    <?php
        include './includes/breadcrumbs.php'
    ?>

        <!-- main content start -->

        <main id="primary" role="main" class="content-area">
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
