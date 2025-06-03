<?php
/*
Template Name: Services Page
*/
get_header();
?>
<div class="
 ">

      <?php
    $page = get_page_by_path('razvlecheniya');
    echo apply_filters('the_content', $page->post_content);
  ?>
</div>


<?php get_footer(); ?>
