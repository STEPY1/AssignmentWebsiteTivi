<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category; // Import Category entity
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Product;
use App\Repository\ProductRepository;

class Neoqled4kController extends AbstractController
{

    private $entityManager;

    public function __construct(ManagerRegistry $registry)
    {
        $this->entityManager = $registry->getManager();
    }

    #[Route('/neoqled4k', name: 'app_neoqled4k')]

    public function index(ProductRepository $productRepository): Response
    {
        // Lấy danh sách sản phẩm của category "macbook"
        $category = $this->entityManager->getRepository(Category::class)->findOneBy(['Name' => 'Neo QLED 4K']);
        $products = $productRepository->findBy(['category' => $category]);

        return $this->render('neoqled4k/index.html.twig', [
            'products' => $products,
        ]);
    }
}

