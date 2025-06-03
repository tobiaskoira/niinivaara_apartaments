<?php get_header(); ?>

<div class="max-w-[1200px] mx-auto px-4 py-10">
  <h2 class="text-4xl font-semibold mb-10 text-[#3f260a]">Домики</h2>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <div class="bg-white rounded shadow-md overflow-hidden flex flex-col">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium', ['class' => 'w-full h-64 object-cover']); ?>
          </a>
          <div class="p-4 flex flex-col flex-grow">
            <h3 class="text-xl font-semibold mb-2 text-[#3f260a]"><?php the_title(); ?></h3>
            <div class="text-[#3f260a] text-sm mb-4"><?php the_excerpt(); ?></div>
            <a href="<?php the_permalink(); ?>" class="mt-auto inline-block bg-[#3f260a] text-white px-4 py-2 rounded hover:bg-[#5a3c1a] transition">
              Подробнее
            </a>
          </div>
        </div>
      <?php endwhile;
    else : ?>
      <p>Нет доступных домиков.</p>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
