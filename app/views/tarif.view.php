<?php include_once 'partials/head.php'; ?>
<?php if(empty($_SESSION['utilisateur'])) {
    header('Location: connect-user');
} ?>
<br><br><br><br><br>

<h1>Tarifs</h1>
<table style="color:white; border : 2px solid black; margin: auto">

<?php

foreach ($tarifs as $tarif) : ?>
    <tr>
       <td style="padding: 20px;border : 2px solid black;"><?= $tarif->getNom()?></td>
       <td style="padding: 20px;border : 2px solid black;"><?= $tarif->getPrix()."€"?></td>
    </tr>

<?php
endforeach;
?>

</table>
<br><br><br>

<?php include_once 'partials/footer.php'; ?>
