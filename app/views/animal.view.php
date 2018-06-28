<?php include_once 'partials/head.php'; ?>
<?php if(empty($_SESSION['utilisateur'])) {
    header('Location: connect-user');
} ?>
<h1>Mes Animaux</h1>
<div>

</div>
<a href="/new-animal" style="color : white">CRÉER</a>

<div class="row" style="max-width: 90%;margin: auto;">
<?php foreach ($animals as $animal) : ?>
    <div class="card" style="width: 18rem; margin :20px;">
        <div class="card-body">
            <h5 class="card-title" style="color : black"><?= strtoupper($animal->getNom())?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $animal->getRace() ?></h6>
            <a href="rdv?id=<?= $animal->getIdanimal()?>" class="card-link">Prendre un RDV</a>
            <a href="#" class="card-link">Modifier la fiche</a>
        </div>
    </div>
<?php endforeach; ?>
</div>
<?php include_once 'partials/footer.php'; ?>
