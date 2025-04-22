<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class HomeController {

    //si l'utilisateur demande l'url '/' , alors on lui renvoie la fonction
	#[Route('/', name:"home")] 

    //  fonction pour afficher un var_dump
	public function home() {   
        // on affiche "Page accueil"
		var_dump('Page accueil'); die;
	}

}