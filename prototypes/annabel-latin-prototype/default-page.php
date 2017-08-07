<!DOCTYPE html>
    <head>
    <title>Learn Latin</title>
        <?php

            include "./inc/document-head.php";
            include "./inc/header.php";
            include "./content/lessons-content.php"
        ?>
    </head>

    <body>

    <?php

    loadPageType();

    include './inc/breadcrumbs.php'
    ?>

        <!-- main content start -->

    <main id="primary" role="main" class="content-area">
        <div class="container">
            <?php
                include './inc/default-page-banner.php';
                include './inc/default-page-content.php';
                include './inc/other-resources-banner.php';
            ?>
        </div>
    </main>

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
