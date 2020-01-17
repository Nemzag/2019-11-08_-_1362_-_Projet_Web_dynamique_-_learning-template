<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('comment', TextareaType::class, [
	            'label' => 'Commentaire',

	            'attr' => ['rows' => '5']

            ])

            ->add('dateAddedAt', DateTimeType::class, [
	            'label' => false,
	            /* Pour ne pas l'afficher dans le new, sinon : "Date de inscription :" */


	            'data' => new \DateTime(),

	            'attr' => ['style' => 'display:none;']
            ])

	        ->add('isDisabled', NumberType::class, [
		        'label' => false,
		        /* Pour ne pas l'afficher dans le new, sinon : "Date de inscription :" */

		        'data' => 0,

		        'attr' => ['style' => 'display:none;']
	        ])

            ->add('evaluation', ChoiceType::class, [

	            'choices' => [
		            '★★★★★' => 5,
		            '★★★★☆' => 4,
		            '★★★☆☆' => 3,
		            '★★☆☆☆' => 2,
		            '★☆☆☆☆' => 1,
		            '☆☆☆☆☆' => 0,
	            ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
