var lessonNumber;
var lessonNumberOfSections = 5;

function HideAll() {
    for (var i = 0; i <= lessonNumberOfSections; i++) {
        var contentID = '#content-'+i;

        $(contentID).removeClass("show");
        $(contentID).addClass("hide");
    };

    $("#lesson-content-buttons button").each(function(){

        $("button").removeClass("btn-active");
    });
}

$(HideAll());
$('#content-1').addClass("show")
$('button:first-of-type').addClass("btn-active");

$('#lesson-content-buttons button').on('click', function() {

    $(HideAll());

	var $this = $(this),
		target_id = ('#' + $this.data('target'));


    $this.addClass("btn-active");


    $(target_id).removeClass("hide");
	$(target_id).addClass("show");

})
