<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Mission;
use App\Entity\KillerParty;
use App\Entity\Participant;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/home", name="adminHomepage")
     */
    public function adminHome()
    {
      $session = $this->get('session');
    	$user = $session->get('user');
      if (!(empty($user)) && $user->getIsAdmin()) {
        return $this->render('admin/index.html.twig');
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/admin/mission/list", name="missionList")
     */
    public function missionList()
    {
      $session = $this->get('session');
    	$user = $session->get('user');
      if (!(empty($user)) && $user->getIsAdmin()) {

          $entityManager = $this->getDoctrine()->getManager();
          $missions = $entityManager->getRepository(Mission::class)->findAll();

        return $this->render('admin/missionList.html.twig',array(
            'missions'=>$missions,
        ));
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/admin/party/list", name="partyList")
     */
    public function partyList()
    {
      $session = $this->get('session');
    	$user = $session->get('user');
      if (!(empty($user)) && $user->getIsAdmin()) {

          $entityManager = $this->getDoctrine()->getManager();
          $partys = $entityManager->getRepository(KillerParty::class)->findAll();

        return $this->render('admin/partyList.html.twig',array(
            'partys'=>$partys,
        ));
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/admin/party/view/{uid}", name="partyView")
     */
    public function partyView($uid)
    {
      $session = $this->get('session');
    	$user = $session->get('user');
      if (!(empty($user)) && $user->getIsAdmin()) {

          $entityManager = $this->getDoctrine()->getManager();
          $party = $entityManager->getRepository(KillerParty::class)->findOneBy(['uid'=>$uid]);

        return $this->render('admin/partyView.html.twig',array(
            'party'=>$party,
        ));
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/admin/party/delete/{uid}", name="participantView")
     */
    public function participantView($uid)
    {
      $session = $this->get('session');
    	$user = $session->get('user');
      if (!(empty($user)) && $user->getIsAdmin()) {

          $entityManager = $this->getDoctrine()->getManager();
          $party = $entityManager->getRepository(KillerParty::class)->findOneBy(['uid'=>$uid]);

          $entityManager->remove($party);
          $entityManager->flush();

        return $this->redirectToRoute('partyList');
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/admin/participant/kill/{uid}", name="participantKill")
     */
    public function participantKill($uid, \Swift_Mailer $mailer)
    {
      $session = $this->get('session');
    	$user = $session->get('user');
      if (!(empty($user)) && $user->getIsAdmin()) {

          $entityManager = $this->getDoctrine()->getManager();
          $participant = $entityManager->getRepository(Participant::class)->findOneBy(['uid'=>$uid]);

          $partyUID = $participant->getParty()->getUid();

          if (!$participant) {
              throw $this->createNotFoundException(
                  'No product found for uid '.$uid
              );
          }

          $killer=$participant->getKiller();
          $target=$participant->getTarget();

          if ($killer == $target) {

              foreach ($participant->getParty()->getParticipants() as $parti) {
                  $message = (new \Swift_Message("Communication entrante en provenance de l'Agence"))
                  ->setFrom('adminKiller@ckngf.fr')
                  ->setTo($parti->getEmailAddress())
                  ->setBody($this->renderView('emails/end.html.twig',array(
                      'winner'=>$killer,'loser'=>$participant,
                  )),
                  'text/html'
              );

              $mailer->send($message);


              }
          }
          else {
              $message = (new \Swift_Message("Communication entrante en provenance de l'Agence"))
              ->setFrom('adminKiller@ckngf.fr')
              ->setTo($killer->getEmailAddress())
              ->setBody($this->renderView('emails/kill.html.twig',array(
                  'participant'=>$killer,
              )),
              'text/html'
          );
          $mailer->send($message);

          $message = (new \Swift_Message("Communication entrante en provenance de l'Agence"))
          ->setFrom('adminKiller@ckngf.fr')
          ->setTo($participant->getEmailAddress())
          ->setBody($this->renderView('emails/death.html.twig',array(
              'participant'=>$participant,
          )),
          'text/html'
      );
      $mailer->send($message);
          }


          $target->setKiller($killer);
          $participant->setIsAlive(false);
          $killer->setNumberOfKills($killer->getNumberOfKills()+1);
          $killer->setMission($participant->getMission());
          $participant->setTarget(null);


          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($participant);
          $entityManager->persist($killer);
          $entityManager->persist($target);
          $entityManager->flush();

        return $this->redirectToRoute('partyView',['uid'=>$partyUID]);
      }
      else return $this->redirectToRoute('home');
    }

    /**
     * @Route("/admin/mission/create", name="adminMissionCreate")
     */
    public function createMission(Request $request)
    {
      $session = $this->get('session');
    	$user = $session->get('user');
      if (!(empty($user)) && $user->getIsAdmin()) {

          $mission = new Mission();

          $form = $this->createFormBuilder($mission)
              ->add('missionTitle', TextType::class,array('label'=>"Titre"))
              ->add('missionText', TextareaType::class,array('label'=>null))
              ->add('add', SubmitType::class, array('label' => "Ajouter"))
              ->getForm();

          $form->handleRequest($request);

          if($form->isSubmitted() && $form->isValid()){
              $entityManager = $this->getDoctrine()->getManager();
              $entityManager->persist($mission);
              $entityManager->flush();

              unset($mission);
              unset($form);
              $mission = new Mission();
              $form = $this->createFormBuilder($mission)
                  ->add('missionTitle', TextType::class,array('label'=>"Titre"))
                  ->add('missionText', TextareaType::class,array('label'=>"Mission"))
                  ->add('add', SubmitType::class, array('label' => "Ajouter"))
                  ->getForm();

              return $this->render('admin/missionCreate.html.twig',array(
                  'form'=>$form->createView(),
              ));
          }

        return $this->render('admin/missionCreate.html.twig',array(
            'form'=>$form->createView(),
        ));
      }
      else return $this->redirectToRoute('home');
    }
}
