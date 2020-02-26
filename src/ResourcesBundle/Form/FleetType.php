<?php

namespace ResourcesBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FleetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('matriculation')->add('nature',EntityType::class,array(
                'class'=>'ResourcesBundle:Nature',
                'choice_label'=>'libelle',
                'multiple'=>false
            )
        )->add('capacity')->add('category',EntityType::class,array(
                'class'=>'ArticleBundle:Category',
                'choice_label'=>'label',
                'multiple'=>false)
            )->add('kilometrage')->add('date',DateType::class
        );
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ResourcesBundle\Entity\Fleet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'resourcesbundle_fleet';
    }


}
