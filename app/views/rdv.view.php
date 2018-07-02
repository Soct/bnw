<?php include_once 'partials/head.php'; ?>
<?php if(empty($_SESSION['utilisateur'])) {
    header('Location: connect-user');
} ?>
<h1>Mes RDV</h1>

<div id='calendar'></div>

<script>

    $(function() {

        // page is now ready, initialize the calendar...
        var $calendar = $('#calendar');

        $calendar.fullCalendar({
            editable: true,
            aspectRatio: 1.5,
            scrollTime: '09:00',
            locale: 'fr',
            now: '2017-12-01T00:00:00',
            isRTL: true,
            groupByResource: true,
            dayClick:  function(date, jsEvent, view) {
                alert('cliquer sur'+ date.format());
            }
        });



    });
</script>

<?php include_once 'partials/footer.php'; ?>
