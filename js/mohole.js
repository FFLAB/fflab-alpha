$(document).ready(function() {       
    // Fancybox
	$("#switch").tooltip();
    $(".gallery-caption span").tooltip();
    
    $(".gallery a").fancybox({
        padding: 0,
        helpers: {
            title: {
                type: 'over',
            }
        },
    });
    
    $(".gallery a").attr("rel", "galleria").fancybox({
        padding: 0,
    });
    $(".gallery-icon.portrait").removeClass("portrait").addClass("landscape");         
});