<?php

/**
 * @author Kevin Berg <mail@kevinberg.de>
 */

if ( ! isset ( $content_width) ) {
    
    $content_width = 800;
    
}

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