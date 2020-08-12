$("#sidebar-toggler").click(function () {
    if ($("#sidebar").hasClass("d-none")) {
        $("#sidebar").removeClass("d-none")
        $("#sidebar").addClass("d-block");
    } else {
        $("#sidebar").removeClass("d-block")
        $("#sidebar").addClass("d-none");
    }
})