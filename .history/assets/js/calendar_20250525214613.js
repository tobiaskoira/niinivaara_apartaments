document.addEventListener("DOMContentLoaded", function () {
  fetch("/wp-json/calendar/v1/google")
    .then((response) => response.text())
    .then((data) => {
      const jcalData = ICAL.parse(data);
      const comp = new ICAL.Component(jcalData);
      const events = comp.getAllSubcomponents("vevent");

      const fullcalendarEvents = events.map((event) => {
        const vevent = new ICAL.Event(event);
        return {
          title: vevent.summary,
          start: vevent.startDate.toJSDate(),
          end: vevent.endDate.toJSDate(),
          allDay: true,
        };
      });

      const calendarEl = document.getElementById("calendar");
      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        events: fullcalendarEvents,
        height: "auto",
      });

      calendar.render();
    })
    .catch((error) => {
      console.error("Failed to load calendar:", error);
    });
});
