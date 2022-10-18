<?php 



function cidw_5w5_enqueue(){
    wp_enqueue_style('5w5-le-style', 
        get_template_directory_uri() . '/style.css',
        array(), filemtime(get_template_directory() . '/style.css'),
        false);
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