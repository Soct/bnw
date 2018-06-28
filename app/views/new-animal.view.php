<?php
/**
 * Created by PhpStorm.
 * User: Marceau
 * Date: 16/06/2018
 * Time: 17:29
 */

 include_once 'partials/head.php'; ?>
<?php if(empty($_SESSION['utilisateur'])) {
    header('Location: connect-user');
} ?>
<div class="container">
    <h1>Inscription d'un animal</h1>

    <form action="/new-animal" method="POST">
        <input type="text" name="nom" required placeholder="Nom"/><br />
        <input type="text" name="poid" required placeholder="Poid"/><br />
        <input type="text" name="race" required placeholder="Race"/><br />
        <input type="submit" />
    </form>
</div>
<?php include_once 'partials/footer.php'; ?>
