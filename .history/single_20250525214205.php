<?php get_header(); ?>

<div class="container mx-auto p-6">
  <h1 class="text-4xl font-bold"><?php the_title(); ?></h1>

  <div class="mt-4">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    endif;
    ?>
  </div>

        <?php

        echo do_shortcode('[google_calendar_ical]');       
        ?>
<div id="calendar" class="my-8"></div>
<?php get_footer(); ?>
