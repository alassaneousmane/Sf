<?php 

//src/OC/PlatformBundle/Email/ApplicationMailer.php

namespace OC\PlatformBundle\Email;

use OC\PlatformBundle\Entity\Application;

/**
* ApplicationMailer
*/
class ApplicationMailer
{
	/**
	* @var \Swift_Mailer
	*/
	private $mailer;
	
	function __construct(\Swift_Mailer $mailer)

	{
		$this->mailer = $mailer;
	}

	public function sendNewNotification(Application $application)
	{
		$message = new \Swift_Message('Nouvelle candidature', 'Vous avez reçu une nouvelle candidature.');

		$message
			->addTo($application->getAdvert()->getEmail())
			->addFrom('admin@votresite.com')
			;

		$this->mailer->send($message);
	}
}