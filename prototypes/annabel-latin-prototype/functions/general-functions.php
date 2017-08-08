<?php

function getresourcename ($ChosenResource) {
        switch ($ChosenResource) {
            case "dating-latin-documents" :
                return "Dating Latin Documents";
            break;
            case "declining-personal-names" :
                return "Declining Personal Names";
                break;
            case "glossary" :
                return "Glossary";
                break;
            case "grammar-table" :
                return "Grammar Table";
                break;
            case "problems-with-latin" :
                return "Problems with Latin and the Documents";
                break;
            case "useful-latin-phrases" :
                return "Useful Latin Phrases";
                break;
            case "word-list":
                return "Word List";
                break;
            default :
                return "ERROR IN general-functions.php" ;
        }
}

function loadPageType() {

    global $isActivity;
    $isActivity = false;
    global $isLesson;
    $isLesson = false;
    global $isResource;
    $isResource = false;

    if (isset($_GET['Difficulty']) && isset($_GET['Lesson'])) {
        global $Difficulty ;
        $Difficulty = $_GET['Difficulty'];
        global $LessonNo ;
        $LessonNo = $_GET['Lesson'];
        $isLesson = true;
    } elseif (isset($_GET['Difficulty']) && isset($_GET['Activity'])) {
        global $Difficulty ;
        $Difficulty = $_GET['Difficulty'];
        global $ActivityNo ;
        $ActivityNo = $_GET['Activity'];
        $isActivity = true;
    } elseif (isset($_GET['Resource'])) {
        global $Resource ;
        $Resource = $_GET['Resource'];
        $isResource = true;
    }
}

function getAdvLessonName ($LessonNo) {
    switch ($LessonNo) {
        case 1:
            return "Imperfect Tense";
            break;
        case 2:
            return "Pluperfect Tense";
            break;
        case 3:
            return "Future Simple Tense";
            break;
        case 4:
            return "Future Perfect Tense";
            break;
        case 5:
            return "Pronouns";
            break;
        case 6:
            return "Passive Verbs";
            break;
        case 7:
            return "Participles - Present, Past and Future";
            break;
        case 8:
            return "Comparison of Adjectives and Adverbs";
            break;
        case 9:
            return "Subjunctive";
            break;
        case 10:
            return "Deponent and Semi-Deponent Verbs";
            break;
        case 11:
            return "Gerunds and Gerundives";
            break;
        case 12:
            return "Infinitives; Accusative and Infinitive Clause";
            break;
        default:
            return "An error has occurred";
    }

}

function numberOfSections ($Difficulty, $LessonNo)
{
    if ($Difficulty == "beginners") {
        switch ($LessonNo) {
            case 1 :
                return 4;
                break;
            case 2 :
                return 5;
                break;
            case 3 :
                return 3;
                break;
            case 4 :
                return 5;
                break;
            case 5 :
                return 5;
                break;
            case 6 :
                return 5;
                break;
            case 7 :
                return 3;
                break;
            case 8 :
                return 3;
                break;
            case 9 :
                return 3;
                break;
            case 10 :
                return 3;
                break;
            case 11 :
                return 4;
                break;
            case 12 :
                return 5;
                break;
            default:
                return 0;
        }
    } else {
        switch ($LessonNo) {
            case 1 :
                return 4;
                break;
            case 2 :
                return 5;
                break;
            case 3 :
                return 3;
                break;
            case 4 :
                return 5;
                break;
            case 5 :
                return 5;
                break;
            case 6 :
                return 5;
                break;
            case 7 :
                return 3;
                break;
            case 8 :
                return 3;
                break;
            case 9 :
                return 3;
                break;
            case 10 :
                return 3;
                break;
            case 11 :
                return 4;
                break;
            case 12 :
                return 5;
                break;
            default:
                return 0;
        }
    }
}

