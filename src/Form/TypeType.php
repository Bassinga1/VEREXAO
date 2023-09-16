<?php

namespace App\Form;

use App\Entity\Type;
use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class TypeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ["required"=>true])
            ->add('slug', TextType::class, ["required"=>true])
            ->add('term', CKEditorType::class, ["required"=>false])
            ->add('isActive', CheckboxType::class, ["required"=>true, "label"=>"Active", "attr"=>["class"=>"form-check-input"], "row_attr"=>["class"=>"form-switch mb-3"]])
            ->add('updatedAt', DateTimeType::class, ["widget"=>"single_text"])
            ->add('imageName', TextType::class, ["required"=>true])
            ->add('rankOrder', NumberType::class, ["required"=>true, "label"=>"Ordre"])
            ->add('service', EntityType::class, ['class'=>Service::class, 'choice_label'=>'name', 'required'=>true])
            ->add('images', CollectionType::class, ['entry_type'=>ImageType::class, "allow_add"=>true, "by_reference"=>false, 'allow_delete'=>true, 'label'=>false, 'entry_options'=>['fromBook'=>true, 'isNew'=>$options['isNew']]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Type::class,
            'isNew'=>true,
        ]);
    }
}
