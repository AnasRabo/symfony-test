<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class listArticles{
    #[route("/list-articles", name:"list-articles")]

    public function list() {    //  fonction pour afficher un var_dump

        var_dump('liste des articles'); die;  // on affiche "liste des articles"
	}
}

class CreateArticle{
    #[route("/create-article", name:"create-article")]

    public function create() {    //  fonction pour afficher un var_dump

        var_dump('crée des articles'); die;  // on affiche "crée des articles"
	}
}

class DeleteArticle{
    #[route("/delete-article", name:"delete-article")]

    public function create() {    //  fonction pour afficher un var_dump

        var_dump('supprime des articles'); die;  // on affiche "supprime des articles"
	}
}