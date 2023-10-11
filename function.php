<?php

define('EXP_PATH',get_template_directory());
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
}


include EXP_PATH. "/ includes/frontend/functions.php";