<?php

namespace Traveller\TravelAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MembreController extends Controller
{
  public function viewAction($id)
{

 $repository = $this->getDoctrine()
   ->getManager()
   ->getRepository('ENTSiteBundle:Membre');


 $membre = $repository->findBy(
array('id' => $id)

);

 $error = "TEST DONE !";


 if (null === $membre) {
     $error = "L'annonce d'id ".$id." n'existe pas.";
 } else {
     $contnom = array();

     $user = new Membre();
     foreach ($membre as $user) {
         $nom = $user->getName();

         array_push($contnom, $nom);

     }



     //var_dump($contnom);


     $content = $this
 ->get('templating')
 ->render('ENTSiteBundle:Default:membre.html.twig', array('v_nom' => $contnom));
//var_dump($content);
 // Le render ne change pas, on passait avant un tableau, maintenant un objet
return new Response($content);
     }
 }
}
}
