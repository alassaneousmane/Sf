<?php

namespace OC\CoreBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $listAdverts = $em
                            ->getRepository('OCPlatformBundle:Advert')
                            ->myFindAll()
                            ;
        return $this->render('OCCoreBundle:Default:index.html.twig', array('listAdverts' => $listAdverts));
    }

    public function contactAction( Request $request )
    {
    	$session = $request->getSession();
    	$session->getFlashBag()->add('info', "La page de contact n'est pas encore disponible..merci de revenir plutard");
        return $this->render('OCCoreBundle:Default:contact.html.twig');

        //Je ne redirige plus vers la page de contact, je créé une page de contact
    	//return $this->redirectToRoute('oc_core_homepage');

    }
}
