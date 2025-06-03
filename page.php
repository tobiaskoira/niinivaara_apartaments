<?php
/*
Template Name: Default Page
*/
get_header();
?>

<div class="container mx-auto p-6">
  <!-- Page Title -->
  <h1 class="font-medium text-center text-4xl mt-1 text-main uppercase font-montserrat"><?php the_title(); ?></h1>

  <!-- Page Content -->
  <div class="max-w-[1200px] mx-auto px-4 mb-10 text-2xl mt-1 text-main uppercase font-montserrat">    
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    }
    ?>
</div>
      
 
<?php get_footer(); ?>
