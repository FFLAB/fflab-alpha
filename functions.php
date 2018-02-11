<?php
//functions.php v.3.1
function creaWidget(){
    //Widget Area
    register_sidebar(array(
        "name" => __( 'Barra Laterale', 'ffalpha' ),
        "id" => "sidebar-1",
        "description" => "I widget sidebar dx",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
      register_sidebar(array(
        "name" => "Footer-sx",
        "id" => "sidebar-2",
        "description" => "Footer a sinistra",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
     register_sidebar(array(
        "name" => "Footer-cx",
        "id" => "sidebar-3",
        "description" => "Footer al centro",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
     register_sidebar(array(
        "name" => "Footer-dx",
        "id" => "sidebar-4",
        "description" => "Footer a destra",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
    register_sidebar(array(
        "name" => "Footer-last",
        "id" => "sidebar-5",
        "description" => "Footer in fondo",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
     register_sidebar(array(
        "name" => "Header-right",
        "id" => "sidebar-6",
        "description" => "Header a destra",
        "before_widget" => '<div class="widget">',
        "after_widget" => '</div>',
        "before_title" => '<h4>',
        "after_title" => '</h4>'
        ));
}
add_action("widgets_init","creaWidget");

function creaMenu(){
//Registro una nuova navigazione
    register_nav_menu("principale","Mia Navigazione Principale");

}
add_action("init","creaMenu");

function immagineEvidenza(){
 //Attivo le immagini in evidenza degli articoli
    add_theme_support('post-thumbnails');
}
add_action("init","immagineEvidenza");

//Paginazione
function pagination_nav() {
    global $wp_query;

    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Articoli meno recenti' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Articoli piu recenti &rarr;' ); ?></div>
        </nav>
<?php }
}
//Carico Styles
function load_styles() {
//Carico CSS di Bootstrap
wp_register_style(
    'bootstrapCSS',
    get_template_directory_uri() . '/css/bootstrap.min.css',
    //"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css",
    array(),
    null,
    'all'
);

  wp_register_style(
      "fancyCSS",
      get_bloginfo("template_url") . "/css/jquery.fancybox.min.css",
      false,
      "3.2.0",
      "all"
  );

  wp_register_style(
    'fawesomeCSS',
    'https://use.fontawesome.com/releases/v5.0.6/css/all.css',
    array(),
    null,
    'all'
    );
// register style.css
  wp_register_style('main_css', get_stylesheet_uri(), array("bootstrapCSS"), null, 'all');


	//wp_register_style('theme-style', get_stylesheet_uri(), array(), null, 'all');
//enqueue styles
  wp_enqueue_style("fancyCSS");
  wp_enqueue_style("fawesomeCSS");
	wp_enqueue_style("bootstrapCSS");
  wp_enqueue_style('main_css');
}
add_action( 'wp_enqueue_scripts', 'load_styles', 11);

// Only on front-end pages, NOT in admin area
if (!is_admin()) {
function caricaScripts(){
//new
 global $wp_scripts;
    //Dimentica la versione attualmente registrata di Jquery
    wp_deregister_script("jquery");

    // Definire la nostra versione
    wp_register_script(
        "jquery",
        get_bloginfo("template_url") . "/js/jquery-3.3.1.min.js",
        //"https://code.jquery.com/jquery-3.2.1.min.js",
        false,
        "3.3.1",
        true
);
    // Definisco JS e CSS di Fancybox
        wp_register_script(
            "fancyJS",
            // get_bloginfo("template_url") . "/fancybox/jquery.fancybox.pack.js",
            get_bloginfo("template_url") . "/js/jquery.fancybox.min.js",
            array("jquery"),
            "3.2.0",
            true
        );



     // Definisco il mio script
        wp_register_script(
            "myjs",
            // get_bloginfo("template_url") . "/js/my.js",
            get_bloginfo("template_url") . "/js/myscript.js",
            array("jquery","fancyJS","popperJS","bootstrapJS"),
            "1.0.0",
            true
        );
    //Bootstrap Popper.js
     wp_register_script(
        "popperJS",
        get_bloginfo("template_url") . "/js/popper.min.js",
        array("jquery"),
        "1.0",
        true
    );
    //Bootstrap JS Plugins
    wp_register_script(
        "bootstrapJS",
        get_bloginfo("template_url") . "/js/bootstrap.min.js",
        //"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js",
        array("jquery"),
        "4.0.0",
        true
    );
// Caricamenti scripts (attenzione qui non importa l'ordine, le dipendenze sono indicate negli array() precedenti

    wp_enqueue_script("myjs");
    wp_enqueue_script("jquery");
    wp_enqueue_script("fancyJS");
    wp_enqueue_script("popperJS");
    wp_enqueue_script("bootstrapJS");

}

add_action("wp_enqueue_scripts","caricaScripts");
} // end if !is_admin

//Dynamic caption text in fancybox
function add_title_attachment_link($link, $id = null) {
    $id = intval( $id );
    $_post = get_post( $id );
    $post_title = esc_attr( $_post->post_excerpt );
    return str_replace('<a href', '<a title="'. $post_title .'" href', $link);
}
add_filter('wp_get_attachment_link', 'add_title_attachment_link', 10, 2);


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

?>
