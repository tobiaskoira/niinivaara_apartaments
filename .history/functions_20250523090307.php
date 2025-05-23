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

//adding active page styles
function niinivaara_menu_item_classes($classes, $item, $args) {
    if ($args->theme_location === 'primary' && in_array('current-menu-item', $classes)) {
        $classes[] = 'text-blue-600 font-bold';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'niinivaara_menu_item_classes', 10, 3);

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

//funtion to fetch availible dates via google calendar
function iCal_booking_calendar_shortcode() {
    ob_start();
    ?>
    <div id="calendar"></div>

    <div id="contactForm" style="display:none; margin-top:20px;">
        <h3>Форма бронирования на <span id="selectedDate"></span></h3>
        <form>
            <input type="text" placeholder="Ваше имя" required><br>
            <input type="email" placeholder="Email" required><br>
            <button type="submit">Отправить</button>
        </form>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ical.js@1.4.0/build/ical.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendarEl = document.getElementById('calendar');
        const contactForm = document.getElementById('contactForm');
        const selectedDateSpan = document.getElementById('selectedDate');

        const icalUrl = 'https://ical.booking.com/v1/export?t=4711b821-fd3e-4fff-87ea-7ae6ae6ff4c8';

        fetch(icalUrl)
            .then(response => response.text())
            .then(data => {
                const jcalData = ICAL.parse(data);
                const comp = new ICAL.Component(jcalData);
                const events = comp.getAllSubcomponents('vevent');

                const busyDates = new Set();

                events.forEach(event => {
                    const vevent = new ICAL.Event(event);
                    const start = vevent.startDate.toJSDate();
                    const end = vevent.endDate.toJSDate();
                    let date = new Date(start);
                    while (date < end) {
                        busyDates.add(date.toISOString().split('T')[0]);
                        date.setDate(date.getDate() + 1);
                    }
                });

                const today = new Date();
                const eventsForCalendar = [];
                for (let i = 0; i < 60; i++) {
                    const date = new Date(today);
                    date.setDate(today.getDate() + i);
                    const dateStr = date.toISOString().split('T')[0];

                    eventsForCalendar.push({
                        title: busyDates.has(dateStr) ? 'Занято' : 'Свободно',
                        start: dateStr,
                        allDay: true,
                        color: busyDates.has(dateStr) ? 'red' : 'green',
                        extendedProps: {
                            isFree: !busyDates.has(dateStr)
                        }
                    });
                }

                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    events: eventsForCalendar,
                    dateClick: function (info) {
                        const event = eventsForCalendar.find(e => e.start === info.dateStr);
                        if (event?.extendedProps?.isFree) {
                            contactForm.style.display = 'block';
                            selectedDateSpan.textContent = info.dateStr;
                        } else {
                            contactForm.style.display = 'none';
                        }
                    }
                });

                calendar.render();
            });
    });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('ical_booking_calendar', 'iCal_booking_calendar_shortcode');

?>


