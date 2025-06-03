<?php
/*
Template Name: Home Page
*/
get_header();
?>

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
    echo '<div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:w-3/4">'; 
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

<div class="md:w-3/4 mx-auto bg-[var(--background-light)] rounded p-6 mb-1 md:mb-4">
    <?php
echo do_shortcode('[envira-gallery id="49"]');
echo do_shortcode('')       
?>

<div id="calendar"></div>
<!-- <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Europe%2FHelsinki&showPrint=0&showTz=0&showTabs=0&showTitle=0&title=Varauskalenteri&src=bDE2NTV2ZG9pZzgwcjJrNTVwYjIyYjVpajhxajZpdGhAaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23E4C441" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe> -->

</div>



<?php get_footer(); ?>
