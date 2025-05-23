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

  <div class="mt-8">
    <h2 class="text-2xl font-bold">Apartment Details</h2>
    <p>Category: <?php echo get_the_term_list(get_the_ID(), 'apartment_category', '', ', '); ?></p>
    <p>Published: <?php the_date(); ?></p>
  </div>

  <!-- Display Apartment Images (if any) -->
  <div class="mt-4">
    <?php if (has_post_thumbnail()) : ?>
      <div class="apartment-thumbnail">
        <?php the_post_thumbnail('large'); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
