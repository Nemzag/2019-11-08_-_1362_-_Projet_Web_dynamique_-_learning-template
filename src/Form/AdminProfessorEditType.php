<?php

namespace App\Form;

use App\Entity\User;
use DateTime;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Vich\UploaderBundle\Form\Type\VichImageType;


class AdminProfessorEditType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('userName', TextType::class, [

				'label' => 'Pseudo‑onyme',

				'attr' => [
					'minlength' => '4',
					'maxlength' => '255',
					'placeholder' => '4 caractères minimum, 255 maximum.‬',
				]
			])

			/* Prénom */
			->add('firstName', TextType::class, [

				'label' => 'Prénom',

				'attr' => [
					'minlength' => '2',
					'maxlength' => '255',
					'placeholder' => '2 caractères minimum, 255 maximum.‬',
				]
			])

			/* Nom */
			->add('lastName', TextType::class, [

				'label' => 'Nom',

				'attr' => [
					'minlength' => '2',
					'maxlength' => '255',
					'placeholder' => '2 caractères minimum, 255 maximum.‬',
				]
			])

			->add('email', EmailType::class, [

				'label' => 'Courriel',

				'attr' => [
					'minlength' => '8',
					'maxlength' => '255',
					'placeholder' => '8 caractères minimum & 255 caractères maximum.‬',
				]
			])

			/*
			->add('createdAt', DateTimeType::class, [

				'disabled' => true,

				'label' => 'Date de création',

				'attr' => [
					// 'disabled' => 'disabled',
					'style' => 'display:none;',
				],
			])
			*/

			/*
   			->add('role', ChoiceType::class, [

				'label' => 'Rôle',

				'multiple' => true,
				'choices' => [
					'Utilisateur' => 'ROLE_USER',
					'Étudiant' => 'ROLE_STUDENT',
					'Professeur' => 'ROLE_PROFESSOR',
					'Administrateur' => 'ROLE_ADMIN'
				]
			])
			*/

			/*
			->add('Image', TextType::class, [

				'label' => false,

				'required' => false,

				'attr' => [
					'minlength' => '3',
					'maxlength' => '255',
					'placeholder' => '255 caractères maximum.‬',
				]
			])
			*/

			->add('imageFile', VichImageType::class, [

				'label' => "Inséré une image",
				'required' => false,
				'download_uri' => false,
				'image_uri' => false,
				'allow_delete' => false,

				'download_label' => "Télécharger l'image",
				// 'asset_helper' => true,
				'attr' => [
					// 'placeholder' => 'Photo',
					// 'style' => 'display:none;',
					// 'class' => 'form-control',
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