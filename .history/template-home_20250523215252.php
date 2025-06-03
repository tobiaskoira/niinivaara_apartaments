<?php
/*
Template Name: Home Page
*/
get_header();
?>
<section class="relative z-10 -mt-56">
   <div class="">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="">
        <path fill="#392222ff" fill-opacity="1" d="M0,224L120,202.7C240,181,480,139,720,133.3C960,128,1200,160,1320,176L1440,192L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>
</div>



  

    <div class="bg-black-600 text-[var(--main-color)] p-8 rounded-xl text-center gap-4 md:w-3/4 mx-auto" id="aboutus">

    
    <h1 class="text-3xl font-bold">Tervetuloa majoitumaan Niinivaran Apartments!</h1>
        <p class="mt-4">Niinivaara apartment saunallinen ja ilmastoitu majoitus sijaitsee Joensuussa. Käytettävissä on sauna. Hiljattain kunnostetussa majoituspaikassa on yksityinen pysäköintialue. Käytettävissä on sauna, ja aivan vieressä on lähikauppa. Lähin lentoasema on 11 km:n päässä sijaitseva Joensuun lentoasema.</p>


    </div>

    <?php
    wp_reset_query();

    $apartments = new WP_Query([
        'post_type' => 'apartment',
        'posts_per_page' => -1,
    ]);

    if ($apartments->have_posts()):
        echo '<div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:w-3/4">            '; 
        
        while ($apartments->have_posts()): $apartments->the_post();
            ?>
            <div class="bg-white rounded-xl shadow-md overflow-hidden my-8"> <!-- Ограничиваем ширину для каждой карточки -->
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
                            <?php echo get_the_term_list(get_the_ID(), 'apartment_category', '', ', '); ?>
                        </div>
                        <p class="block mt-1 text-lg leading-tight font-medium text-[var(--main-color)]"><?php the_title(); ?></p>
                        <p class="mt-2 text-gray-500"><?php the_excerpt(); ?></p>
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
    <div class="mb-1 md:mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#392222ff" fill-opacity="1" d="M0,192L120,213.3C240,235,480,277,720,245.3C960,213,1200,107,1320,53.3L1440,0L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg> 
    </div>
</section>
<section>

    <div class=" bg-[var(--background-light)] rounded p-6 mb-1 md:mb-4">
        <?php
        echo do_shortcode('[envira-gallery id="49"]');
        echo do_shortcode('[google_calendar_ical]');       
        ?>

        <div id="calendar" class="my-8"></div>
 

    </div>

    <div class="md:w-3/4 mx-auto">

    <?php echo do_shortcode('[wpgmza id="1"]') ?>

    </div>

</section>



<?php get_footer(); ?>
