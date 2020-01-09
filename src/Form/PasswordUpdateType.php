<?php

namespace App\Form;

use App\Entity\PasswordUpdate;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

class PasswordUpdateType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('newPassword', PasswordType::class, [

				'label' => 'Nouveau mot de passe',
				'required' => true,
			])
			->add('oldPassword', PasswordType::class, [

				'label' => 'Ancien mot de passe',
				'required' => true
			])
			->add('confirmPassword', PasswordType::class, [

				'label' => 'Confirmez le mot de passe',
				'required' => true
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => PasswordUpdate::class,
		]);
		/*
		$resolver->setDefaults([
			// Configure your form options here
		]);
		*/
	}
}
