<?php

namespace App\Controller;

use App\Entity\Forms\Comment;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
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
    }

    public function comment()
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        return $this->render('forms/comment_form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
