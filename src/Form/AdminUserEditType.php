<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminUserEditType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder

			->add('role', ChoiceType::class, [

				'label' => 'Rôle',

				'multiple' => true,
				'choices' => [
					'Utilisateur' => 'ROLE_USER',
					'Étudiant' => 'ROLE_STUDENT',
					'Professeur' => 'ROLE_PROFESSOR',
					'Administrateur' => 'ROLE_ADMIN'
				]
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => User::class,
		]);
	}
}