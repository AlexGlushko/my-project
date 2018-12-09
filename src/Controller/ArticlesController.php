<?php
/**
 * Created by PhpStorm.
 * User: halex
 * Date: 02.12.18
 * Time: 19:30
 */

namespace App\Controller;


use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;

class ArticlesController extends AbstractController
{

    public function show($id)
    {
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        if (!$article) {
            throw $this->createNotFoundException(
                'Article is not found with id: ' . $id
            );
        }

        return $this->render('articles/show_article.html.twig',[
            'article'=>$article
        ]);

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show_article.html.twig', ['product' => $product]);
    }

    public function showAll()
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        if (!$articles) {
            throw $this->createNotFoundException(
                'Articles is not found'
            );
        }

        return $this -> render('articles/show_articles_home.twig', ['articles'=> $articles]);

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show_article.html.twig', ['product' => $product]);


    }
}