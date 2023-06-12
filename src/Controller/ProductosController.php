<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductosController extends AbstractController
{
    #[Route('/', name: 'app_productos')]
    public function index(): Response
    {
        return $this->render('productos/index.html.twig', [
            'controller_name' => 'ProductosController',
        ]);
    }

    #[Route('/carrito', name: 'app_carrito')]
    public function carrito(): Response
    {
        return $this->render('productos/carrito.html.twig', [
            'controller_name' => 'ProductosController',
        ]);
    }
}
