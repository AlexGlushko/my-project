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

class ArticleController extends AbstractController
{

    public function show($id)
    {
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        if (!$article) {
            throw $this->createNotFoundException(
                'Не найдены статьи'
            );
        }

        return $this->render('show.html.twig',[
            'article'=>$article
        ]);

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }
}