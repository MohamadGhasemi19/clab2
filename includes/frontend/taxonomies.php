<?php

function register_author_taxonomoy()
{
     $args = array(
         'label'        => __('Author','textdomain', )
         'public'       => true,
         'rewrite'      => true,
         'hierarchical' => false,
     );

     register_taxonomy('author', 'book' , $args);
}

add_action('init','register_author_taxonomoy');