<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductuserController extends AbstractController
{
    #[Route('/productuser', name: 'app_productuser')]
    public function index(): Response
    {
        return $this->render('productuser/index.html.twig', [
            'controller_name' => 'ProductuserController',
        ]);
    }
}
