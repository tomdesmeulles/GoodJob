<?php
namespace Ens\CvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CvController extends Controller
{
    
	public function indexAction()
	{
	    $em = $this->getDoctrine()->getManager();
	 
	    $entities = $em->getRepository('EnsCvBundle:Cv')->findAll();
	 
	    return $this->render('EnsCvBundle:Cv:index.html.twig', array('entities' => $entities));
	}
}
