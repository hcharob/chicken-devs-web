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

/*---------------------------------------------------------- Enregistrement des widget */
/**
 * Register our sidebars and widgetized areas.
 *
 */
function my_register_widgets() {

	register_sidebar( array(
		'name'          => 'home video banner',
		'id'            => 'home_video_banner',
		'before_widget' => '<div class="videoBanner">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'my_register_widgets' );
?>