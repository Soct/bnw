<nav id="navigation">
    <a href="/" class="logo">Black'n White<span>+<span></a>
    <ul class="links">
        <li><a href="/">Accueil</a></li>
        <li class="dropdown"><a href="#" class="trigger-drop">Espace utilisateur<i class="arrow"></i></a>
            <ul class="drop">
            <?php if(empty($_SESSION['utilisateur'])) : ?>

                <li><a href="/new-user">Inscription</a></li>
                <li><a href="/connect-user">Connexion</a></li>


            <?php else : ?>
                <li><a href="/rdv">Mes RDV</a></li>
                <li><a href="/animal">Mes Animaux</a></li>
                <li><a href="/tarif">Tarifs</a></li>
                <?php if(($_SESSION['utilisateur'])->getType() == 1) : ?>
                    <li><a href="/admin">Admin</a></li>
                <?php endif;?>
                <li><a href="/deconnect-user">Deconnexion</a></li>
            <?php endif; ?>
            </ul>
        </li>
        <li class="dropdown"><a href="#" class="trigger-drop">Contactez-nous<i class="arrow"></i></a>
            <ul class="drop">
                <li><a href="/contact">Email</a></li>
                <li><a href="tel:0385123456">Téléphone</a></li>
            </ul>
        </li>
    </ul>
</nav>