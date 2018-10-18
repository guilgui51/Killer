<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PartyController extends AbstractController
{
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
}
