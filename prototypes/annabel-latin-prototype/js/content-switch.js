var lessonNumberOfSections = $('#lesson-content-buttons').attr('data-lesson');
var currentTab;

$(function getCurrentTab (){
   //Get value of # in URL
    if(window.location.hash) {
        currentTab = window.location.hash.substr(1);
        if (currentTab > lessonNumberOfSections || currentTab === null) {
            currentTab = 1;
        }
    } else {
        currentTab = 1;
    }
    //Correct any incorrect # values
    displayCurrentTabContent(currentTab)
});

$('#lesson-content-buttons button').on('click', function() {
    displayCurrentTabContent($(this).data('target'));
});

function ContentHideAll() {
    for (var i = 0; i <= lessonNumberOfSections; i++) {
        var contentID = '#content-'+i;
        addHide(contentID)
    }
    $("#lesson-content-buttons button").each(function(){
        $("button").removeClass("btn-active");
    });
}

function displayCurrentTabContent ($this) {
    $(ContentHideAll());

    var content_id = ('#content-' + $this);
    var button_id =('#' + $this);

    $(button_id).addClass("btn-active");

    addShow(content_id);
}

function addShow (current) {
    $(current).removeClass("hide");
    $(current).addClass("show");
}

function addHide (current) {
    $(current).removeClass("show");
    $(current).addClass("hide");
}
