<?php

namespace Frontend\StringKeyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StringKeyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('keyLabel')
            ->add('createdUser')
            ->add('modifiedUser')
            ->add('createdDate', 'datetime')
            ->add('modifiedDate', 'datetime')
            ->add('active')
            ->add('deleted')
            ->add('os')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\StringKeyBundle\Entity\StringKey'
        ));
    }
}
