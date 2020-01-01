<?php

namespace App\Form;

use App\Entity\Course;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	        ->add('name', TextType::class, [
		        'label' => 'Nomination',
	        ])

	        ->add('smallDescription', TextType::class, [
		        'label' => 'Déscription courte',
	        ])

            ->add('fullDescription', TextType::class, [
	            'label' => 'Déscription longue',
            ])

            ->add('duration', TextType::class, [
	            'label' => 'Durée',
            ])

            ->add('price', MoneyType::class, [
            ])

            ->add('createdAt')
            ->add('isPublished')
            ->add('slug')
            ->add('image', FileType::class, [
	            'label' => "Inséré une image",

	            'data_class' => null,

	            'required' => false,
            ])

            ->add('schedule')
            ->add('program')
            ->add('category')
            ->add('level')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Course::class,
        ]);
    }
}
