<?php 

// src/OC/PlatformBundle/Beta/BetaListener.php

namespace OC\PlatformBundle\Beta;

use Symfony\Component\HtttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class BetaListener
{
	// Notre processeur
	protected $betaHTML;

	// La date de fin de la version Beta :
	protected $endDate;

	public function __construct(BetaHTMLAdder $betaHTML, $endDate)
	{
		$this->betaHTML = $betaHTML;
		$this->endDate =  new \Datetime($endDate);
	}

	public function processBeta(FilterResponseEvent $event)
	{
		// On vérifie si la reuete est bien une requete principale et non une sous-requete
		if(!$event->isMasterRequest())
		{
			return;
		}

		// On récupère la réponse que le gestionnaire a injecté dans l'évènement
		// $response = $event->getResponse();

		$remainingDays = $this->endDate->diff(new \Datetime())->days;

		if($remainingDays <= 0)
		{
			// Si la date est dépassée, on ne fait rien
			return;
		}

		// On modifie, on utilise notre service BetaHTMLAdder
		$response = $this->betaHTML->addBeta($event->getResponse(), $remainingDays);

		// Et on retourne, on met à jour la reponse avec la nouvelle valeur de $response
		$event->setResponse($response);

		// Maintenant pour que cet objet écoute qqch, il faut qu'il s'enregistre
		// auprès du gestionnaire d'évènement

        // On stoppe la propagation de l'évènement en cours
        $event->stopPropagation();

	}
}