<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\KillerParty;
use App\Entity\Participant;
use App\Entity\Mission;
use App\Form\Type\PartyType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PartyController extends AbstractController
{
    /**
     * @Route("/party/create", name="createParty")
     */
    public function createParty(Request $request, \Swift_Mailer $mailer)
    {
        $party = new KillerParty();

        $form = $this->createForm(PartyType::class, $party);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $party->setUid(uniqid());

            $entityManager = $this->getDoctrine()->getManager();
            $missions = $entityManager->getRepository(Mission::class)->findAll();

            foreach ($party->getParticipants() as $participant) {
                $participant->setUid(uniqid());
                $participant->setIsAlive(true);
                $participant->setNumberOfKills(0);
                $participant->setMission($missions[rand(0,count($missions)-1)]);

                $message = (new \Swift_Message("Communication entrante en provenance de l'Agence"))
                ->setFrom('adminKiller@ckngf.fr')
                ->setTo($participant->getEmailAddress())
                ->setBody($this->renderView('emails/launch.html.twig',array(
                    'participant'=>$participant,'party'=>$party,
                )),
                'text/html'
            );

            $mailer->send($message);


            }

            $participants = $party->getParticipants()->toArray();
            shuffle($participants);

            for ($i=0; $i < count($participants); $i++) {
                if ($i==count($participants)-1) {
                    $participants[$i]->setTarget($participants[0]);
                } else $participants[$i]->setTarget($participants[$i+1]);

                if ($i==0) {
                    $participants[$i]->setKiller($participants[count($participants)-1]);
                } else $participants[$i]->setKiller($participants[$i-1]);
            }

            $entityManager->persist($party);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }


        return $this->render('party/create.html.twig', array(
            'form'=>$form->createView(),
        ));
    }


    /**
     * @Route("/party/{uid}", name="party")
     */
    public function showParty($uid)
    {
        $party = $this->getDoctrine()
        ->getRepository(KillerParty::class)
        ->findOneBy(['uid'=>$uid]);

        if (!$party) {
            throw $this->createNotFoundException(
                'No product found for uid '.$uid
            );
        }

        return $this->render('party/index.html.twig', [
            'party' => $party,
        ]);
    }

    /**
     * @Route("/profil/{uid}", name="profil")
     */
    public function showProfil($uid)
    {
        $participant = $this->getDoctrine()
        ->getRepository(Participant::class)
        ->findOneBy(['uid'=>$uid]);

        if (!$participant) {
            throw $this->createNotFoundException(
                'No product found for uid '.$uid
            );
        }

        return $this->render('party/profil.html.twig', [
            'participant' => $participant,
        ]);
    }

    /**
     * @Route("/killed/{uid}", name="killed")
     */
    public function killed($uid, \Swift_Mailer $mailer)
    {
        $participant = $this->getDoctrine()
        ->getRepository(Participant::class)
        ->findOneBy(['uid'=>$uid]);

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



        return $this->render('party/profil.html.twig', [
            'participant' => $participant,
        ]);
    }
}
