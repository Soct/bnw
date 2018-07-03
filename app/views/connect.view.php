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

    <form action="/connect-user" method="POST">
        <?php if(!empty($tab)) : echo "<p style='color :red'>Mauvais mot de passe ou adresse mail </p><br>"; endif;?>
        <input type="mail" name="mail" required placeholder="Mail " value="<?php echo $tab['mail'] = empty($tab['mail'] ) ? '':  $tab['mail'] ?>"/><br />
        <input type="password" name="pass" required placeholder="Mot de passe"/><br />
        <input type="submit" />
    </form>

    <br><br><img src="IMG/LogoBnW.jpg" style="max-width: 200px"/><br><br>
</div>


<?php include_once 'partials/footer.php'; ?>
