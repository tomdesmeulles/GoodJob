<?php

namespace Ens\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EnsUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
