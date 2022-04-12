<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route ("/", name="homepage")
     */
    public function homepage(ProductRepository $product)
    {
        $product = $product->findBy([], [], 3);

        return $this->render('home.html.twig', [
            'product' => $product
        ]);
    }
}
