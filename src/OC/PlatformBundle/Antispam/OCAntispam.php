<?php 
 
 //src/OC/PlatformBundle/Antispam/OCAntispam.php

namespace OC\PlatformBundle\Antispam;

class OCAntispam
{
	private $mailer;
	private $locale;
	private $minLength;
	/**
	* Verifie si un texte est un spam ou non
	* @param string $text
	* @return bool
	*/

	public function __construct(\Swift_Mailer $mailer, $minLength)
	{
		$this->mailer = $mailer;
		$this->minLength = (int) $minLength;
	}
	

	public function setLocale($locale)
	{
			$this->locale = $locale;
	}


	public function isSpam($text)
	{
		return strlen($text) < $this->minLength;
		//Return TRue if length($text) small than 50
	}
}