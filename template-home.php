<?php
/*
Template Name: Home Page
*/
get_header();
?>

<section class=" py-16 w-full">
  <div class="max-w-[1200px] px-4 mx-auto w-full">
    <h2 class="text-3xl sm:text-4xl font-medium mb-10 text-main uppercase font-montserrat">Домики</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-center">
      <?php
      $houses = new WP_Query([
        'category_name' => 'houses',
        'posts_per_page' => 6 // Или -1, если хочешь все
      ]);

      if ($houses->have_posts()) :
        while ($houses->have_posts()) : $houses->the_post(); ?>
          <div class="bg-white rounded shadow-md overflow-hidden flex flex-col">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium', ['class' => 'w-full h-64 object-cover']); ?>
            </a>
            <div class="p-4 flex flex-col flex-grow">
              <h3 class=" text-main text-xl sm:text-3xl font-medium uppercase mb-2 text-"><?php the_title(); ?></h3>
              <div class="text-main text-sm sm:text-2xl font-medium  mt-1 mb-4"><?php the_excerpt(); ?></div>
              <a href="<?php the_permalink(); ?>" class="mt-auto inline-block bg-main text-white px-6 py-3 text-lg lg:text-2xl xl:text-3xl g font-medium  rounded shadow-md hover:bg-[#5a3c1a] transition">
                Подробнее
              </a>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      else : ?>
        <p class="text-gray-500">Нет доступных домиков.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Pravila -->
<section id="pravila" class="mb-16 w-full">
  <div class="max-w-[1200px] px-4 mx-auto w-full">
    <h2 class="text-3xl sm:text-4xl font-medium mb-10 text-main uppercase font-montserrat">Правила проживания</h2>
    <?php
      $page = get_page_by_path('pravila');
      echo apply_filters('the_content', $page->post_content);
    ?>

  </div>

</section>

<!-- Удобства -->
<section id="udobstva" class="mb-16 w-full">
  <div class="max-w-[1200px] mx-auto px-4 w-full">
    <h2 class="text-3xl sm:text-4xl font-medium mb-10 text-main uppercase font-montserrat">Услуги и Удобства</h2>
  <?php
    $page = get_page_by_path('udobstva');
    echo apply_filters('the_content', $page->post_content);
  ?>
  </div>
</section>

<!-- Развлечения -->
<section id="razvlecheniya" class="mb-16 w-full">
  <div class="max-w-[1200px] mx-auto w-full px-4">
    <h2 class="text-3xl sm:text-4xl font-medium mb-10 text-main uppercase font-montserrat">Развлечение и досуг</h2>
      <?php
    $page = get_page_by_path('razvlecheniya');
    echo apply_filters('the_content', $page->post_content);
  ?>
  </div>

</section>

<!-- Отзывы -->
<section id="reviews" class="mb-20 w-full">
  <div class="max-w-[1200px] mx-auto w-full px-4 mb-10">
    <h2 class="text-3xl sm:text-4xl font-medium mb-10 text-main uppercase font-montserrat">Отзывы о нас</h2>
      <?php
    $page = get_page_by_path('reviews');
    echo apply_filters('the_content', $page->post_content);
  ?>

  </div>

</section>


<!-- Contact -->
<section class="w-full" id="booking">
  <div class="max-w-[1200px] mx-auto w-full px-4 mb-10">
    <h2 class="text-2xl sm:text-3xl md:text-4xl font-medium mb-10  text-main text-center uppercase font-montserrat">Забронируйте домик</h2>
    <p class="text-xl sm:text-2xl mt-1 text-main text-center uppercase font-montserrat">Напишите, когда Вы хотите к нам приехать и забронируйте отдых в Агроусадьбе «Жаворонок» </p>
 
  

  </div>
<div class="max-w-[1200px] mx-auto w-full px-4 overflow-hidden">
  <div class="cf7-wrapper w-full max-w-full overflow-x-hidden">
    <?php echo do_shortcode('[contact-form-7 id="13d66cf" title="Контактная форма 1"]'); ?>
  </div>
</div>
</section>
<?php get_footer(); ?>
