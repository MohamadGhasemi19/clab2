<?php

define('EXP_PATH', get_template_directory());
define('EXP_URL', get_template_directory_uri());

add_action('wp_enqueue_scripts', 'experts_add_assets');

function experts_add_assets()
{

   wp_register_style('experts-main-style', EXP_URL . '/assets/css/main.css');
   wp_enqueue_style('experts-main-style'); 
   if (is_single()) {

      wp_register_script('experts-main-script', EXP_URL . '/assets/js/main.js', ['jquery'], false, true);
      wp_enqueue_script('experts-main-script');
   }
}

add_action('after_setup_theme', 'experts_setup');

function experts_setup()
{

   add_theme_support('post-thumbnails');
   add_theme_support('title-tag');
   add_theme_support('post-formats',['gallery', 'video', 'audio']);
   add_filter('show_admin_bar','__return_false'); 

   //register_nav_menu
   register_nav_menu('top-bar', 'menu for theme top bar');
}

function wpdocs_theme_slug_widgets_init() {
	register_sidebar(array(
		'name'          => __( 'Main Sidebar', 'textdomain' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );



include EXP_PATH . "/includes/frontend/functions.php";
include EXP_PATH . "/includes/frontend/post-types.php";
include EXP_PATH . "/includes/frontend/taxonomies.php";
include EXP_PATH . "/includes/wideget.php";


