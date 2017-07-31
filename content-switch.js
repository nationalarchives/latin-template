// switch ($("#lesson-content-button, .button").click(function () {$this.text})){
// 	case 'Word Order in Latin':
// 	$('#lesson-content').HTMl("<?php include './lesson-content/content-2-word-order-in-latin.php';?>");
// 	break;
// 	case 'Six cases of Nouns':
// 	$('#lesson-content').HTMl("<?php include './lesson-content/content-3-six-cases-of-nouns.php';?>");
// 	break;
// 	case 'First Declension Nouns':
// 	$('#lesson-content').HTMl("<?php include './lesson-content/content-3-first-declension-nouns.php';?>");
// 	break;
// 	default:
// 	$('#lesson-content').HTMl("<?php include './lesson-content/content-1-intro-to-nouns.php';?>");
// }


// $('#lesson-content-buttons button ').on('click', function() {
// 	var lessonNo = this.attr("id");
// 	switch (lessonNo){
// 	case 'content-button-2':
//  	$('#lesson-content').HTMl("<?php include './lesson-content/content-2-word-order-in-latin.php';?>");
//  	break;
//  	case 'content-button-3':
//  	$('#lesson-content').HTMl("<?php include './lesson-content/content-3-six-cases-of-nouns.php';?>");
//  	break;
//  	case 'content-button-4':
//  	$('#lesson-content').HTMl("<?php include './lesson-content/content-3-first-declension-nouns.php';?>");
//  	break;
//  	case 'content-button-5':
//  	console.log("ACTIVITY WOULD SHOW");
//  	break;
//  	default:
//  	$('#lesson-content').HTMl("<?php include './lesson-content/content-1-intro-to-nouns.php';?>");
//  }
// })
var lessonNumber;
var lessonNumberOfSections = 5;


for (var i = 0; i <= lessonNumberOfSections; i++) {
	$('#content-'+i).toggleClass("hide");
};

$('#lesson-content-buttons button').on('click', function() {

	

	var $this = $(this),
		target_id = $this.data('target');

	$('#' + target_id).toggleClass("hide");
	
	for (var i = 0; i <= lessonNumberOfSections; i++) {
		$('#content-'+i).toggleClass("hide");
	};
	
})
