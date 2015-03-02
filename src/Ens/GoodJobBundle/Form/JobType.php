<?php

namespace Ens\GoodJobBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Ens\GoodJobBundle\Entity\Job;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('category', null, array('label' => "secteur d'activité", 'required' => true));
        $builder->add('type', 'choice', array('choices' => Job::getTypes(), 'expanded' => true));
        $builder->add('company', null, array('label' => 'Entreprise', 'required' => true));
        $builder->add('file', 'file', array('label' => 'Logo', 'required' => false));
        $builder->add('url', null, array('label' => 'Site Web', 'required' => false));
        $builder->add('position', null, array('label' => 'Poste', 'required' => true));
        $builder->add('location', null, array('label' => 'Ville', 'required' => true));
        $builder->add('description', null, array('label' => "Description de l'offre", 'required' => true));
        $builder->add('how_to_apply', null, array('label' => 'Contact RH'));
        $builder->add('is_public', null, array('label' => 'Offre public ?'));
        $builder->add('email', null,  array('label' => 'Mail et/ou Tel', 'required' => false));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            "data_class" => "Ens\GoodJobBundle\Entity\Job"
            ));
    }

    public function getName()
    {
        return "job";
    }
}

