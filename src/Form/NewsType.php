<?php

namespace App\Form;

use App\Entity\News;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [

					        'label' => 'Titre',

					        'attr' => [
						        'minlength' => '5',
						        'maxlength' => '255',
						        'placeholder' => '5 caractères minimum, 255 maximum.‬'
					        ]
				        ])

            ->add('imageFile', VichImageType::class, [

	            'label' => false,

	            'required' => false,

	            'image_uri' => false,

	            'download_uri' => false,

	            'download_label' => "Télécharger l'image",
	            // 'asset_helper' => true,

	            'attr' => [

	            	'placeholder' => false,

		            'class' => 'form-control',

		            'minlength' => '1',
		            'maxlength' => '255',
	            ]])

            ->add('createdAt', DateTimeType::class, [

	            'label' => false,

	            'data' => new \DateTime(),

	            'attr' => [
		           // Pas de date minimum ni maximum.
                ]
            ])

            ->add('text', TextareaType::class, [

	            'label' => 'Texte',

	            'required' => true,

	            'attr' => [
					    'maxlength' => 65536,
		                'minlength' => 20,
		                'rows' => 20,
		                'placeholder' => "20 caractères minimum, 65.536 maximum."
				    ]

	           ])

			    ->add('isPublished', ChoiceType::class, [

			    'label' => 'Visible',

			    'choices' => [
				    'Oui' => 1,
				    'Non' => 0,
			    ],
		    ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => News::class,
        ]);
    }
}
