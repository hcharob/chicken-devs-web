<?php 



function cidw_5w5_enqueue(){
    wp_enqueue_style('5w5-le-style', 
        get_template_directory_uri() . '/style.css',
        array(), filemtime(get_template_directory() . '/style.css'),
        false);

    wp_register_script('cidw-5w5-nav-opacity',
        get_template_directory_uri() . '/javascript/nav-opacity.js',
        array(),
        filemtime(get_template_directory() . '/javascript/nav-opacity.js'),
        true); // true pour intégrer le js en bas du document

    wp_enqueue_script('cidw-5w5-nav-opacity');

    wp_register_script('cidw-5w5-carrousel-gallerie', 
    get_template_directory_uri() . '/javascript/carrousel-gallerie.js',
    array(),
    filemtime(get_template_directory() . '/javascript/carrousel-gallerie.js'),
    true);
    wp_enqueue_script('cidw-5w5-carrousel-gallerie');

}

add_action("wp_enqueue_scripts", "cidw_5w5_enqueue");

/* -------------------------------------------------- Enregistré le menu */
function cidw_5w5_register_nav_menu(){
    register_nav_menus( array(
        'principal' => __( 'principal', 'cidw_5w5' ),
    ));
}
add_action( 'after_setup_theme', 'cidw_5w5_register_nav_menu', 0 );
?>