<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\AdvertSkill;
use OC\PlatformBundle\Entity\Application;
use Symfony\Component\HttpFoundation\Request;
use OC\PlatformBundle\Form\AdvertType;
use OC\PlatformBundle\Form\AdvertEditType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use OC\PlatformBundle\Event\PlatformEvents;
use OC\PlatformBundle\Event\MessagePostEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class AdvertController extends Controller
{
  /**
  * @ParamConverter("json")
  */
  public function ParamConverterAction($json)
  {
    return new Response(print_r($json, true));
  }

  // Méthode du système de purge
  public function purgeAction($days)
  {
    // On récupère notre service
    $purger = $this->get('oc_platform.purger.advert');

    $form = $this->get('form.factory')->create();
    $listAdverts = $purger->list($days);

    $purger->purge($days);

    
      return $this->render('OCPlatformBundle:Advert:purge.html.twig',
        array('days' => $days,
               'listAdverts' => $listAdverts,
               'form' => $form->createView()
               )
        );
        
  }


    /**
     * @param $page
     * @return Response
     */
    public function indexAction($page)
  {
    // On récupère le service UserManager du bundle
    $userManager = $this->get('fos_user.user_manager');
     // Pour avoir tous les utilisateurs
   $users = $userManager->findUsers();
   foreach ($users as $user) {
     $user->setRoles(array('ROLE_MODERATEUR'));
     $userManager->updateUser($user);
    // Pour charger un utilisateur
    $user = $userManager->findUserBy(array('username' => 'root'));

    // Pour modifier un utilisateur
    $user->setRoles(array('ROLE_ADMIN'));

    // Pour le truc à jour

   $userManager->updateUser($user);

   // Pour supprimer un utilisateur
   // $userManager->deleteUser($user);

  
   }
    
    //$em = $this->get('doctrine.orm.entity_manager'); //Pour accéder au service EntityManger
    //$em = $this->getDoctrine()->getManager();
    //$advertRepository = $em->getRepository('OCPlatformBundle:Advert');
    //J'ai besoin du service mailer
    //$mailer = $this->container('mailer');
    // On ne sait pas combien de pages il y a
    // Mais on sait qu'une page doit être supérieure ou égale à 1
    if ($page < 1) {
      // On déclenche une exception NotFoundHttpException, cela va afficher
      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    //On fixe le nombre d'annonces par page  à 3
    $nbPerPage = 3;

    //On récupère notre object Paginator

    $listAdverts = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('OCPlatformBundle:Advert')
                        ->getAdverts($page, $nbPerPage)
                        ;

    //On calcule le nombre total de pages
    $nbPages = ceil(count($listAdverts) / $nbPerPage);

    $listAdvertOussou = $this
                              ->getDoctrine()
                              ->getManager()
                              ->getRepository('OCPlatformBundle:Advert')
                              ->findBy(array('author' => 'OussouToure'),
                               array('date' => 'desc'),
                               20,
                               0
                               )
                              ;

    $listAdvertsFabien = $this->getDoctrine()
                              ->getManager()
                              ->getRepository('OCPlatformBundle:Advert')
                              ->findByAuthorAndDate('Potencier Fabien', '2017-02-04')
                              ;

    // Mais pour l'instant, on ne fait qu'appeler le template
    return $this->render('OCPlatformBundle:Advert:index.html.twig', 
      array('listAdverts' => $listAdverts,
        'nbPages' => $nbPages,
        'page' => $page,
        'listAdvertOussou' => $listAdvertOussou,
        'listAdvertsFabien' =>$listAdvertsFabien
      ));
  }

  /****
   ** ne fonctionne pas encore @ParamConverter("advert", options={"mapping": {"advert_id": "id"}})
   *****/

  public function viewAction(Advert $advert)
  {
    return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
      'advert' => $advert,
      //'listApplications' => $listApplications,
      //'listAdvertSkills' =>$listAdvertSkills
    ));
  }

  
  /*****
  * @Security("has_role('ROLE_AUTEUR') and has_role('IS_AUTHENTICATED_REMEMBERED')")
  */
  public function addAction(Request $request)
  {
    /* On vérifie que l'utilisateur a le droit d'ajouter une annonce
    if(!$this->get('security.authorization_checker')->isGranted('ROLE_AUTEUR'))
    {
      // Sinon, on déclenche une exception "Accès interdit"
      throw new AccessDeniedException("Accès limité aux auteurs.");
    }
     if($request->isXmlHttpRequest())
    {
      // Si on a une request ajax, se préparer
      // On récupère ce qu'a entré l'utilisateur dans le champ de recherche
      $query = $request->request->get('query'); 
      $em = $this->get('doctrine.orm.entity_manager');
      $lists = $em
                 ->getRepository('OCPlatformBundle:Advert')
                 ->getAdvertWithCriteria($query)
                  ;  
       

     return $this->render('OCPlatformBundle:Advert:search.html.twig',
        array('data' => $lists
       )
      );
    */

    // Ici, il a les droits suffisants


    $advert = new Advert();
    $form   = $this->get('form.factory')->create(AdvertType::class, $advert);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

      // On souhait déclencher l'évènement avant l'enregistrement effectif en BDD
      // On crée l'évènement avec ses deux attributs
      //$event = new MessagePostEvent($advert->getContent(), $advert->getUser());

      // On déclenche l'évènement
    //
      // On récupère ce qui a été modifié par le ou les listeners
     // $advert->setContent($event->getMessage());
      
      $em = $this->getDoctrine()->getManager();
      //je fais des candidatures de tests
      /*
      $application1 = new Application();
      $application1->setAuthor("OussouToure");
      $application1->setContent("J'ai toutes les compétences");
      $application1->setAdvert($advert);
      $application2 = new Application();
      $application2->setAuthor("Ousmane ALASSANE");
      $application2->setContent("J'ai toutes les compétences requises");
      $application2->setAdvert($advert);
      $em->persist($application1);
      $em->persist($application2);
      */
      $em->persist($advert);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }

    return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
      'form' => $form->createView(),
    ));
  
}

  public function editAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    $form = $this->get('form.factory')->create(AdvertEditType::class, $advert);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      // Inutile de persister ici, Doctrine connait déjà notre annonce
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

      return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }

    return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
      'advert' => $advert,
      'form'   => $form->createView(),
    ));

  }

  public function deleteAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->get('form.factory')->create();

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      //On procède à la suppression de l'annonce
      $em->remove($advert);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

      return $this->redirectToRoute('oc_platform_home');
    }
    
    return $this->render('OCPlatformBundle:Advert:delete.html.twig', array(
      'advert' => $advert,
      'form'   => $form->createView(),
    ));

  }

  /********
  **** @Security("has_role('IS_AUTHENTICATED_REMEMBERED')")
  */
  public function menuAction($limit)
  {
    
    $em = $this->get('doctrine.orm.entity_manager');

    $listAdverts = $em->getRepository('OCPlatformBundle:Advert')
                      ->getAdvertPublished($limit)
                      ;

    return $this->render('OCPlatformBundle:Advert:menu.html.twig',
               array('listAdverts' => $listAdverts )
               );
  }



  public function ficAction()
  {
    return $this->render('OCPlatformBundle:Advert:fic.html.twig');
  }



  //Méthode listAction()
  public function listAction()
  {
    $em = $this->get('doctrine.orm.entity_manager');
    $listAdvertsAndApplications = $em
                            ->getRepository('OCPlatformBundle:Advert')
                            ->getAdvertWithApplications()
                            ;

    return $this->render('OCPlatformBundle:Advert:list.html.twig', array(
      'listAdverts' => $listAdvertsAndApplications));
  }

  /**
   * @ Get Action Translation
   */
  public function translationAction($name)
  {
      return $this->render('OCPlatformBundle:Advert:translation.html.twig',
          array('name' => $name )
      );
  }

  
  public function searchAction(Request $request)
  {
    if($request->isXmlHttpRequest())
    {
      // Si on a une request ajax, se préparer
      // On récupère ce qu'a entré l'utilisateur dans le champ de recherche
      $query = $request->request->get('query'); 
      $em = $this->get('doctrine.orm.entity_manager');
      $lists = $em
                 ->getRepository('OCPlatformBundle:Advert')
                 ->getAdvertWithCriteria($query)
                  ;         

     return $this->render('OCPlatformBundle:Advert:search.html.twig',
        array('data' => $lists
       )
      );

    }
  }
}