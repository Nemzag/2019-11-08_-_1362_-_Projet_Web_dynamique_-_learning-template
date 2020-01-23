<?php

namespace App\Form;

use App\Entity\Course;
use App\Entity\Registration;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

// Inscription de cours.
class InscriptionType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('course', EntityType::class, array(

				'class' => Course::class,

				'query_builder' => function (EntityRepository $repository) {
					return $repository->createQueryBuilder('c')
						// ->where('c.role LIKE :role')
						// ->setParameter('role', '%ROLE_PROFESSOR%')
						->orderBy('c.name', 'ASC');
				},

				'choice_label' => function (Course $course) {
					return rtrim($course->getName(), '.') . ' (' . $course->getPrice() . '€)';
				},

				'multiple' => true,
				'expanded' => true,


			));

		/*
		->add('amount', MoneyType::class, [
			// 'attr' => ['class' => 'gaz-show-price-in-euro']

			'label' => 'Prix',

			'scale' => 2,

			'attr' => [

				'type' => 'number',

				'step' => '0.01',

				'minlength' => '1',
				'maxlength' => '8',
			]
		]);
		*/
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => Registration::class,
		]);
	}
}
