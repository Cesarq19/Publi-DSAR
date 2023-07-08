<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContenidoController extends AbstractController
{
    #[Route('/contenido', name: 'app_contenido')]
    public function index(): Response
    {
        return $this->render('contenido/index.html.twig', [
            'controller_name' => 'ContenidoController',
        ]);
    }
}
