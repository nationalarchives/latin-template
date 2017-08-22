var lessonNumberOfSections = $('#lesson-content-buttons').attr('data-lesson');
var isActivityAction = $('#primary').attr('data-actact');

var hashtag
$(function() {
    //Get value of # in URL
    hashtag = window.location.hash.substr(1);
    
    if(!$.isNumeric(hashtag)){
        hashtag = 1;
    }
    
        ContentHideAll();

        var contentID = "#content-"+hashtag;
        $(contentID).removeClass("hide");
        $(contentID).addClass("show");

       var currentButton = $("#lesson-content-buttons button").get(hashtag-1);
       $(currentButton).removeClass("hide");
       $(currentButton).addClass("show");

       $("#lesson-content-buttons button").each(function(){



            var data = $(this).attr('data-target');
           // console.log(data);

            if(data == "content-"+hashtag){
                $(this).removeClass("btn-active");    
                $(this).addClass("btn-active");
            }
            else {

                console.log("Data is "+data);
            }
        
       
    });

    
});

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

/* var FirstContent;

$(ContentHideAll());

if (isActivityAction) {
    FirstContent='#content-' + lessonNumberOfSections;
} else {
    FirstContent = '#content-1';
}

$(FirstContent).removeClass("hide");
$(FirstContent).addClass("show");
$('button:first-of-type').addClass("btn-active"); */

$('#lesson-content-buttons button').on('click', function() {

    $(ContentHideAll());

	var $this = $(this),
		target_id = ('#' + $this.data('target'));


    $this.addClass("btn-active");


    $(target_id).removeClass("hide");
	$(target_id).addClass("show");

});
