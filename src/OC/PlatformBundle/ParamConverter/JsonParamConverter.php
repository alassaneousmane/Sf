<?php 

// src/OC/PlatformBundle/ParamConverter/JsonParamConverter.php

namespace OC\PlatformBundle\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;

class JsonParamConverter implements ParamConverterInterface
{

	function supports(ParamConverter $configuration)
	{
		// Si le nom de l'argument de la méthode du controleur n'est pas json, rien à faire
		if('json' != $configuration->getName())
		{
			// $configuration->getName() retourne le nom de l'argument de la méthode  du controleur
			return false;
		}

		return true;
	}

	function apply(Request $request, ParamConverter $configuration)
	{
		// On  réccupère la valeur actuelle de l'attribut 
		$json = $request->attributes->get('json');

		// On effectue notre action : le decoder
		$json = json_decode($json, true);

		// On met à jour la nouvelle valeur de l'attribut
		$request->attributes->set('json', $json);
	}
}