<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Jeudesociete;
use App\Entity\GameList;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Filesystem\Filesystem;

class JeudesocieteController extends AbstractController
{
    /**
     * @Route("/jeudesociete", name="jeudesociete")
     */
    public function index()
    {
      $session = $this->get('session');
    	$user = $session->get('user');
      if (!(empty($user)) && $user->getIsAdmin()) {

        return $this->render('jeudesociete/index.html.twig');
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/jeudesociete/jeu/create", name="createGame")
     */
    public function createGame(Request $request)
    {
        $session = $this->get('session');
       $user = $session->get('user');
        if (!(empty($user)) && $user->getIsAdmin()) {

        $jeu = new jeudesociete();

        $jeu->setMinPlayer(1);
        $jeu->setMaxPlayer(4);
        $jeu->setInterest(5);

        $form = $this->createFormBuilder($jeu)
            ->add('name', TextType::class,array('label'=>"Nom"))
            ->add('description', TextareaType::class,array('label'=>"Description"))
            ->add('picture', FileType::class, array('label' => 'Image','required'=>false))
            ->add('price', MoneyType::class, array('label' => "Prix"))
            ->add('minPlayer', IntegerType::class, array('label' => "Joueur Mini"))
            ->add('maxPlayer', IntegerType::class, array('label' => "Joueur Max"))
            ->add('shopLink', UrlType::class, array('label' => "Lien magasin",'required'=>false))
            ->add('owned', CheckboxType::class, array('label' => "Possédé ?",'required'=>false))
            ->add('interest', ChoiceType::class, array('label' => "Priorité",'choices' => array(
                'Il me le faut tout de suite'=>1,
                'Il me le faut'=>2,
                'Je le veux mais pas tout de suite'=>3,
                'Je peut attendre un peu'=>3,
                'Je peut attendre longtemps'=>5,
            )))
            ->add('available', CheckboxType::class, array('label' => "Disponible ?",'required'=>false))
            ->add('save', SubmitType::class, array('label' => "Valider"))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $file = $form["picture"]->getData();

            if ($file != null) {
                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('game_picture_directory'),
                        $fileName
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $jeu->setPicture($fileName);
            }
            else $jeu->setPicture("imagenotfound.png");



            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($jeu);
            $entityManager->flush();
            return $this->redirectToRoute('createGame');
        }
        return $this->render('jeudesociete/jdcCreate.html.twig', array('form'=>$form->createView(),'data'=>$form["interest"]->getData(),));
    }
    else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/jeudesociete/jeu/delete/{id}", name="jeuDelete")
     */
    public function jeuDelete($id)
    {
      $session = $this->get('session');
        $user = $session->get('user');



      if (!(empty($user)) && $user->getIsAdmin()) {


          $entityManager = $this->getDoctrine()->getManager();
          $mission = $entityManager->getRepository(Jeudesociete::class)->findOneBy(['id'=>$id]);

          if ($mission->getPicture() != "imagenotfound.png") {
              $fileSystem = new Filesystem();
              $fileSystem->remove($this->getParameter('game_picture_directory')."/".$mission->getPicture());
          }

          $entityManager->remove($mission);
          $entityManager->flush();


        return $this->redirect($this->generateUrl('jeuView', ['id'=>$id]));
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/jeudesociete/jeu/modify/{id}", name="jeuModify")
     */
    public function jeuModify($id, Request $request)
    {
      $session = $this->get('session');
        $user = $session->get('user');



      if (!(empty($user)) && $user->getIsAdmin()) {


          $entityManager = $this->getDoctrine()->getManager();
          $jeu = $entityManager->getRepository(Jeudesociete::class)->findOneBy(['id'=>$id]);
          $fileName = $jeu->getPicture();

          $form = $this->createFormBuilder($jeu)
              ->add('name', TextType::class,array('label'=>"Nom"))
              ->add('description', TextareaType::class,array('label'=>"Description"))
              ->add('picture', FileType::class, array('label' => 'Image','required'=>false,'data_class' => null))
              ->add('price', MoneyType::class, array('label' => "Prix"))
              ->add('minPlayer', IntegerType::class, array('label' => "Joueur Mini"))
              ->add('maxPlayer', IntegerType::class, array('label' => "Joueur Max"))
              ->add('shopLink', UrlType::class, array('label' => "Lien magasin",'required'=>false))
              ->add('owned', CheckboxType::class, array('label' => "Possédé ?",'required'=>false))
              ->add('interest', ChoiceType::class, array('label' => "Priorité",'choices' => array(
                  'Il me le faut tout de suite'=>1,
                  'Il me le faut'=>2,
                  'Je le veux mais pas tout de suite'=>3,
                  'Je peut attendre un peu'=>3,
                  'Je peut attendre longtemps'=>5,
              )))
              ->add('available', CheckboxType::class, array('label' => "Disponible ?",'required'=>false))
              ->add('save', SubmitType::class, array('label' => "Valider"))
              ->getForm();

              $form->handleRequest($request);

              if($form->isSubmitted() && $form->isValid()){
                  $file = $form["picture"]->getData();

                  if ($file != null) {
                      if ($fileName != "imagenotfound.png") {
                          $fileSystem = new Filesystem();
                          $fileSystem->remove($this->getParameter('game_picture_directory')."/".$fileName);
                      }

                      $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
                      try {
                          $file->move(
                              $this->getParameter('game_picture_directory'),
                              $fileName
                          );
                      } catch (FileException $e) {
                          // ... handle exception if something happens during file upload
                      }
                      $jeu->setPicture($fileName);
                  } else $jeu->setPicture($fileName);


                  $entityManager = $this->getDoctrine()->getManager();
                  $entityManager->persist($jeu);
                  $entityManager->flush();
                  return $this->redirect($this->generateUrl('jeuView', ['id'=>$id]));
              }

          return $this->render('jeudesociete/jdcModify.html.twig',array(
              'form'=>$form->createView(),'data'=>$form["interest"]->getData(),
          ));
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/jeudesociete/jeu/interest/{id}", name="jeuModifyInterest")
     */
    public function jeuModifyInterest($id, Request $request)
    {
      $session = $this->get('session');
        $user = $session->get('user');



      if (!(empty($user)) && $user->getIsAdmin()) {


          $entityManager = $this->getDoctrine()->getManager();
          $jeu = $entityManager->getRepository(Jeudesociete::class)->findOneBy(['id'=>$id]);
          $fileName = $jeu->getPicture();

          $form = $this->createFormBuilder($jeu)
              ->add('interest', ChoiceType::class, array('label' => "Priorité",'choices' => array(
                  'Il me le faut tout de suite'=>1,
                  'Il me le faut'=>2,
                  'Je le veux mais pas tout de suite'=>3,
                  'Je peut attendre un peu'=>3,
                  'Je peut attendre longtemps'=>5,
              )))
              ->add('save', SubmitType::class, array('label' => "Valider"))
              ->getForm();

              $form->handleRequest($request);

              if($form->isSubmitted()){
                  $entityManager = $this->getDoctrine()->getManager();
                  $entityManager->persist($jeu);
                  $entityManager->flush();

                  return $this->redirectToRoute('jeuListAdv');
              }

          return $this->render('jeudesociete/jdcModifyInterest.html.twig',array(
              'form'=>$form->createView(),'data'=>$form["interest"]->getData(),
          ));
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/jeudesociete/list/delete/{id}", name="listDelete")
     */
    public function listDelete($id)
    {
      $session = $this->get('session');
        $user = $session->get('user');



      if (!(empty($user)) && $user->getIsAdmin()) {


          $entityManager = $this->getDoctrine()->getManager();
          $mission = $entityManager->getRepository(GameList::class)->findOneBy(['id'=>$id]);

          $entityManager->remove($mission);
          $entityManager->flush();

        return $this->redirectToRoute('listList');
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/jeudesociete/list/modify/{id}", name="listModify")
     */
    public function listModify($id)
    {
      $session = $this->get('session');
        $user = $session->get('user');



      if (!(empty($user)) && $user->getIsAdmin()) {


          $entityManager = $this->getDoctrine()->getManager();
          $list = $entityManager->getRepository(GameList::class)->findOneBy(['id'=>$id]);

          return $this->render('jeudesociete/listModify.html.twig',array(
              'list'=>$list,
          ));
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/jeudesociete/list/remove/{gameId}/{listId}", name="removeFromList")
     */
    public function removeFromList($gameId, $listId)
    {
      $session = $this->get('session');
        $user = $session->get('user');



      if (!(empty($user)) && $user->getIsAdmin()) {

          $entityManager = $this->getDoctrine()->getManager();
          $game = $entityManager->getRepository(Jeudesociete::class)->findOneBy(['id'=>$gameId]);
          $list = $entityManager->getRepository(GameList::class)->findOneBy(['id'=>$listId]);

          $list->removeGame($game);
          $entityManager->persist($list);
          $entityManager->flush();

        return $this->redirect($this->generateUrl('listModify', ['id'=>$listId]));
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/jeudesociete/jeu/list", name="jeuListAdv")
     */
    public function jeuListAdv()
    {
      $session = $this->get('session');
        $user = $session->get('user');
      if (!(empty($user)) && $user->getIsAdmin()) {

          $entityManager = $this->getDoctrine()->getManager();
          $missions = $entityManager->getRepository(Jeudesociete::class)->findBy([],['interest'=>'ASC']);

        return $this->render('jeudesociete/jdcListAdv.html.twig',array(
            'jeux'=>$missions,
        ));
      }
      else return $this->redirectToRoute('home');
    }


    /**
     * @Route("/jeudesociete/jeu/view/{id}", name="jeuView")
     */
    public function jeuView($id)
    {
      $session = $this->get('session');
        $user = $session->get('user');
      if (!(empty($user)) && $user->getIsAdmin()) {

          $entityManager = $this->getDoctrine()->getManager();
          $missions = $entityManager->getRepository(Jeudesociete::class)->findOneBy(['id'=>$id]);
          $lists = $entityManager->getRepository(GameList::class)->findAll();

        return $this->render('jeudesociete/jdcView.html.twig',array(
            'jeu'=>$missions,'lists'=>$lists,
        ));
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/jeudesociete/jeu/observe/{id}", name="jeuObserve")
     */
    public function jeuObserve($id)
    {
          $entityManager = $this->getDoctrine()->getManager();
          $missions = $entityManager->getRepository(Jeudesociete::class)->findOneBy(['id'=>$id]);
          $lists = $entityManager->getRepository(GameList::class)->findAll();

        return $this->render('jeudesociete/jdcObserve.html.twig',array(
            'jeu'=>$missions
        ));
      }

    /**
     * @Route("/jeudesociete/list/create", name="createList")
     */
    public function createList(Request $request)
    {
        $session = $this->get('session');
       $user = $session->get('user');
        if (!(empty($user)) && $user->getIsAdmin()) {

        $list = new GameList();

        $form = $this->createFormBuilder($list)
            ->add('name', TextType::class,array('label'=>"Nom"))
            ->add('save', SubmitType::class, array('label' => "Valider"))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($list);
            $entityManager->flush();
            return $this->redirectToRoute('createList');
        }
        return $this->render('jeudesociete/listCreate.html.twig', array('form'=>$form->createView()));
    }
    else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/jeudesociete/list/list", name="listList")
     */
    public function listList()
    {
      $session = $this->get('session');
        $user = $session->get('user');
      if (!(empty($user)) && $user->getIsAdmin()) {

          $entityManager = $this->getDoctrine()->getManager();
          $missions = $entityManager->getRepository(GameList::class)->findAll();

        return $this->render('jeudesociete/listList.html.twig',array(
            'lists'=>$missions,
        ));
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/jeudesociete/list/view/{listId}", name="listView")
     */
    public function listView($listId)
    {
          $entityManager = $this->getDoctrine()->getManager();
          $list = $entityManager->getRepository(GameList::class)->findOneBy(['id'=>$listId]);
          $games = $list->getGamesOrdered();


        return $this->render('jeudesociete/listView.html.twig',array(
            'jeux'=>$games,
        ));
    }

    /**
     * @Route("/jeudesociete/add/{gameId}/{listId}/{from}", name="addToList")
     */
    public function addToList(Request $request,$gameId,$listId,$from)
    {
        $session = $this->get('session');
       $user = $session->get('user');
        if (!(empty($user)) && $user->getIsAdmin()) {

            $entityManager = $this->getDoctrine()->getManager();
            $game = $entityManager->getRepository(Jeudesociete::class)->findOneBy(['id'=>$gameId]);
            $list = $entityManager->getRepository(GameList::class)->findOneBy(['id'=>$listId]);

            $list->addGame($game);
            $entityManager->persist($list);
            $entityManager->flush();

        if ($from == "view") {
            return $this->redirect($this->generateUrl('jeuView', ['id'=>$gameId]));
        }
        else {
            return $this->redirectToRoute('jeuList');
        }

    }
    else return $this->redirectToRoute('home');
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

}
