<?php

//styles registering
function niinivaara_enqueue_styles() {
    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/css/main.css?v=' . time() . '">';
}
add_action('wp_head', 'niinivaara_enqueue_styles');

//menu registering
function niinivaara_register_menus() {
    register_nav_menus([
        'primary' => 'Primary menu',
    ]);
}
add_action('after_setup_theme', 'niinivaara_register_menus');

//adding hover to menu
function niinivaara_nav_link_classes($atts, $item, $args) {
    if ($args->theme_location === 'primary') {
        $atts['class'] = 'hover:text-[var(--main-color-hover)] transition-colors duration-200';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'niinivaara_nav_link_classes', 10, 3);



//apartments post type registration
function register_apartment_post_type() {
    register_post_type('apartment', [
        'label' => 'Apartments',
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => ['apartment_category'], 
        'rewrite' => ['slug' => 'apartments'],
    ]);
}
add_action('init', 'register_apartment_post_type');

function register_apartment_category() {
    register_taxonomy('apartment_category', 'apartment', [
        'label' => 'Apartment types',
        'hierarchical' => true,
        'public' => true,
        'rewrite' => ['slug' => 'apartment-type'],
    ]);
}
add_action('init', 'register_apartment_category');

//scroll to top function
function my_theme_scripts() {
    // Enqueue the script for scrolling to top functionality
    wp_enqueue_script('scroll-to-top', get_template_directory_uri() . '/assets/js/scrollToTop.js', array(), null, true);
    wp_enqueue_script('hamburger-menu', get_template_directory_uri() . '/assets/js/hamburgerMenu.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

//adding active page styles
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
  static $firstAnchorHighlighted = false;

  if ($args->theme_location === 'primary') {
    // Remove any manual styling
    $classes = array_diff($classes, ['text-blue-600', 'font-bold']);

    // On front page: handle anchor links specially
    if (is_front_page() && isset($item->url) && strpos($item->url, '#') !== false) {
      // Remove WordPress's default active states
      $classes = array_diff($classes, [
        'current-menu-item',
        'current_page_item',
        'current_page_parent',
        'current_page_ancestor',
      ]);

      // Apply active state to first anchor link only
      if (!$firstAnchorHighlighted) {
        $classes[] = 'current-menu-item';
        $classes[] = 'text-blue-600';
        $classes[] = 'font-bold';
        $firstAnchorHighlighted = true;
      }

      return $classes;
    }

    // For all other links (non-anchor) — apply highlight normally
    if (in_array('current-menu-item', $classes)) {
      $classes[] = 'text-blue-600';
      $classes[] = 'font-bold';
    }
  }

  return $classes;
}, 10, 3);


add_shortcode('google_calendar_ical', function () {
    $url = 'https://calendar.google.com/calendar/ical/l1655vdoig80r2k55pb22b5ij8qj6ith%40import.calendar.google.com/public/basic.ics';
    $response = wp_remote_get($url);

    if (is_wp_error($response)) {
        return 'Kalenteria ei voitu ladata.';
    }

    $icalData = wp_remote_retrieve_body($response);
    preg_match_all('/BEGIN:VEVENT(.*?)END:VEVENT/s', $icalData, $matches);

    if (empty($matches[1])) {
        return 'Ei tapahtumia.';
    }

    $busyDates = [];

    foreach ($matches[1] as $event) {
        preg_match('/DTSTART;VALUE=DATE:(\d{8})/', $event, $startMatch);
        preg_match('/DTEND;VALUE=DATE:(\d{8})/', $event, $endMatch);
        preg_match('/SUMMARY:(.*?)\r?\n/', $event, $summaryMatch);

        if (!$startMatch || !$endMatch) continue;

        $start = DateTime::createFromFormat('Ymd', $startMatch[1]);
        $end = DateTime::createFromFormat('Ymd', $endMatch[1]);

        while ($start < $end) {
            $busyDates[] = $start->format('Y-m-d');
            $start->modify('+1 day');
        }
    }

    $busyJson = json_encode($busyDates);

    return <<<HTML
<div id="calendar" class="my-8"></div>
<div id="booking-form" class="hidden mt-4 p-4 bg-gray-100 rounded">
  <h3 class="text-xl font-bold mb-2">Tee varaus: <span id="selected-date"></span></h3>
  <form>
    <input type="text" placeholder="Nimesi" required class="block w-full mb-2 px-4 py-2 rounded border" />
    <input type="email" placeholder="Sähköposti" required class="block w-full mb-2 px-4 py-2 rounded border" />
    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lähetä</button>
  </form>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    const busyDates = $busyJson;

    const today = new Date();
    const events = [];
    for (let i = 0; i < 90; i++) {
        const date = new Date();
        date.setDate(today.getDate() + i);
        const dateStr = date.toISOString().split('T')[0];
        events.push({
            title: busyDates.includes(dateStr) ? 'Varattu' : 'Vapaa',
            start: dateStr,
            allDay: true,
            color: busyDates.includes(dateStr) ? 'red' : 'green',
            extendedProps: {
                isFree: !busyDates.includes(dateStr)
            }
        });
    }

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'fi',
        height: 'auto',
        events: events,
        dateClick: function(info) {
            const event = events.find(e => e.start === info.dateStr);
            if (event && event.extendedProps.isFree) {
                document.getElementById('selected-date').textContent = info.dateStr;
                document.getElementById('booking-form').classList.remove('hidden');
            } else {
                document.getElementById('booking-form').classList.add('hidden');
            }
        }
    });

    calendar.render();
  });
