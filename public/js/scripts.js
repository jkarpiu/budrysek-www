$(".js-scroll-trigger").click(() => {
    $(".navbar-collapse").collapse("hide");
});

$("body").scrollspy({
    target: "#mainNav",
    offset: 74
});

var navbarCollapse = () => {
    if ($("#mainNav").offset().top > 80) {
        $("#mainNav").addClass("navbar-shrink");
    } else {
        $("#mainNav").removeClass("navbar-shrink");
    }
};

navbarCollapse();
$(window).scroll(navbarCollapse);

if (!$(".hamburger").hasClass("collapsed")) {
    $(".hamburger").click(() => {
        $(".hamburger").toggleClass("opened");
    });
} else {
    $(".hamburger").click(() => {
        $(".hamburger").toggleClass("opened");
    });
}
