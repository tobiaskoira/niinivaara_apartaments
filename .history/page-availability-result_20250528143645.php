<?php
/*
Template Name: Availability Result
*/
get_header();

get_header();
?>

</header>
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
