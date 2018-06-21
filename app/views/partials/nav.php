<div class="navigation_up">

    <button id="sized" class="menu">
        <span></span>
    </button>
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content animated zoomIn">
            <div class="modal-header">
                <span class="close">×</span>
            </div>

            <div class="modal-body nav">
                <ul>
                    <li>
                        <a href="/">Accueil</a>
                    </li>
                    <?php if(empty($_SESSION['utilisateur'])) : ?>
                        <li>
                            <a href="/connect-user">Connexion</a>
                        </li>
                        <li>
                            <a href="/new-user">Inscription</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="/connect-user">Mes animaux</a>
                        </li>
                        <li>
                            <a href="/new-user">Mes RDv</a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <p>
                    <strong>Black'n White</strong>
                    <br>14 rue de Belfort &#149; Chalon sur Saône, 71100 &#149; 03 85 12 34 56
                    <br>
                    <b>mail@bnw.fr</b>
                </p>
            </div>
        </div>
    </div>
</div>
