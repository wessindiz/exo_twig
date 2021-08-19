<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $posts = [
            ["id" => 1, "title" => "PARIS BY DAY", "image" => "image1.jpg", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book", "date_post" => "18/08/2021"],
            ["id" => 2, "title" => "PARIS BY STREET", "image" => "image2.jpg", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book", "date_post" => "15/08/2021"],
            ["id" => 3, "title" => "PARIS BY NIGHT", "image" => "image3.jpg", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book", "date_post" => "11/08/2021"],
            ["id" => 4, "title" => "PARIS BY LIGHTS", "image" => "image4.jpg", "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book", "date_post" => "09/08/2021"],
        ];

        return $this->render('product/index.html.twig', [
            'Paris' => $posts,
        ]);
    }
}
