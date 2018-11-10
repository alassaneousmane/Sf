<?php 

//src/OC/PlatformBundle/DoctrineListener/ApplicationCreationListener.php

namespace OC\PlatformBundle\DoctrineListener;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use OC\PlatformBundle\Email\ApplicationMailer;
use OC\PlatformBundle\Entity\Application;

class ApplicationCreationListener
{
	/**
	* @var ApplicationMailer
	*/
	private $applicationMailer;


	public function __construct(ApplicationMailer $applicationMailer)
	{
		$this->applicationMailer = $applicationMailer;
	}

	/**
	* Sera exécutée pour tous les évènements postPersist de toutes les entités
	* ici on ne veut que pour les nouvelles Applications d'où le if instanceof 
	*/
	public function postPersist(LifecycleEventArgs $args)
	{
		$entity = $args->getObject(); 

		//getObject() retourne l'entité sur lequel l'évènement est entrain de se produire

		//On ne veut envoyer un email que pour les entités Application

		if(!$entity instanceof Application)
			{ 
				return;
			}


	    $this->applicationMailer
	    	 ->sendNewNotification($entity);
	}
}