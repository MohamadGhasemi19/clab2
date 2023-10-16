<?php get_header(); ?>
<?php get_template_part('template/top-navigation'); ?>
<?php get_template_part('template/top-header'); ?>
<?php 
if (comments_open() get_comments_number()) :
     comments_template();
endif;
?>
<?php get_footer(); ?>

