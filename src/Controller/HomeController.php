<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

   
	#[Route('/', name:"home")]   //si l'utilisateur demande l'url '/' , alors on lui renvoie la fonction
    public function home() {    //  fonction pour afficher un var_dump

        return $this->render('home.html.twig'); // on affiche "Page accueil"
	}

}