function buttonTitles($Difficulty, $LessonNo)
        {
            if ($Difficulty == "beginners") {
                switch ($LessonNo) {
                    case 1 :
                        return $ButtonContent = array("Intro to Verbs", "First Conjugation Verbs", "Differences Between Latin and English Verbs", "Activity");
                        break;
                    case 2 :
                        return $ButtonContent = array("Intro to Nouns", "Word Order in Latin", "The Six Cases of Nouns", "First Declension Nouns", "Activity");
                        break;
                    case 3 :
                        return $ButtonContent = array("Second Declension Nouns", "<em>Esse</em> - to be", "Activity");
                        break;
                    case 4 :
                        return $ButtonContent = array("<em>non</em> - not", "Second Conjugation Verbs", "Numbers", "Introducing New Nouns", "Activity");
                        break;
                    case 5 :
                        return $ButtonContent = array("Intro to Adjectives", "Irregular Adjectives", "Declining Certain Numbers", "<em>Ego</em> and <em>Nos</em>", "Activity");
                        break;
                    case 6 :
                        return $ButtonContent = array("<em>Hic, Hec, Hoc</em>", "Third Conjugation Verbs", "Fourth Conjugation Verbs", "<em>Obire</em>", "Activity");
                        break;
                    case 7 :
                        return $ButtonContent = array("Third Declension Nouns", "Third Declension Adjectives", "Activity");
                        break;
                    case 8 :
                        return $ButtonContent = array("Prepositions", "Possession", "Activity");
                        break;
                    case 9 :
                        return $ButtonContent = array("Past Tense Verbs", "Third Conjugation Verbs - Past Tense", "Activity");
                        break;
                    case 10 :
                        return $ButtonContent = array("<em>qui, que, quod</em>", "The Family", "Activity");
                        break;
                    case 11 :
                        return $ButtonContent = array("Fourth Declension Nouns", "Fifth Declension Nouns", "Adverbs", "Activity");
                        break;
                    case 12 :
                        return $ButtonContent = array("Days of The Week", "Months of The Year", "Numbers and Dates", "Dating Clauses", "Activity");
                        break;
                    default:
                        return null;
                }

            } else {
                switch ($LessonNo) {
                    case 1 :
                        return $ButtonContent = array("Intro to Verbs", "First Conjugation Verbs", "Differences Between Latin and English Verbs", "Activity");
                        break;
                    case 2 :
                        return $ButtonContent = array("Intro to Nouns", "Word Order in Latin", "The Six Cases of Nouns", "First Declension Nouns", "Activity");
                        break;
                    case 3 :
                        return $ButtonContent = array("Second Declension Nouns", "<em>Esse</em> - to be", "Activity");
                        break;
                    case 4 :
                        return $ButtonContent = array("<em>non</em> - not", "Second Conjugation Verbs", "Numbers", "Introducing New Nouns", "Activity");
                        break;
                    case 5 :
                        return $ButtonContent = array("Intro to Adjectives", "Irregular Adjectives", "Declining Certain Numbers", "<em>Ego</em> and <em>Nos</em>", "Activity");
                        break;
                    case 6 :
                        return $ButtonContent = array("<em>Hic, Hec, Hoc</em>", "Third Conjugation Verbs", "Fourth Conjugation Verbs", "<em>Obire</em>", "Activity");
                        break;
                    case 7 :
                        return $ButtonContent = array("Third Declension Nouns", "Third Declension Adjectives", "Activity");
                        break;
                    case 8 :
                        return $ButtonContent = array("Prepositions", "Possession", "Activity");
                        break;
                    case 9 :
                        return $ButtonContent = array("Past Tense Verbs", "Third Conjugation Verbs - Past Tense", "Activity");
                        break;
                    case 10 :
                        return $ButtonContent = array("<em>qui, que, quod</em>", "The Family", "Activity");
                        break;
                    case 11 :
                        return $ButtonContent = array("Fourth Declension Nouns", "Fifth Declension Nouns", "Adverbs", "Activity");
                        break;
                    case 12 :
                        return $ButtonContent = array("Days of The Week", "Months of The Year", "Numbers and Dates", "Dating Clauses", "Activity");
                        break;
                    default:
                        return null;
                }
            }
        }

