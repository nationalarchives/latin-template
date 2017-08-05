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
    if (isset($_GET['Difficulty']) && isset($_GET['Lesson'])) {
        global $Difficulty ;
        $Difficulty = $_GET['Difficulty'];
        global $LessonNo ;
        $LessonNo = $_GET['Lesson'];
        global $isLesson ;
        $isLesson = true;
    } elseif (isset($_GET['Difficulty']) && isset($_GET['Activity'])) {
        global $Difficulty ;
        $Difficulty = $_GET['Difficulty'];
        global $ActivityNo ;
        $ActivityNo = $_GET['Activity'];
        global $isActivity;
        $isActivity = true;
    } elseif (isset($_GET['Resource'])) {
        global $Resource ;
        $Resource = $_GET['Resource'];
        global $isResource ;
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