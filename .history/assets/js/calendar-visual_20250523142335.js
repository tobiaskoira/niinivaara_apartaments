document.addEventListener("DOMContentLoaded", function () {
  const calendarEl = document.getElementById("calendar");
  if (!calendarEl) return;

  fetch("/wp-json/calendar/v1/google")
    .then((response) => response.text())
    .then((rawData) => {
      const jcalData = ICAL.parse(rawData);
      const comp = new ICAL.Component(jcalData);
      const vevents = comp.getAllSubcomponents("vevent");

      const busyDates = new Set();

      vevents.forEach((event) => {
        const vevent = new ICAL.Event(event);
        const start = vevent.startDate.toJSDate();
        const end = vevent.endDate.toJSDate();

        let date = new Date(start);
        while (date < end) {
          busyDates.add(date.toISOString().split("T")[0]);
          date.setDate(date.getDate() + 1);
        }
      });

      const today = new Date();
      const fullcalendarEvents = [];

      for (let i = 0; i < 90; i++) {
        const date = new Date(today);
        date.setDate(today.getDate() + i);
        const dateStr = date.toISOString().split("T")[0];

        const isBusy = busyDates.has(dateStr);

        fullcalendarEvents.push({
          title: isBusy ? "CLOSED" : "Available",
          start: dateStr,
          allDay: true,
          color: isBusy ? "red" : "green",
          textColor: "white",
        });
      }

      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        events: fullcalendarEvents,
        height: "auto",
      });

      calendar.render();
    })
    .catch((error) => {
      console.error("❌ Calendar error:", error);
    });
});
