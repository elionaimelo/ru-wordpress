<?php

remove_action('wp_head', 'wp_generator');

// if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
// function my_jquery_enqueue() {
//    wp_deregister_script('jquery');
//    wp_register_script('jquery', "https://code.jquery.com/jquery-2.2.4.min.js", false, null);
//    wp_enqueue_script('jquery');
// }

// Função para carregamento dos scripts
function carrega_scripts()
{
	// Enfileirando Bootstrap

	wp_enqueue_script('modenizr',  get_template_directory_uri() .  '/assets/js/vendor/modernizr-2.6.2.min.js', array(), null, true);
	wp_enqueue_script('all',  get_template_directory_uri() .  '/assets/js/all.js', array(), null, true);
	wp_enqueue_script('scripts',  get_template_directory_uri() .  '/assets/js/scripts.min.js', array(), null, true);
	wp_enqueue_script('mask',  get_template_directory_uri() .  '/assets/js/mask-plugin.js', array(), null, true);
	wp_enqueue_script('pointcom',  get_template_directory_uri() .  '/assets/js/pointcom_mask.js', array(), null, true);

	wp_enqueue_style('forum', get_stylesheet_uri());
	wp_enqueue_style('all', get_template_directory_uri() . '/assets/css/all.css', array(), '1', 'all');
	wp_enqueue_style('newstyle', get_template_directory_uri() . '/assets/css/new-style.css', array(), '1', 'all');
}
add_action('wp_enqueue_scripts', 'carrega_scripts');


// Adicionando suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));
add_theme_support('html5', array('search-form'));
add_theme_support('custom-logo', array(
	'height'      => 35,
	'width'       => 81,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array('site-title', 'site-description'),
));

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'Menu Administrativo' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

//paginação
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
	if ( null === $wp_query ) {
			global $wp_query;
	}
	$add_args = [];

	$pages = paginate_links( array_merge( [
					'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
					'format'       => '?paged=%#%',
					'current'      => max( 1, get_query_var( 'paged' ) ),
					'total'        => $wp_query->max_num_pages,
					'type'         => 'array',
					'show_all'     => false,
					'end_size'     => 3,
					'mid_size'     => 1,
					'prev_next'    => true,
					'prev_text'    => __( 'Próxima' ),
					'next_text'    => __( 'Anterior »' ),
					'add_args'     => $add_args,
					'add_fragment' => ''
			], $params )
	);

	if ( is_array( $pages ) ) {
			$pagination = '<div class="pagination"><ul class="pagination">';
			foreach ( $pages as $page ) {
					$pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
			}
			$pagination .= '</ul></div>';

			if ( $echo ) {
					echo $pagination;
			} else {
					return $pagination;
			}
	}

	return null;
}

//fim