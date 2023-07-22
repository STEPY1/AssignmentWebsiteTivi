<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Home1Controller extends AbstractController
{
//    #[Route('/home', name: 'app_home')]
//    public function index(): Response
//    {
//        return $this->render('home/index.html.twig', [
//            'controller_name' => 'HomeController',
//        ]);
//    }
    #[Route('/home1', name: 'app_home_1', methods: ['GET'])]
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('home1/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }



}
