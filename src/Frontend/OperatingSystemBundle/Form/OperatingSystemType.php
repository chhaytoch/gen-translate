<?php

namespace Frontend\OperatingSystemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OperatingSystemType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('osName')
            ->add('createdUser')
            ->add('modifiedUser')
            ->add('createdDate', 'datetime')
            ->add('modifiedDate', 'datetime')
            ->add('active')
            ->add('deleted')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\OperatingSystemBundle\Entity\OperatingSystem'
        ));
    }
}