function loadLessonBlurb ($LessonNo) {
    switch ($LessonNo) {
        case 1 :
            return "BLURB LESSON 1";
            break;
        case 2 :
            return "BLURB LESSON 2";
            break;
        case 3 :
            return "BLURB LESSON 3";
            break;
        case 4 :
            return "BLURB LESSON 4";
            break;
        case 5 :
            return "BLURB LESSON 5";
            break;
        case 6 :
            return "BLURB LESSON 6";
            break;
        case 7 :
            return "BLURB LESSON 7";
            break;
        case 8 :
            return "BLURB LESSON 8";
            break;
        case 9 :
            return "BLURB LESSON 9";
            break;
        case 10 :
            return "BLURB LESSON 10";
            break;
        case 11 :
            return "BLURB LESSON 11";
            break;
        case 12 :
            return "BLURB LESSON 12";
            break;
        default :
            return "Sorry Dave, Im afraid I can't let you do that";
    }
}

function loadActivityBlurb ($ActivityNo) {
    switch ($ActivityNo) {
        case 1 :
            return "BLURB ACTIVITY 1";
            break;
        case 2 :
            return "BLURB ACTIVITY 2";
            break;
        case 3 :
            return "BLURB ACTIVITY 3";
            break;
        case 4 :
            return "BLURB ACTIVITY 4";
            break;
        case 5 :
            return "BLURB ACTIVITY 5";
            break;
        case 6 :
            return "BLURB ACTIVITY 6";
            break;
        case 7 :
            return "BLURB ACTIVITY 7";
            break;
        case 8 :
            return "BLURB ACTIVITY 8";
            break;
        case 9 :
            return "BLURB ACTIVITY 9";
            break;
        case 10 :
            return "BLURB ACTIVITY 10";
            break;
        case 11 :
            return "BLURB ACTIVITY 11";
            break;
        case 12 :
            return "BLURB ACTIVITY 12";
            break;
        default :
            return "Sorry Dave, Im afraid I can't let you do that";
    }
}

function loadResourceBlurb ($Resource) {
    switch ($Resource) {
        case "dating-latin-documents" :
            return "BLURB DATING LATIN DOCUMENTS";
            break;
        case "declining-personal-names" :
            return "BLURB DECLINING PERSONAL NAMES";
            break;
        case "glossary" :
            return "BLURB GLOSSARY";
            break;
        case "grammar-table" :
            return "BLURB GRAMMAR TABLE";
            break;
        case "problems-with-latin" :
            return "BLURB PROBLEMS WITH LATIN";
            break;
        case "useful-latin-phrases" :
            return "BLURB USEFUL LATIN PHRASES";
            break;
        case "word-list":
            return "BLURB WORD LIST";
            break;
        default :
            return "Sorry Dave, Im afraid I can't let you do that";
    }
}

function numberOfQuestions ($Difficulty, $ActivityNo)
{
    if ($Difficulty == "beginners") {
        switch ($ActivityNo) {
            case 1 :
                return 8;
                break;
            case 2 :
                return 6;
                break;
            case 3 :
                return 8;
                break;
            case 4 :
                return 6;
                break;
            case 5 :
                return 8;
                break;
            case 6 :
                return 6;
                break;
            case 7 :
                return 8;
                break;
            case 8 :
                return 6;
                break;
            case 9 :
                return 8;
                break;
            case 10 :
                return 6;
                break;
            case 11 :
                return 8;
                break;
            case 12 :
                return 6;
                break;
            default:
                return 0;
        }
    } else {
        switch ($ActivityNo) {
            case 1 :
                return 4;
                break;
            case 2 :
                return 5;
                break;
            case 3 :
                return 3;
                break;
            case 4 :
                return 5;
                break;
            case 5 :
                return 5;
                break;
            case 6 :
                return 5;
                break;
            case 7 :
                return 3;
                break;
            case 8 :
                return 3;
                break;
            case 9 :
                return 3;
                break;
            case 10 :
                return 3;
                break;
            case 11 :
                return 4;
                break;
            case 12 :
                return 5;
                break;
            default:
                return 0;
        }
    }
}