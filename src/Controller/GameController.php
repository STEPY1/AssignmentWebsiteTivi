<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    /**
     * @Route("/shoot-bullet", name="shoot_bullet")
     */
    public function shootBullet(): Response
    {
        return $this->render('shoot_bullet.html.twig');
    }
}