function HideAll(isFullHide) {

    if (isFullHide) {
        $("div.accordion-panel").each(function (){
            $(this).removeClass("show");
            $(this).addClass("hide");
        });
    } else {
        $("div.accordion-panel:not(#currentpanel)").each(function() {
            $(this).removeClass("show");
            $(this).addClass("hide");
        });
    }

    $("div.accordion-panel#currentpanel").removeAttr("id");

}

$(HideAll(true));

$("button.accordion").on('click', function() {
    var $this = $(this),
        nextPanel = $this.next("div.accordion-panel");
    $(nextPanel).attr("id", "currentpanel") ;

    HideAll(false);

    $this.toggleClass("btn-active");
    $(nextPanel).toggleClass("show");
    $(nextPanel).toggleClass("hide");
});