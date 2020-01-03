<?php

namespace App\Form;

use App\Entity\Course;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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

		        'attr' => [
			        'minlength' => '4',
			        'maxlength' => '120',
			        'placeholder' => '120 caractères maximum.‬'
		        ]
	        ])

	        ->add('smallDescription', TextType::class, [

		        'label' => 'Déscription courte',

		        'attr' => [
			        'minlength' => '4',
			        'maxlength' => '255',
			        'placeholder' => '255 caractères maximum.‬'
		        ]
	        ])

            ->add('fullDescription', TextType::class, [

	            'label' => 'Déscription longue',

	            'attr' => [
		            'minlength' => '20',
		            'maxlength' => '65536‬',
		            'placeholder' => '65.536 caractères maximum.‬'
	            ]
            ])

            ->add('duration', TextareaType::class, [

	            'label' => 'Durée',

	            'attr' => [
	            	'maxlength' => '60',
		            'rows' => 2
	            ]
            ])

            ->add('price', MoneyType::class, [
	            // 'attr' => ['class' => 'gaz-show-price-in-euro']

	            'label' => 'Prix',

	            'scale' => 2,

	            'attr' => [
		            'minlength' => '1',
		            'maxlength' => '8',
	            	'type' => 'number',
		            'step' => '0.01',
	            ]
            ])

            ->add('createdAt', DateTimeType::class, [

            	'label' => 'Date de création',
            ])

            ->add('isPublished', ChoiceType::class, [

	            'label' => 'Visible',

	            'choices' => [
		            'Oui' => 1,
                    'Non' => 0,
	            ],
            ])

            ->add('slug')

            ->add('image', FileType::class, [
	            'label' => "Inséré une image",

	            'data_class' => null,

	            'required' => false,
            ])

            ->add('schedule', TextareaType::class, [
	            'attr' => ['rows' => '2']
            ])

            ->add('program', FileType::class, [

            	'label' => "P.D.F. explicatif du cours",

	            'data_class' => null,

	            'empty_data' => "default.pdf",

	            'required' => false,

            ])

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
