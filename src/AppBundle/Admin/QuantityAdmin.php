<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class QuantityAdmin extends AbstractAdmin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add(
                'ingredient',
                EntityType::class,
                [
                    'label'        => 'Ingredient',
                    'class'        => 'AppBundle:Ingredient',
                    'choice_label' => 'label',
                ]
            )
            ->add('value', NumberType::class, ['label' => 'Quantité']);
    }
}
