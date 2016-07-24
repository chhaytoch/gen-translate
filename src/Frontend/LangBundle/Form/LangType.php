<?php

namespace Frontend\LangBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LangType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('langName')
//            ->add('createdDate', 'datetime')
//            ->add('modifiedDate', 'datetime')
//            ->add('active')
//            ->add('deleted')
//            ->add('createdUser')
//            ->add('modifiedUser')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\LangBundle\Entity\Lang'
        ));
    }
}
