<?php

require 'fields/fields.php';

function enqueue_scripts_and_styles() {
    wp_enqueue_style( 'happietaria-2017-style', get_template_directory_uri() . '/static/happietaria-2017.css' );
    wp_enqueue_script('stickyHeader', get_template_directory_uri() . '/static/stickyHeader.js', false, false, true);

}

add_action('wp_enqueue_scripts', 'enqueue_scripts_and_styles');

function footer_widgets_init() {

    register_sidebar([
        'name'          => 'Footer Center',
        'id'            => 'footer_center',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ]);

    register_sidebar([
        'name'          => 'Footer Right',
        'id'            => 'footer_right',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ]);
}

add_action('widgets_init', 'footer_widgets_init');

// Timber Configuration

if ( ! class_exists( 'Timber' ) || ! class_exists( 'acf' ) ) {

    if (!class_exists('Timber')) {
        add_action('admin_notices', function () {
            echo '<div class="error"><p>Timber is not activated. Make sure you activate the plugin in <a href="' . esc_url(admin_url('plugins.php#timber')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
        });

        add_filter('template_include', function ($template) {
            return get_stylesheet_directory() . '/static/no-timber.html';
        });

    }

    if (!class_exists('acf')) {
        add_action('admin_notices', function () {
            echo '<div class="error"><p>Advanced Custom Fields is not activated. Make sure you activate the plugin in <a href="' . esc_url(admin_url('plugins.php#acf')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
        });
    }

    return;
}

Timber::$dirname = array('templates', 'views');

class StarterSite extends TimberSite {

	function __construct() {
		add_theme_support( 'post-formats' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
		add_filter( 'timber_context', array( $this, 'add_to_context' ) );
		add_filter( 'get_twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
		parent::__construct();
	}

	function register_post_types() {
		//this is where you can register custom post types
	}

	function register_taxonomies() {
		//this is where you can register custom taxonomies
	}

	function add_to_context( $context )
    {
        $context['menu'] = new TimberMenu();
        $context['site'] = $this;
        return $context;
    }

	function add_to_twig( $twig ) {
		/* this is where you can add your own functions to twig */
		$twig->addExtension( new Twig_Extension_StringLoader() );
		return $twig;
	}

}

new StarterSite();
