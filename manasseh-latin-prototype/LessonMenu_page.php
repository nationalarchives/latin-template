<!DOCTYPE html>
	<head>
	<title>Learn Latin- Tutorials
	</title>
		<?php
			/*add includes for the document head and header php */
			include "./Template-Includes/d-document-header.php";
			include "./Template-Includes/d-page-header.php";
		?>
	</head>
	<body>
		<?php
			/* add include for breadcrumbs here */
			include "./Template-Includes/d-breadcrumbs";
		?>
		<main id="primary" role="main" class="content-area">
			<div class="container">
				<?php
					/*add includes for banner and blurb here */	
					include "./LessonMenu-page-Includes/d-menu-blurb.php";

				?>
				<!-- List of Tutorials below-->
				<div class="row">
                	<?php
                		/*add includes for beginner's and advanced column here */
                		include "./LessonMenu-page-Includes/d-beginners-column.php";
                		include "./LessonMenu-page-Includes/d-advanced-column.php";
                	?>
                </div>
                <?php
                	/* include resoucres banner here*/
                	include "./LessonMenu-page-Includes/B-Resources-link.php";
                	include "./LessonMenu-page-Includes/A-Resources-link.php";
                	include "./Template-Includes/d-other-resources.banner.php";
                	include "./Landingpage_Includes/d-where-to-banner.php";
                ?>
            </div>
        </main>
        <?php
        	/*add include for the newsletter */ 
        	include "./Template-Includes/d-newsletter-signup.php";
        ?>
	</body>
	<footer id="footer" class="breather-top-bottom" role="contentinfo">
		<?php
			/* add include for footer here*/
			include "./Template-Includes/d-footer.php";
		?>
	</footer>