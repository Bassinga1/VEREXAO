<?php

namespace App\Form;

use App\Entity\Home;
use App\Entity\Type;
use App\Entity\Image;
use App\Entity\Carousel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageFile', FileType::class, ['required'=>$options['isNew'], 'label'=>'Image', "attr"=>["class"=>"select-image"]])
            ->add('imageName', TextType::class, ["required"=>false, 'empty_data' => ''])
            ->remove('updatedAt')
            ->add('rankOrder', IntegerType::class, ['required'=>true, 'data'=>1, "attr"=>["min"=>1]])
            ->add('tag', TextType::class, ["required"=>false])
            ->add('home', EntityType::class, ['class'=>Home::class, 'choice_label'=>'titre', 'required'=>true])
            ->add('carousel', EntityType::class, ['class'=>Carousel::class, 'choice_label'=>'texte', 'required'=>true])
        ;
        if(!$options["fromBook"]){
            $builder
            // Pour rappel choice_label permet de choisir le champ qui sera affiché dans le select
            // Auquel cas on n'a pas besoin de la méthode __toString() dans l'entité
            ->add('type', EntityType::class, ["class"=>Type::class, "choice_label"=>'name'])
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Image::class,
            'fromBook'=>false,
            'isNew'=>true,
        ]);
    }
}
