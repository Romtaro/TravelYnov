<?php

namespace Traveller\TravelAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
  public function redirecteAction()
  {
      return $this->render('TravelAdvisorBundle:Default:admin.html.twig');
  }
}
