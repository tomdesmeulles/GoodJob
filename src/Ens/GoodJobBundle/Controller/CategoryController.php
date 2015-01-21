<?php

namespace Ens\GoodJobBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ens\GoodJobBundle\Entity\Category;

class CategoryController extends Controller
{




	public function showAction($slug, $page)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$category = $em->getRepository('EnsGoodJobBundle:Category')->findOneBySlug($slug);
		
		if (!$category) 
		{
			throw $this->createNotFoundException('Impossible de trouver une Catégorie dentité.');
		}
		
		$total_jobs = $em->getRepository('EnsGoodJobBundle:Job')->countActiveJobs($category->getId());
		$jobs_per_page = $this->container->getParameter('max_jobs_on_category');
		$last_page = ceil($total_jobs / $jobs_per_page);
	
		$previous_page = $page > 1 ? $page - 1 : 1;
		$next_page = $page < $last_page ? $page + 1 : $last_page;
		$category->setActiveJobs($em->getRepository('EnsGoodJobBundle:Job')->getActiveJobs($category->getId(), $jobs_per_page, ($page - 1) * $jobs_per_page));
		return $this->render('EnsGoodJobBundle:Category:show.html.twig', array(
			'category' => $category,
			'last_page' => $last_page,
			'previous_page' => $previous_page,
			'current_page' => $page,
			'next_page' => $next_page,
			'total_jobs' => $total_jobs
		));
	}

}