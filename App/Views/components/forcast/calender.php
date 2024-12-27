
<div class="row g-3 row-deck">
          <div class="col-12">
            <div class="card">
              <div class="card-body" id='my_calendar'></div>
              <!-- Plugin Js -->
              <script src="/Public/assets/js/bundle/fullcalendar.bundle.js"></script>
              <!-- Jquery Page Js -->
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                  var calendarEl = document.getElementById('my_calendar');
                  var calendar = new FullCalendar.Calendar(calendarEl, {
                    timeZone: 'UTC',
                    initialView: 'dayGridMonth',
                    events: 'https://fullcalendar.io/demo-events.json',
                    editable: true,
                    selectable: true
                  });
                  calendar.render();
                });
              </script>
            </div>
          </div>
        </div> <!-- .row end -->