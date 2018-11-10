<?php 

// src/OC/PlatformBundle/Notes/NoteListener.php

namespace OC\PlatformBundle\Notes;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class NoteListener
{

	// Processing
	protected $noteHTML;

	/**
	* @endDate
	*/
	protected $endDate;

	public function __construct(NoteHTMLAdder $noteHTML, $endDate)
	{
		$this->noteHTML = $noteHTML;
		$this->endDate = new \Datetime($endDate);
	}

	public function processNote(FilterResponseEvent $event)
	{
		if(!$event->isMasterRequest())
		{
			return;
		}

		$remainingDays = $this->endDate->diff(new \Datetime())->days;
		if($remainingDays <= 0)
		{
			return;
		}

		$response = $this->noteHTML->addNote($event->getResponse(), $remainingDays);

		$event->setResponse($response);

	}
}