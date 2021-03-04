<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AuteurRepository;

class BdController extends AbstractController
{
    /**
     * @Route("/bd", name="bd")
     */
    public function index(AuteurRepository $repo): Response
    {
        $auteurs = $repo->findAll();
        return $this->render('bd/index.html.twig', [
            'controller_name' => 'BdController',
            'auteurs' => $auteurs
        ]);
    }

    /**
     * @Route("/", name="home")
     */

    public function home(): Response
    {
        return $this->render('bd/home.html.twig', [
            'tittle' => "Bienvenue sur le site des BD !",
            'age' =>18
        ]);
    }

    /**
    * @Route("/bd/livre/{id}", name="bd_show")
    */
    public function show($id, AuteurRepository $repo)
    {
        $auteur = $repo->find($id);
        return $this->render('bd/show.html.twig', [
            'auteur'=> $auteur 
        ]);
    }
}
