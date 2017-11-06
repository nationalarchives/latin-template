<!DOCTYPE html>
	<head>
	<title>Beginners' Resources</title>
		<?php
			/*add includes for the document head and header php */
			include "./Template-Includes/d-document-header.php";
			include "./Template-Includes/d-page-header.php";
			include "./Template-Includes/d-breadcrumbs";
		?>
	</head>
	<body>
		<?php
			/* add include for breadcrumbs here */
		;	
		?>
		<main id="primary" role="main" class="content-area">
			<div class="container">
				<?php
					/*add includes for banner and blurb here */
					include "./Template-Includes/d-other-resources-banner.php";
					/*include "./Template-Includes/d-lessonbanner.php";*/
					include "./Content-Includes/Wordlist-content.php";
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