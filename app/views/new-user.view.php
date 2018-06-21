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
        <label>Nom : </label><input type="text" name="lastname" required /><br />
        <label>Prénom : </label><input type="text" name="firstname" required /><br />
        <label>Mail : </label><input type="mail" name="mail" required /><br />
        <label>Mot de passe : </label><input type="password" name="pass" required /><br />
        <label>Confirmer mot de passe: </label><input type="password" name="passVerif" required /><br />
        <label>Téléphone : </label><input type="text" name="phone" required /><br />
        <label>Adresse : </label><input type="text" name="adress" required /><br />
        <label>Ville : </label><input type="text" name="town" required /><br />
        <label>CP : </label><input type="text" name="cp" required /><br />
        <input type="submit" />
    </form>
</div>
<?php include_once 'partials/footer.php'; ?>
