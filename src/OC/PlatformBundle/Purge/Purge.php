<?php 

// src/OC/PlatformBundle/Validator/Antiflood.php

namespace OC\PlatformBundle\Purge;
use Doctrine\ORM\EntityManagerInterface;

class Purge 
{
	private $em;
	private $days = 10;

	public function __construct(EntityManagerInterface $em, $days)
	{
		$this->em = $em;
	}
	
	/**
	* @param date $days
	* @return boolean
	*/

	public function purge($days)
	{
		// On récupère lesdites annonces
		$listAdverts = $this
							->em
							->getRepository('OCPlatformBundle:Advert')
							->getAdvertAndApplications($days)							
							;
		

		foreach ($listAdverts as $advert) {
			$this->em->remove($advert);			
		}
		$this->em->flush();


	}
	public function list($days)
	{
		// On récupère lesdites annonces
		$listAdverts = $this
							->em
							->getRepository('OCPlatformBundle:Advert')
							->getAdvertAndApplications($days)							
							;		
		
		return $listAdverts;

	}
}