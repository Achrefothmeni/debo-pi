<?php

namespace ResourcesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MagazinType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id_mag')->add('capacity')->add('category',ChoiceType::class,array(
            'choices'=>array(
                'Cold'=>'Cold',
                'Neutral'=>'Neutral',
                'Brittle'=>'Brittle',
            )
        ))->add('location');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ResourcesBundle\Entity\Magazin'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'resourcesbundle_magazin';
    }


}
