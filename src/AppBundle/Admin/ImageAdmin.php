<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ImageAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add(
                'file',
                FileType::class,
                [
                    'label'    => 'Image',
                    'required' => false,
                ]
            );
    }

//    public function prePersist($image)
//    {
//        $this->manageFileUpload($image);
//    }
//
//    public function preUpdate($image)
//    {
//        $this->manageFileUpload($image);
//    }
//
//    private function manageFileUpload($image)
//    {
//        if ($image->getFile()) {
//            $image->refreshUpdated();
//        }
//    }
}
