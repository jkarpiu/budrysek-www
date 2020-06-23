$(".js-scroll-trigger").click(function() {
    $(".navbar-collapse").collapse("hide");
});

$("body").scrollspy({
    target: "#mainNav",
    offset: 74
});

var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 80) {
        $("#mainNav").addClass("navbar-shrink");
    } else {
        $("#mainNav").removeClass("navbar-shrink");
    }
};

navbarCollapse();
$(window).scroll(navbarCollapse);
