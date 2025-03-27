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
                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                    },
                    events: [
                        {
                            id: '1',
                            title: 'Team Meeting',
                            start: new Date().toISOString(),
                            end: new Date(Date.now() + 3600000).toISOString(),
                            backgroundColor: '#ff9f89',
                            borderColor: '#ff9f89',
                            category: 'Meeting'
                        },
                        {
                            id: '2',
                            title: 'Project Deadline',
                            start: new Date(Date.now() + 86400000).toISOString(), // Tomorrow
                            backgroundColor: '#ff4242',
                            borderColor: '#ff4242',
                            category: 'Deadline'
                        },
                        {
                            id: '3',
                            title: 'Training Session',
                            start: new Date(Date.now() - 86400000).toISOString(), // Yesterday
                            end: new Date(Date.now() - 82800000).toISOString(),
                            backgroundColor: '#4286f4',
                            borderColor: '#4286f4',
                            category: 'Training'
                        },
                        {
                            id: '4',
                            title: 'Lunch Break',
                            start: new Date(Date.now() + 172800000).toISOString(), // Day after tomorrow
                            backgroundColor: '#2ecc71',
                            borderColor: '#2ecc71',
                            category: 'Break'
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
