<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Article;


class DefaultController extends AbstractController
{



    public function index()
    {
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        if (!$article) {
            throw $this->createNotFoundException(
                'Нет статей для отображения'
            );
        }

        return $this -> render('base.html.twig' , ['article'=> $article]);

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);


    }





}