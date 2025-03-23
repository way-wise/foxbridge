<!DOCTYPE html>
<html>
<head>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
</head>
<body>
    <div id="calendar"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            try {
                console.log('Initializing calendar...');
                const calendarEl = document.getElementById('calendar');
                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: [
                        {
                            id: '1',
                            title: 'Sample Event',
                            start: new Date().toISOString(),
                            end: new Date(Date.now() + 3600000).toISOString(),
                        }
                    ],
                    editable: true,
                    selectable: true,
                    selectMirror: true,
                    dayMaxEvents: true
                });
                
                calendar.render();
                console.log('Calendar initialized successfully');
            } catch (error) {
                console.error('Calendar initialization error:', error);
            }
        });
    </script>
</body>
</html>
