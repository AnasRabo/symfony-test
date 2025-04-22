<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController {

    //si l'utilisateur demande l'url '/' , alors on lui renvoie la fonction
	#[Route('/', name:"home")] 

	public function home() {    //  fonction pour afficher un var_dump

        return new Response("<p>Hello Accueil</p>", 200); // on affiche "Page accueil"
	}

}
