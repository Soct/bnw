<?php include_once 'partials/head.php'; ?>
<?php if(empty($_SESSION['utilisateur'])) {
    header('Location: connect-user');
} ?>

<?php

?>
<br><br><br><br><br><br>

<h1>Mes RDV</h1>
<form method="post">
    <input type="text" value="<?php if(!empty($animals)){echo $animals[0]->getNom();}?>">
    <input type="text" name="idanimal" value="<?php if(!empty($animals)){echo $animals[0]->getIdanimal();}?>" hidden>
    <input type="date" name="date" id="datePick">
    <input type="time" name="heure" value="09:00" hidden>
    <input type="submit" value="valider mon RDV">
</form>
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
