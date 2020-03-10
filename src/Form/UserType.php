<?php

namespace App\Form;

use App\Entity\User;

use Grafikart\RecaptchaBundle\Constraints\Recaptcha;

use Grafikart\RecaptchaBundle\Type\RecaptchaSubmitType;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

use Vich\UploaderBundle\Form\Type\VichImageType;

class UserType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('userName', TextType::class, [

				'label' => 'Pseudo‑onyme',

				'required' => true,

				'attr' => [
					'minlength' => '3',
					'maxlength' => '255',
					'placeholder' => '3 caractères minimum, 255 maximum.‬',
					'required'
				],
			])
			/* Prénom */
			->add('firstName', TextType::class, [

				'label' => 'Prénom',

				'required' => true,

				'attr' => [
					'minlength' => '2',
					'maxlength' => '255',
					'placeholder' => '2 caractères minimum, 255 maximum.‬',
					'required'
				],
			])
			/* Nom */
			->add('lastName', TextType::class, [

				'label' => 'Nom',

				'required' => true,

				'attr' => [
					'minlength' => '2',
					'maxlength' => '255',
					'placeholder' => '2 caractères minimum, 255 maximum.‬',
					'required'
				],
			])
			->add('email', EmailType::class, [

				'label' => 'Courriel',

				'required' => true,

				'attr' => [
					'minlength' => '8',
					'maxlength' => '255',
					'placeholder' => '8 caractères minimum & 255 caractères maximum.‬',
					'required'
				],
			])
			->add('password', PasswordType::class, [

				'label' => 'Mot de passe',

				'required' => true,

				'attr' => [
					'minlength' => '6',
					'maxlength' => '255',
					'placeholder' => '6 caractères minimum & 255 caractères maximum.‬',
					'required'
				],

				'constraints' => [
					new NotBlank(),
					new Length(['min' => 6]),
				],
			])
			->add('confirmPassword', PasswordType::class, [

				'label' => 'Confirmer le mot de passe',

				'required' => true,

				'attr' => [
					'minlength' => '6',
					'maxlength' => '255',
					'placeholder' => '6 caractères minimum & 255 caractères maximum.‬'
				],

				'constraints' => [
					new NotBlank(),
					new Length(['min' => 6]),
				],
			])
			/*
			->add('createdAt', DateTimeType::class, [

				'label' => 'Date de création',
				'data' => new \DateTime(),

				'attr' => ['style' => 'display:none;'],
			])

			->add('updatedAt', DateTimeType::class, [

				'label' => 'Date de mise à jours',
				'data' => new \DateTime(),

				'attr' => ['style' => 'display:none;'],
			])
			*/

			/*
			->add('isDisabled', ChoiceType::class, [

				'label' => 'Activé',

				'choices' => [
					'Oui' => 1,
					'Non' => 0,
				],
			])
			*/

			/*->add('role', ChoiceType::class, [

				'label' => 'Rôle',

				'multiple' => true,
				'choices' => [
					'Utilisateur' => 'ROLE_USER',
					'Étudiant' => 'ROLE_STUDENT',
					'Professeur' => 'ROLE_PROFESSOR',
					'Administrateur' => 'ROLE_ADMIN'
				]
			])*/
			->add('imageFile', VichImageType::class, [

				'label' => "Inséré une image",
				'required' => false,
				'download_uri' => false,

				'download_label' => "Télécharger l'image",
				// 'asset_helper' => true,
				// 'attr' => ['placeholder' => 'photo']
				// 'attr' => ['class' => 'form-control']
			])
			/*

			->add('lastLogAt', DateTimeType::class, [

				'label' => 'Date de dernière connection',
				'data' => new \DateTime(),

				'attr' => ['style' => 'display:none;'],

			])
			*/

			->add('agreeTerms', CheckboxType::class, [
				'label' => "Accepter les clauses.",
				'mapped' => false,
				'constraints' => [
					new IsTrue([
						'message' => 'Vous devez accepter nos clauses.',
					]),
				],
			])

			->add('captcha', RecaptchaSubmitType::class, [
				'label' => 'Envoyer avec vérification du captcha',
				'attr' => [
					'class' => 'btn btn-success gaz-admin-form-button'
				],
				'constraints' => new Recaptcha()
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => User::class,
		]);
	}
}
