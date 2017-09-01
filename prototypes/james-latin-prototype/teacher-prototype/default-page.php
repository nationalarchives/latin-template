<!DOCTYPE html>
    <head>
    <title></title>
    <?php include './inc/document-head.php'; include './inc/header.php' ?>
    </head>

    <body>
    <?php include './inc/breadcrumbs.php' ?>
        <!-- main content start -->

        <main id="primary" role="main" class="content-area">
            <div class="container">
            <!--     CONTENT WOULD GO HERE          -->
                <?php include 'default-banner.php' ?>

                <div class="row">
                    <?php
                    include 'default-template-content-wl.php';
                    include 'default-template-sidebar.php';
                    ?>
                </div>
                <?php include './inc/other-resources-banner.php'; ?>
            </div>
        </main>
        <!-- main content end -->
    </body>

    <footer id="footer" class="breather-top-bottom" role="contentinfo">

        <?php include './inc/footer.php'?>

    </footer>
    </head>
