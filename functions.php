<?php
function creaWidget(){
    //Widget areas
    register_sidebar(array(
        "name" => "Barra Laterale",
        "description" => "I widget sidebar dx",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
      register_sidebar(array(
        "name" => "Footer-sx",
        "description" => "Footer a sinistra",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
     register_sidebar(array(
        "name" => "Footer-cx",
        "description" => "Footer al centro",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
     register_sidebar(array(
        "name" => "Footer-dx",
        "description" => "Footer a destra",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
    register_sidebar(array(
        "name" => "Footer-last",
        "description" => "Footer in fondo",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
     register_sidebar(array(
        "name" => "Header-right",
        "description" => "Header a destra",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
}

function creaMenu(){
//Registro una nuova navigazione
    register_nav_menu("principale","Mia Navigazione Principale");

}

function immagineEvidenza(){
 //Attivo le immagini in evidenza degli articoli
    add_theme_support('post-thumbnails');
}
function pagination_nav() {
    global $wp_query;

    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Articoli meno recenti' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Articoli piu recenti &rarr;' ); ?></div>
        </nav>
<?php }
}


function caricaScripts(){
     //Carico CSS di Bootstrap
    wp_register_style(
        'bootstrapCSS',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        false,
        '3.3.7',
        'all'
    );

    //Dimentica la versione attualmente registrata di Jquery
    wp_deregister_script("jquery");

    // Definire la nostra versione
    wp_register_script(
        "jquery",
        get_bloginfo("template_url") . "/js/jquery-3.1.0.min.js",
        false,
        "3.1.0",
        true
);
    // Definisco JS e CSS di Fancybox
        wp_register_script(
            "fancyJS",
            get_bloginfo("template_url") . "/fancybox/jquery.fancybox.pack.js",
            array("jquery"),
            "2.0.0",
            true
        );
        wp_register_style(
            "fancyCSS",
            get_bloginfo("template_url") . "/fancybox/jquery.fancybox.css",
            false,
            "2.0.0",
            "all"
        );
     wp_register_style(
            "fawesomeCSS",
            get_bloginfo("template_url") . "/font-awesome/css/font-awesome.min.css",
            false,
            "4.6.3",
            "all"
        );
     // Definisco il mio script
        wp_register_script(
            "myscript",
            get_bloginfo("template_url") . "/js/myscript.js",
            array("jquery","fancyJS"),
            "1.0.0",
            true
        );
    //Definisco librerie JS di bootstrap
    wp_register_script(
        "bootstrapJS",
        get_bloginfo("template_url") . "/js/bootstrap.min.js",
        array("jquery"),
        "3.2.0",
        true
    );
// Caricamenti scripts (attenzione qui non importa l'ordine, le dipendenze sono indicate negli array() precedenti

    wp_enqueue_script("myscript");
    wp_enqueue_script("jquery");
    wp_enqueue_script("fancyJS");
    wp_enqueue_style("bootstrapCSS");
    wp_enqueue_style("fancyCSS");
     wp_enqueue_style("fawesomeCSS");
    wp_enqueue_style('style',get_stylesheet_uri()); //carico style.css da functions.php (nuove linee guida)
    wp_enqueue_script("bootstrapJS");
}



//Azioni
add_action("widgets_init","creaWidget");
add_action("init","creaMenu");
add_action("init","immagineEvidenza");
add_action("wp_enqueue_scripts","caricaScripts");

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

?>
