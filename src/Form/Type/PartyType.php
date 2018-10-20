<?php

// src/Form/Type/PartyType.php
namespace App\Form\Type;

use App\Entity\KillerParty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PartyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('startingDate');

        $builder->add('participants', CollectionType::class, array(
            'entry_type'=>ParticipantType::class,
            'entry_options'=>array('label'=> false),
            'allow_add'=>true,
            'by_reference'=>false,
            'allow_delete'=>true,
        ));

        $builder->add('save', SubmitType::class, array('label' => "Valider"));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => KillerParty::class,
        ));
    }
}
