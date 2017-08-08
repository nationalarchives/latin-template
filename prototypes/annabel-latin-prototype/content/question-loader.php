<?php
if ($Difficulty == "beginners") {
    switch ($ActivityNo) {
        case 2:
            $Categories = array("Nominative", "Vocative", "Accusative", "Genitive", "Dative", "Ablative");
            $QnA = array (
                "Question 1" => array(
                    "Word" => "terra",
                    "Meaning" => "land",
                    "Answers" => array(
                        "Singular" => array(
                            "Nominative" => "terra",
                            "Vocative" => "terra",
                            "Accusative" => "terram",
                            "Genitive" => "terre",
                            "Dative" => "terre",
                            "Ablative" =>
                        ),
                        "Plural" => array()
                    )
                ),
                "Question 2" => array(

                ) ,
                "Question 3" => array(

                ),
                "Question 4" => array(

                ),
                "Question 5" => array(

                ) ,
                "Question 6" => array(

                ),
            );
            break;
        case 4:
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
            echo "ERROR IN QUESTION-LOADER.PHP";
    }
}
