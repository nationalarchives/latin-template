<!DOCTYPE html>
    <head>
    <title></title>
    </head>

    <body>
        <!-- breadcrumbs start -->
        <!-- breadcrumbs end -->

        <!-- main content start -->
        <main id="primary" role="main" class="content-area">
            <div class="container">
                <!-- Tutorials -->
                <div class="row">
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
            </div>
        </main>
        <!-- main content end -->
    </body>

    <footer id="footer" class="breather-top-bottom" role="contentinfo">
    </footer>
