<?php

namespace App\Form;

use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('rankOrder', NumberType::class, ["required"=>true, "label"=>"Ordre"])
            ->add('isActive', CheckboxType::class, ["required"=>true, "label"=>"Active", "attr"=>["class"=>"form-check-input"], "row_attr"=>["class"=>"form-switch mb-3"]])
            ->add('name', TextType::class, ["required"=>true])
            ->add('slug', TextType::class, ["required"=>true])
            ->add('term', CKEditorType::class, ["required"=>false])
            ->add('price', TextType::class, ["required"=>true])
            ->remove('availability')
            ->add('imageName', TextType::class, ["required"=>false, 'empty_data' => ''])
            ->add('updatedAt', DateTimeType::class, ["widget"=>"single_text"])
            ->add('imageFile', FileType::class, ["required"=>false, "label"=>"Image", "attr"=>["class"=>"form-control"]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}
