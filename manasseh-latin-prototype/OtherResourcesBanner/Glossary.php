<!DOCTYPE html>
	<head>
	<title>Begginers' Glossary</title>
		<?php
			/*add includes for the document head and page header from Template includes*/
			include "./Template-Includes/d-document-header.php";
			include "./Template-Includes/d-page-header.php";
		?>	
	</head>
	<body>
		<main id="primary" role="main" class= "content-area">
			<div class="container">
				<?php
				/*add includes for banner and blurb here*/
				include "./Template-Include/d-other-resources-banner.php";
				include "./Content-Includes/d-resources-content.php";
				?>
			</div>
		</main>
		<?php
			/*add include fro the newsletter*/
			include "./Template-Includes/d-newsletter-signup.php";
		?>
	</body>
	<footer id="footer class=breather-top-bottom" role="contentinfo">
		<?php
			/*add include for footer here*/
			include "./Template-Includes/d-footer.php";
		?>
	</footer>