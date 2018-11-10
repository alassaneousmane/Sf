<?php 

// src/OC/PlatformBundle/Validator/Antiflood.php

namespace OC\PlatformBundle\Validator;

use Symfony\Component\Validator\Constraint;

/*
 @Annation est nécessaire pour que l'annotation soit disponible dans les autres
*/

/**
* @Annotation
*/

class Antiflood extends Constraint
{
	public $message = "Vous avez déjà posté il y a moins de 15 secondes; merci d'attendre un peu.";

	public function validateBy()
	{
		return 'oc_platform_antiflood';
	}
}