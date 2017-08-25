$(window).scroll(function () {
    var goTop = "#goTop";
    $(window).scrollTop() > 100 ?
        $(goTop).stop().animate({right: ".5em"})
        :
        $(goTop).stop().animate({right: "-100px"})
});