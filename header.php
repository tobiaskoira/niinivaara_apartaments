<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
</head>
<body <?php body_class('w-full min-h-screen font-sans bg-[#f5f5f5]'); ?>>

<header class="fixed top-0 left-0 w-full bg-[#4b2a0a] text-white  py-6 z-20 mx-auto ">
  <div class="max-w-[1200px] mx-auto px-4">
    <div class="max-w-[1200px] mx-auto flex justify-between items-center">

      <!-- Лого, если нужно -->
      <div class="text-xl font-bold hidden">Logo</div>

      <!-- Бургер + Контакты -->
      <div class="md:hidden flex justify-between items-center w-full">
        
        <!-- Бургер -->

          <button id="hamburger-menu" aria-label="Открыть меню" class="flex flex-col justify-center items-center gap-1  w-8 h-8">
            <span class="block w-6 h-1 bg-white"></span>
            <span class="block w-6 h-1 bg-white"></span>
            <span class="block w-6 h-1 bg-white"></span>
          </button>

        <!-- Телефон + иконки -->
        <div class="flex  items-center gap-4">
        
          <p class="text-sm whitespace-nowrap">+375 (33) 677-25-82</p>


          <div class="flex gap-4">
              <!-- Viber -->
              <a href="viber://chat?number=375293805790" class=" w-8 h-8 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <path fill="#fff" d="M24,5C21.361,5,13.33,5,8.89,9.054C6.246,11.688,5,15.494,5,21v3c0,5.506,1.246,9.312,3.921,11.976 c1.332,1.215,3.148,2.186,5.368,2.857L15,39.047v5.328C15,45,15.181,45,15.241,45c0.123,0,0.32-0.039,0.694-0.371 c0.09-0.089,0.75-0.803,3.96-4.399l0.324-0.363l0.485,0.031C21.779,39.965,22.888,40,24,40c2.639,0,10.67,0,15.11-4.055 C41.753,33.311,43,29.505,43,24v-3c0-5.506-1.246-9.312-3.921-11.976C34.67,5,26.639,5,24,5z"></path><path fill="#7e57c2" d="M33.451 28.854c-1.111-.936-1.624-1.219-3.158-2.14C29.654 26.331 28.68 26 28.169 26c-.349 0-.767.267-1.023.523C26.49 27.179 26.275 28 25.125 28c-1.125 0-3.09-1.145-4.5-2.625C19.145 23.965 18 22 18 20.875c0-1.15.806-1.38 1.462-2.037C19.718 18.583 20 18.165 20 17.816c0-.511-.331-1.47-.714-2.109-.921-1.535-1.203-2.048-2.14-3.158-.317-.376-.678-.548-1.056-.549-.639-.001-1.478.316-2.046.739-.854.637-1.747 1.504-1.986 2.584-.032.147-.051.295-.057.443-.046 1.125.396 2.267.873 3.234 1.123 2.279 2.609 4.485 4.226 6.455.517.63 1.08 1.216 1.663 1.782.566.582 1.152 1.145 1.782 1.663 1.97 1.617 4.176 3.103 6.455 4.226.958.472 2.086.906 3.2.874.159-.005.318-.023.477-.058 1.08-.238 1.947-1.132 2.584-1.986.423-.568.74-1.406.739-2.046C33.999 29.532 33.827 29.171 33.451 28.854zM34 24c-.552 0-1-.448-1-1v-1c0-4.962-4.038-9-9-9-.552 0-1-.448-1-1s.448-1 1-1c6.065 0 11 4.935 11 11v1C35 23.552 34.552 24 34 24zM27.858 22c-.444 0-.85-.298-.967-.748-.274-1.051-1.094-1.872-2.141-2.142-.535-.139-.856-.684-.718-1.219.138-.534.682-.855 1.219-.718 1.748.453 3.118 1.822 3.575 3.574.139.535-.181 1.08-.715 1.22C28.026 21.989 27.941 22 27.858 22z"></path><path fill="#7e57c2" d="M31,23c-0.552,0-1-0.448-1-1c0-3.188-2.494-5.818-5.678-5.986c-0.552-0.029-0.975-0.5-0.946-1.051 c0.029-0.552,0.508-0.976,1.051-0.946C28.674,14.241,32,17.748,32,22C32,22.552,31.552,23,31,23z"></path><path fill="#7e57c2" d="M24,4C19.5,4,12.488,4.414,8.216,8.316C5.196,11.323,4,15.541,4,21c0,0.452-0.002,0.956,0.002,1.5 C3.998,23.043,4,23.547,4,23.999c0,5.459,1.196,9.677,4.216,12.684c1.626,1.485,3.654,2.462,5.784,3.106v4.586 C14,45.971,15.049,46,15.241,46h0.009c0.494-0.002,0.921-0.244,1.349-0.624c0.161-0.143,2.02-2.215,4.042-4.481 C21.845,40.972,22.989,41,23.999,41c0,0,0,0,0,0s0,0,0,0c4.5,0,11.511-0.415,15.784-4.317c3.019-3.006,4.216-7.225,4.216-12.684 c0-0.452,0.002-0.956-0.002-1.5c0.004-0.544,0.002-1.047,0.002-1.5c0-5.459-1.196-9.677-4.216-12.684C35.511,4.414,28.5,4,24,4z M41,23.651l0,0.348c0,4.906-1.045,8.249-3.286,10.512C33.832,38,26.437,38,23.999,38c-0.742,0-1.946-0.001-3.367-0.1 C20.237,38.344,16,43.083,16,43.083V37.22c-2.104-0.505-4.183-1.333-5.714-2.708C8.045,32.248,7,28.905,7,23.999l0-0.348 c0-0.351-0.001-0.73,0.002-1.173C6.999,22.078,6.999,21.7,7,21.348L7,21c0-4.906,1.045-8.249,3.286-10.512 C14.167,6.999,21.563,6.999,24,6.999c2.437,0,9.832,0,13.713,3.489c2.242,2.263,3.286,5.606,3.286,10.512l0,0.348 c0,0.351,0.001,0.73-0.002,1.173C41,22.922,41,23.3,41,23.651z"></path>
                </svg>
              </a>
              <!-- Telegram -->
              <a href="tg://resolve?domain=WebNet" class=" w-8 h-8 flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                  <path fill="#29b6f6" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"></path><path fill="#fff" d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z"></path><path fill="#b0bec5" d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z"></path><path fill="#cfd8dc" d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z"></path>
                  </svg>        
              </a>
                      <!-- Whatsupp-->
              <a href="https://wa.me/375293805790" class="w-8 h-8 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                </svg>     
              </a>    
          </div>
        </div>
      </div>

 
    </div>
    <!-- Контейнер с меню и языками -->
    <div class="hidden md:flex items-center justify-between w-full">
      <!-- Меню -->
      <nav class="w-full lg:w-auto hidden md:flex">
        <?php
        wp_nav_menu([
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'flex gap-10 justify-center text-lg lg:text-2xl xl:text-3xl leading-[22px] font-sans',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'walker' => new class extends Walker_Nav_Menu {
            function start_lvl(&$output, $depth = 0, $args = null) {
              $indent = str_repeat("\t", $depth);
              $output .= "\n$indent<ul class=\"absolute top-full left-0 bg-white text-base text-main shadow-lg rounded min-w-[250px] py-2 px-0 z-50 hidden group-hover:block\">\n";
            }

            function end_lvl(&$output, $depth = 0, $args = null) {
              $indent = str_repeat("\t", $depth);
              $output .= "$indent</ul>\n";
            }

            function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
              $is_current = in_array('current-menu-item', $item->classes) || in_array('current_page_item', $item->classes);
              $has_children = in_array('menu-item-has-children', $item->classes);
              $li_class = $has_children ? 'group relative' : 'relative';

              $base_classes = 'relative block px-4 py-2 transition duration-200 hover:scale-105  after:absolute after:left-0 after:-bottom-0 after:h-[2px] after:bg-white after:transition-all after:duration-300';
              // Add underline only to top-level items
              if ($depth === 0) {
                $base_classes .= ' after:absolute after:left-0 after:-bottom-0 after:h-[2px] after:bg-white after:transition-all after:duration-300';
                $underline = $is_current ? ' after:w-full' : ' after:w-0 hover:after:w-full';
              } else {
                $underline = ''; // No underline on submenus
              }

              $output .= '<li class="' . $li_class . '">';
              $output .= '<a href="' . esc_url($item->url) . '" class="' . $base_classes . $underline . '">' . esc_html($item->title) . '</a>';
            }

            function end_el(&$output, $item, $depth = 0, $args = null) {
              $output .= "</li>\n";
            }
          }
        ]);
        ?>
      </nav>

      <div class="ml-6 text-lg lg:text-xl xl:text-2xl leading-[22px] font-sans"><?php echo do_shortcode('[gtranslate]'); ?></div>
    </div>
    <!-- Модальное меню (скрыто по умолчанию) -->
    <div id="mobile-menu-modal" class="fixed inset-x-0   bg-[#4b2a0a] bg-opacity-90 z-50 hidden flex-col p-6 overflow-auto">


      <?php
  
        wp_nav_menu([
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'flex flex-col gap-4 text-white text-xl font-semibold',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'walker' => new class extends Walker_Nav_Menu {
            function start_lvl(&$output, $depth = 0, $args = null) {
              $indent = str_repeat("\t", $depth);
              $output .= "\n$indent<ul class=\"absolute left-0 top-full mt-2 bg-white text-base text-main shadow-lg rounded min-w-[250px] py-2 px-0 z-50 hidden group-hover:block\">\n";
            }

            function end_lvl(&$output, $depth = 0, $args = null) {
              $indent = str_repeat("\t", $depth);
              $output .= "$indent</ul>\n";
            }

            function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
              $is_current = in_array('current-menu-item', $item->classes) || in_array('current_page_item', $item->classes);
              $has_children = in_array('menu-item-has-children', $item->classes);
              $li_class = $has_children ? 'group relative' : 'relative';

              $base_classes = 'relative block px-4 py-2 transition duration-200 hover:scale-105  after:absolute after:left-0 after:-bottom-0 after:h-[2px] after:bg-white after:transition-all after:duration-300';
              // Add underline only to top-level items
              if ($depth === 0) {
                $base_classes .= ' after:absolute after:left-0 after:-bottom-0 after:h-[2px] after:bg-white after:transition-all after:duration-300';
                $underline = $is_current ? ' after:w-full' : ' after:w-0 hover:after:w-full';
              } else {
                $underline = ''; // No underline on submenus
              }

              $output .= '<li class="' . $li_class . '">';
              $output .= '<a href="' . esc_url($item->url) . '" class="' . $base_classes . $underline . '">' . esc_html($item->title) . '</a>';
            }

            function end_el(&$output, $item, $depth = 0, $args = null) {
              $output .= "</li>\n";
            }
          }
        ]);
      ?>
      <div class="ml-6 text-lg lg:text-xl xl:text-2xl leading-[22px] font-sans text-center"><?php echo do_shortcode('[gtranslate]'); ?></div>



       

    </div>



   
    <!-- Телефон + кнопка -->
    <!-- <div class="flex items-center gap-6">
      <span class="text-lg whitespace-nowrap">+375 33 613 68 39</span>
      <a href="#booking" class="bg-yellow-400 text-black font-bold py-2 px-6 rounded-full hover:bg-yellow-300 transition">
        Забронировать
      </a>
    </div> -->
  </div>

