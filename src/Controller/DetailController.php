<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;

#[Route('/detail')]
class DetailController extends AbstractController
{


    #[Route('/{id}', name: 'app_detail_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        if ($this->isGranted('ROLE_USER')) {
            // If the user has the 'ROLE_ADMIN' role, render the error page
            return $this->render('detail/index.html.twig', [
                'product' => $product,
            ]);
        }
        else {
            // If not, redirect to the home page
            return $this->redirectToRoute('app_error');
        }
    }




}
