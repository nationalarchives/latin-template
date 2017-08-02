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

        <div id="breadcrumb-holder" class="tna-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs"><a href="http://www.nationalarchives.gov.uk/">Home</a>
                            <span class="sep">&gt;</span> <span><a href="http://www.nationalarchives.gov.uk/help-with-your-research/">Help with your research</a></span>
                            <span class="sep">&gt;</span> <span><a href="http://www.nationalarchives.gov.uk/help-with-your-research/reading-old-documents/">Reading old documents</a></span>
                            <span class="sep">&gt;</span> <span>Learn Latin 1086 - 1733</span>
                        </div>
                        <!-- .breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>

        <!-- breadcrumbs end -->

        <!-- main content start -->

        <main id="primary" role="main" class="content-area">
            <div class="container">
                <!-- Banner -->
                <div class="row level-one" role="banner">
                    <div class="col-md-12">
                        <article class="banner feature-img feature-img-bg" style="background-image: url(
                        ./img/domesdayBG.jpg);">
                            <div class="entry-header">
                                <h1>Learn Latin 1086 - 1733</h1>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- after banner para -->
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <div class="entry-content clearfix">
                                <h2>A practical online tutorial for beginners.</h2>
                                <p>This tutorial is a handy guide to Latin as used in England between 1086 and 1733, when it was the general language for official documents (after 1733 English became the widely-used language for these documents); Knowing Latin will help you to read documents from this period.
                                </p>
                                <p>No previous knowledge of Latin is required - this tutorial is suitable for anyone who wants to learn.</p>
                            </div>
                        </article>
                    </div>
                </div>
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
