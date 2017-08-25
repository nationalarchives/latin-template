var lessonNumberOfSections = $('#lesson-content-buttons').attr('data-lesson');

function displayCurrentTabContent (tab) {
    ContentHideAll();
    var content_id = ('#tab-' + tab);
    var button_id =('#' + tab);
    $("a").removeClass("btn-active");
    $(button_id).addClass("btn-active");

    $(content_id).show();
}

function getCurrentTab (){
   //Get value of # in URL
    if(window.location.hash) {

        var currentTab = window.location.hash.substr(1);

        if (window.location.hash.substr(1) > lessonNumberOfSections || currentTab === null) {
            currentTab = 1;
        }
    } else {
        currentTab = 1;
    }

    return currentTab;
}

$('#lesson-content-buttons a').on('click', function(event) {
    event.preventDefault();
    displayCurrentTabContent($(this).data('target'));
});

function ContentHideAll() {
    for (var i = 0; i <= lessonNumberOfSections; i++) {
        var contentID = '#tab-'+i;
        $(contentID).hide();
    }
}

$(document).ready(function (){
   displayCurrentTabContent(getCurrentTab());
});