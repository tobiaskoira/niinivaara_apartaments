<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<!-- Contact -->
<section id="contact" class="mb-10">
    <h1 class="font-medium text-center text-4xl mt-1  mb-10 text-main uppercase font-montserrat"><?php the_title(); ?></h1>
  <div class="max-w-[1200px] mx-auto px-4  text-2xl mt-1 text-main uppercase font-montserrat">    
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    }
    ?>

</section>

  </div>    
    <div class="max-w-[1200px] mx-auto px-4 mb-10 mt-1 " id="booking">  
        <h2 class="text-4xl font-medium   text-main text-center uppercase font-montserrat">Забронируйте домик</h2>
        <p class="text-2xl mt-1 text-main text-center uppercase font-montserrat">Напишите, когда Вы хотите к нам приехать и забронируйте отдых в Агроусадьбе «Жаворонок» </p>
    </div>
  <div class="max-w-[1200px] mx-auto px-4 mb-10">
<?php echo do_shortcode('[contact-form-7 id="13d66cf" title="Контактная форма 1"]'); ?>
  </div>


<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac3f6cc20939ef897c9a1ce3a6e4c27184220782eec50ad182a3be6c5048055cb&amp;source=constructor" width="100%" height="600" frameborder="0"></iframe>

<!-- Contact -->

<?php get_footer(); ?>
