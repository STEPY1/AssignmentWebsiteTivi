<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Ex1Controller extends AbstractController
{
    #[Route('/ex1', name: 'app_ex1')]
    public function index(): Response
    {
        return $this->render('ex1/index.html.twig', [
            'controller_name' => 'Ex1Controller',
        ]);
    }
}
