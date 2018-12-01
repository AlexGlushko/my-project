<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DonateController extends AbstractController
{
    public function donate()
    {
        $moneytaker = 'Donate me please!';


        return $this->render('pages/donate.html.twig',[
            'moneytaker' => $moneytaker,
        ]);
    }

}