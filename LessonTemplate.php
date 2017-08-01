<!DOCTYPE html>
    <head>
    <title>Learn Latin</title>
        <?php

            include "./includes/DocumentHead.php";
            include "./includes/header.php";
        ?>
    </head>

    <body>
    <?php $LessonNo = $_GET['Lesson']; ?>
    <?php
        include './includes/breadcrumbs.php'
    ?>

        <!-- main content start -->

        <main id="primary" role="main" class="content-area">
            <div class="container">
                <?php
                include './includes/lesson-banner.php';
                include './mainContent.php';
                include './otherResourcesBanner.php';
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
        <script src="./content-switch.js"></script>
    </footer>
