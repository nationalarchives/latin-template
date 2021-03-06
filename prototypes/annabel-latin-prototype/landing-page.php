<!DOCTYPE html>
    <head>
    <title>Learn Latin</title>
        <?php
            include "./inc/document-head.php";
            include "./inc/header.php";
        ?>
    </head>

    <body>
        <!-- breadcrumbs start -->

        <?php
        include './inc/breadcrumbs.php';
        ?>

        <!-- breadcrumbs end -->

        <!-- main content start -->

        <main id="primary" role="main" class="content-area">
            <div class="container">
                <?php
                    include './inc/landing-page-includes/banner.php';
                    include './inc/landing-page-includes/landing-page-blurb.php'
                ?>
                <!-- Tutorials -->
                <div class="row">
                    <?php
                        include './inc/landing-page-includes/beginners-column.php';
                        include './inc/landing-page-includes/advanced-column.php'
                    ?>
                </div>
                <?php
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

    </footer>
