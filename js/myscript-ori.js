// per fancybox 3
$(document).ready(function(){
    //codice per fancybox3

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

    $(".gallery a").attr("data-fancybox","miagalleria").fancybox();

    $(".gallery-icon.portrait").removeClass("portrait").addClass("landscape");

});
