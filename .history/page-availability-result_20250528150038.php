<?php
/*
Template Name: Availability Result
*/
get_header();

get_header();
?>
<section class="relative z-10">
    <!-- <div class="absolute top-0 left-0 w-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="">
            <path fill="#392222ff" fill-opacity="1" d="M0,224L120,202.7C240,181,480,139,720,133.3C960,128,1200,160,1320,176L1440,192L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
        </svg>
    </div> -->



  

    <div class=" text-[var(--main-color)] p-8 rounded-xl text-center gap-4 md:w-3/4 mx-auto " id="aboutus">
        <div class="bg-[var(--background-light-opacity)] rounded p-4"> 
            <h1 class="text-4xl font-bold">Tervetuloa majoitumaan Niinivaran Apartments!</h1>
            <p class="mt-4 text-2xl">Niinivaara apartment saunallinen ja ilmastoitu majoitus sijaitsee Joensuussa. Käytettävissä on sauna. Hiljattain kunnostetussa majoituspaikassa on yksityinen pysäköintialue. Käytettävissä on sauna, ja aivan vieressä on lähikauppa. Lähin lentoasema on 11 km:n päässä sijaitseva Joensuun lentoasema.</p>
    <?php
     $url = 'https://calendar.google.com/calendar/ical/l1655vdoig80r2k55pb22b5ij8qj6ith%40import.calendar.google.com/public/basic.ics';
$response = wp_remote_get($url);
$icalData = wp_remote_retrieve_body($response);

$busyDates = [];
preg_match_all('/BEGIN:VEVENT(.*?)END:VEVENT/s', $icalData, $matches);
foreach ($matches[1] as $event) {
    preg_match('/DTSTART;VALUE=DATE:(\d{8})/', $event, $startMatch);
    preg_match('/DTEND;VALUE=DATE:(\d{8})/', $event, $endMatch);
    if (!$startMatch || !$endMatch) continue;
    $start = DateTime::createFromFormat('Ymd', $startMatch[1]);
    $end = DateTime::createFromFormat('Ymd', $endMatch[1]);
    while ($start < $end) {
        $busyDates[] = $start->format('Y-m-d');
        $start->modify('+1 day');
    }
}

$arrival = $_GET['arrival'] ?? '';
$departure = $_GET['departure'] ?? '';

$isAvailable = true;
if ($arrival && $departure) {
    $start = new DateTime($arrival);
    $end = new DateTime($departure);
    while ($start < $end) {
        if (in_array($start->format('Y-m-d'), $busyDates)) {
            $isAvailable = false;
            break;
        }
        $start->modify('+1 day');
    }
}

echo '<div class="max-w-xl mx-auto p-6 text-center text-black">';
if ($isAvailable) {
    echo '<h2 class="text-2xl font-bold text-[var()]">Huoneisto on saatavilla!</h2>';
    echo do_shortcode('[contact-form-7 id="123" title="Booking Form"]');
} else {
    echo '<h2 class="text-2xl font-bold text-red-600">Valitsemillasi päivillä ei ole vapaita huoneita.</h2>';
    echo '<p>Tarkista vapaat päivät kalenterista:</p>';
    echo do_shortcode('[google_calendar_ical]');
}
echo '</div>';if (have_posts()) :
  while (have_posts()) : the_post();
    the_content(); // even if empty, helps ensure the loop context
  endwhile;
endif;
?>   
    

        <!-- <?php
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
        ?> -->
        </div>  
</div>


    <!-- <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#392222ff" fill-opacity="1" d="M0,192L120,213.3C240,235,480,277,720,245.3C960,213,1200,107,1320,53.3L1440,0L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>  -->
            
        <!-- Заголовок НА волне -->
  <!-- <div class="absolute bottom-10 sm:bottom-0 left-1/2 transform -translate-x-1/2 z-20 text-center">
    <h1 class="text-4xl 2xl:text-5xl font-bold text-[var(--main-light)]">
      Meidän huoneet
    </h1>
  </div>
    </div>
</section>
</header>
<section class="relative overflow-hidden -mt-1">
    <div class="absolute top-0 left-0 w-full z-10 ">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#392222ff" fill-opacity="1" d="M0,256L120,218.7C240,181,480,107,720,80C960,53,1200,75,1320,85.3L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
    
    </div>


    <div class=" relative bg-[var(--background-light)] px-6 pt-20">    

        <?php
        echo do_shortcode('[envira-gallery id="49"]');
       
        ?>

 

    </div> -->


</section>



<?php get_footer(); ?>
