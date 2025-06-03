<?php
/*
Template Name: Home Page
*/
get_header();
?>
<section class="relative z-10">
    <!-- <div class="absolute top-0 left-0 w-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="">
            <path fill="#392222ff" fill-opacity="1" d="M0,224L120,202.7C240,181,480,139,720,133.3C960,128,1200,160,1320,176L1440,192L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
        </svg>
    </div> -->



  

    <div class="bg--[var(--main-color)] text-[var(--main-color)] p-8 rounded-xl text-center gap-4 md:w-3/4 mx-auto " id="aboutus">
<div class=""></div>
    
    <h1 class="text-4xl font-bold">Tervetuloa majoitumaan Niinivaran Apartments!</h1>
    <p class="mt-4 text-2xl">Niinivaara apartment saunallinen ja ilmastoitu majoitus sijaitsee Joensuussa. Käytettävissä on sauna. Hiljattain kunnostetussa majoituspaikassa on yksityinen pysäköintialue. Käytettävissä on sauna, ja aivan vieressä on lähikauppa. Lähin lentoasema on 11 km:n päässä sijaitseva Joensuun lentoasema.</p>

    <?php
        wp_reset_query();

        $apartments = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => -1,
            'category_name'=> 'Apartments',
        ]);

        if ($apartments->have_posts()):
            echo '<div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-10 mt-10 ">            '; 
            
            while ($apartments->have_posts()): $apartments->the_post();
                ?>
                <div class="bg-white rounded-xl shadow-md overflow-hidden my-8"> 
                    <div class="md:flex md:justify-center">
                        <div class="md:shrink-0">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium', ['class' => 'h-48 w-full object-cover md:h-full md:w-48']);
                            } else {
                                echo '<img class="h-48 w-full object-cover md:h-full md:w-48" src="' . get_template_directory_uri() . '/assets/images/header.jpg" alt="Default">';
                            }
                            ?>
                        </div>
                        <div class="p-6">
                            <div class="uppercase tracking-wide text-sm text-[var(--main-color)] font-semibold">
                                <?php echo the_category(', '); ?>
                            </div>
                            <p class="block mt-1 text-2xl leading-tight font-medium text-[var(--main-color)]"><?php the_title(); ?></p>
                            <p class="mt-2 text-2xl text-gray-500"><?php the_excerpt(); ?></p>
                            <div class="mt-4 flex justify-between items-center">
                                <a href="<?php the_permalink(); ?>" class="bg-[var(--button-background)] text-[var(--main-color)] px-4 py-2 rounded hover:bg-[var(--button-background-hover)] transition">Lue lisää</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            echo '</div>';
            wp_reset_postdata();
        endif;
    ?>
    </div>
</header>

    <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#392222ff" fill-opacity="1" d="M0,192L120,213.3C240,235,480,277,720,245.3C960,213,1200,107,1320,53.3L1440,0L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg> 
            
        <!-- Заголовок НА волне -->
  <div class="absolute bottom-10 sm:bottom-0 left-1/2 transform -translate-x-1/2 z-20 text-center">
    <h1 class="text-4xl 2xl:text-5xl font-bold text-[var(--main-light)]">
      Meidän huoneet
    </h1>
  </div>
    </div>
</section>

<section class="relative overflow-hidden -mt-1">
    <div class="absolute top-0 left-0 w-full z-10 ">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#392222ff" fill-opacity="1" d="M0,256L120,218.7C240,181,480,107,720,80C960,53,1200,75,1320,85.3L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
    
    </div>


    <div class=" relative bg-[var(--background-light)] px-6 pt-20">    

        <?php
        echo do_shortcode('[envira-gallery id="49"]');
       
        ?>

 

    </div>


</section>

    <div class="-mt-6 -mb-4 sm:-mb-12">
        <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#C49367ff" fill-opacity="1" d="M0,128L80,112C160,96,320,64,480,69.3C640,75,800,117,960,128C1120,139,1280,117,1360,106.7L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
    </div>
    <div class="px-4 -mt-12">
        <h1 class="text-4xl 2xl:text-5xl font-bold text-center text-[var(--main-color)] mb-6">Olemme täällä</h1>


        <?php echo do_shortcode('[wpgmza id="1"]') ?>

    </div>


<?php get_footer(); ?>
