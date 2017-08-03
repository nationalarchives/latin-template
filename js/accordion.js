function HideAll() {
    $("div.accordion-panel").each(function (){
        var $this = $(this);
        if ($this.hasClass("show")) {
            $this.removeClass("show");
            $this.addClass("hide");
        }
    });
}

$(HideAll());

$("button.accordion").on('click', function() {
    var $this = $(this),
        nextPanel = $this.next("div.accordion-panel");
    console.log("HEP HELP IM BEING REPRESSED")
    $this.toggleClass("btn-active");

    if ($(nextPanel).hasClass("show")) {
        $(nextPanel).removeClass("show");
        $(nextPanel).addClass("hide");
    } else {
        $(nextPanel).addClass("show");
        $(nextPanel).removeClass("hide");
    }
});