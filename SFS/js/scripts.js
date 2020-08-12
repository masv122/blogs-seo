$(".sidebar-toggler").click(function () {
    if ($("#sidebar").hasClass("d-none")) {
        $("#sidebar").removeClass("d-none")
        $("#sidebar").addClass("d-block");
        $("#main").addClass("content-opacity")
    } else {
        $("#sidebar").removeClass("d-block")
        $("#sidebar").addClass("d-none");
        $("#main").removeClass("content-opacity")
    }
})