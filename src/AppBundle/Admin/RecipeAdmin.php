<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RecipeAdmin extends AbstractAdmin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('label', TextType::class, ['label' => 'Recette'])
            ->add(
                'allergens',
                EntityType::class,
                [
                    'label'        => 'Allergènes',
                    'class'        => 'AppBundle:Allergen',
                    'choice_label' => 'label',
                    'multiple'     => true,
                    'by_reference' => false,
                ]
            )
            ->add(
                'quantities',
                'sonata_type_collection',
                [
                    'by_reference' => false,
                    'label'        => 'Quantités',
                ],
                [
                    'edit'   => 'inline',
                    'inline' => 'table',
                ]
            );
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('label')
            ->add(
                '_action',
                'actions',
                [
                    'actions' => [
                        'edit'   => [],
                        'delete' => [],
                    ],
                ]
            );
    }
}
