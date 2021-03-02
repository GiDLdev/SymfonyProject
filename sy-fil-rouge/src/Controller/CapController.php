<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CapController extends AbstractController
{
    /**
     * @Route("/cap", name="cap")
     */
    public function index(): Response
    {
        return $this->render('cap/index.html.twig', [
            'controller_name' => 'CapController',
        ]);
    }

    /**
     * @Route("/", name="galerie")
     */
    public function galerie(): Response
    {
        return $this->render('cap/galerie.html.twig');
    }
}
