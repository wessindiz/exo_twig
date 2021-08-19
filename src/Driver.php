<?php
namespace App\Entity;

use App\Entity\Post; 

class Driver{

    public function findAll(){
        $produit1= new Post();
        $produit1->setId(1);
        $produit1->setSlug("post001");
        $produit1->setTitle("Article 1");
        $produit1->setExcerpt("Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $produit1->setCreateDate(date ("d/m/Y"));

        $produit2= new Post();
        $produit2->setId(2);
        $produit2->setSlug("post002");
        $produit2->setTitle("Article 2");
        $produit2->setExcerpt("Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $produit2->setCreateDate(date ("d/m/Y"));

        $produit3= new Post();
        $produit3->setId(3);
        $produit3->setSlug("post003");
        $produit3->setTitle("Article 3");
        $produit3->setExcerpt("Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
        $produit3->setCreateDate(date ("d/m/Y"));

        $posts = [];
        array_push($posts, $produit1, $produit2, $produit3);
        return $posts;
    }
}
