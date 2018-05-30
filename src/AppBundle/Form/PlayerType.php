<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 30/05/2018
 * Time: 20:04
 */

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class PlayerType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('id', HiddenType::class)
            ->add('username', TextType::class, array(
            ))
            ->add('nick', TextType::class, array(
                'required' => false
            ))
            ->add('position', TextType::class, array(
                'required' => false
            ))
            ->add('number', TextType::class, array(
                'required' => false
            ))
            ->add('save', SubmitType::class, array('label' => 'Create Player'))
        ;
    }
}