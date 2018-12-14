<?php

namespace App\Controller\Forms;


use App\Entity\Forms\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;


class CommentFormController extends AbstractController
{

    public function  commentFormAction( Request $request): \Symfony\Component\HttpFoundation\Response
    {
        $comment = new Comment();

        $form = $this->createFormBuilder($comment)
            ->add('name', TextType::class, array(
                'required'=> true,
                'constraints' => array(new Length(array('min' => 4, 'max' => 25)), new NotBlank()) ))

            ->add('password',PasswordType::class, array(
                'required' => true,
                'constraints' => new NotBlank()))

            ->add('text', TextareaType::class, array(
                'required' => true,
                'constraints' => array(new Length(array('min' => 10, 'max' => 220)), new NotBlank())))

            ->add('save', SubmitType::class, array('label'=> 'Send comment'))

            ->getForm();

        $form->handleRequest($request);

        return $this->render('forms/comment_form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
