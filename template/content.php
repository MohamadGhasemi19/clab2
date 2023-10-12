  <!-- Main Content-->
 <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-7">
             <?php if (have_posts()) : ?> 
                <?php while (have_posts()) : the_post(); ?>
                  <div class="post-preview">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title">
                        <?php the_title(); ?>
                        </h2>
                        <h3 class="post-subtitle">
                        </h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">
                         Start Bootstrap
                     </a>
                       <?php the_date(); ?>
                    </p>
                </div>
                <hr class="my-4" />
                <?php endwhile; ?>   
             <?php endif; ?>
       <!-- Pager-->
       <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
          </div>
      </div>
  </div>  
  
<div class="d-flex jQuery-content-end mb-4">

<?php the_date(); ?>


