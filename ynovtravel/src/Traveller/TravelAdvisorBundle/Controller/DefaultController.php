<?php

namespace Traveller\TravelAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TravelAdvisorBundle:Default:index.html.twig');
    }
    public function voyageAction()
    {
        return $this->render('TravelAdvisorBundle:Default:voyage.html.twig');
    }
    public function voyageprenomAction($votrePrenom)
    {
        return $this->render('TravelAdvisorBundle:Default:voyageprenom.html.twig', array('prenom'=>$votrePrenom));
    }
}
