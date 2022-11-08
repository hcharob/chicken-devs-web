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

}

add_action("wp_enqueue_scripts", "cidw_5w5_enqueue");

/* -------------------------------------------------- Enregistré le menu */
function cidw_5w5_register_nav_menu(){
    register_nav_menus( array(
        'principal' => __( 'principal', 'cidw_5w5' ),
    ));
}
add_action( 'after_setup_theme', 'cidw_5w5_register_nav_menu', 0 );

function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_1',
            'name'          => __( 'Pied de page colonne 1' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_2',
            'name'          => __( 'Pied de page colonne 2' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_3',
            'name'          => __( 'Pied de page colonne 3' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_4',
            'name'          => __( 'Pied de page colonne 4' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'my_register_sidebars' );
?>