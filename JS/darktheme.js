function darckOff(){
    //fondo
    $("body").removeClass("bg-secondary");

    //navegador
    $("#nav").removeClass("navbar-dark bg-dark");
    $("#nav").addClass("navbar navbar-expand-lg bg-light");

    //contenedor
    $("#contenedor").removeClass("bg-dark");

    //tabla
    $("#tabla").removeClass("table-dark");
    $("#darck").attr("onclick", "darckOn()");

    //iconos
    $(".material-icons").removeClass("md-light");

    //inputs
    $("select").removeClass("bg-dark");

    //breadcrumb
    $(".breadcrumb").removeClass("bg-secondary");

    //textos
    $("p").removeClass("text-light");
    $("h3").removeClass("text-light");
    $("option").removeClass("text-light");
    $("label").removeClass("text-light");
    $("select").removeClass("text-light");
}

function darckOn(){
    //fondo
    $("body").addClass("bg-secondary");

    //navegador
    $("#nav").removeClass("bg-light");
    $("#nav").addClass("navbar-dark bg-dark");

    //contenedor
    $("#contenedor").addClass("bg-dark");

    //tabla
    $("#tabla").addClass("table-dark");
    $("#darck").attr("onclick", "darckOff()");

    //iconos
    $(".material-icons").addClass("md-light");

    //inputs
    $("select").addClass("bg-dark");
    $("input").addClass("bg-dark");

    //breadcrumb
    $(".breadcrumb").addClass("bg-secondary");

    //divs
    $(".collapse").addClass("bg-secondary");

    //textos
    $("p").addClass("text-light");
    $("h3").addClass("text-light");
    $("option").addClass("text-light");
    $("label").addClass("text-light");
    $("select").addClass("text-light");
    $("input").addClass("text-light");
}