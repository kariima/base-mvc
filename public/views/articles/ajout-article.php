<?php ob_start(); ?>

<h1>Ajoutez un article</h1>

<!-- Ici l'action correspond au nom du fichier (la view). Indiquer l'url dans le fichier config puis n'indiquer dans l'action que le chemin vers le fichier vue dans du php -->
<form action="<?= url('/ajout-article') ?>" method="POST">

    <label for="id">Nom :</label><br>
    <input id="nom" name="name" type="text"><br>

    <label for="id">Numéro :</label><br>
    <input id="prenom" name="firstname" type="text"><br>

    <input type="submit" name="Envoyer" value="Envoyer">

</form>


<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>