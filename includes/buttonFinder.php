<?php
switch ($LessonNo) {
    case 1 :
        $lessonNumberOfSections = 4;
        $ButtonContent = array("Intro to Verbs", "First Conjugation Verbs", "Differences Between Latin and English Verbs", "Activity");
        $LessonContent = array("/L1/content-1","/L1/content-2","/L1/content-3","/L1/activity");
        break;
    case 2 :
        $lessonNumberOfSections = 5;
        $ButtonContent = array("Intro to Nouns", "Word Order in Latin", "The Six Cases of Nouns", "First Declension Nouns", "Activity");
        $LessonContent = array("/L2/content-1","/L2/content-2","/L2/content-3", "/L2/content-4","/L2/activity");
        break;
    case 3 :
        $lessonNumberOfSections = 3;
        $ButtonContent = array("Second Declension Nouns", "<em>Esse</em> - to be", "Activity");
        $LessonContent = array("/L3/content-1","/L3/content-2", "/L3/activity");
        break;
    case 4 :
        $lessonNumberOfSections = 5;
        $ButtonContent = array("<em>non</em> - not", "Second Conjugation Verbs", "Numbers", "Introducing New Nouns", "Activity");
        $LessonContent = array("/L4/content-1","/L4/content-2","/L4/content-3", "/L4/content-4","/L4/activity");
        break;
    case 5 :
        $lessonNumberOfSections = 5;
        $ButtonContent = array("Intro to Adjectives","Irregular Adjectives","Declining Certain Numbers","<em>Ego</em> and <em>Nos</em>","Activity");
        $LessonContent = array("/L5/content-1","/L5/content-2","/L5/content-3", "/L5/content-4","/L5/activity");
        break;
    case 6 :
        $lessonNumberOfSections = 5;
        $ButtonContent = array("<em>Hic, Hec, Hoc</em>","Third Conjugation Verbs","Fourth Conjugation Verbs","<em>Obire</em>","Activity");
        $LessonContent = array("/L6/content-1","/L6/content-2","/L6/content-3", "/L6/content-4","/L6/activity");
        break;
    case 7 :
        $lessonNumberOfSections = 3;
        $ButtonContent = array("Third Declension Nouns","Third Declension Adjectives","Activity");
        $LessonContent = array("/L7/content-1","/L7/content-2","/L7/activity");
        break;
    case 8 :
        $lessonNumberOfSections = 3;
        $ButtonContent = array("Prepositions", "Possession", "Activity");
        $LessonContent = array("/L8/content-1","/L8/content-2", "/L8/activity");
        break;
    case 9 :
        $lessonNumberOfSections = 3;
        $ButtonContent = array("Past Tense Verbs", "Third Conjugation Verbs - Past Tense", "Activity");
        $LessonContent = array("/L9/content-1","/L9/content-2","/L9/activity");
        break;
    case 10 :
        $lessonNumberOfSections = 3;
        $ButtonContent = array("<em>qui, que, quod</em>","The Family","Activity");
        $LessonContent = array("/L10/content-1","/L10/content-2", "/L10/activity");
        break;
    case 11 :
        $lessonNumberOfSections = 4;
        $ButtonContent = array("Fourth Declension Nouns","Fifth Declension Nouns","Adverbs","Activity");
        $LessonContent = array("/L11/content-1","/L11/content-2","/L11/content-3","/L11/activity");
        break;
    case 12 :
        $lessonNumberOfSections = 5;
        $ButtonContent = array("Days of The Week","Months of The Year","Numbers and Dates","Dating Clauses","Activity");
        $LessonContent = array("/L12/content-1","/L12/content-2","/L12/content-3", "/L12/content-4","/L12/activity");
        break;
    default:
        $lessonNumberOfSections = 0;
}

?>