function HideAll() {
    $("div.accordion-panel").each(function (){
        $(this).removeClass("show");
        $(this).addClass("hide");
    });
    $("button.accordion").each(function() {
        $(this).removeClass("btn-active");
    });
}

$(HideAll());

$("button.accordion").on('click', function() {
    $(HideAll());
    var $this = $(this),
        nextPanel = $this.next("div.accordion-panel");
    $this.toggleClass("btn-active");
    $(nextPanel).removeClass("hide");
    $(nextPanel).addClass("show");

});