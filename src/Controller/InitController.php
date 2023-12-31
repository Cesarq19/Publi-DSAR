<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InitController extends AbstractController
{
    #[Route('/', name: 'app_init')]
    public function init(): Response
    {
        return $this->render('init/index.html.twig', [
            'controller_name' => 'InitController',
        ]);
    }
}
