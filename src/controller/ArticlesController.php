<?php

//ArticlesController.php

class ArticlesController {

    public function ajout () {

        view ('articles.ajout-article'); //"articles" = dossier contenant la vue. "ajout-article" = fichier vue.

    }

    public function save () {

        dump($_POST);

    }
}