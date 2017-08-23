<?php
if ($Difficulty == "beginners") {
    switch ($ActivityNo) {
        case 2:
            $QType = "input";
            $Categories = array("Nominative", "Vocative", "Accusative", "Genitive", "Dative", "Ablative");
            $Types = array("Singular", "Plural");
            $CorrectEndings = array(
                "Singular" => array(
                    "Nominative" => "a",
                    "Vocative" => "a",
                    "Accusative" => "am",
                    "Genitive" => "e",
                    "Dative" => "e",
                    "Ablative" => "a"),
                "Plural" => array(
                    "Nominative" => "e",
                    "Vocative" => "e",
                    "Accusative" => "as",
                    "Genitive" => "arum",
                    "Dative" => "is",
                    "Ablative" => "is")
            );
            $QnA = array (
                "Question 1" => array(
                    "Word" => "terra",
                    "Meaning" => "land",
                    "Beginning" => "terr"
                ),
                "Question 2" => array(
                    "Word" => "carta",
                    "Meaning" => "charter",
                    "Beginning" => "cart"
                ) ,
                "Question 3" => array(
                    "Word" => "villa",
                    "Meaning" => "town",
                    "Beginning" => "vill"
                ),
                "Question 4" => array(
                    "Word" => "ecclesia",
                    "Meaning" => "church",
                    "Beginning" => "ecclesi"
                ),
                "Question 5" => array(
                    "Word" => "vidua",
                    "Meaning" => "widow",
                    "Beginning" => "vidu"
                ) ,
                "Question 6" => array(
                    "Word" => "curia",
                    "Meaning" => "court",
                    "Beginning" => "curi"
                ),
            );
            break;
        case 4:
            $QType = "radio";
            $AllA = array(
                "confirm" => array("confirmat", "confirmo", "confirmant", "confirmamus"),
                "give" => array("dant", "damus", "do", "dat")
            );
            $QnA = array(
                //TO CONFIRM
                "Question 1" => array(
                    "Question" => "I confirm",
                    "AllA" => $AllA["confirm"],
                    "Answer" => "confirmo"
                ),
                "Question 2" => array(
                    "Question" => "He/she/it confirms",
                    "AllA" => $AllA["confirm"],
                    "Answer" => "confirmat"
                ),
                "Question 3" => array(
                    "Question" => "We confirm",
                    "AllA" => $AllA["confirm"],
                    "Answer" => "confirmamus"
                ),
                "Question 4" => array(
                    "Question" => "They confirm",
                    "AllA" => $AllA["confirm"],
                    "Answer" => "confirmant"
                ),
                //TO GIVE
                "Question 5" => array(
                    "Question" => "I give",
                    "AllA" => $AllA["give"],
                    "Answer" => "do"
                ),
                "Question 6" => array(
                    "Question" => "He/she/it gives",
                    "AllA" => $AllA["give"],
                    "Answer" => "dat"
                ),
                "Question 7" => array(
                    "Question" => "We give",
                    "AllA" => $AllA["give"],
                    "Answer" => "damus"
                ),
                "Question 8" => array(
                    "Question" => "They give",
                    "AllA" => $AllA["give"],
                    "Answer" => "dant"
                )
            );
            break;
        default:
            echo "I HAVE NOT FILLED IN THE INFO FOR THESE LESSONS //";
            echo "SELECT BEGINNERS ACTIVITY 2 OR 4 INSTEAD";
    }
}
