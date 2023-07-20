<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/detail')]
class DetailController extends AbstractController
{


    #[Route('/{id}', name: 'app_detail_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('detail/index.html.twig', [
            'product' => $product,
        ]);
    }


}
