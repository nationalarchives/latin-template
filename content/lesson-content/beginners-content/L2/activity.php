<?php

$nominativeSingular = $_GET["nominative-singular"]; 
$nominativePlural = $_GET["nominative-plural"];

$vocativeSingular = $_GET["vocative-singular"]; 
$vocativePlural = $_GET["vocative-plural"];

$accusativeSingular = $_GET["accusative-singular"]; 
$accusativePlural = $_GET["accusative-plural"];

$genitiveSingular = $_GET["genitive-singular"]; 
$genitivePlural = $_GET["genitive-plural"];

$dativeSingular = $_GET["dative-singular"]; 
$dativePlural = $_GET["dative-plural"];

$ablativeSingular = $_GET["ablative-singular"]; 
$ablativePlural = $_GET["ablative-plural"];

$currentID = $_GET["currentID"];
if(!is_numeric($currentID)){
$currentID = 0;
} 
$answersCheck = $_GET["answersCheck"];
$reveal = $_GET["reveal"];

$nextID = $currentID + 1;	



$wordsArray = array("terra", "carta",  "villa",  "ecclesia",  "vidua", "curia");

$nominativeSingularArray = array(
    "terra",
    "carta",
    "villa",
    "ecclesia",
    "vidua",
    "curia");


$nominativePluralArray = array(
    "terre",
    "carte",
    "ville",
    "ecclesie",
    "vidue",
    "curie"
);

$vocativeSingularArray = array(
    "terra",
    "carta",
    "villa",
    "ecclesia",
    "vidua",
    "curia"
);

$vocativePluralArray = array(
    "terre",
    "carte",
    "ville",
    "ecclesie",
    "vidue",
    "curie"
);

$accusativeSingularArray = array(
    "terram",
    "cartam",
    "villam",
    "ecclesiam",
    "viduam",
    "curiam"
);

$accusativePluralArray = array(
    "terras",
    "cartas",
    "villas",
    "ecclesias",
    "viduas",
    "curias"

);

$genitiveSingularArray = array(
    "terre",
    "carte",
    "ville",
    "ecclesie",
    "vidue",
    "curie"
);

$genitivePluralArray = array(
    "terrarum",
    "cartarum",
    "villarum",
    "ecclesiarum",
    "viduarum",
    "curiarum"
);

$dativeSingularArray = array(
    "terre",
    "carte",
    "ville",
    "ecclesie",
    "vidue",
    "curie"
);

$dativePluralArray = array(
    "terris",
    "cartis",
    "villis",
    "ecclesiis",
    "viduis",
    "curiis"
);

$ablativeSingularArray = array(
    "terra",
    "carta",
    "villa",
    "ecclesia",
    "vidua",
    "curia"
);

$ablativePluralArray = array(
    "terris",
    "cartis",
    "villis",
    "ecclesiis",
    "viduis",
    "curiis"
);



function checkAnswer($userAnswer, $correctAnswer, $id){
	global $reveal;
	if($reveal=="true"){
		echo $correctAnswer;
		
	}
	else if($userAnswer == $correctAnswer){

			echo $correctAnswer . " ✔";
		}
		else {
			echo $userAnswer . " ✘";
		}
	

}



?>


<article>
      
