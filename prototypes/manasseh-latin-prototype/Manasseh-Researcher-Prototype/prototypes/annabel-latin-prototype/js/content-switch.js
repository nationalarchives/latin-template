var lessonNumberOfSections = $('#lesson-content-buttons').attr('data-lesson');
var isActivityAction = $('#primary').attr('data-actact');

function ContentHideAll() {
    for (var i = 0; i <= lessonNumberOfSections; i++) {
        var contentID = '#content-'+i;

        $(contentID).removeClass("show");
        $(contentID).addClass("hide");
    }

    $("#lesson-content-buttons button").each(function(){

        $("button").removeClass("btn-active");
    });
}

var FirstContent;

$(ContentHideAll());

if (isActivityAction) {
    FirstContent='#content-' + lessonNumberOfSections;
} else {
    FirstContent = '#content-1';
}

$(FirstContent).removeClass("hide");
$(FirstContent).addClass("show");
$('button:first-of-type').addClass("btn-active");

$('#lesson-content-buttons button').on('click', function() {

    $(ContentHideAll());

	var $this = $(this),
		target_id = ('#' + $this.data('target'));


    $this.addClass("btn-active");


    $(target_id).removeClass("hide");
	$(target_id).addClass("show");

});
