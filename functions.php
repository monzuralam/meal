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

/**
 * Enqueue Style & Scripts
 *
 */

    function meal_assets(){
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700');
        wp_enqueue_style('animate', get_theme_file_uri().'/assets/css/animate.css', null, '1.0', 'all');
        wp_enqueue_style('flaticon', get_theme_file_uri().'/assets/css/flaticon.css', null, '1.0', 'all');
        wp_enqueue_style('font-awesome', get_theme_file_uri().'/assets/css/font-awesome.min.css', null, '1.0', 'all');
        wp_enqueue_style('ionicons', get_theme_file_uri().'/assets/css/ionicons.min.css', null, '1.0', 'all');
        wp_enqueue_style('aos', get_theme_file_uri().'/assets/css/aos.css', null, '1.0', 'all');
        wp_enqueue_style('bootstrap-datepicker', get_theme_file_uri().'/assets/css/bootstrap-datepicker.css', null, '1.0', 'all');
        wp_enqueue_style('bootstrap', get_theme_file_uri().'/assets/css/bootstrap.css', null, '1.0', 'all');
        wp_enqueue_style('jquery.timepicker', get_theme_file_uri().'/assets/css/jquery.timepicker.css', null, '1.0', 'all');
        wp_enqueue_style('magnific-popup', get_theme_file_uri().'/assets/css/magnific-popup.css', null, '1.0', 'all');
        wp_enqueue_style('owl.carousel', get_theme_file_uri().'/assets/css/owl.carousel.min.css', null, '1.0', 'all');
        wp_enqueue_style('portfolio', get_theme_file_uri().'/assets/css/portfolio.css', null, '1.0', 'all');
        wp_enqueue_style('style', get_theme_file_uri().'/assets/css/style.css', null, '1.0', 'all');

        wp_enqueue_script('maps-api', '//maps.googleapis.com/maps/api/js', array(), '1.0', true);
        wp_enqueue_script('aos', get_theme_file_uri().'/assets/js/aos.js', array(), '1.0', true);
        wp_enqueue_script('bootstrap-datepicker', get_theme_file_uri().'/assets/js/bootstrap-datepicker.js', array(), '1.0', true);
        wp_enqueue_script('bootstrap', get_theme_file_uri().'/assets/js/bootstrap.min.js', array(), '1.0', true);
        wp_enqueue_script('imagesloaded', get_theme_file_uri().'/assets/js/imagesloaded.js', array(), '1.0', true);
        wp_enqueue_script('isotope.pkgd', get_theme_file_uri().'/assets/js/isotope.pkgd.min.js', array(), '1.0', true);
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery.easing', get_theme_file_uri().'/assets/js/jquery.easing.1.3.js', array(), '1.0', true);
        wp_enqueue_script('jquery.isotope', get_theme_file_uri().'/assets/js/jquery.isotope.js', array(), '1.0', true);
        wp_enqueue_script('jquery.magnific-popup', get_theme_file_uri().'/assets/js/jquery.magnific-popup.min.js', array(), '1.0', true);
        wp_enqueue_script('jquery.stellar', get_theme_file_uri().'/assets/js/jquery.stellar.min.js', array(), '1.0', true);
        wp_enqueue_script('jquery.timepicker', get_theme_file_uri().'/assets/js/jquery.timepicker.min.js', array(), '1.0', true);
        wp_enqueue_script('jquery.waypoints', get_theme_file_uri().'/assets/js/jquery.waypoints.min.js', array(), '1.0', true);
        wp_enqueue_script('magnific-popup-options', get_theme_file_uri().'/assets/js/magnific-popup-options.js', array(), '1.0', true);
        wp_enqueue_script('owl.carousel', get_theme_file_uri().'/assets/js/owl.carousel.min.js', array(), '1.0', true);
        wp_enqueue_script('popper', get_theme_file_uri().'/assets/js/popper.min.js', array(), '1.0', true);
        wp_enqueue_script('portfolio', get_theme_file_uri().'/assets/js/portfolio.js', array(), '1.0', true);
        wp_enqueue_script('main', get_theme_file_uri().'/assets/js/main.js', array(), '1.0', true);
    }
    add_action('wp_enqueue_scripts','meal_assets');

