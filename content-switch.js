var lessonNumberOfSections = $('#lesson-content-buttons').attr('data-lesson');

function HideAll() {
    for (var i = 0; i <= lessonNumberOfSections; i++) {
        var contentID = '#content-'+i;
        $(contentID).removeClass("show");
        $(contentID).addClass("hide");
    };
}

$(HideAll());
$('#content-1').addClass("show")

$('#lesson-content-buttons button').on('click', function() {

    $(HideAll());

	var $this = $(this),
		target_id = ('#' + $this.data('target'));

    $(target_id).removeClass("hide");
	$(target_id).addClass("show");

})
