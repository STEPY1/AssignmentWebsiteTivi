<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category; // Import Category entity
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Product;
use App\Repository\ProductRepository;

class NeoQled8kController extends AbstractController
{

    private $entityManager;

    public function __construct(ManagerRegistry $registry)
    {
        $this->entityManager = $registry->getManager();
    }

    #[Route('/neo_qled8k', name: 'app_neoqled8k')]

    public function index(ProductRepository $productRepository): Response
    {
        // Lấy danh sách sản phẩm của category "macbook"
        $category = $this->entityManager->getRepository(Category::class)->findOneBy(['Name' => 'Neo QLED 8K']);
        $products = $productRepository->findBy(['category' => $category]);

        return $this->render('sonic/index.html.twig', [
            'products' => $products,
        ]);
    }
}
