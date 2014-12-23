<?php

namespace Ens\GoodJobBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EnsGoodJobBundle:Default:index.html.twig', array('name' => $name));
    }
}
