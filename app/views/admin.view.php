<?php include_once 'partials/head.php'; ?>
<?php
if(empty($_SESSION['utilisateur'])) {
    header('Location: connect-user');
}
if(($_SESSION['utilisateur'])->getType() == 0) {
    header('Location: index');
}


?>
<br><br><br><br><br><br>
<h1>Admin Panel</h1>

<div id='calendar' style="color:white;; margin : 128px;"></div>

<script>

    $(function() {

        function formatDate(date) {
            var d = new Date(date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();

            if (month.length < 2) month = '0' + month;
            if (day.length < 2) day = '0' + day;

            return [year, month, day].join('-');
        }

        // page is now ready, initialize the calendar...
        var $calendar = $('#calendar');

        $('#calendar').fullCalendar({
            dayClick:  function(date, jsEvent, view) {
                var temp = new Date()
                if(date.format() >= formatDate(temp) ) {
                    $('#datePick').val(date.format());
                }
            },
            events: [
                <?php
                foreach ($rdvs as $rdv):
                ?>
                {
                    title  : "<?= $rdv->getNom() ?>",
                    start  : "<?= $rdv->getDate() ?>",
                },
                <?php
                endforeach;
                ?>
                {
                    title  : "",
                    start  : "",
                }
            ]


        })
        /*
         dayClick:  function(date, jsEvent, view) {
                var temp = new Date()
                if(date.format() >= formatDate(temp) ) {
                    $('#datePick').val(date.format());
                }
            }
         */

    });
</script>

<?php include_once 'partials/footer.php'; ?>
