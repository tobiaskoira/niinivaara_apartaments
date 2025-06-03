<?php 
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
<div class="max-w-md mx-auto bg-[var(--background-dark)] text-white rounded-xl p-6 mt-6">
  <h2 class="text-2xl font-bold text-center mb-4">Varaa huoneistot</h2>
  <form id="check-availability" class="space-y-4">
    <div class="grid grid-cols-2 gap-4">
      <input type="date" id="arrival" class="w-full px-4 py-2 rounded text-black" required>
      <input type="date" id="departure" class="w-full px-4 py-2 rounded text-black" required>
    </div>
    <div class="grid grid-cols-2 gap-4">
      <select id="adults" class="w-full px-4 py-2 rounded text-black">
        <option value="0">Aikuiset</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <select id="children" class="w-full px-4 py-2 rounded text-black">
        <option value="0">Lapset alle 3 vuotta</option>
        <option value="1">1</option>
        <option value="2">2</option>
      </select>
    </div>
    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded w-full">
      Tarkista saatavuus
    </button>
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

