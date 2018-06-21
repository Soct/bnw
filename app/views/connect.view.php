<?php
/**
 * Created by PhpStorm.
 * User: Marceau
 * Date: 21/06/2018
 * Time: 18:57
 */

include_once 'partials/head.php'; ?>
<div class="container">
    <h1>Connexion</h1>

    <form action="/validate" method="POST">
        <input type="mail" name="mail" required placeholder="Mail "/><br />
        <input type="password" name="pass" required placeholder="Mot de passe"/><br />
        <input type="submit" />
    </form>
</div>
<?php include_once 'partials/footer.php'; ?>
