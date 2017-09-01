<!DOCTYPE html>
    <head>
    
    <?php include './inc/document-head.php'; include './inc/header.php'; 
    $level = "Advanced";
    $lessonNumber = 1;
    $sections = 2;
    $title = "Imperfect tense";
    $blurb = "You should use the grammar tables, glossary and word list regularly to work through the activities and practice sentences. This will help you to become more familiar with the different constructs that you meet.";
 //   ini_set('display_errors', 1);
//error_reporting(E_ALL|E_STRICT);
    ?>
    <title>#<?= $lessonNumber ?> - <?= $title ?> - <?= $level ?> Latin - The National Archives </title>
    </head>

    <body>
    <?php include './inc/breadcrumbs.php' ?>
        <!-- main content start -->

        <main id="primary" role="main" class="content-area">
            <div class="container">
            <!--     CONTENT WOULD GO HERE          -->
                <?php include 'default-banner.php' ?>
 <div class="row">
               
                    <?php include 'default-template-sidebar.php';
                                        ?>
                    <div class="col-md-9 col-xs-12">
                   <?php for($i = 1; $i <= $sections; $i++){ ?>                        
                        
                       <?php include './content/lesson-content/' .$level .'-content/L' .$lessonNumber .'/content-' .$i .'.php'; ?>
                  
                    <?php }; ?>
                     </div>
                    
                    
                    
                </div>
                <?php include './content/lesson-content/' .$level .'-content/L' .$lessonNumber .'/activity.php'; ?>
                <?php include './inc/other-resources-banner.php'; ?>
            </div>
        </main>
        <!-- main content end -->
    </body>

    <footer id="footer" class="breather-top-bottom" role="contentinfo">

        <?php include './inc/footer.php'?>

    </footer>
