<?php

namespace CommandeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class lignecommandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('adresse',null,array('label' => 'Adresse','attr'   =>  array(
            'class'   => 'form-control', 'id' => 'user_input_autocomplete_address', 'placeholder' => 'Votre adresse...')))


            ->add('save',SubmitType::class,array('label' => 'Livrer à cette adresse','attr'   =>  array(
                'class'   => 'submit-btn-1 mt-30 btn-hover-1')));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CommandeBundle\Entity\Commande'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'commandebundle_Commande';
    }


}
