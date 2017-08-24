function AccordionHideAll(isFullHide) {

    if (isFullHide) {
        $("div.filter-togglee").each(function (){
            addHide($(this));
        });
    } else {
        $("div.filter-togglee:not(#currentpanel)").each(function() {
            addHide($(this));
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
    $(thisPanel).toggleClass("hide");
    $(thisPanel).toggleClass("show");
});

$(window).scroll(function () {
    var goTop = "#goTop";
    $(window).scrollTop() > 100 ?
        $(goTop).stop().animate({right: ".5em"})
        :
        $(goTop).stop().animate({right: "-100px"})
});