$(document).ready(function() {

    // codice di istruzioni per Fancybox*/
    //ori $('.gallery a').attr('rel','gallAnimata').fancybox();

    $("#switch").tooltip();
    $(".gallery-caption span").tooltip();

    $(".gallery a, .coblocks-gallery--figure a").fancybox({
        padding: 0,
        helpers: {
            title: {
                type: 'over',
            }
        },
    });

    $(".gallery a, .coblocks-gallery--figure ").attr("rel", "galleria").fancybox({
        padding: 0,
    });

    $(".gallery-icon.portrait").removeClass("portrait").addClass("landscape");

}); //chiusura (document).ready