<?php get_header(); ?>
<?php get_template_part('template/top-navigation'); ?>
    <?php if(have_posts()): ?>
    <?php while(have_posts()) : the_post() ?>
         <h1><?php the_title(); ?></h1>
              <div class="article">
              <?php the_content(); ?>      
         </div>
    <?php endwhile; ?>
    <?php endif; ?>   
<?php get_footer(); ?>


<?php if(have_posts()): ?>
<?php while(have_posts()): the_post() ?>
<?php get_template_part('template/top-navigation'); ?>

<?php endif; ?>
<?php endwhile; ?>




