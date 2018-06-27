<?php include_once 'partials/head.php'; ?>

<h1>Mes RDV</h1>

<div id='calendar'></div>

<script>

    $(function() {

        // page is now ready, initialize the calendar...
        var $calendar = $('#calendar');

        $calendar.fullCalendar({
            editable: true,
            aspectRatio: 1.5,
            scrollTime: '00:00',
            defaultView: 'agendaWeek',
            locale: 'fr',
            isRTL: true,
            dayClick:  function(date, jsEvent, view) {
                alert('cliquer sur'+ date.format());
            }
        });

        var locale = $('#calendar').fullCalendar('option', 'locale');

        console.log(locale);

    });
</script>

<?php include_once 'partials/footer.php'; ?>
