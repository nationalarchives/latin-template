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

$definitionsArray = array(
    "the Latin name for Earth.",    
    "the Latin word for paper, chart or map.",
    "the Latin word for 'country house'.",
    "the Latin name for the Christian Church.",
    "the Latin word for 'widow'.",
    "assembly, council or court."    



    );

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
		echo "<span class='correct''>" . $correctAnswer . "</span>";
		
	}
	else if($userAnswer == $correctAnswer){

			echo "<span class='correct''>" . $correctAnswer . " ✔</span>";
		}
		else {
			echo "<span class='incorrect'>" . $userAnswer . " ✘</span>";
		}
	

}



?>


<article>
      
<div class="entry-content">
                        
                        <p>Try this activity as a fun way to test how much you've remembered about first declension nouns.</p>

                        <p>Can you remember how to decline nouns like carta?</p>

                        <p>Don’t worry if you don't get the answers right at first - the practice will help you to learn.</p>
                        <hr>
                        <h2>Noun to decline: <span class="correct"><?php echo $wordsArray[$currentID]; ?></span></h2>
                        <p><em><strong><?php echo $wordsArray[$currentID]; ?></strong> - <?php echo $definitionsArray[$currentID]; ?></em></p>
                        <p>Type your answers below, then click "check answers" - for <em>terra</em>, one row has been done for you. </p>
       


       


        	 <?php if($answersCheck == "false"){ ?>
                    
                    <form action="default-page.php#5" method="get">
            <table class="table">
            <thead> 
              <tr>
                <th class="left">Case</th>
                <th class="left">Singular</th>
                <th class="left">Plural</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nominative</td>

                <td>
                    <?php if($currentID == 0){ ?>

                        <input type="text" name="nominative-singular" value="terra">

                    <?php } else { ?>
                  <input type="text" name="nominative-singular" >

                  <?php } ?>
                </td>

                <td>

                      <?php if($currentID == 0){ ?>

                        <input type="text" name="nominative-plural" value="terre">

                    <?php } else { ?>
                  <input type="text" name="nominative-plural" >

                  <?php } ?>


               
                

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
             <?php if($currentID != 0){ ?>
            <a class="button" href="./default-page.php?reveal=false&currentID=0&answersCheck=false&Difficulty=beginners&Lesson=2#5">Restart activity</a>
            <?php } ?>
            <input type="submit" value="Check Answers">
            
          </form>

                    <?php } else { ?>

                    <table class="table">
						<thead>	
							<tr>
								<th class="left">Case</th>
								<th class="left">Singular</th>
								<th class="left">Plural</th>
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
                        <a class="button" href="./default-page.php?reveal=false&currentID=0&answersCheck=false&Difficulty=beginners&Lesson=2#5">Restart activity</a>

                        <?php if($reveal != "true"){ ?>
						<a class="button" href="./default-page.php?reveal=true&currentID=<?php echo $currentID; ?>&answersCheck=true&Difficulty=beginners&Lesson=2#5">Reveal answers</a> 
                        <?php } ?>

 					    <a class="button" href="./default-page.php?currentID=<?php echo $currentID; ?>&answersCheck=false&Difficulty=beginners&Lesson=2#5">Try "<?php echo $wordsArray[$currentID]; ?>" again</a> 

                        <?php if($nextID < 6){ ?>

                        <a class="button" href="./default-page.php?currentID=<?php echo $nextID; ?>&answersCheck=false&Difficulty=beginners&Lesson=2#5">Next Word</a>   

                        <?php } else { ?>

                        <strong>Activity completed!</strong>

                        <?php   } ?>
 					  
                           							
                    
                  <?php   } ?>

                                   
           
                    

</article>