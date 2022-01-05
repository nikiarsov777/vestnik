
// navbar toggler script
$(".navbar-toggler").on("click", function() {
    $(".collapse-menu").toggleClass("show");
    $("body").toggleClass("layer-open");
    // $(header).toggleClass("sticky-not");
    $(".navbar-close").show();
});
$(".navbar-close").on("click", function() {
    $(".collapse-menu").toggleClass("show");
    $(".navbar-close").hide();
    $("body").toggleClass("layer-open");
    // $(header).toggleClass("sticky-not");
    $(".dark-overlay").click(function() {
        $(".collapse-menu").removeClass("show");
        $("body").removeClass("layer-open");
    });
});
