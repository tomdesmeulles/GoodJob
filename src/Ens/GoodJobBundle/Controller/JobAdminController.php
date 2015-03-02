<?php

namespace Ens\GoodJobBundle\Controller;
 
use Sonata\AdminBundle\Controller\CRUDController as Controller;
 
class JobAdminController extends Controller
{
	 protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'created_at'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('category')
            ->add('type', 'choice', array('choices' => Job::getTypes(), 'expanded' => true))
            ->add('company')
            ->add('file', 'file', array('label' => 'Company logo', 'required' => false))
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('how_to_apply')
            ->add('is_public')
            ->add('email')
            ->add('is_activated')
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('category')
            ->add('company')
            ->add('position')
            ->add('description')
            ->add('is_activated')
            ->add('is_public')
            ->add('email')
            ->add('expires_at')
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('company')
            ->add('position')
            ->add('location')
            ->add('url')
            ->add('is_activated')
            ->add('email')
            ->add('category')
            ->add('expires_at')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }
 
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('category')
            ->add('type')
            ->add('company')
            ->add('webPath', 'string', array('template' => 'EnsGoodJobBundle:JobAdmin:list_image.html.twig'))
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('how_to_apply')
            ->add('is_public')
            ->add('is_activated')
            ->add('token')
            ->add('email')
            ->add('expires_at')
        ;
    }

     public function batchActionExtend(ProxyQueryInterface $selectedModelQuery)
    {
        if ($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false)
        {
            throw new AccessDeniedException();
        }
 
        $request = $this->get('request');
        $modelManager = $this->admin->getModelManager();
 
        $selectedModels = $selectedModelQuery->execute();
 
        try {
            foreach ($selectedModels as $selectedModel) {
                $selectedModel->extend();
                $modelManager->update($selectedModel);
            }
        } catch (\Exception $e) {
            $this->get('session')->setFlash('sonata_flash_error', $e->getMessage());
 
            return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
        }
 
        $this->get('session')->setFlash('sonata_flash_success',  sprintf('Les emplois valides sélectionnée ont été prolongés jusqu\'au" %s.', date('m/d/Y', time() + 86400 * 30)));
 
        return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
    }

    public function batchActionDeleteNeverActivatedIsRelevant()
    {
    	return true;
    }

    public function batchActionDeleteNeverActivated()
    {
    	if ($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false) {
    		throw new AccessDeniedException();
    	}

    	$em = $this->getDoctrine()->getEntityManager();
    	$nb = $em->getRepository('EnsGoodJobBundle:Job')->cleanup(60);

    	if ($nb) {
    		$this->get('session')->setFlash('sonata_flash_success',  sprintf('%d Les emplois jamais activés ont été supprimés avec succès.', $nb));
    	} else {
    		$this->get('session')->setFlash('sonata_flash_info',  'Aucune offre à supprimer.');
    	}

    	return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
    }
 
}