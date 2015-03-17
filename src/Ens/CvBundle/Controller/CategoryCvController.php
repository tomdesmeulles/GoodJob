<?php

namespace Ens\CvBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ens\CvBundle\Entity\CategoryCv;
 
/**
* CategoryCv controller.
*
*/
class CategoryCvController extends Controller
{



	public function showAction($slug)
	{
	    $em = $this->getDoctrine()->getEntityManager();
	 
	    $categoryCv = $em->getRepository('EnsCvBundle:CategoryCv')->findOneBySlug($slug);
	 
	    if (!$categoryCv) {
	        throw $this->createNotFoundException('Unable to find Category entity.');
	    }
	 
	    $categoryCv->setActiveCvs($em->getRepository('EnsCvBundle:Cv')->getActiveCvs($categoryCv->getId()));
	 
	    return $this->render('EnsCvBundle:CategoryCv:show.html.twig', array(
	        'categoryCv' => $categoryCv,
	    ));
	}






 
}