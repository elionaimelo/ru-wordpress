<?php 

remove_action('wp_head','wp_generator');

// if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
// function my_jquery_enqueue() {
//    wp_deregister_script('jquery');
//    wp_register_script('jquery', "https://code.jquery.com/jquery-2.2.4.min.js", false, null);
//    wp_enqueue_script('jquery');
// }

// Função para carregamento dos scripts
function carrega_scripts(){
	// Enfileirando Bootstrap

    wp_enqueue_script( 'modenizr',  get_template_directory_uri().  '/assets/js/vendor/modernizr-2.6.2.min.js', array(), null, true);
    wp_enqueue_script( 'all',  get_template_directory_uri().  '/assets/js/all.js', array(), null, true);
    wp_enqueue_script( 'scripts',  get_template_directory_uri().  '/assets/js/scripts.min.js', array(), null, true);

    wp_enqueue_style( 'forum', get_stylesheet_uri() );
	wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/css/all.css', array(), '1', 'all');
	
}
add_action( 'wp_enqueue_scripts', 'carrega_scripts' );


// Adicionando suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));
add_theme_support('html5', array('search-form'));


function custom_logo_setup() {
	$defaults = array(
			'height'      => 60,
			'width'       => 145,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'custom_logo_setup' );


//fim