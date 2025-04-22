<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class HomeController {

    //si l'utilisateur demande l'url '/' , alors on lui renvoie la fonction
	#[Route('/', name:"home")] 

	public function home() {    //  fonction pour afficher un var_dump

        var_dump('Page accueil'); die;  // on affiche "Page accueil"
	}

  
	#[Route('/a-propos', name:"a-propos")]  //si l'utilisateur demande l'url '/' , alors on lui renvoie la fonction

	public function apropos() {     //  fonction pour afficher un var_dump

		var_dump('Page infos'); die;    // on affiche "Page infos"
	}



	#[Route('/contact', name:"contact")]    //si l'utilisateur demande l'url '/' , alors on lui renvoie la fonction

	public function contact() {   //  fonction pour afficher un var_dump

		var_dump('Page contact'); die;  // on affiche "Page contat"
	}
}

// récupère l'url demandée
// analayse l'url et récupère la fin ("/", ou "contact" etc)
// il regarde si dans tous les controleurs créés, il y a une fonction qui a une annotation Route
// avec la même url que celle demandée par l'utilisateur
// si oui, il execute la fonction en dessous de l'annotation :
// il va instancier automatiquement la classe : 
// $homeController = new HomeController
// $homeController->home();.
