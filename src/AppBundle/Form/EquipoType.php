<?php

/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 27/05/2018
 * Time: 12:42
 */
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EquipoType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('id', HiddenType::class)
            ->add('name', TextType::class, array(
            ))
            ->add('liga', TextType::class, array(
                'required' => false
            ))
            ->add('division', TextType::class, array(
                'required' => false
            ))
            ->add('save', SubmitType::class, array('label' => 'Create Equipo'))
        ;
    }
}