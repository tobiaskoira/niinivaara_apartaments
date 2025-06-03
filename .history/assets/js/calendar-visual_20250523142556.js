add_action('rest_api_init', function () {
    register_rest_route('calendar/v1', '/google', [
        'methods' => 'GET',
        'callback' => function () {
            $ical_url = 'https://calendar.google.com/calendar/ical/l1655vdoig80r2k55pb22b5ij8qj6ith%40import.calendar.google.com/public/basic.ics';
            $response = wp_remote_get($ical_url);
            if (is_wp_error($response)) return new WP_Error('fail', 'Cannot load .ics');
            $body = wp_remote_retrieve_body($response);
            if (stripos($body, 'BEGIN:VCALENDAR') === false) return new WP_Error('invalid', 'Not iCal format');
            return new WP_REST_Response($body, 200, ['Content-Type' => 'text/calendar']);
        },
        'permission_callback' => '__return_true'
    ]);
});
