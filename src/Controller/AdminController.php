<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/home", name="adminHomepage")
     */
    public function adminHome()
    {
      $session = $this->get('session');
    	$user = $session->get('user');
      if ($user.getIsAdmin()) {
        return $this->render('admin/index.html.twig');
      }
      else return $this->redirectToRoute('home');
    }
}
