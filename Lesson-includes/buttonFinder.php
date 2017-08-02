<?php
if ($Difficulty == "beginners") {
    switch ($LessonNo) {
        case 1 :
            $lessonNumberOfSections = 4;
            $ButtonContent = array("Intro to Verbs", "First Conjugation Verbs", "Differences Between Latin and English Verbs", "Activity");
            $LessonContent = array("/beginners-content/L1/content-1","/beginners-content/L1/content-2","/beginners-content/L1/content-3","/beginners-content/L1/activity");
            break;
        case 2 :
            $lessonNumberOfSections = 5;
            $ButtonContent = array("Intro to Nouns", "Word Order in Latin", "The Six Cases of Nouns", "First Declension Nouns", "Activity");
            $LessonContent = array("/beginners-content/L2/content-1","/beginners-content/L2/content-2","/beginners-content/L2/content-3", "/beginners-content/L2/content-4","/beginners-content/L2/activity");
            break;
        case 3 :
            $lessonNumberOfSections = 3;
            $ButtonContent = array("Second Declension Nouns", "<em>Esse</em> - to be", "Activity");
            $LessonContent = array("/beginners-content/L3/content-1","/beginners-content/L3/content-2", "/beginners-content/L3/activity");
            break;
        case 4 :
            $lessonNumberOfSections = 5;
            $ButtonContent = array("<em>non</em> - not", "Second Conjugation Verbs", "Numbers", "Introducing New Nouns", "Activity");
            $LessonContent = array("/beginners-content/L4/content-1","/beginners-content/L4/content-2","/beginners-content/L4/content-3", "/beginners-content/L4/content-4","/beginners-content/L4/activity");
            break;
        case 5 :
            $lessonNumberOfSections = 5;
            $ButtonContent = array("Intro to Adjectives","Irregular Adjectives","Declining Certain Numbers","<em>Ego</em> and <em>Nos</em>","Activity");
            $LessonContent = array("/beginners-content/L5/content-1","/beginners-content/L5/content-2","/beginners-content/L5/content-3", "/beginners-content/L5/content-4","/beginners-content/L5/activity");
            break;
        case 6 :
            $lessonNumberOfSections = 5;
            $ButtonContent = array("<em>Hic, Hec, Hoc</em>","Third Conjugation Verbs","Fourth Conjugation Verbs","<em>Obire</em>","Activity");
            $LessonContent = array("/beginners-content/L6/content-1","/beginners-content/L6/content-2","/beginners-content/L6/content-3", "/beginners-content/L6/content-4","/beginners-content/L6/activity");
            break;
        case 7 :
            $lessonNumberOfSections = 3;
            $ButtonContent = array("Third Declension Nouns","Third Declension Adjectives","Activity");
            $LessonContent = array("/beginners-content/L7/content-1","/beginners-content/L7/content-2","/beginners-content/L7/activity");
            break;
        case 8 :
            $lessonNumberOfSections = 3;
            $ButtonContent = array("Prepositions", "Possession", "Activity");
            $LessonContent = array("/beginners-content/L8/content-1","/beginners-content/L8/content-2", "/beginners-content/L8/activity");
            break;
        case 9 :
            $lessonNumberOfSections = 3;
            $ButtonContent = array("Past Tense Verbs", "Third Conjugation Verbs - Past Tense", "Activity");
            $LessonContent = array("/beginners-content/L9/content-1","/beginners-content/L9/content-2","/beginners-content/L9/activity");
            break;
        case 10 :
            $lessonNumberOfSections = 3;
            $ButtonContent = array("<em>qui, que, quod</em>","The Family","Activity");
            $LessonContent = array("/beginners-content/L10/content-1","/beginners-content/L10/content-2", "/beginners-content/L10/activity");
            break;
        case 11 :
            $lessonNumberOfSections = 4;
            $ButtonContent = array("Fourth Declension Nouns","Fifth Declension Nouns","Adverbs","Activity");
            $LessonContent = array("/beginners-content/L11/content-1","/beginners-content/L11/content-2","/beginners-content/L11/content-3","/beginners-content/L11/activity");
            break;
        case 12 :
            $lessonNumberOfSections = 5;
            $ButtonContent = array("Days of The Week","Months of The Year","Numbers and Dates","Dating Clauses","Activity");
            $LessonContent = array("/beginners-content/L12/content-1","/beginners-content/L12/content-2","/beginners-content/L12/content-3", "/beginners-content/L12/content-4","/beginners-content/L12/activity");
            break;
        default:
            $lessonNumberOfSections = 0;
    }
} else {
    switch ($LessonNo) {
        case 1 :
            $lessonNumberOfSections = 4;
            $ButtonContent = array("Intro to Verbs", "First Conjugation Verbs", "Differences Between Latin and English Verbs", "Activity");
            $LessonContent = array("/advanced-content/L1/content-1","/advanced-content/L1/content-2","/advanced-content/L1/content-3","/advanced-content/L1/activity");
            break;
        case 2 :
            $lessonNumberOfSections = 5;
            $ButtonContent = array("Intro to Nouns", "Word Order in Latin", "The Six Cases of Nouns", "First Declension Nouns", "Activity");
            $LessonContent = array("/advanced-content/L2/content-1","/advanced-content/L2/content-2","/advanced-content/L2/content-3", "/advanced-content/L2/content-4","/advanced-content/L2/activity");
            break;
        case 3 :
            $lessonNumberOfSections = 3;
            $ButtonContent = array("Second Declension Nouns", "<em>Esse</em> - to be", "Activity");
            $LessonContent = array("/advanced-content/L3/content-1","/advanced-content/L3/content-2", "/advanced-content/L3/activity");
            break;
        case 4 :
            $lessonNumberOfSections = 5;
            $ButtonContent = array("<em>non</em> - not", "Second Conjugation Verbs", "Numbers", "Introducing New Nouns", "Activity");
            $LessonContent = array("/advanced-content/L4/content-1","/advanced-content/L4/content-2","/advanced-content/L4/content-3", "/advanced-content/L4/content-4","/advanced-content/L4/activity");
            break;
        case 5 :
            $lessonNumberOfSections = 5;
            $ButtonContent = array("Intro to Adjectives","Irregular Adjectives","Declining Certain Numbers","<em>Ego</em> and <em>Nos</em>","Activity");
            $LessonContent = array("/advanced-content/L5/content-1","/advanced-content/L5/content-2","/advanced-content/L5/content-3", "/advanced-content/L5/content-4","/advanced-content/L5/activity");
            break;
        case 6 :
            $lessonNumberOfSections = 5;
            $ButtonContent = array("<em>Hic, Hec, Hoc</em>","Third Conjugation Verbs","Fourth Conjugation Verbs","<em>Obire</em>","Activity");
            $LessonContent = array("/advanced-content/L6/content-1","/advanced-content/L6/content-2","/advanced-content/L6/content-3", "/advanced-content/L6/content-4","/advanced-content/L6/activity");
            break;
        case 7 :
            $lessonNumberOfSections = 3;
            $ButtonContent = array("Third Declension Nouns","Third Declension Adjectives","Activity");
            $LessonContent = array("/advanced-content/L7/content-1","/advanced-content/L7/content-2","/advanced-content/L7/activity");
            break;
        case 8 :
            $lessonNumberOfSections = 3;
            $ButtonContent = array("Prepositions", "Possession", "Activity");
            $LessonContent = array("/advanced-content/L8/content-1","/advanced-content/L8/content-2", "/advanced-content/L8/activity");
            break;
        case 9 :
            $lessonNumberOfSections = 3;
            $ButtonContent = array("Past Tense Verbs", "Third Conjugation Verbs - Past Tense", "Activity");
            $LessonContent = array("/advanced-content/L9/content-1","/advanced-content/L9/content-2","/advanced-content/L9/activity");
            break;
        case 10 :
            $lessonNumberOfSections = 3;
            $ButtonContent = array("<em>qui, que, quod</em>","The Family","Activity");
            $LessonContent = array("/advanced-content/L10/content-1","/advanced-content/L10/content-2", "/advanced-content/L10/activity");
            break;
        case 11 :
            $lessonNumberOfSections = 4;
            $ButtonContent = array("Fourth Declension Nouns","Fifth Declension Nouns","Adverbs","Activity");
            $LessonContent = array("/advanced-content/L11/content-1","/advanced-content/L11/content-2","/advanced-content/L11/content-3","/advanced-content/L11/activity");
            break;
        case 12 :
            $lessonNumberOfSections = 5;
            $ButtonContent = array("Days of The Week","Months of The Year","Numbers and Dates","Dating Clauses","Activity");
            $LessonContent = array("/advanced-content/L12/content-1","/advanced-content/L12/content-2","/advanced-content/L12/content-3", "/advanced-content/L12/content-4","/advanced-content/L12/activity");
            break;
        default:
            $lessonNumberOfSections = 0;
    }
}