<?php include_once 'partials/head.php'; ?>

<h1>Mes Animaux</h1>
<div>

</div>
<a href="/new-animal" style="color : white">CRÉER</a>


<div class="row">
<?php foreach ($animals as $animal) : ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3><?= $animal->getNom() ?></h3>
                    <p><?= $animal->getPoids() .' Kg - '. $animal->getRace()  ?></p>
                    <p><a href="#" class="btn btn-primary" role="button">Prendre un RDV</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
<?php endforeach; ?>
</div>

<?php include_once 'partials/footer.php'; ?>
