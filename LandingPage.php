<!DOCTYPE html>
    <head>
    <title>Learn Latin</title>
        <?php
            include "./includes/DocumentHead.php";
            include "./includes/header.php";
        ?>
    </head>

    <body>
        <!-- breadcrumbs start -->

        <?php
        include './includes/breadcrumbs.php';
        ?>

        <!-- breadcrumbs end -->

        <!-- main content start -->

        <main id="primary" role="main" class="content-area">
            <div class="container">
                <?php
                    include './LandingPage-includes/banner.php';
                    include './LandingPage-includes/blurb.php'
                ?>
                <!-- Tutorials -->
                <div class="row">
                    <?php
                        include './LandingPage-includes/BeginnersColumn.php';
                        include './LandingPage-includes/AdvancedColumn.php'
                    ?>
                </div>
                <?php
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

    </footer>
