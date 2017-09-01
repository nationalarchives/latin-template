<?php 

$correctAnswers = array ("vendebamus","veniebant","apparebat","tenebam","serviebat","dabam","videbatis","concedebas","confirmabant","habebam");

$questions = array (

	"we were selling <span class='activity-red'>or</span> we used to sell",
	"they were coming <span class='activity-red'>or</span> they used to come",
	"he/she/it was appearing <span class='activity-red'>or</span> he/she/it used to appear",
	"I was holding <span class='activity-red'>or</span> I used to hold",
	"he/she/it was serving <span class='activity-red'>or</span> he/she/it used to serve",
	"I was giving or <span class='activity-red'>or</span> I used to give",
	"you were seeing <span class='activity-red'>or</span> you used to see",
	"you were granting <span class='activity-red'>or</span> you used to grant",
	"they were confirming <span class='activity-red'>or</span> they used to confirm",
	"I was having <span class='activity-red'>or</span> I used to have"



	);

$answers = array ("vendebamus","veniebant","apparebat","tenebam","serviebat","dabam","videbatis","concedebas","confirmabant","habebam");

$checkUserAnswers = $_POST["checkUserAnswers"];

function showInputs()
{
	if(isset($checkUserAnswers)){
		if($checkUserAnswers == "true"){

			return true;
		}

	}
	return false;
}


$userInputQ1 = $_POST["q1"];
$userInputQ2 = $_POST["q2"];
$userInputQ3 = $_POST["q3"];
$userInputQ4 = $_POST["q4"];
$userInputQ5 = $_POST["q5"];
$userInputQ6 = $_POST["q6"];
$userInputQ7 = $_POST["q7"];
$userInputQ8 = $_POST["q8"];
$userInputQ9 = $_POST["q9"];
$userInputQ10 = $_POST["q10"];

function checkAnswer($questionNumber,$userInput)
{
	global $answers;
	if($answers[$questionNumber] == $userInput){
		echo "✔";
	}
	else {
		echo "✘";
	}
}


?>



<article>
	<div class="entry-header"><h2 id="Activity">Activity</h2></div>

	<div class="entry-content clearfix">
		<?= $checkUserAnswers ?>
		<p>You have these words: </p>
		<p><em>
			vendebamus,    		
			apparebat,
			veniebant,
			habebam,
			dabam,
			confirmabant,
			tenebam,
			serviebat,  
			concedebas,  		
			videbatis  		
		</em></p>

		<p>Match them with their english sentences in the activity below!</p>	
		
		<?php if($checkUserAnswers != "true"){ ?>

		<form action="lesson-one.php#Activity" method="post">
			<table class="table">
				<tr>
					<th>English</th>
					<th>Latin</th>
				</tr>
				<tr>
					<td><?= $questions[0]; ?></td>
					<td><input type="text" name="q1" /></td>
				</tr>
				<tr>
					<td><?= $questions[1]; ?></td>
					<td><input type="text" name="q2" /></td>
				</tr>
				<tr>
					<td><?= $questions[2]; ?></td>
					<td><input type="text" name="q3" /></td>
				</tr>
				<tr>
					<td><?= $questions[3]; ?></td>
					<td><input type="text" name="q4" /></td>
				</tr>
				<tr>
					<td><?= $questions[4]; ?></td>
					<td><input type="text" name="q5" /></td>
				</tr>
				<tr>
					<td><?= $questions[5]; ?></td>
					<td><input type="text" name="q6" /></td>
				</tr>
				<tr>
					<td><?= $questions[6]; ?></td>
					<td><input type="text" name="q7" /></td>
				</tr>
				<tr>
					<td><?= $questions[7]; ?></td>
					<td><input type="text" name="q8" /></td>
				</tr>
				<tr>
					<td><?= $questions[8]; ?></td>
					<td><input type="text" name="q9" /></td>
				</tr>
				<tr>
					<td><?= $questions[9]; ?></td>
					<td><input type="text" name="q10" /></td>
				</tr>



			</table>
			<input type="hidden" name="checkUserAnswers" value="true" />
			<input type="submit" value="Check Answers"/>


		</form>
		<?php } else {?>
		<form action="lesson-one.php#Activity" method="post">
					<table class="table">
				<tr>
					<th>English</th>
					<th>Latin</th>
					<th>Correct?</th>
				</tr>
				<tr>
					<td><?= $questions[0]; ?></td>
					<td><input type="text" name="q1" value="<?=$userInputQ1 ?>" /></td>
					<td><?php checkAnswer(0,$userInputQ1); ?></td>
				</tr>
				<tr>
					<td><?= $questions[1]; ?></td>
					<td><input type="text" name="q2" value="<?=$userInputQ2 ?>" /></td>
					<td><?php checkAnswer(1,$userInputQ2); ?></td>
				</tr>
				<tr>
					<td><?= $questions[2]; ?></td>
					<td><input type="text" name="q3" value="<?=$userInputQ3 ?>" /></td>
					<td><?php checkAnswer(2,$userInputQ3); ?></td>
				</tr>
				<tr>
					<td><?= $questions[3]; ?></td>
					<td><input type="text" name="q4" value="<?=$userInputQ4 ?>" /></td>
					<td><?php checkAnswer(3,$userInputQ4); ?></td>
				</tr>
				<tr>
					<td><?= $questions[4]; ?></td>
					<td><input type="text" name="q5" value="<?=$userInputQ5 ?>" /></td>
					<td><?php checkAnswer(4,$userInputQ5); ?></td>
				</tr>
				<tr>
					<td><?= $questions[5]; ?></td>
					<td><input type="text" name="q6" value="<?=$userInputQ6 ?>" /></td>
					<td><?php checkAnswer(5,$userInputQ6); ?></td>
				</tr>
				<tr>
					<td><?= $questions[6]; ?></td>
					<td><input type="text" name="q7" value="<?=$userInputQ7 ?>" /></td>
					<td><?php checkAnswer(6,$userInputQ7); ?></td>
				</tr>
				<tr>
					<td><?= $questions[7]; ?></td>
					<td><input type="text" name="q8" value="<?=$userInputQ8 ?>" /></td>
					<td><?php checkAnswer(7,$userInputQ8); ?></td>
				</tr>
				<tr>
					<td><?= $questions[8]; ?></td>
					<td><input type="text" name="q9" value="<?=$userInputQ9 ?>" /></td>
					<td><?php checkAnswer(8,$userInputQ9); ?></td>
				</tr>
				<tr>
					<td><?= $questions[9]; ?></td>
					<td><input type="text" name="q10" value="<?=$userInputQ10 ?>" /></td>
					<td><?php checkAnswer(9,$userInputQ10); ?></td>
				</tr>



			</table>
			<input type="hidden" name="checkUserAnswers" value="true" />
			<input type="submit" value="Check Answers"/>
		</form>
			<?php } ?>



	</div>
</article>