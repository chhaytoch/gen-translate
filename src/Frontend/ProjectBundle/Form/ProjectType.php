<?php

namespace Frontend\ProjectBundle\Form;

use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ManyToMany;
use Frontend\LangBundle\Entity\Lang;
use Frontend\LangBundle\Form\LangType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em =$entityManager;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $lang = $this->em->getRepository('ProjectBundle:Project')->findAll();
        
        $builder
            ->add('projectName')
            ->add('description')
            ->add('lang', EntityType::class, [
                'placeholder' => 'Choose an option',
                'choices' => $lang,

                'multiple' => true,
                'expanded' => false
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\ProjectBundle\Entity\Project'
        ));
    }
}
