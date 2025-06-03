<?php get_header(); ?>

<div class="container max-w-[1200px] px-4 mx-auto">
  <h1 class="text-4xl font-bold text-main"><?php the_title(); ?></h1>

  <div class="mt-4 ">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    endif;
    ?>
  </div>

</div>    

<?php get_footer(); ?>
