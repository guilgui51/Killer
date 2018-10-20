<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function userLogin(Request $request)
    {
        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('userName', TextType::class,array('label'=>"Nom d'utilisateur"))
            ->add('password', PasswordType::class,array('label'=>'Mot de passe'))
            ->add('login', SubmitType::class, array('label' => "S'identifier"))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $repository = $this->getDoctrine()->getRepository(User::class);
            $user = $repository->findOneBy(['userName'=>$form['userName']->getData()]);
            if ((!(empty($user))) && (hash('sha256',$form["password"]->getData()) == $user->getPassword())) {
                $session = new Session();
                $session->invalidate();
                $session->start();
                $session->set('user',$user);
                return $this->redirectToRoute('home');
            }

            return $this->render('login/index.html.twig', array('form'=>$form->createView()));
        }

        return $this->render('login/index.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/signin", name="signin")
     */
    public function userSignIn(Request $request)
    {
        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('userName', TextType::class,array('label'=>"Nom d'utilisateur"))
            ->add('password', PasswordType::class,array('label'=>'Mot de passe'))
            ->add('save', SubmitType::class, array('label' => "S'enregistrer"))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user->setPassword(hash('sha256',$form["password"]->getData()));
            $user->setIsAdmin(FALSE);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('login/signin.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/disconnect", name="disconnect")
     */
    public function userDisconnect()
    {
        $session = $this->get('session');
        $session->invalidate();

        return $this->redirectToRoute('home');

    }
}
