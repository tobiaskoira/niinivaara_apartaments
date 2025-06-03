<?php
/*
Template Name: Default Page
*/
get_header();
?>

<div class="container mx-auto p-6">
  <!-- Page Title -->
  <h1 class="text-4xl font-bold text-center"><?php the_title(); ?></h1>

  <!-- Page Content -->
  <div class="content mt-4">
    <?php
    // The Loop: Display page content
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_content();  // Display page content
      endwhile;
    endif;
    ?>
  </div>
</div>
        <?php
        echo do_shortcode('[envira-gallery id="49"]');
        echo do_shortcode('[google_calendar_ical]');       
        ?>

<div id="calendar" class="my-8"></div>
 
<?php get_footer(); ?>