<div class="entry-content">
                        ID: <?php echo $currentID; ?>
                        <p>Try this activity as a fun way to test how much you've remembered about first declension nouns.</p>

                        <p>Can you remember how to decline nouns like carta? Try this activity.</p>

                        <p>Don’t worry if you don't get the answers right at first - the practice will help you to learn.</p>
                        <hr>
                        <h2>Noun to decline: <?php echo $wordsArray[$currentID]; ?></h2>
                        <p>Type your answers below, then click "Check Answers" - one row has been done for you. </p>
       


       


        	 <?php if($answersCheck == "false"){ ?>
                    
                    <form action="default-page.php" method="get">
            <table class="table">
            <thead> 
              <tr>
                <th>Case</th>
                <th>Singular</th>
                <th>Plural</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nominative</td>

                <td>
                  <input type="text" name="nominative-singular">
                </td>

                <td>
                <input type="text" name="nominative-plural" >
                </td>

              </tr>
              <tr>
                <td>Vocative</td>
                <td><input type="text" name="vocative-singular" ></td>

                <td><input type="text" name="vocative-plural" ></td>
              </tr>
              <tr>
                <td>Accusative</td>
                <td><input type="text" name="accusative-singular" ></td>

                <td><input type="text" name="accusative-plural" ></td>
              </tr>
              <tr>
                <td>Genitive</td>
                <td><input type="text" name="genitive-singular" ></td>
                <td><input type="text"name="genitive-plural" ></td>
              </tr>
              <tr>
                <td>Dative</td>
                <td><input type="text" name="dative-singular" ></td>
                <td><input type="text" name="dative-plural" ></td>
              </tr>
              <tr>
                <td>Ablative</td>
                <td><input type="text" name="ablative-singular" ></td>
                <td><input type="text" name="ablative-plural" ></td>
              </tr>
            </tbody>
            <input type='hidden' name='currentID' value='<?php echo "$currentID";?>'/> 
            <input type='hidden' name='reveal' value='false'/> 
            <input type='hidden' name='Difficulty' value='beginners'/> 
            <input type='hidden' name='Lesson' value='2'/> 
            <input type='hidden' name='answersCheck' value='true'/> 

            </table>

            <input type="submit" value="Check Answers">

          </form>

                    <?php } else { ?>

                    <table class="table">
						<thead>	
							<tr>
								<th>Case</th>
								<th>Singular</th>
								<th>Plural</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Nominative</td>

								<td>
									<?php checkAnswer($nominativeSingular,$nominativeSingularArray[$currentID]); ?>
									
								</td>

								<td>
									<?php checkAnswer($nominativePlural,$nominativePluralArray[$currentID]); ?>
								</td>

							</tr>
							<tr>
								<td>Vocative</td>
								<td>
									<?php checkAnswer($vocativeSingular,$vocativeSingularArray[$currentID]); ?>
									
								</td>

								<td>
									<?php checkAnswer($vocativePlural,$vocativePluralArray[$currentID]); ?>
								</td>
							</tr>
							<tr>
								<td>Accusative</td>
								<td>
									<?php checkAnswer($accusativeSingular,$accusativeSingularArray[$currentID]); ?>
									
								</td>

								<td>
									<?php checkAnswer($accusativePlural,$accusativePluralArray[$currentID]); ?>
								</td>

								
							</tr>
							<tr>
								<td>Genitive</td>
								<td>
									<?php checkAnswer($genitiveSingular,$genitiveSingularArray[$currentID]); ?>
									
								</td>

								<td>
									<?php checkAnswer($genitivePlural,$genitivePluralArray[$currentID]); ?>
								</td>
							</tr>
							<tr>
								<td>Dative</td>
								<td>
									<?php checkAnswer($dativeSingular,$dativeSingularArray[$currentID]); ?>
									
								</td>

								<td>
									<?php checkAnswer($dativePlural,$dativePluralArray[$currentID]); ?>
								</td>
							<tr>
								<td>Ablative</td>
								<td>
									<?php checkAnswer($ablativeSingular,$ablativeSingularArray[$currentID]); ?>
									
								</td>

								<td>
									<?php checkAnswer($ablativePlural,$ablativePluralArray[$currentID]); ?>
								</td>
							</tr>
						</tbody>

						</table>

						<a class="button" href="./default-page.php?reveal=true&currentID=<?php echo $currentID; ?>&answersCheck=true&Difficulty=beginners&Lesson=2#activity">Reveal Answers</a> 
 					    <a class="button" href="./default-page.php?currentID=<?php echo $currentID; ?>&answersCheck=false&Difficulty=beginners&Lesson=2#activity">Try Again</a> 
 					    <a class="button" href="./default-page.php?currentID=<?php echo $nextID; ?>&answersCheck=false&Difficulty=beginners&Lesson=2#activity">Next Word</a>								
 
                  <?php   } ?>

                                   
           
                    

</article>