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
        return 'Failed to fetch calendar.';
    }

    $icalData = wp_remote_retrieve_body($response);

    // Extract VEVENT blocks
    preg_match_all('/BEGIN:VEVENT(.*?)END:VEVENT/s', $icalData, $matches);

    if (empty($matches[1])) {
        return 'No events found.';
    }

    $rows = '';

    foreach ($matches[1] as $event) {
        preg_match('/DTSTART;VALUE=DATE:(\d{8})/', $event, $startMatch);
        preg_match('/DTEND;VALUE=DATE:(\d{8})/', $event, $endMatch);
        preg_match('/SUMMARY:(.*?)\r?\n/', $event, $summaryMatch);

        if (!$startMatch || !$endMatch) continue;

        $startDate = DateTime::createFromFormat('Ymd', $startMatch[1])->format('d M Y');
        $endDateRaw = DateTime::createFromFormat('Ymd', $endMatch[1]);
        $endDate = $endDateRaw->modify('-1 day')->format('d M Y'); // Because DTEND is exclusive

        $nights = (int) $endDateRaw->diff(DateTime::createFromFormat('Ymd', $startMatch[1]))->format('%a');
        $summary = isset($summaryMatch[1]) ? esc_html(trim($summaryMatch[1])) : 'Unavailable';

        $rows .= "
            <tr class='border-t'>
                <td class='px-4 py-2'>{$startDate}</td>
                <td class='px-4 py-2'>{$endDate}</td>
                <td class='px-4 py-2'>{$nights}</td>
                <td class='px-4 py-2'>{$summary}</td>
            </tr>";
    }

    return <<<HTML
<div class="overflow-x-auto mt-8 rounded-lg shadow-md">
  <table class="min-w-full bg-white border border-gray-300 text-left text-sm">
    <thead class="bg-gray-800 text-white uppercase">
      <tr>
        <th class="px-4 py-2">From</th>
        <th class="px-4 py-2">To (last night)</th>
        <th class="px-4 py-2">Nights</th>
        <th class="px-4 py-2">Note</th>
      </tr>
    </thead>
    <tbody class="text-gray-700">
      {$rows}
    </tbody>
  </table>
</div>
HTML;
});


add_theme_support('post-thumbnails');

//calendar
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('fullcalendar-css', 'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css');

    wp_enqueue_script('ical-js', 'https://cdn.jsdelivr.net/npm/ical.js@1.4.0/build/ical.min.js', [], null, true);
    wp_enqueue_script('fullcalendar-js', 'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js', [], null, true);

    // Your custom calendar script
    wp_enqueue_script('calendar-frontend', get_template_directory_uri() . '/assets/js/calendar.js', ['ical-js', 'fullcalendar-js'], null, true);
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


