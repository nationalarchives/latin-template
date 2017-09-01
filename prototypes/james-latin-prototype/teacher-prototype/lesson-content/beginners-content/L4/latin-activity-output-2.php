<!DOCTYPE html>
<head>
    <title>Latin activity output</title>

    <?php
    include "../includes/DocumentHead.php";
    include "../includes/header.php";
    ?>

    <link rel="stylesheet" type="text/css" href="./styles/new-styles.css">
    <link rel="stylesheet" type="text/css" href="./styles/base-sass.css">
    
    <?php

	$latinArray = array("voco", "oro", "edificat", "dat", "laborat", "confirmat", "edificant", "vocamus", "damus");

	function checkAnswer ($answer, $correctAnswer){
			$answer = strtolower($answer);
		 	if ($answer == $correctAnswer){
		 		echo ($answer . " ✔ ");
			}
			else {
		 		echo ($answer . " ✘ ");
		 	}
	 }

	 function revealAnswer ($answer, $correctAnswer){
			$answer = strtolower($answer);
		 	if ($answer != $correctAnswer){
		 		echo ($correctAnswer);
			}
	 }

?>

</head>

<body>
<hr>
<div class="row">
    <div class="container">
    	<div class="col-md-9">
            <article>
                <div class="entry-header">
                    <h2>Activity</h2>
                </div>
                <div class="entry-content">
	                	<table class="table text-center">
							<thead>
								<th class="text-center">English</th>
	                            <th class="text-center">Your answer</th>
	                            <th class="text-center">Correct answer</th>
							</thead>
							<tbody>
								<tr>
									<?php $answer = $_GET["I_call"]; ?>
									<td>I call</td>
									<td><?php checkAnswer ($answer, $latinArray[0])?></td>
									<td><?php revealAnswer ($answer, $latinArray[0])?></td>
								</tr>
								<tr>
									<?php $answer = $_GET["I_pray"]; ?>
									<td>I pray</td>
									<td><?php checkAnswer ($answer, $latinArray[1])?></td>
									<td><?php revealAnswer ($answer, $latinArray[1])?></td>
								</tr>
								<tr>
									<?php $answer = $_GET["It_builds"]; ?>
									<td>It builds</td>
									<td><?php checkAnswer ($answer, $latinArray[2])?></td>
									<td><?php revealAnswer ($answer, $latinArray[2])?></td>
								</tr>
								<tr>
									<?php $answer = $_GET["He_gives"]; ?>
									<td>He gives</td>
									<td><?php checkAnswer ($answer, $latinArray[3])?></td>
									<td><?php revealAnswer ($answer, $latinArray[3])?></td>
								</tr>
								<tr>
									<?php $answer = $_GET["It_works"]; ?>
									<td>It works</td>
									<td><?php checkAnswer ($answer, $latinArray[4])?></td>
									<td><?php revealAnswer ($answer, $latinArray[4])?></td>
								</tr>
								<tr>
									<?php $answer = $_GET["She_confirms"]; ?>
									<td>She confirms</td>
									<td><?php checkAnswer ($answer, $latinArray[5])?></td>
									<td><?php revealAnswer ($answer, $latinArray[5])?></td>
								</tr>
								<tr>
									<?php $answer = $_GET["They_build"]; ?>
									<td>They build</td>
									<td><?php checkAnswer ($answer, $latinArray[6])?></td>
									<td><?php revealAnswer ($answer, $latinArray[6])?></td>
								</tr>
								<tr>
									<?php $answer = $_GET["We_call"]; ?>
									<td>We call</td>
									<td><?php checkAnswer ($answer, $latinArray[7])?></td>
									<td><?php revealAnswer ($answer, $latinArray[7])?></td>
								</tr>
								<tr>
									<?php $answer = $_GET["We_give"]; ?>
									<td>We give</td>
									<td><?php checkAnswer ($answer, $latinArray[8])?></td>
									<td><?php revealAnswer ($answer, $latinArray[8])?></td>
								</tr>
							</tbody>
						</table>
				</div>
			</article>	
		<hr>
		</div>	
	</div>
</div>
</body>

<footer>

	<?php
		include "../includes/footer.php";
	?>

</footer>