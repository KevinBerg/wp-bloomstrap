<?php

/**
 * @author Kevin Berg <mail@kevinberg.de>
 */

if ( ! isset ( $content_width) ) {

    $content_width = 800;

}

function bloomstrap_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'bloomstrap' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(


if ( ! function_exists( 'bloomstrap_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since bloomstrap 1.0
*/
function bloomstrap_setup() {

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    register_nav_menus(
        array(
            'primary'   => __( 'Primary Menu', 'bloomstrap' ),
            'secondary' => __( 'Secondary Menu', 'bloomstrap' )
        )
    );

    load_theme_textdomain( 'bloomstrap', get_template_directory() . '/lang' );

}

endif;


add_action( 'after_setup_theme', 'bloomstrap_setup' );
add_action( 'widgets_init', 'bloomstrap_widgets_init' );
