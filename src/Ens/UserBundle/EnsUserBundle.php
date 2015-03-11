<?php

namespace Ens\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EnsUserBundle extends Bundle
{
	public function getParent(){
		return "FOSUserBundle";
	}
}
