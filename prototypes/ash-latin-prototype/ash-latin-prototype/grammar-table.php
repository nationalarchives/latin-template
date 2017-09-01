<!DOCTYPE html>
    <head>
    
    <?php include './inc/document-head.php'; include './inc/header.php'; 
    $level = "Advanced";
    $lessonNumber = "Resources";
    $sections = 1;
    $title = "Grammar Table";
    ini_set('display_errors', 1);
error_reporting(E_ALL|E_STRICT);
    ?>
    <title>#<?= $lessonNumber ?> - <?= $title ?> - <?= $level ?> Latin - The National Archives </title>
    </head>

    <body>
    <?php include './inc/breadcrumbs.php' ?>
        <!-- main content start -->

        <main id="primary" role="main" class="content-area">
            <div class="container">
            <!--     CONTENT WOULD GO HERE          -->
                <?php include 'default-banner-non-lesson.php' ?>
 <div class="row">
               
                    <?php include 'default-template-sidebar.php';
                                        ?>
                    <div class="col-md-9 col-xs-12">
                                          
                        
                       <?php include './content/other-resources-content/grammar-table.php'; ?>
                  
                    
                     </div>
                    
                    
                    
                </div>
               
                <?php include './inc/other-resources-banner.php'; ?>
            </div>
        </main>
        <!-- main content end -->
    </body>

    <footer id="footer" class="breather-top-bottom" role="contentinfo">

        <?php include './inc/footer.php'?>

    </footer>
