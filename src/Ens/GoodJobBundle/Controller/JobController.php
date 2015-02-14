<?php

namespace Ens\GoodJobBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ens\GoodJobBundle\Entity\Job;
use Ens\GoodJobBundle\Form\JobType;

/**
 * Job controller.
 *
 */
class JobController extends Controller
{



    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $categories = $em->getRepository('EnsGoodJobBundle:Category')->getWithJobs();
        
        foreach($categories as $category)
        {
            $category->setActiveJobs($em->getRepository('EnsGoodJobBundle:Job')->getActiveJobs($category->getId(), $this->container->getParameter('max_jobs_on_homepage')));
            $category->setMoreJobs($em->getRepository('EnsGoodJobBundle:Job')->countActiveJobs($category->getId()), $this->container->getParameter('max_jobs_on_homepage'));
        }

        return $this->render('EnsGoodJobBundle:Job:index.html.twig', array(
            'categories' => $categories
        ));
    }






    public function createAction()
    {
        $entity = new Job();
        $request = $this->getRequest();
        $form = $this->createForm(new JobType(), $entity);
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('ens_job_preview', array(
                'company' => $entity->getCompanySlug(),
                'location' => $entity->getLocationSlug(),
                'token' => $entity->getToken(),
                'position' => $entity->getPositionSlug()
                )));
        }
        return $this->render('EnsGoodJobBundle:Job:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView()
            ));
    }

    /**
     * Creates a form to create a Job entity.
     *
     * @param Job $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Job $entity)
    {
        $form = $this->createForm(new JobType(), $entity, array(
            'action' => $this->generateUrl('ens_job_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Job entity.
     *
     */
    public function newAction()
    {
        $entity = new Job();
        $entity->setType('full-time');
        $form = $this->createForm(new JobType(), $entity);

        return $this->render('EnsGoodJobBundle:Job:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsGoodJobBundle:Job')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Impossible de trouver l\'offre..');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EnsGoodJobBundle:Job:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    
    public function previewAction($token)
    {
      $em = $this->getDoctrine()->getEntityManager();
     
      $entity = $em->getRepository('EnsGoodJobBundle:Job')->findOneByToken($token);
     
      if (!$entity) {
        throw $this->createNotFoundException('Unable to find Job entity.');
      }
     
      $deleteForm = $this->createDeleteForm($entity->getId());
      $publishForm = $this->createPublishForm($entity->getToken());
      $extendForm = $this->createExtendForm($entity->getToken());
     
      return $this->render('EnsGoodJobBundle:Job:show.html.twig', array(
        'entity'      => $entity,
        'delete_form' => $deleteForm->createView(),
        'publish_form' => $publishForm->createView(),
        'extend_form' => $extendForm->createView(),
      ));
    }


    public function publishAction($token)
    {
        $form = $this->createPublishForm($token);
        $request = $this->getRequest();
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EnsGoodJobBundle:Job')->findOneByToken($token);
            if (!$entity) {
                throw $this->createNotFoundException("Impossible de trouver l'entité emploi.");
            }
            $entity->publish();
            $em->persist($entity);
            $em->flush();
            // $this->get('session')->getFlashBag('notice', 'Votre offre est active pour les 30 prochains jours.');
            $request->getSession()->getFlashBag()->add('notice', 'Votre offre est active pour les 30 prochains jours.');
            
        }
        return $this->redirect($this->generateUrl('ens_job_preview', array(
            'company' => $entity->getCompanySlug(),
            'location' => $entity->getLocationSlug(),
            'token' => $entity->getToken(),
            'position' => $entity->getPositionSlug()
            )));
    }

    
    private function createPublishForm($token)
    {
        return $this->createFormBuilder(array('token' => $token))
        ->add('token', 'hidden')
        ->getForm()
        ;
    }



    /**
     * Displays a form to edit an existing Job entity.
     *
     */

    /**
    * Creates a form to edit a Job entity.
    *
    * @param Job $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Job $entity)
    {
        $form = $this->createForm(new JobType(), $entity, array(
            'action' => $this->generateUrl('ens_job_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Job entity.
     *
     */
    public function updateAction($token)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('EnsGoodJobBundle:Job')->findOneByToken($token);
        if (!$entity) {
        throw $this->createNotFoundException('Impossible de trouver l\'offre.');
        }
        $editForm = $this->createForm(new JobType(), $entity);
        $deleteForm = $this->createDeleteForm($token);
        $request = $this->getRequest();
        $editForm->bindRequest($request);
        if ($editForm->isValid()) {
        $em->persist($entity);
        $em->flush();
         return $this->redirect($this->generateUrl('ens_job_preview', array(
            'company' => $entity->getCompanySlug(),
            'location' => $entity->getLocationSlug(),
            'token' => $entity->getToken(),
            'position' => $entity->getPositionSlug()
            )));
        }
        return $this->render('EnsGoodJobBundle:Job:edit.html.twig', array(
        'entity' => $entity,
        'edit_form' => $editForm->createView(),
        'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Job entity.
     *
     */
    public function deleteAction($token)
    {
        $form = $this->createDeleteForm($token);
        $request = $this->getRequest();
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EnsGoodJobBundle:Job')->findOneByToken($token);
            if (!$entity) {
                throw $this->createNotFoundException('Impossible de trouver l\'offre.');
            }
            $em->remove($entity);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('ens_job'));
    }
    
    private function createDeleteForm($token)
    {
        return $this->createFormBuilder(array('token' => $token))
        ->add('token', 'hidden')
        ->getForm()
        ;
    }





    public function editAction($token)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('EnsGoodJobBundle:Job')->findOneByToken($token);
        if (!$entity) {
            throw $this->createNotFoundException('Impossible de trouver l\'offre.');
        }

        if ($entity->getIsActivated()) {
            throw $this->createNotFoundException('Job is activated and cannot be edited.');
        }

        $editForm = $this->createForm(new JobType(), $entity);
        $deleteForm = $this->createDeleteForm($token);
        return $this->render('EnsGoodJobBundle:Job:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            ));
    }

    public function extendAction($token)
    {
      $form = $this->createExtendForm($token);
      $request = $this->getRequest();
     
      $form->bindRequest($request);
     
      if ($form->isValid()) {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('EnsGoodJobBundle:Job')->findOneByToken($token);
     
        if (!$entity) {
          throw $this->createNotFoundException('Unable to find Job entity.');
        }
     
        if (!$entity->extend()) {
          throw $this->createNotFoundException('Unable to find extend the Job.');
        }
     
        $em->persist($entity);
        $em->flush();
     
        $this->get('session')->setFlash('notice', sprintf('Your job validity has been extended until %s.', $entity->getExpiresAt()->format('m/d/Y')));
      }
     
      return $this->redirect($this->generateUrl('ens_job_preview', array(
        'company' => $entity->getCompanySlug(),
        'location' => $entity->getLocationSlug(),
        'token' => $entity->getToken(),
        'position' => $entity->getPositionSlug()
      )));
    }
     
    private function createExtendForm($token)
    {
      return $this->createFormBuilder(array('token' => $token))
        ->add('token', 'hidden')
        ->getForm()
      ;
    }


    /**
     * Creates a form to delete a Job entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    
}
