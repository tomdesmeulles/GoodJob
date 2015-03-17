<?php
namespace Ens\CvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CvController extends Controller
{
    
	public function indexAction()
	{

		$em = $this->getDoctrine()->getEntityManager();

		$categories = $em->getRepository('EnsCvBundle:CategoryCv')->getWithCvs();

		foreach($categories as $categoryCv)
		{
			$categoryCv->setActiveCvs($em->getRepository('EnsCvBundle:Cv')->getActiveCvs($categoryCv->getId(), $this->container->getParameter('max_cvs_on_indexpage')));
			$categoryCv->setMoreCvs($em->getRepository('EnsCvBundle:Cv')->countActiveCvs($categoryCv->getId()) - $this->container->getParameter('max_cvs_on_indexpage'));
		}

		return $this->render('EnsCvBundle:Cv:index.html.twig', array(
			'categories' => $categories,
			// 'categoryCv' => $categoryCv
			));
	}




	public function showAction($id)
	{
	    $em = $this->getDoctrine()->getEntityManager();
	 
	    $entity = $em->getRepository('EnsCvBundle:Cv')->find($id);
	 
	    if (!$entity) {
	        throw $this->createNotFoundException('Impossible de trouver l\'entité.');
	    }
	 
	    $deleteForm = $this->createDeleteForm($id);
	 
	    return $this->render('EnsCvBundle:Cv:show.html.twig', array(
	        'entity'      => $entity,
	        'delete_form' => $deleteForm->createView()
	 
	    ));
	}


	private function createDeleteForm($token)
	{
	  return $this->createFormBuilder(array('token' => $token))
	    ->add('token', 'hidden')
	    ->getForm()
	  ;
	}




}
