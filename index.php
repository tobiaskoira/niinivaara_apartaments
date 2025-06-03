<?php get_header(); ?>

<!-- О нас -->
<section id="o-nas">
  <?php
    $page = get_page_by_path('o-nas');
    echo apply_filters('the_content', $page->post_content);
  ?>
</section>

<!-- Удобства -->
<section id="udobstva">
  <?php
    $page = get_page_by_path('udobstva');
    echo apply_filters('the_content', $page->post_content);
  ?>
</section>

<!-- Развлечения -->
<section id="razvlecheniya">
  <?php
    $page = get_page_by_path('razvlecheniya');
    echo apply_filters('the_content', $page->post_content);
  ?>
</section>

<?php get_footer(); ?>