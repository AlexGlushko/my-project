<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DonateController extends AbstractController
{
    public $moneytaker = 'Donate me please!';

    public function donate()
    {

        return $this->render('articles/donate.html.twig',[
            'moneytaker' => $this->moneytaker,
        ]);
    }

}