</script>
HTML;
});

add_shortcode('calendar_booking_form', function () {
    $url = 'https://calendar.google.com/calendar/ical/l1655vdoig80r2k55pb22b5ij8qj6ith%40import.calendar.google.com/public/basic.ics';
    $response = wp_remote_get($url);

    if (is_wp_error($response)) {
        return 'Kalenteria ei voitu ladata.';
    }

    $icalData = wp_remote_retrieve_body($response);
    preg_match_all('/BEGIN:VEVENT(.*?)END:VEVENT/s', $icalData, $matches);

    if (empty($matches[1])) {
        return 'Ei tapahtumia.';
    }

    $busyDates = [];

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

    $busyJson = json_encode($busyDates);

    return <<<HTML
<div class="max-w-md mx-auto  text-white rounded-xl p-6 mt-6">
  <!-- <h2 class="text-2xl font-bold text-center mb-4">Varaa huoneistot</h2> -->
  <form method=""id="check-availability" class="space-y-4">
    <div class=" flex items-center justify-center">
      <input type="date" id="arrival" class="w-full px-4 py-2 rounded text-black" required>
      <input type="date" id="departure" class="w-full px-4 py-2 rounded text-black" required>
   
      <select id="adults" class="w-full px-4 py-2 rounded text-black">
        <option value="0">Aikuiset</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">4</option>
      </select>
      <select id="children" class="w-full px-4 py-2 rounded text-black">
        <option value="0">Lapset</option>
        <option value="1">1</option>
        <option value="2">2</option>
      </select>
  
    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded w-full">
      Tarkista saatavuus
    </button>  

    </div>
  </form>

  <div id="availability-result" class="mt-4 hidden">
    <p id="availability-message" class="text-center font-semibold"></p>
    <div id="contact-form-wrapper" class="hidden mt-4">
      " . do_shortcode('[contact-form-7 id="123" title="Booking Form"]') . "
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const busyDates = $busyJson;
  const form = document.getElementById('check-availability');
  const result = document.getElementById('availability-result');
  const message = document.getElementById('availability-message');
  const wrapper = document.getElementById('contact-form-wrapper');

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const arrival = document.getElementById('arrival').value;
    const departure = document.getElementById('departure').value;
    if (!arrival || !departure) return;

    let start = new Date(arrival);
    let end = new Date(departure);
    let isAvailable = true;

    while (start < end) {
      const check = start.toISOString().split('T')[0];
      if (busyDates.includes(check)) {
        isAvailable = false;
        break;
      }
      start.setDate(start.getDate() + 1);
    }

    result.classList.remove('hidden');
    if (isAvailable) {
      message.textContent = 'Huoneisto on saatavilla!';
      wrapper.classList.remove('hidden');
    } else {
      message.textContent = 'Valitsemillasi päivillä ei ole vapaita huoneita.';
      wrapper.classList.add('hidden');
    }
  });
});
</script>
HTML;
});


add_theme_support('post-thumbnails');

//calendar
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('fullcalendar-css', 'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css');
    wp_enqueue_script('fullcalendar-js', 'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js', [], null, true);
});



add_action('rest_api_init', function () {
    register_rest_route('calendar/v1', '/google', [
        'methods'  => 'GET',
        'callback' => function () {
            $ical_url = 'https://calendar.google.com/calendar/ical/l1655vdoig80r2k55pb22b5ij8qj6ith%40import.calendar.google.com/public/basic.ics';
            $response = wp_remote_get($ical_url);
            if (is_wp_error($response)) {
                return new WP_Error('calendar_fetch_error', 'Failed to fetch calendar.', ['status' => 500]);
            }
            return new WP_REST_Response(wp_remote_retrieve_body($response), 200, ['Content-Type' => 'text/calendar']);
        },
        'permission_callback' => '__return_true'
    ]);
});


?>


