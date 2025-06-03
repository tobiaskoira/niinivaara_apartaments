document.addEventListener("DOMContentLoaded", function () {
  fetch("/wp-json/calendar/v1/google")
    .then((response) => response.text())
    .then((rawData) => {
      const jcalData = ICAL.parse(rawData);
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

      const calendar = new FullCalendar.Calendar(
        document.getElementById("calendar"),
        {
          initialView: "dayGridMonth",
          events: fullcalendarEvents,
          height: "auto",
        },
      );

      calendar.render();
    })
    .catch((error) => {
      console.error("Failed to load calendar:", error);
    });
});
