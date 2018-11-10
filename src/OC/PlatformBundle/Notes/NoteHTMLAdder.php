<?php 

//src/OC/PlatformBundle/Notes/NoteHTMLAdder.php

namespace OC\PlatformBundle\Notes;

use Symfony\Component\HttpFoundation\Response;

class NoteHTMLAdder
{

	public function addNote(Response $response, $remainingDays)
	{
		$content = $response->getContent();

       $html = '<div style="position: absolute; top: 0; background: orange; width: 100%; text-align: center; padding: 0.5em;">Beta J-'.(int) $remainingDays.' !</div>';

       $content = str_replace('</body>', $html.'</body>', $content);

       $response->setContent($content);

       return $response;

    }
}