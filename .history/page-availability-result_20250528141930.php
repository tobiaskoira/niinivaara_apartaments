<?php
/*
Template Name: Availability Result
*/
get_header();

<h1>hello</h1>

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
    echo '<h2 class="text-2xl font-bold text-green-600">Huoneisto on saatavilla!</h2>';
    echo do_shortcode('[contact-form-7 id="123" title="Booking Form"]');
} else {
    echo '<h2 class="text-2xl font-bold text-red-600">Valitsemillasi päivillä ei ole vapaita huoneita.</h2>';
    echo '<p>Tarkista vapaat päivät kalenterista:</p>';
    echo do_shortcode('[google_calendar_ical]');
}
echo '</div>';

get_footer();
?>
