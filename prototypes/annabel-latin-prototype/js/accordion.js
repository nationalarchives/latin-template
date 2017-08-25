function AccordionHideAll(isFullHide) {

    if (isFullHide) {
        $("div.filter-togglee").each(function (){
            $(this).hide();
        });
    } else {
        $("div.filter-togglee:not(#currentpanel)").each(function() {
            $(this).hide();
        });
        $("div.filter-togglee#currentpanel").removeAttr("id");
    }
}

$(AccordionHideAll(true));

$("a.filter-toggler").on('click', function( event ) {
    var $this = $(this),
        thisPanel = $this.next(".filter-togglee");

    event.preventDefault();

    $(thisPanel).attr("id", "currentpanel") ;

    AccordionHideAll(false);

    $this.toggleClass("expanded");
    $(thisPanel).toggle();
});