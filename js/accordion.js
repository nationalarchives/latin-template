function HideAll(isFullHide) {

    if (isFullHide) {
        $("div.filter-togglee").each(function (){
            $(this).removeClass("show");
            $(this).addClass("hide");
        });
    } else {
        $("div.filter-togglee:not(#currentpanel)").each(function() {
            $(this).removeClass("show");
            $(this).addClass("hide");
        });
        $("div.filter-togglee#currentpanel").removeAttr("id");
    }
}

$(HideAll(true));

$("a.filter-toggler").on('click', function() {
    var $this = $(this),
        thisPanel = $this.next(".filter-togglee");

    $(thisPanel).attr("id", "currentpanel") ;

    HideAll(false);

    $this.toggleClass("expanded");
    $(thisPanel).removeClass("hide");
    $(thisPanel).addClass("show");

});