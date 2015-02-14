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
        $builder->add('category');
        $builder->add('type', 'choice', array('choices' => Job::getTypes(), 'expanded' => true));
        $builder->add('company');
        $builder->add('file', 'file', array('label' => 'Company logo', 'required' => false));
        $builder->add('url');
        $builder->add('position');
        $builder->add('location');
        $builder->add('description');
        $builder->add('how_to_apply', null, array('label' => 'How to apply?'));
        $builder->add('is_public', null, array('label' => 'Public?'));
        $builder->add('email');
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


// namespace Ens\GoodJobBundle\Form;


// use Symfony\Component\Form\AbstractType;

// use Symfony\Component\Form\FormBuilder;
// use Symfony\Component\OptionsResolver\OptionsResolverInterface;
// use Ens\GoodJobBundle\Entity\Job;

// class JobType extends AbstractType
// {
    
//     public function buildForm(FormBuilder $builder, array $options)
//     {
//         $builder->add('category');
//         $builder->add('type', 'choice', array('choices' => Job::getTypes(), 'expanded' => true));
//         $builder->add('company');
//         $builder->add('file', 'file', array('label' => 'Company logo', 'required' => false));
//         $builder->add('url');
//         $builder->add('position');
//         $builder->add('location');
//         $builder->add('description');
//         $builder->add('how_to_apply', null, array('label' => 'How to apply?'));
//         $builder->add('is_public', null, array('label' => 'Public?'));
//         $builder->add('email');
//     }
    
//     public function getName()
//     {
//         return 'ens_goodjobbundle_jobtype';
//     }
// }