</header>



<section class="relative bg-cover bg-center text-white w-full pb-32 mt-[50px] sm:mt-[84px]  mb-16 sm:mb-32" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg'); ">
  <div class="max-w-[1200px]  w-full mx-auto px-4 py-20">
    <div class="flex flex-row lg:flex-col mt-1">
      <div class="lg:w-1/2">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">Агроусадьба «Жаворонок»</h1>
        <p class="text-sm sm:text-base md:text-lg font-bold max-w-2xl">
          Агроусадьба «Жаворонок» - отличное место для тихого семейного отдыха вдали от городской суеты, где слышится только пение жаворонков и трели соловьев.
        </p>
        <p class="text-sm sm:text-base md:text-lg  font-bold max-w-2xl">
Агроусадьба находится в Глубокском   районе   Витебской   области, в географическом центре Европы, в месте водораздела Балтийского и Черного морей, в самом конце деревни Хролы. Здесь всегда тихо и уютно, машины проезжают лишь изредка.
      </div>
      <div class="lg:w-1/2">
        <!-- возможен слайдер здесь -->
      </div>
    </div>
  </div>

  <!-- ВСТУПАЮЩИЙ БЛОК -->
  <div class="absolute left-1/2 bottom-[-60px] -translate-x-1/2  z-10">
    <div class="bg-[#c5b898] shadow-md px-4 sm:px-6 py-6 flex flex-col sm:flex-row items-center justify-between gap-4 sm:gap-x-8 w-full mx-auto rounded text-center sm:text-left">

      <span class="text-main text-3xl md:text-5xl font-sans">
        Агроусадьба «Жаворонок»
      </span>
      <a href="<?php echo home_url('/'); ?>#booking" class="bg-main text-white px-6 py-3 text-lg lg:text-2xl xl:text-3xl g font-semibold rounded shadow-md hover:bg-[#5a3c1a] transition">
        Забронировать
      </a>
    </div>
  </div>
</section>




















