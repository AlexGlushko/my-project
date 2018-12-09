<?php
/**
 * Created by PhpStorm.
 * User: halex
 * Date: 02.12.18
 * Time: 19:14
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthorController extends AbstractController
{

    public $author = "Hlushko Alexander";

    public function author()
    {
        return $this-> render('articles/author.html.twig',[
            'author' => $this->author
        ]);
    }
}
