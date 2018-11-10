<?php

namespace OC\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OCUserBundle extends Bundle
{
	// Héritage de bundle
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
