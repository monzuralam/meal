<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
if( ! function_exists('meal_theme_setup') ){
    function meal_theme_setup(){
        load_theme_textdomain( 'meal', get_template_directory(  )."/languages" );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tags' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
                'navigation-widgets',
            )
        );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'align-wide' );
    }
    add_action('after_setup_theme','meal_theme_setup');
}