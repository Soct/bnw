<?php
/**
 * Created by PhpStorm.
 * User: Marceau
 * Date: 16/06/2018
 * Time: 17:29
 */

 include_once 'partials/head.php'; ?>
<div class="container">
    <h1>Inscription</h1>

    <form action="/new-user" method="POST">
        <input type="text" name="lastname" required placeholder="Nom"/><br />
        <input type="text" name="firstname" required placeholder="Prénom"/><br />
        <input type="mail" name="mail" required placeholder="Mail"/><br />
        <input type="password" name="pass" required placeholder="Mot de passe "/><br />
        <input type="password" name="passVerif" required placeholder="Confirmer mot de passe "/><br />
        <input type="text" name="phone" required placeholder="Téléphone"/><br />
        <input type="text" name="adress" required placeholder="Adresse"/><br />
        <input type="text" name="town" required placeholder="Ville"/><br />
        <input type="text" name="cp" required placeholder="CP"/><br />
        <input type="submit" />
    </form>
</div>
<?php include_once 'partials/footer.php'; ?>
