document.addEventListener("DOMContentLoaded", function () {
  fetch("/wp-json/calendar/v1/google")
    .then((response) => response.text())
    .then((icalData) => {
      const jcalData = ICAL.parse(icalData);
      const comp = new ICAL.Component(jcalData);
      const events = comp.getAllSubcomponents("vevent");

      const calendarEvents = events.map((ev) => {
        const e = new ICAL.Event(ev);
        return {
          title: e.summary || "Booked",
          start: e.startDate.toJSDate(),
          end: e.endDate.toJSDate(),
          allDay: true,
          color: "red", // Mark as unavailable
        };
      });

      const calendarEl = document.getElementById("calendar");
      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        events: calendarEvents,
        height: "auto",
      });

      calendar.render();
    })
    .catch((error) => {
      console.error("Failed to load calendar:", error);
    });
});
