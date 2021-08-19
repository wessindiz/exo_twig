<?php

namespace App\Controller;

use App\Entity\Driver;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index(): Response
    {
        $driver = new Driver();
        $tabProduits = $driver->findAll();
        return $this->render('post/index.html.twig', [
            'posts' => $tabProduits,
        ]);
    }
}
